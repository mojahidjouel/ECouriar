@extends('backend.layout.app')

@section('title',trans('Create Shipment'))

@section('content')

<div class="row">
<form class="row g-6 needs-validation" method="post" enctype="multipart/form-data" action="{{route('shipment.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="from_city" class="form-label">From City</label>
    <select class="form-control" name="from_city" id="from_city">
      <option value="">Select From City</option>
      @forelse($city as $r)
          <option value="{{$r->id}}" {{ old('from_city')==$r->id?"selected":""}}> {{ $r->name}}</option>
      @empty
          <option value="">No From City</option>
      @endforelse
      </select>
      @if($errors->has('from_city'))
      <span class="text-danger"> {{ $errors->first('from_city') }}</span>
      @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_address" class="form-label">Sender Address</label>
    <input type="text" class="form-control" id="sender_address" value="{{old('sender_address')}}" name="sender_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="to_city" class="form-label">To City</label>
    <select class="form-control" name="to_city" id="to_city">
        <option value="">Select To City</option>
        @forelse($city as $r)
            <option value="{{$r->id}}" {{ old('to_city')==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Role found</option>
        @endforelse
        </select>
        @if($errors->has('to_city'))
        <span class="text-danger"> {{$errors->first('to_city')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_address" class="form-label">Receiver Address</label>
    <input type="text" class="form-control" id="receiver_address" value="{{old('receiver_address')}}" name="receiver_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_name" class="form-label">Contact Name</label>
    <input type="text" class="form-control" id="contact_name" value="{{old('contact_name')}}" name="contact_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{old('contact_number')}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="product_name" value="{{old('product_name')}}" name="product_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_description" class="form-label">Product Description</label>
    <input type="text" class="form-control" id="product_description" value="{{old('product_description')}}" name="product_description">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_weight" class="form-label">Product Weight</label>
    <input type="text" class="form-control" id="product_weight" value="{{old('product_weight')}}" name="product_weight">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_price" class="form-label">Base Price</label>
    <select class="form-control" name="base_price" id="base_price">
        <option value="">Select Base Price</option>
        @forelse($price as $r)
            <option value="{{$r->id}}" {{ old('base_price')==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Base Price</option>
        @endforelse
        </select>
        @if($errors->has('base_price'))
        <span class="text-danger"> {{$errors->first('base_price')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_size" class="form-label">Unit Size</label>
    <select class="form-control" name="unit_size" id="unit_size">
        <option value="">Select Unit Size</option>
        @forelse($price as $r)
            <option value="{{$r->id}}" {{ old('unit_size')==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Role found</option>
        @endforelse
        </select>
        @if($errors->has('unit_size'))
        <span class="text-danger"> {{$errors->first('unit_size')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="shipping_cost" class="form-label">Cargo Cost</label>
    <select class="form-control" name="shipping_cost" id="shipping_cost">
        <option value="">Select To City</option>
        @forelse($price as $r)
            <option value="{{$r->id}}" {{ old('shipping_cost')==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Cargo Cost</option>
        @endforelse
        </select>
        @if($errors->has('shipping_cost'))
        <span class="text-danger"> {{$errors->first('shipping_cost')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_cost" class="form-label">Total Cost</label>
    <input type="text" class="form-control" id="total_cost" value="{{old('total_cost')}}" name="total_cost">
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