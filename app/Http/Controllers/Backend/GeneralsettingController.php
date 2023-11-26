<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\General_setting;

use Exception;
use File;
use Toastr;

class GeneralsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=General_setting::paginate(10);
        return view('backend.general_setting.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_setting=General_setting::get();
        return view('backend.general_setting.create',compact('general_setting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new General_setting();
            $data->title=$request->title;
            $data->header_title=$request->header_title;
            $data->header_subtitle=$request->header_subtitle;
            $data->testimonial_title=$request->testimonial_title;
            $data->search_courier_title=$request->search_courier_title;
            $data->search_courier_details=$request->search_courier_details;
            $data->about_keyword=$request->about_keyword;
            $data->about_title=$request->about_title;
            $data->about_details=$request->about_details;
            $data->gallery_title=$request->gallery_title;
            $data->gallery_details=$request->gallery_details;
            $data->service_sitle=$request->service_sitle;
            $data->service_details=$request->service_details;
            $data->footer_text=$request->footer_text;
            $data->contact_title=$request->contact_title;
            $data->contact_address=$request->contact_address;
            $data->contact_phone=$request->contact_phone;
            $data->contact_email=$request->contact_email;
            $data->address=$request->address;
            $data->color_code=$request->color_code;
            $data->email_notification=$request->email_notification;
            $data->email_template=$request->email_template;
            $data->sms_api=$request->sms_api;
            $data->departure_courier=$request->departure_courier;
            $data->upcoming_courier=$request->upcoming_courier;
            $data->total_deliver=$request->total_deliver;
            $data->sms_notification=$request->sms_notification;
            $data->registration_verification=$request->registration_verification;
            $data->	email_verification=$request->	email_verification;
            $data->Sms_Verification=$request->Sms_Verification;
            $data->base_currency=$request->base_currency;
            $data->base_currency_symbol=$request->base_currency_symbol;
          
            if($data->save())
                return redirect()->route('general_setting.index')->with('success','Successfully saved');
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
    public function show(general_setting $general_setting)
    {
        return view('backend.general_setting.show', compact('general_setting'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $general_setting=General_setting::get();
        $general_setting=General_setting::findOrFail(encryptor('decrypt',$id));
        return view('backend.general_setting.edit',compact('general_setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=General_setting::findOrFail(encryptor('decrypt',$id));
            $data->title=$request->title;
            $data->header_title=$request->header_title;
            $data->header_subtitle=$request->header_subtitle;
            $data->testimonial_title=$request->testimonial_title;
            $data->search_courier_title=$request->search_courier_title;
            $data->search_courier_details=$request->search_courier_details;
            $data->about_keyword=$request->about_keyword;
            $data->about_title=$request->about_title;
            $data->about_details=$request->about_details;
            $data->gallery_title=$request->gallery_title;
            $data->gallery_details=$request->gallery_details;
            $data->service_sitle=$request->service_sitle;
            $data->service_details=$request->service_details;
            $data->footer_text=$request->footer_text;
            $data->contact_title=$request->contact_title;
            $data->contact_address=$request->contact_address;
            $data->contact_phone=$request->contact_phone;
            $data->contact_email=$request->contact_email;
            $data->address=$request->address;
            $data->color_code=$request->color_code;
            $data->email_notification=$request->email_notification;
            $data->email_template=$request->email_template;
            $data->sms_api=$request->sms_api;
            $data->departure_courier=$request->departure_courier;
            $data->upcoming_courier=$request->upcoming_courier;
            $data->total_deliver=$request->total_deliver;
            $data->sms_notification=$request->sms_notification;
            $data->registration_verification=$request->registration_verification;
            $data->	email_verification=$request->	email_verification;
            $data->Sms_Verification=$request->Sms_Verification;
            $data->base_currency=$request->base_currency;
            $data->base_currency_symbol=$request->base_currency_symbol;
          
            if($data->save())
                return redirect()->route('general_setting.index')->with('success','Successfully saved');
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
        $data=General_setting::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/general_setting/').$data->logo_image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
