@extends('backend.layout.app')

@section('title',trans('Create Asset'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('shipment.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="from_city" class="form-label">From_City</label>
    <input type="text" class="form-control" id="from_city" value="{{ old('from_city')}}" name="from_city">
    @if($errors->has('from_city'))
      <span class="text-danger"> {{ $errors->first('from_city') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_address" class="form-label">Sender_Address</label>
    <input type="text" class="form-control" id="sender_address" value="{{ old('sender_address')}}" name="sender_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="to_city	" class="form-label">To_City</label>
    <input type="text" class="form-control" id="to_city" value="{{ old('to_city')}}" name="to_city	">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_address" class="form-label">Receiver_Address</label>
    <input type="text" class="form-control" id="receiver_address" value="{{ old('receiver_address')}}" name="receiver_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_name" class="form-label">Contact_Name</label>
    <input type="text" class="form-control" id="contact_name" value="{{ old('contact_name')}}" name="contact_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label">Contact_Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{ old('contact_number')}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_name" class="form-label">Product_Name</label>
    <input type="text" class="form-control" id="product_name" value="{{ old('product_name')}}" name="product_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_description" class="form-label">Product_Description</label>
    <input type="text" class="form-control" id="product_description" value="{{ old('product_description')}}" name="product_description">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_weight" class="form-label">Product_Weight</label>
    <input type="text" class="form-control" id="product_weight" value="{{ old('product_weight')}}" name="product_weight">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_price" class="form-label">Base_Price</label>
    <input type="text" class="form-control" id="base_price" value="{{ old('base_price')}}" name="base_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_price" class="form-label">Unit_Price</label>
    <input type="text" class="form-control" id="unit_price" value="{{ old('unit_price')}}" name="unit_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="shipping_cost" class="form-label">Cargo_Cost</label>
    <input type="text" class="form-control" id="shipping_cost" value="{{ old('shipping_cost')}}" name="shipping_cost">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_cost" class="form-label">Total_Cost</label>
    <input type="text" class="form-control" id="total_cost" value="{{ old('total_cost')}}" name="total_cost">
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