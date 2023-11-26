<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdminUser;
use App\Models\Backend\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\AdminUser\AddNewRequest;
use App\Http\Requests\Backend\AdminUser\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data=AdminUser::paginate(10);
        return view('backend.adminuser.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $role=Role::get();
        return view('backend.adminuser.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            $data=new AdminUser();
            $data->name=$request->userName;
            $data->email=$request->EmailAddress;
            $data->contact_no=$request->contactNumber;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;
            $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/adminuser'), $imageName);
                $data->image=$imageName;
            }

            if($data->save())
                return redirect()->route('adminuser.index')->with('success','Successfully saved');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role=Role::get();
        $user=AdminUser::findOrFail(encryptor('decrypt',$id));
        return view('backend.adminuser.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $data=AdminUser::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->userName;
            $data->email=$request->EmailAddress;
            $data->contact_no=$request->contactNumber;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;

            if($request->password)
                $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/adminuser'), $imageName);
                $data->image=$imageName;
            }

            if($data->save()){
                Toastr::success('Successfully updated');
                return redirect()->route('adminuser.index');
            }
        }catch(Exception $e){
            Toastr::error('Please try again');
            //dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= AdminUser::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/adminuser/').$data->image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
        
    }
}
