@extends('backend.layout.app')

@section('pageTitle',trans('Update Visitor'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('message.update',encryptor('encrypt',$visitor->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{ old('name',$message->name)}}" name="name">
    @if($errors->has('name'))
      <span class="text-danger"> {{$errors->first('name')}}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="{{old('email',$message->email)}}" name="email">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="contact" value="{{ old('contact',$message->contact)}}" name="contact">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="comment" class="form-label">Message</label>
    <input type="text" class="form-control" id="comment" value="{{ old('comment',$message->comment)}}" name="comment">
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