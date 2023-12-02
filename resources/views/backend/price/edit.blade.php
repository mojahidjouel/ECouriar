@extends('backend.layout.app')

@section('pageTitle',trans('Update Price'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('price.update',encryptor('encrypt',$price->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="to_city" class="form-label">To City</label>
    <select class="form-control" name="to_city" id="to_city">
        <option value="">Select To City</option>
        @forelse($city as $r)
            <option value="{{$r->id}}" {{ old('to_city',$price->to_city)==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Role found</option>
        @endforelse
        </select>
        @if($errors->has('to_city'))
        <span class="text-danger"> {{$errors->first('to_city')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="from_city" class="form-label">From City</label>
    <select class="form-control" name="from_city" id="from_city">
      <option value="">Select From City</option>
      @forelse($city as $r)
          <option value="{{$r->id}}" {{ old('from_city',$price->from_city)==$r->id?"selected":""}}> {{ $r->name}}</option>
      @empty
          <option value="">No From City</option>
      @endforelse
      </select>
      @if($errors->has('from_city'))
      <span class="text-danger"> {{ $errors->first('from_city') }}</span>
      @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_price" class="form-label">Base Price</label>
    <input type="text" class="form-control" id="base_price" value="{{ old('base_price',$price->base_price)}}" name="base_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_size" class="form-label">Unit Size</label>
    <input type="text" class="form-control" id="unit_size" value="{{ old('unit_size',$price->unit_size)}}" name="unit_size">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_price" class="form-label">Unit Price</label>
    <input type="text" class="form-control" id="unit_price" value="{{ old('unit_price',$price->unit_price)}}" name="unit_price">
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