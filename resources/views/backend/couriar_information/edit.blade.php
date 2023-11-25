@extends('backend.layout.app')

@section('pageTitle',trans('Update Couriar Information'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('couriar_information.update',encryptor('encrypt',$couriar_information->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <!-- <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$shipment->id)}}"> -->
  
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_branch_id" class="form-label">Sender Branch Id</label>
    <input type="text" class="form-control" id="sender_branch_id" value="{{old('sender_branch_id',$couriar_information->sender_branch_id)}}" name="sender_branch_id">
    @if($errors->has('sender_branch_id'))
      <span class="text-danger"> {{ $errors->first('sender_branch_id') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="tracking_no" class="form-label">Sender Name</label>
    <input type="text" class="form-control" id="tracking_no" value="{{old('tracking_no',$couriar_information->tracking_no)}}" name="tracking_no">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_name" class="form-label">Sender Name</label>
    <input type="text" class="form-control" id="sender_name" value="{{old('sender_name',$couriar_information->sender_name)}}" name="sender_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_email " class="form-label">	Sender Email </label>
    <input type="text" class="form-control" id="	sender_email" value="{{old('sender_email',$couriar_information->sender_email)}}" name="sender_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_phone" class="form-label">Sender Number</label>
    <input type="text" class="form-control" id="sender_phone" value="{{old('sender_phone',$couriar_information->sender_phone)}}" name="sender_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_address" class="form-label">Sender Address</label>
    <input type="text" class="form-control" id="sender_address" value="{{old('sender_address',$couriar_information->sender_address)}}" name="sender_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_city" class="form-label">Sender City</label>
    <input type="text" class="form-control" id="sender_city" value="{{old('sender_city',$couriar_information->sender_city)}}" name="sender_city">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_state" class="form-label">Sender Division</label>
    <input type="text" class="form-control" id="sender_state" value="{{old('sender_state',$couriar_information->sender_state)}}" name="sender_state">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_pin" class="form-label">Sender Code</label>
    <input type="text" class="form-control" id="sender_pin" value="{{old('sender_pin',$couriar_information->sender_pin)}}" name="sender_pin">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_country" class="form-label">Sender Country</label>
    <input type="text" class="form-control" id="sender_country" value="{{old('sender_country',$couriar_information->sender_country)}}" name="sender_country">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_branch_staff_id" class="form-label">Sender Branch Staff Id</label>
    <input type="text" class="form-control" id="sender_branch_staff_id" value="{{ old('sender_branch_staff_id',$couriar_information->sender_branch_staff_id)}}" name="sender_branch_staff_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_name" class="form-label">Receiver Name</label>
    <input type="text" class="form-control" id="receiver_name" value="{{ old('receiver_name',$couriar_information->receiver_name)}}" name="receiver_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="	receiver_email" class="form-label">	Receiver Email</label>
    <input type="text" class="form-control" id="	receiver_email" value="{{old('	receiver_email',$couriar_information->receiver_email)}}" name="	receiver_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_phone" class="form-label">Receiver Phone</label>
    <input type="text" class="form-control" id="receiver_phone" value="{{old('receiver_phone',$couriar_information->receiver_phone)}}" name="receiver_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_address" class="form-label">Receiver Address</label>
    <input type="text" class="form-control" id="receiver_address" value="{{old('receiver_address',$couriar_information->receiver_address)}}" name="receiver_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_city" class="form-label">Receiver City</label>
    <input type="text" class="form-control" id="receiver_city" value="{{old('receiver_city',$couriar_information->receiver_city)}}" name="receiver_city">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_state" class="form-label">Receiver Division</label>
    <input type="text" class="form-control" id="	receiver_state" value="{{old('receiver_state',$couriar_information->receiver_state)}}" name="receiver_state">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_pin" class="form-label">Receiver Code</label>
    <input type="text" class="form-control" id="receiver_pin" value="{{old('receiver_pin',$couriar_information->receiver_pin)}}" name="receiver_pin">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_country" class="form-label">Receiver Country</label>
    <input type="text" class="form-control" id="receiver_country" value="{{old('receiver_country',$couriar_information->receiver_country)}}" name="receiver_country">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="couriar_description" class="form-label">Receiver Branch Staff Id</label>
    <input type="text" class="form-control" id="couriar_description" value="{{ old('couriar_description',$couriar_information->couriar_description)}}" name="couriar_description">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_branch_staff_id" class="form-label">Receiver Branch Staff Id</label>
    <input type="text" class="form-control" id="receiver_branch_staff_id" value="{{ old('receiver_branch_staff_id',$couriar_information->receiver_branch_staff_id)}}" name="receiver_branch_staff_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_receiver_id" class="form-label">Payment Receiver Id</label>
    <input type="text" class="form-control" id="payment_receiver_id" value="{{ old('payment_receiver_id',$couriar_information->payment_receiver_id)}}" name="payment_receiver_id">
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="payment_branch_id" class="form-label">Payment Branch Id</label>
    <input type="text" class="form-control" id="payment_branch_id" value="{{ old('payment_branch_id',$couriar_information->payment_branch_id)}}" name="payment_branch_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_status" class="form-label">Payment Status</label>
    <input type="text" class="form-control" id="payment_status" value="{{old('payment_status',$couriar_information->payment_status)}}" name="payment_status">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_method_name" class="form-label">Payment Method Name</label>
    <input type="text" class="form-control" id="payment_method_name" value="{{old('payment_method_name',$couriar_information->payment_method_name)}}" name="payment_method_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_transaction_id" class="form-label">Payment Transaction Id</label>
    <input type="text" class="form-control" id="payment_transaction_id" value="{{old('payment_transaction_id',$couriar_information->payment_transaction_id)}}" name="payment_transaction_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_date" class="form-label">Payment Date</label>
    <input type="text" class="form-control" id="payment_date" value="{{old('payment_date',$couriar_information->payment_date)}}" name="payment_date">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_balance" class="form-label">Payment Balance</label>
    <input type="text" class="form-control" id="payment_balance" value="{{old('payment_balance',$couriar_information->payment_balance)}}" name="payment_balance">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_transaction_image" class="form-label">Payment Transaction Image</label>
    <input type="file" name="payment_transaction_image" id="payment_transaction_image" class="form-control">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_note" class="form-label">Payment Note</label>
    <input type="text" class="form-control" id="payment_note" value="{{old('payment_note',$couriar_information->payment_note)}}" name="payment_note">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="code" class="form-label">Code</label>
    <input type="text" class="form-control" id="	code" value="{{ old('code',$couriar_information->code)}}" name="	code">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="invoice_id" class="form-label">Invoice Id</label>
    <input type="text" class="form-control" id="	invoice_id" value="{{ old('invoice_id',$couriar_information->	invoice_id)}}" name="	invoice_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" value="{{old('status',$couriar_information->status)}}" name="status">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="weight" class="form-label">Weight</label>
    <input type="text" class="form-control" id="weight" value="{{old('weight',$couriar_information->weight)}}" name="weight">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="height" class="form-label">Height</label>
    <input type="text" class="form-control" id="height" value="{{old('height',$couriar_information->height)}}" name="height">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" value="{{old('price',$couriar_information->price)}}" name="price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="from_location" class="form-label">From Location</label>
    <input type="text" class="form-control" id="from_location" value="{{old('from_location',$couriar_information->from_location)}}" name="from_location">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="to_location" class="form-label">To Location</label>
    <input type="text" class="form-control" id="to_location" value="{{old('to_location',$couriar_information->to_location)}}" name="to_location">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="package_id" class="form-label">Package Id</label>
    <input type="text" class="form-control" id="package_id" value="{{old('package_id',$couriar_information->package_id)}}" name="package_id">
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