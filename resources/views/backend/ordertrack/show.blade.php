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
            <h4 class="card-title text-info">{{$order_track->user_id}}</h4>

            <h6 class="text-danger">Shipment Id: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$order_track->shipment_id}}</h4>

            <h6 class="text-danger">Comment: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$order_track->comment}}</h4>

            <h6 class="text-danger">Status: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$order_track->status}}</h4>

         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('order_track.index')}}"><b>View All Order Track</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection