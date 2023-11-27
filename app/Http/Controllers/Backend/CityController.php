<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\city;
use App\Models\Backend\AdminUser;

use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=City::paginate(10);
        return view('backend.city.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city=City::get();
        return view('backend.city.create',compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new City();
            $data->name=$request->name;
            $data->code=$request->code;

            if($data->save())
                return redirect()->route('city.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
            }catch(Exception $e){
            // dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
        return view('backend.city.show', compact('city'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $city=City::get();
        $city=City::findOrFail(encryptor('decrypt',$id));
        return view('backend.city.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=City::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->code=$request->code;

            if($data->save())
                return redirect()->route('city.index')->with('success','Successfully saved');
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
        $data=City::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/city/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}