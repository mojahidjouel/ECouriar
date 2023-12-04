<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ordertrack;

use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class OrdertrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Order_track::paginate(10);
        return view('user.order_track.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order_track=Order_track::get();
        return view('user.order_track.create',compact('order_track'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            try{
                $data=new Order_track();
                $data->user_id=$request->user_id;
                $data->shipment_id=$request->shipment_id;
                $data->comment=$request->comment;
                $data->status=$request->status;

                if($data->save())
                    return redirect()->route('order_track.index')->with('success','Successfully saved');
                else
                    return redirect()->back()->withInput()->with('error','Please try again');
                
            }catch(Exception $e){
                //dd($e);
                return redirect()->back()->withInput()->with('error','Please try again');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(order_track $order_track)
    {
        return view('user.order_track.show', compact('order_track'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order_track=Order_track::get();
        $order_track=Order_track::findOrFail(encryptor('decrypt',$id));
        return view('user.order_track.edit',compact('order_track'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        {
            try{  
                $data=Order_track::findOrFail(encryptor('decrypt',$id));
                $data->user_id=$request->user_id;
                $data->shipment_id=$request->shipment_id;
                $data->comment=$request->comment;
                $data->status=$request->status;
               
                if($data->save()){
                    Toastr::success('Successfully updated');
                    return redirect()->route('order_track.index');
                }
            }catch(Exception $e){
                Toastr::error('Please try again');
                // dd($e);
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Order_track::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){   
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}