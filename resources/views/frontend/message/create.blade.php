@extends('backend.layout.app')

@section('title',trans('Create Visitor'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('message.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="	name" value="{{old('name')}}" name="contract_number">
    @if($errors->has('name'))
      <span class="text-danger"> {{$errors->first('name')}}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact " class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="contact" value="{{ old('contact')}}" name="contact">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="comment" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" value="{{ old('comment')}}" name="comment">
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