<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\City;
use App\Models\price;
use App\Models\Backend\Ordertrack;


use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;
use DB;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Shipment::paginate(10);
        return view('user.shipment.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shipment=Shipment::get();
        $city=City::get();
        return view('user.shipment.create',compact('shipment','city'));
    }
    public function order_price(Request $request)
    {
        $from=$request->from_city;
        $to=$request->to_city;
        $pw=$request->product_weight;
        $price=price::where("to_city",$to)->where("from_city",$from)->get();
        $base_price=$unit_price=$shipping_cost=$total_cost=0;
        if($price){
            foreach($price as $p){
                $unit_size=explode('-',$p->unit_size);
                if($unit_size[0] <= $pw and $unit_size[1] >= $pw){
                    $base_price=$p->base_price;
                    $unit_price=$p->unit_price;
                    $shipping_cost=($pw * $p->unit_price);
                    $total_cost=($base_price+$unit_price);
                    //break;
                }
            }
        }
        print_r(json_encode(array('base_price'=>$base_price,
        'unit_price'=>$unit_price,'shipping_cost'=>$shipping_cost,
        'total_cost'=>$total_cost)));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            try{
                $data=new Shipment();
                $data->from_city=$request->from_city;
                $data->product_name=$request->product_name;
                $data->to_city=$request->to_city;
                $data->product_description=$request->product_description;
                $data->product_weight=$request->product_weight;
                $data->receiver_address=$request->receiver_address;
                $data->sender_address=$request->sender_address;
                $data->contact_name=$request->contact_name;
                $data->contact_number=$request->contact_number;
                $data->base_price=$request->base_price;
                $data->unit_price=$request->unit_price;
                $data->shipping_cost=$request->shipping_cost;
                $data->total_cost=$request->total_cost;
                $data->status=0;
                $data->customer_id=currentUserId();
                if($data->save()){
                    $data->invoice_no=$data->id.date('Y').date('m').date('d');
                    $data->save();
                    return redirect()->route('order.index')->with('success','Successfully saved');
                }else
                    return redirect()->back()->withInput()->with('error','Please try again');
                
            }catch(Exception $e){
                dd($e);
                return redirect()->back()->withInput()->with('error','Please try again');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $shipment=Shipment::findOrFail(encryptor('decrypt',$id));
        return view('user.shipment.show', compact('shipment'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $shipment=Shipment::get();
        $city=City::get();
        $shipment=Shipment::findOrFail(encryptor('decrypt',$id));
        return view('user.shipment.edit',compact('shipment','city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        {
            try{  
                $data=Shipment::findOrFail(encryptor('decrypt',$id));
                $data->from_city=$request->from_city;
                $data->to_city=$request->to_city;
                $data->product_name=$request->product_name;
                $data->product_description=$request->product_description;
                $data->product_weight=$request->product_weight;
                $data->receiver_address=$request->receiver_address;
                $data->sender_address=$request->sender_address;
                $data->contact_name=$request->contact_name;
                $data->contact_number=$request->contact_number;
                $data->base_price=$request->base_price;
                $data->unit_price=$request->unit_price;
                $data->shipping_cost=$request->shipping_cost;
                $data->total_cost=$request->total_cost;
                $data->status=$request->status;
                
                if($data->save()){
                    $data->invoice_no=$data->id.date('Y').date('m').date('d');
                    $data->save();
                    Toastr::success('Successfully updated');
                    return redirect()->route('order.index');
                }
            }catch(Exception $e){
                Toastr::error('Please try again');
                dd($e);
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Shipment::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/shipment/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }

    public function ordertrack($id)
    {
        $data=Ordertrack::where('shipment_id',$id)->oldest()->paginate(5);
        return view('user.shipment.ordertrack',compact('data'));
    }
}
