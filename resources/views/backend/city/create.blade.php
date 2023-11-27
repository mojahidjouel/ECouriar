@extends('backend.layout.app')

@section('title',trans('Create City'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('city.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name">
    @if($errors->has('name'))
      <span class="text-danger"> {{$errors->first('name') }}</span>
  @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="code" class="form-label">Code</label>
    <input type="text" class="form-control" id="code" value="{{old('code')}}" name="code">
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