@extends('backend.layout.app')

@section('title',trans('Show Order Track'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">User Id: </h6>
            <h4 class="card-title text-info">{{$ordertrack->user?->name}}</h4>

            <h6 class="text-danger">Shipment Id: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$ordertrack->shipment?->deliveryman?->name}}</h4>

            <h6 class="text-danger">Comment: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$ordertrack->comment}}</h4>

            <h6 class="text-danger">Status: </h6>
            <h4 class="card-subtitle mb-2 text-info">
            @if($ordertrack->status == 0) {{__('Pending') }} @elseif($ordertrack->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif
            </h4>

         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('ordertrack.index')}}"><b>View Order Track</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection