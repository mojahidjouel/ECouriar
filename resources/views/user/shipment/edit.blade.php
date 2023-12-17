@extends('user.layout.app')

@section('title',trans('Create shipment'))

@section('content')

<div class="row">
<form class="row g-6 needs-validation" method="post" enctype="multipart/form-data" action="{{route('order.update',encryptor('encrypt',$shipment->id)) }}" novalidate>
  @csrf
  @method('PATCH')
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_name" class="form-label">Contact Name</label>
    <input type="text" class="form-control" id="contact_name" value="{{ old('contact_name',$shipment->contact_name)}}" name="contact_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{ old('contact_number',$shipment->contact_number)}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="product_name" value="{{ old('product_name',$shipment->product_name)}}" name="product_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_description" class="form-label">Product Description</label>
    <input type="text" class="form-control" id="product_description" value="{{ old('product_description',$shipment->product_description)}}" name="product_description">
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