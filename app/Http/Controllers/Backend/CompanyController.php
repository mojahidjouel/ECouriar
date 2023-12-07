<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;

use Exception;
use File;
use Toastr;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Company::oldest()->paginate(5);
        return view('backend.company.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company=Company::get();
        return view('backend.company.create',compact('company'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Company();
            $data->company_name=$request->company_name;
            $data->contact_number=$request->contact_number;
            $data->company_email=$request->company_email;
            $data->company_address=$request->company_address;
            $data->company_city=$request->company_city;
            $data->company_state=$request->company_state;
            $data->company_pin=$request->company_pin;
            $data->company_country=$request->company_country;
            if($request->hasFile('logo_image')){
                $imageName = rand(111,999).time().'.'.$request->logo_image->extension();
                $request->logo_image->move(public_path('uploads/company'), $imageName);
                $data->logo_image=$imageName;
            }           
            if($data->save())
                return redirect()->route('company.index')->with('success','Successfully saved');
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
    public function show(company $company)
    {
        return view('backend.company.show', compact('company'));
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company=Company::get();
        $company=Company::findOrFail(encryptor('decrypt',$id));
        return view('backend.company.edit',compact('company'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=Company::findOrFail(encryptor('decrypt',$id));
            $data->company_name=$request->company_name;
            $data->contact_number=$request->contact_number;
            $data->company_email=$request->company_email;
            $data->company_address=$request->company_address;
            $data->company_city=$request->company_city;
            $data->company_state=$request->company_state;
            $data->company_pin=$request->company_pin;
            $data->company_country=$request->company_country;
            if($request->hasFile('logo_image')){
                $imageName = rand(111,999).time().'.'.$request->logo_image->extension();
                $request->logo_image->move(public_path('uploads/company'), $imageName);
                $data->logo_image=$imageName;
            }
            if($data->save())
                return redirect()->route('company.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Company::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/company/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
