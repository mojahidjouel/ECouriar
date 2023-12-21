<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\City;
use App\Models\Backend\AdminUser;
use App\Models\Price;


use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data=Shipment::where('user_id',currentUserId())->paginate(10);
        $data=Shipment::oldest()->paginate(5);
        return view('backend.shipment.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shipment=Shipment::get();
        $city=City::get();
        $price=Price::get();
        return view('backend.shipment.create',compact('shipment','city','price'));
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
                $data->status=$request->status;
    
                if($data->save())
                    return redirect()->route('shipment.index')->with('success','Successfully saved');
                else
                    return redirect()->back()->withInput()->with('error','Please try again');
                
            }catch(Exception $e){
            // dd($e);
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
        return view('backend.shipment.show', compact('shipment'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $deliveryman=AdminUser::where('role_id',4)->get();
        $city=City::get();
        $price=Price::get();
        $shipment=Shipment::findOrFail(encryptor('decrypt',$id));
        return view('backend.shipment.edit',compact('deliveryman','shipment','city','price'));
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
                $data->user_id=$request->user_id;
                
                if($data->save()){
                    Toastr::success('Successfully updated');
                    return redirect()->route('shipment.index');
                }
            }catch(Exception $e){
                Toastr::error('Please try again');
                //dd($e);
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
        if($data->delete()){   
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
