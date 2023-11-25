@extends('backend.layout.app')

@section('title',trans('Create Couriar Information'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('general_setting.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
    @if($errors->has('title'))
      <span class="text-danger"> {{ $errors->first('title') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="header_title	" class="form-label">Header Title</label>
    <input type="text" class="form-control" id="header_title" value="{{old('header_title')}}" name="header_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="header_subtitle" class="form-label">Header Subtitle</label>
    <input type="text" class="form-control" id="header_subtitle " value="{{old('header_subtitle')}}" name="header_subtitle">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="testimonial_title" class="form-label">Testimonial Title</label>
    <input type="text" class="form-control" id="testimonial_title" value="{{ old('testimonial_title')}}" name="testimonial_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="search_courier_title" class="form-label">Search Courier Title</label>
    <input type="text" class="form-control" id="search_courier_title" value="{{ old('search_courier_title')}}" name="search_courier_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="search_courier_details" class="form-label">search_courier_details</label>
    <input type="text" class="form-control" id="search_courier_details" value="{{ old('search_courier_details')}}" name="search_courier_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_keyword" class="form-label">About Keyword</label>
    <input type="text" class="form-control" id="	about_keyword" value="{{ old('about_keyword')}}" name="	about_keyword">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_title" class="form-label">About Title</label>
    <input type="text" class="form-control" id="about_title" value="{{ old('about_title')}}" name="about_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="about_details" class="form-label">About Details</label>
    <input type="text" class="form-control" id="about_details" value="{{ old('about_details')}}" name="about_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="gallery_title" class="form-label">Gallery Title</label>
    <input type="text" class="form-control" id="gallery_title" value="{{ old('gallery_title')}}" name="gallery_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="gallery_details" class="form-label">Gallery Details</label>
    <input type="text" class="form-control" id="gallery_details" value="{{ old('gallery_details')}}" name="gallery_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="service_sitle" class="form-label">Service Sitle</label>
    <input type="text" class="form-control" id="service_sitle" value="{{ old('service_sitle')}}" name="service_sitle">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="service_details" class="form-label">Service Details</label>
    <input type="text" class="form-control" id="service_details" value="{{ old('service_details')}}" name="service_details">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="footer_text" class="form-label">Footer Text</label>
    <input type="text" class="form-control" id="footer_text" value="{{ old('footer_text')}}" name="footer_text">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_title" class="form-label">Contact Title</label>
    <input type="text" class="form-control" id="contact_title" value="{{ old('contact_title')}}" name="contact_title">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_address" class="form-label">Contact Address</label>
    <input type="text" class="form-control" id="contact_address" value="{{ old('contact_address')}}" name="contact_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_phone" class="form-label">Contact Phone</label>
    <input type="text" class="form-control" id="contact_phone" value="{{ old('contact_phone')}}" name="contact_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_email" class="form-label">Contact Email</label>
    <input type="text" class="form-control" id="contact_email" value="{{ old('contact_email')}}" name="contact_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="	address" value="{{ old('address')}}" name="address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="color_code" class="form-label">Color Code</label>
    <input type="text" class="form-control" id="color_code" value="{{ old('color_code')}}" name="color_code">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_notification" class="form-label">Email Notification</label>
    <input type="text" class="form-control" id="	email_notification" value="{{ old('	email_notification')}}" name="email_notification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_template" class="form-label">Email Template</label>
    <input type="text" class="form-control" id="email_template" value="{{ old('email_template')}}" name="email_template">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sms_api" class="form-label">Sms Api</label>
    <input type="text" class="form-control" id="sms_api" value="{{ old('sms_api')}}" name="sms_api">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="departure_courier" class="form-label">Departure Courier</label>
    <input type="text" class="form-control" id="departure_courier" value="{{ old('departure_courier')}}" name="departure_courier">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="upcoming_courier" class="form-label">Upcoming Courier</label>
    <input type="text" class="form-control" id="upcoming_courier" value="{{ old('upcoming_courier')}}" name="upcoming_courier">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_deliver" class="form-label">Total Deliver</label>
    <input type="text" class="form-control" id="total_deliver" value="{{ old('total_deliver')}}" name="total_deliver">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sms_notification" class="form-label">Sms_Notification</label>
    <input type="text" class="form-control" id="sms_notification" value="{{old('sms_notification')}}" name="sms_notification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="registration_verification" class="form-label">Registration Verification</label>
    <input type="text" class="form-control" id="registration_verification" value="{{ old('registration_verification')}}" name="registration_verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email_verification" class="form-label">Email Verification</label>
    <input type="text" class="form-control" id="email_verification" value="{{ old('email_verification')}}" name="email_verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="Sms_Verification" class="form-label">Sms Verification</label>
    <input type="text" class="form-control" id="Sms_Verification" value="{{ old('Sms_Verification')}}" name="Sms_Verification">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_currency" class="form-label">Base Currency</label>
    <input type="text" class="form-control" id="base_currency" value="{{ old('base_currency')}}" name="base_currency">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_currency_symbol" class="form-label">Base Currency Symbol</label>
    <input type="text" class="form-control" id="base_currency_symbol" value="{{ old('base_currency_symbol')}}" name="base_currency_symbol">
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