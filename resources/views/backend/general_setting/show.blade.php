@extends('backend.layout.app')

@section('title',trans('Show Couriar Information'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body">
            <h4>Title:</h4>
            <p class="card-title mb-2 text-muted">
            {{$general_setting->title}}</p>

            <h4>Header Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->header_title}}</p>

            <h4>Header Subtitle:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->header_subtitle}}</p>

            <h4>Testimonial Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->testimonial_title}}</p>

            <h4>Search Courier Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->search_courier_title}}</p>

            <h4>Search Courier Details:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->search_courier_details}}</p>

            <h4>About Keyword:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->about_keyword}}</p>

            <h4>About Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->about_title}}</p>

            <h4>About Details:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->about_details}}</p>

            <h4>Gallery_Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->gallery_title}}</p>

            <h4>Gallery Details:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->gallery_details}}</p>

            <h4>Service Sitle:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->service_sitle}}</p>

            <h4>Service Details:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->service_details}}</p>

            <h4>Footer Text:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->footer_text}}</p>

            <h4>Contact Title:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->contact_title}}</p>

            <h4>Contact Address:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->contact_address}}</p>

            <h4>Contact Phone:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->contact_phone}}</p>

            <h4>Contact Email:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->contact_email}}</p>

            <h4>Address:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->address}}</p>

            <h4>Color Code:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->color_code}}</p>

            <h4>Email Notification:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->email_notification}}</p>

            <h4>Email Template:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->email_template}}</p>

            <h4>Sms Api:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->sms_api}}</p>

            <h4>Departure Courier:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->departure_courier}}</p>

            <h4>Upcoming Courier:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->upcoming_courier}}</p>

            <h4>Total Deliver:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->total_deliver}}</p>

            <h4>Sms Notification:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->sms_notification}}</p>

            <h4>Registration Verification:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->registration_verification}}</p>

            <h4>Email Verification:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->email_verification}}</p>

            <h4>Sms Verification: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->Sms_Verification}}</p>

            <h4>Base Currency:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$general_setting->base_currency}}</p>
 
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