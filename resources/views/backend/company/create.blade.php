@extends('backend.layout.app')

@section('title',trans('Create Company'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('company.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="company_name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="company_name" value="{{ old('company_name')}}" name="company_name">
    @if($errors->has('company_name'))
      <span class="text-danger"> {{ $errors->first('company_name') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{old('contact_number')}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_email" class="form-label">Company Email</label>
    <input type="text" class="form-control" id="company_email" value="{{ old('company_email')}}" name="company_email	">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_address" class="form-label">Company Address</label>
    <input type="text" class="form-control" id="company_address" value="{{ old('company_address')}}" name="company_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_city" class="form-label">Company City</label>
    <input type="text" class="form-control" id="company_city" value="{{ old('company_city')}}" name="company_city">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_state" class="form-label">Company Division</label>
    <input type="text" class="form-control" id="company_state" value="{{ old('company_state')}}" name="company_state">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_pin" class="form-label">Company Code</label>
    <input type="text" class="form-control" id="company_pin" value="{{ old('company_pin')}}" name="company_pin">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="company_country" class="form-label">Company Country</label>
    <input type="text" class="form-control" id="company_country" value="{{ old('company_country')}}" name="company_country">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="logo_image" class="form-label">Logo Image</label>
    <input type="file" name="logo_image" id="logo_image" class="form-control" value="{{old('logo_image')}}">
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