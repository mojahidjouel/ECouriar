@extends('backend.layout.app')

@section('pageTitle',trans('Update Couriar Information'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('couriar_information.update',encryptor('encrypt',$general_settings->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <!-- <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$shipment->id)}}"> -->
  
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" value="{{old('title',$general_settings->title)}}" name="title">
    @if($errors->has('title'))
      <span class="text-danger"> {{ $errors->first('title') }}</span>
    @endif
  </div>


  <div class="col-md-6 col-12 position-relative">
    <label for="header_title" class="form-label">Header Title</label>
    <input type="text" class="form-control" id="header_title" value="{{old('header_title',$general_settings->header_title)}}" name="header_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="header_subtitle " class="form-label">Header Subtitle </label>
    <input type="text" class="form-control" id="header_subtitle" value="{{old('header_subtitle',$general_settings->header_subtitle)}}" name="header_subtitle">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="testimonial_title" class="form-label">Testimonial Title</label>
    <input type="text" class="form-control" id="testimonial_title" value="{{old('testimonial_title',$general_settings->testimonial_title)}}" name="testimonial_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="search_courier_title" class="form-label">Search Courier Title</label>
    <input type="text" class="form-control" id="search_courier_title" value="{{old('search_courier_title',$general_settings->search_courier_title)}}" name="search_courier_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="search_courier_details" class="form-label">Search Courier Details</label>
    <input type="text" class="form-control" id="search_courier_details" value="{{ old('search_courier_details',$general_settings->search_courier_details)}}" name="search_courier_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_keyword" class="form-label">About Keyword</label>
    <input type="text" class="form-control" id="about_keyword" value="{{ old('about_keyword',$general_settings->about_keyword)}}" name="about_keyword">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_title" class="form-label">About Title</label>
    <input type="text" class="form-control" id="	about_title" value="{{old('about_title',$general_settings->about_title)}}" name="about_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_details" class="form-label">About Details</label>
    <input type="text" class="form-control" id="about_details" value="{{old('about_details',$general_settings->about_details)}}" name="about_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="gallery_title" class="form-label">Gallery Title</label>
    <input type="text" class="form-control" id="gallery_title" value="{{old('gallery_title',$general_settings->gallery_title)}}" name="gallery_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="gallery_details" class="form-label">Gallery Details</label>
    <input type="text" class="form-control" id="gallery_details" value="{{ old('gallery_details',$general_settings->gallery_details)}}" name="gallery_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="service_sitle" class="form-label">Service Sitle</label>
    <input type="text" class="form-control" id="service_sitle" value="{{ old('service_sitle',$general_settings->service_sitle)}}" name="service_sitle">
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="service_details" class="form-label">Service Details</label>
    <input type="text" class="form-control" id="service_details" value="{{ old('service_details',$general_settings->service_details)}}" name="service_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="footer_text" class="form-label">Footer Text</label>
    <input type="text" class="form-control" id="footer_text" value="{{old('footer_text',$general_settings->footer_text)}}" name="footer_text">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_title" class="form-label">Contact Title</label>
    <input type="text" class="form-control" id="contact_title" value="{{old('contact_title',$general_settings->contact_title)}}" name="contact_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_address" class="form-label">Contact Address</label>
    <input type="text" class="form-control" id="contact_address" value="{{old('contact_address',$general_settings->contact_address)}}" name="contact_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_phone" class="form-label">Contact Phone</label>
    <input type="text" class="form-control" id="contact_phone" value="{{old('contact_phone',$general_settings->contact_phone)}}" name="contact_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_email" class="form-label">Contact Email</label>
    <input type="text" class="form-control" id="contact_email" value="{{old('contact_email',$general_settings->contact_email)}}" name="contact_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" value="{{old('address',$general_settings->address)}}" name="address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="color_code" class="form-label">Color Code</label>
    <input type="text" class="form-control" id="color_code" value="{{old('color_code',$general_settings->color_code)}}" name="color_code">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_notification" class="form-label">Email Notification</label>
    <input type="text" class="form-control" id="email_notification" value="{{old('email_notification',$general_settings->email_notification)}}" name="email_notification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_template" class="form-label">Email Template</label>
    <input type="text" class="form-control" id="email_template" value="{{old('email_template',$general_settings->email_template)}}" name="email_template">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sms_api" class="form-label">Sms Api</label>
    <input type="text" class="form-control" id="sms_api" value="{{old('sms_api',$general_settings->sms_api)}}" name="sms_api">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="departure_courier" class="form-label">Departure Courier</label>
    <input type="text" class="form-control" id="departure_courier" value="{{old('departure_courier',$general_settings->departure_courier)}}" name="departure_courier">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="upcoming_courier" class="form-label">Upcoming Courier</label>
    <input type="text" class="form-control" id="upcoming_courier" value="{{old('upcoming_courier',$general_settings->upcoming_courier)}}" name="upcoming_courier">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_deliver" class="form-label">Total Deliver</label>
    <input type="text" class="form-control" id="total_deliver" value="{{old('total_deliver',$general_settings->total_deliver)}}" name="total_deliver">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sms_notification" class="form-label">Sms Notification</label>
    <input type="text" class="form-control" id="sms_notification" value="{{old('sms_notification',$general_settings->sms_notification)}}" name="sms_notification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="registration_verification" class="form-label">Registration Verification</label>
    <input type="text" class="form-control" id="registration_verification" value="{{old('registration_verification',$general_settings->registration_verification)}}" name="registration_verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_verification" class="form-label">Email Verification</label>
    <input type="text" class="form-control" id="email_verification" value="{{old('email_verification',$general_settings->email_verification)}}" name="email_verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="Sms_Verification" class="form-label">Sms Verification</label>
    <input type="text" class="form-control" id="Sms_Verification" value="{{old('Sms_Verification',$general_settings->Sms_Verification)}}" name="Sms_Verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_currency" class="form-label">Base Currency</label>
    <input type="text" class="form-control" id="base_currency" value="{{old('base_currency',$general_settings->base_currency)}}" name="base_currency">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_currency_symbol" class="form-label">Base Currency Symbol</label>
    <input type="text" class="form-control" id="base_currency_symbol" value="{{old('base_currency_symbol',$general_settings->base_currency_symbol)}}" name="base_currency_symbol">
  </div>

</div>

<div class="row">
  <div class="col-12 d-flex justify-content-start">
      <button type="submit" class="btn btn-info ms-1 mt-1">Save</button>
  </div>
</div>
</form>
</div>
@endsection