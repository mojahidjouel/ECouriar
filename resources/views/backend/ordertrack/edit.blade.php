@extends('backend.layout.app')

@section('pageTitle',trans('Update Order Track'))
@section('pageSubTitle',trans('Update'))

@section('content')
<div class="col-12">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('ordertrack.update',encryptor('encrypt',$ordertrack->id))}}" novalidate>
  @csrf
  @method('PATCH')
  
  <div class="row">
  <div class="col-md-6 col-12 position-relative">
    <label for="shipment_id" class="form-label">Shipment	</label>
    <select name="shipment_id" class="form-control" id="shipment_id" >
      <option value="">Select Shipment</option>
      @forelse($shipment as $u)
        <option value="{{$u->id}}" @if(old('shipment_id',$ordertrack->shipment_id)==$u->id) selected @endif>{{$u->invoice_no}}</option>
      @empty
        <option value="">No Shipment Found</option>
      @endforelse
    </select>
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="comment" class="form-label">Comment</label>
    <input type="text" class="form-control" id="comment" value="{{old('comment',$ordertrack->comment)}}" name="comment">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <select id="status" class="form-control" name="status">
      <option value="0" @if(old('status',$ordertrack->status)==0) selected @endif>Pending</option>
      <option value="1" @if(old('status',$ordertrack->status)==1) selected @endif>Picked Up</option>
      <option value="2" @if(old('status',$ordertrack->status)==2) selected @endif>Delivered</option>
  </select>
    @if($errors->has('status'))
        <span class="text-danger"> {{ $errors->first('status') }}</span>
    @endif
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