@extends('backend.layout.app')

@section('title',trans('Create Couriar Information'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('couriar_information.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_branch_id" class="form-label">Sender Branch Id</label>
    <input type="text" class="form-control" id="sender_branch_id" value="{{ old('sender_branch_id')}}" name="sender_branch_id">
    @if($errors->has('sender_branch_id'))
      <span class="text-danger"> {{ $errors->first('sender_branch_id') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_name	" class="form-label">Sender Name</label>
    <input type="text" class="form-control" id="sender_name" value="{{ old('sender_name')}}" name="sender_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_email " class="form-label">Sender Email </label>
    <input type="text" class="form-control" id="sender_email " value="{{ old('sender_email ')}}" name="sender_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_phone" class="form-label">Sender Phone</label>
    <input type="text" class="form-control" id="sender_phone" value="{{ old('sender_phone')}}" name="sender_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_address" class="form-label">Sender Address</label>
    <input type="text" class="form-control" id="sender_address" value="{{ old('sender_address')}}" name="sender_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_branch_staff_id" class="form-label">Sender Branch_Staff Id</label>
    <input type="text" class="form-control" id="sender_branch_staff_id" value="{{ old('sender_branch_staff_id')}}" name="sender_branch_staff_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_name" class="form-label">Receiver Name</label>
    <input type="text" class="form-control" id="receiver_name" value="{{ old('receiver_name')}}" name="receiver_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_email" class="form-label">	Receiver Email</label>
    <input type="text" class="form-control" id="	receiver_email" value="{{ old('receiver_email')}}" name="	receiver_email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_phone" class="form-label">Receiver Phone</label>
    <input type="text" class="form-control" id="receiver_phone" value="{{ old('receiver_phone')}}" name="receiver_phone">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_address" class="form-label">Receiver Address</label>
    <input type="text" class="form-control" id="receiver_address" value="{{ old('receiver_address')}}" name="receiver_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_branch_staff_id" class="form-label">Receiver Branch Staff Id</label>
    <input type="text" class="form-control" id="receiver_branch_staff_id" value="{{ old('receiver_branch_staff_id')}}" name="receiver_branch_staff_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_receiver_id" class="form-label">Payment Receiver Id</label>
    <input type="text" class="form-control" id="payment_receiver_id" value="{{ old('payment_receiver_id')}}" name="payment_receiver_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_branch_id" class="form-label">Payment Branch Id</label>
    <input type="text" class="form-control" id="payment_branch_id" value="{{ old('payment_branch_id')}}" name="payment_branch_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_status" class="form-label">Payment_Status</label>
    <input type="text" class="form-control" id="payment_status" value="{{ old('payment_status')}}" name="payment_status">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_method_name" class="form-label">Payment Method Name</label>
    <input type="text" class="form-control" id="payment_method_name" value="{{ old('payment_method_name')}}" name="payment_method_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_transaction_id" class="form-label">Payment Transaction Id</label>
    <input type="text" class="form-control" id="payment_transaction_id" value="{{ old('payment_transaction_id')}}" name="payment_transaction_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_date" class="form-label">Payment Date</label>
    <input type="text" class="form-control" id="payment_date" value="{{ old('payment_date')}}" name="payment_date">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_balance" class="form-label">Payment Balance</label>
    <input type="text" class="form-control" id="payment_balance" value="{{ old('payment_balance')}}" name="payment_balance">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_transaction_image" class="form-label">Payment Transaction Image</label>
    <input type="file" name="payment_transaction_image" id="payment_transaction_image" class="form-control">
    <!-- <input type="text" class="form-control" id="payment_date" value="{{ old('payment_date')}}" name="payment_date"> -->
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_note" class="form-label">Payment Note</label>
    <input type="text" class="form-control" id="payment_note" value="{{ old('payment_note')}}" name="payment_note">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="payment_date" class="form-label">Payment Date</label>
    <input type="text" class="form-control" id="payment_date" value="{{ old('payment_date')}}" name="payment_date">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="code" class="form-label">Code</label>
    <input type="text" class="form-control" id="	code" value="{{ old('code')}}" name="code">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="invoice_id" class="form-label">	Invoice Id</label>
    <input type="text" class="form-control" id="	invoice_id" value="{{ old('	invoice_id')}}" name="invoice_id">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" id="	status" value="{{ old('	status')}}" name="status">
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