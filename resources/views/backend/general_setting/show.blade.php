@extends('backend.layout.app')

@section('title',trans('Show Couriar Information'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">Title:</h6>
            <h4 class="card-title text-info">{{$general_setting->title}}</h4>

            <h6 class="text-danger">Header Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->header_title}}</h4>

            <h6 class="text-danger">Header Subtitle:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->header_subtitle}}</h4>

            <h6 class="text-danger">Testimonial Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->testimonial_title}}</h4>

            <h6 class="text-danger">Search Courier Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->search_courier_title}}</h4>

            <h6 class="text-danger">Search Courier Details:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->search_courier_details}}</h4>

            <h6 class="text-danger">About Keyword:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->about_keyword}}</h4>

            <h6 class="text-danger">About Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->about_title}}</h4>

            <h6 class="text-danger">About Details:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->about_details}}</h4>

            <h6 class="text-danger">Gallery_Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->gallery_title}}</h4>

            <h6 class="text-danger">Gallery Details:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->gallery_details}}</h4>

            <h6 class="text-danger">Service Sitle:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->service_sitle}}</h4>

            <h6 class="text-danger">Service Details:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->service_details}}</h4>

            <h6 class="text-danger">Footer Text:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->footer_text}}</h4>

            <h6 class="text-danger">Contact Title:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->contact_title}}</h4>

            <h6 class="text-danger">Contact Address:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->contact_address}}</h4>

            <h6 class="text-danger">Contact Phone:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->contact_phone}}</h4>

            <h6 class="text-danger">Contact Email:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->contact_email}}</h4>

            <h6 class="text-danger">Address:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->address}}</h4>

            <h6 class="text-danger">Color Code:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->color_code}}</h4>

            <h6 class="text-danger">Email Notification:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->email_notification}}</h4>

            <h6 class="text-danger">Email Template:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->email_template}}</h4>

            <h6 class="text-danger">Sms Api:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->sms_api}}</h4>

            <h6 class="text-danger">Departure Courier:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->departure_courier}}</h4>

            <h6 class="text-danger">Upcoming Courier:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->upcoming_courier}}</h4>

            <h6 class="text-danger">Total Deliver:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->total_deliver}}</h4>

            <h6 class="text-danger">Sms Notification:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->sms_notification}}</h4>

            <h6 class="text-danger">Registration Verification:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->registration_verification}}</h4>

            <h6 class="text-danger">Email Verification:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->email_verification}}</h4>

            <h6 class="text-danger">Sms Verification: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->Sms_Verification}}</h4>

            <h6 class="text-danger">Base Currency:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$general_setting->base_currency}}</h4>
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('general_setting.index')}}"><b>View All Couriar Information</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection