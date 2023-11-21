@extends('backend.layout.app')

@section('title',trans('Create Contact'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('contact.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="	contract_number" class="form-label">Contract_Number</label>
    <input type="text" class="form-control" id="	contract_number" value="{{ old('	contract_number')}}" name="	contract_number">
    @if($errors->has('contract_number'))
      <span class="text-danger"> {{ $errors->first('	contract_number') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="	customer_id	" class="form-label">	Customer_Id</label>
    <input type="text" class="form-control" id="	customer_id" value="{{ old('	customer_id')}}" name="	customer_id	">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_id" class="form-label">Product_Id</label>
    <input type="text" class="form-control" id="product_id" value="{{ old('product_id')}}" name="product_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="charge_type" class="form-label">Charge_Type</label>
    <input type="text" class="form-control" id="charge_type" value="{{ old('charge_type')}}" name="charge_type">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="amount" class="form-label">Amount</label>
    <input type="text" class="form-control" id="amount" value="{{ old('amount')}}" name="amount">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="start_date" class="form-label">Start_Date</label>
    <input type="text" class="form-control" id="start_date" value="{{ old('start_date')}}" name="start_date">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="	finish_date" class="form-label">	Finish_Date</label>
    <input type="text" class="form-control" id="	finish_date" value="{{ old('finish_date')}}" name="	finish_date">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="collect_form" class="form-label">Collect_Form</label>
    <input type="text" class="form-control" id="collect_form" value="{{ old('collect_form')}}" name="collect_form">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="delivered_to" class="form-label">Delivered_To</label>
    <input type="text" class="form-control" id="delivered_to" value="{{ old('delivered_to')}}" name="delivered_to">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_weight" class="form-label">Total_Weight</label>
    <input type="text" class="form-control" id="total_weight" value="{{ old('total_weight')}}" name="total_weight">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_distance" class="form-label">Total_Distance</label>
    <input type="text" class="form-control" id="total_distance" value="{{ old('total_distance')}}" name="total_distance">
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