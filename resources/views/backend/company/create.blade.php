@extends('backend.layout.app')

@section('title',trans('Create Company'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('company.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{ old('name')}}" name="name">
    @if($errors->has('name'))
      <span class="text-danger"> {{ $errors->first('name') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_person" class="form-label">Contact Person</label>
    <input type="text" class="form-control" id="contact_person" value="{{ old('contact_person')}}" name="contact_person	">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{old('contact_number')}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" value="{{ old('address')}}" name="address">
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