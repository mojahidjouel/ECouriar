@extends('backend.layout.app')

@section('title',trans('Show Order Track'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body">
            <h4>User Id: </h4>
            <p class="card-title mb-2 text-muted">
            {{$order_track->user_id}}</p>

            <h4>Shipment Id: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$order_track->shipment_id}}</p>

            <h4>Comment: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$order_track->comment}}</p>

            <h4>Status: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$order_track->status}}</p>

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