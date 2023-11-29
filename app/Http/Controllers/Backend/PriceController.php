<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Price;
use App\Models\Backend\AdminUser;
use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Price::paginate(10);
        return view('backend.price.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $price=Price::get();
        return view('backend.price.create',compact('price'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Price();
            $data->to_city=$request->to_city;
            $data->from_city=$request->from_city;
            $data->base_price =$request->base_price;
            $data->unit_size =$request->unit_size;
            $data->unit_price=$request->unit_price;

            if($data->save())
                return redirect()->route('price.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
            }catch(Exception $e){
             //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(price $price)
    {
        return view('backend.price.show', compact('price'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $price=Price::get();
        $price=Price::findOrFail(encryptor('decrypt',$id));
        return view('backend.price.edit',compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Price::findOrFail(encryptor('decrypt',$id));
            $data->to_city=$request->to_city;
            $data->from_city=$request->from_city;
            $data->base_price =$request->base_price;
            $data->unit_size =$request->unit_size;
            $data->unit_price=$request->unit_price;

            if($data->save())
                return redirect()->route('price.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
            }catch(Exception $e){
             // dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Price::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/price/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}