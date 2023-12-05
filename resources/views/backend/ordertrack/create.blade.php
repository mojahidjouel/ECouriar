@extends('backend.layout.app')

@section('title',trans('Create Order Track'))

@section('content')

<div class="row">
<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('ordertrack.store')}}" novalidate>
  @csrf
<div class="row">

  <div class="col-md-6 col-12 position-relative">
    <label for="user_id" class="form-label">User Id	</label>
    <select name="user_id" class="form-control" id="user_id" >
      <option value="">Select User</option>
      @forelse($user as $u)
        <option value="{{$u->id}}" @if(old('user_id')==$u->id) selected @endif>{{$u->name}}</option>
      @empty
        <option value="">No User Found</option>
      @endforelse
    </select>
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="shipment_id" class="form-label">Shipment Id	</label>
    <select name="shipment_id" class="form-control" id="shipment_id" >
      <option value="">Select Shipment</option>
      @forelse($shipment as $u)
        <option value="{{$u->id}}" @if(old('shipment_id')==$u->id) selected @endif>{{$u->id}}</option>
      @empty
        <option value="">No Shipment Found</option>
      @endforelse
    </select>
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="comment" class="form-label">Comment</label>
    <input type="text" class="form-control" id="comment" value="{{old('comment')}}" name="comment">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label">Status</label>
    <select id="status" class="form-control" name="status">
    <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
    <option value="1" @if(old('status')==1) selected @endif>Active</option>
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