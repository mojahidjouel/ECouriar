@extends('backend.layout.app')

@section('pageTitle',trans('Update Users'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('user.update',encryptor('encrypt',$user->id))}}" novalidate>
  @csrf
  @method('PATCH')
  <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$user->id)}}">
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="userName" class="form-label">Name <i class="text-danger">*</i></label>
    <input type="text" class="form-control white-text-input" id="userName" value="{{ old('userName',$user->name)}}" name="userName">
    @if($errors->has('userName'))
        <span class="text-danger"> {{ $errors->first('userName') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="EmailAddress" class="form-label">Email<i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="EmailAddress" value="{{ old('EmailAddress',$user->email)}}" name="EmailAddress">
    @if($errors->has('EmailAddress'))
        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
    @endif
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="contactNumber" class="form-label">Contact Number <i class="text-danger">*</i></label>
    <input type="text" class="form-control" id="contactNumber" value="{{ old('contactNumber',$user->contact_no)}}" name="contactNumber">
    @if($errors->has('contactNumber'))
        <span class="text-danger"> {{ $errors->first('contactNumber') }}</span>
    @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="address" class="form-label">Address </label>
    <input type="text" class="form-control" id="address" value="{{ old('address',$user->address)}}" name="address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <select id="status" class="form-control" name="status">
    <option value="">Select Option</option>
    <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
    <option value="1" @if(old('status')==1) selected @endif>Active</option>
</select>
  @if($errors->has('status'))
      <span class="text-danger"> {{ $errors->first('status') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="password" class="form-label">Password<i class="text-danger">*</i></label>
    <input type="password" class="form-control" id="password" name="password">
    @if($errors->has('password'))
        <span class="text-danger"> {{ $errors->first('password') }}</span>
    @endif
  </div>
  
  <div class="col-md-6 col-12 position-relative">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
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