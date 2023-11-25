<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;

use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Asset::paginate(10);
        return view('backend.asset.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asset=asset::get();
        return view('backend.asset.create',compact('asset'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Asset();
            $data->name=$request->name;
            $data->registration_number=$request->registration_number;
            $data->driver_id=$request->driver_id;
            $data->registration_card=$request->registration_card;
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save())
                return redirect()->route('asset.index')->with('success','Successfully saved');
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
    public function show(asset $asset)
    {
        return view('backend.asset.show', compact('asset'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asset=Asset::get();
        $asset=Asset::findOrFail(encryptor('decrypt',$id));
        return view('backend.asset.edit',compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Asset::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->name;
            $data->registration_number=$request->registration_number;
            $data->driver_id=$request->driver_id;
            $data->registration_card=$request->registration_card;
            $data->gml=$request->gml;
            $data->cml=$request->cml;
            $data->hml=$request->hml;

            if($data->save()){
                Toastr::success('Successfully updated');
                return redirect()->route('asset.index');
            }
        }catch(Exception $e){
            Toastr::error('Please try again');
           // dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Asset::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/asset/').$data->image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
        
    }
}
