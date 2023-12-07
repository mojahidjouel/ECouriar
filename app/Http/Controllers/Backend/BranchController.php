<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Branch;

use Exception;
use File;
use Toastr;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Branch::oldest()->paginate(5);
        return view('backend.branch.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branch=Branch::get();
        return view('backend.branch.create',compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Branch();
            $data->company_id=$request->company_id;
            $data->branch_name=$request->branch_name;
            $data->branch_email =$request->branch_email;
            $data->branch_phone =$request->branch_phone;
            $data->branch_address=$request->branch_address;
            $data->branch_city=$request->branch_city;
            $data->branch_state=$request->branch_state;
            $data->branch_pin=$request->branch_pin;
            $data->branch_country=$request->branch_country;

            if($request->hasFile('logo_image')){
                $imageName = rand(111,999).time().'.'.$request->logo_image->extension();
                $request->logo_image->move(public_path('uploads/branch'), $imageName);
                $data->logo_image=$imageName;
            }

            if($data->save())
                return redirect()->route('branch.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
            }catch(Exception $e){
             dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(branch $branch)
    {
        return view('backend.branch.show', compact('branch'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $branch=Branch::get();
        $branch=Branch::findOrFail(encryptor('decrypt',$id));
        return view('backend.branch.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Branch::findOrFail(encryptor('decrypt',$id));
            $data->company_id=$request->company_id;
            $data->branch_name=$request->branch_name;
            $data->branch_email =$request->branch_email;
            $data->branch_phone =$request->branch_phone;
            $data->branch_address=$request->branch_address;
            $data->branch_city=$request->branch_city;
            $data->branch_state=$request->branch_state;
            $data->branch_pin=$request->branch_pin;
            $data->branch_country=$request->branch_country;

            if($request->hasFile('logo_image')){
                $imageName = rand(111,999).time().'.'.$request->logo_image->extension();
                $request->logo_image->move(public_path('uploads/branch'), $imageName);
                $data->logo_image=$imageName;
            }

            if($data->save())
                return redirect()->route('branch.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
            }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Branch::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/branch/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
