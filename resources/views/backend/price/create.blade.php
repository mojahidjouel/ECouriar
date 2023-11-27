@extends('backend.layout.app')

@section('title',trans('Create Price'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('price.store')}}" novalidate>
  @csrf
<div class="row">

<div class="col-md-6 col-12 position-relative">
    <label for="to_city" class="form-label">To City</label>
    <input type="text" class="form-control" id="to_city" value="{{ old('to_city')}}" name="to_city">
    @if($errors->has('to_city'))
      <span class="text-danger"> {{$errors->first('to_city')}}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="from_city" class="form-label">From City</label>
    <input type="text" class="form-control" id="from_city" value="{{ old('from_city')}}" name="from_city">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_price" class="form-label">Base Price</label>
    <input type="text" class="form-control" id="base_price" value="{{ old('base_price')}}" name="base_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_size" class="form-label">Unit Size</label>
    <input type="text" class="form-control" id="unit_size" value="{{ old('unit_size')}}" name="unit_size">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_price" class="form-label">Unit Price</label>
    <input type="text" class="form-control" id="unit_price" value="{{ old('unit_price')}}" name="unit_price">
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