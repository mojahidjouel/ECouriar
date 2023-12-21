@extends('backend.layout.app')

@section('title',trans('Show Order Track'))

@section('content')
<div class="container">
    <div class="row">
          <div class="col-sm-6 mb-1">
            <div class="card text-center ">
              <div class="card-body ">
                <h5 class="card-title text-danger">Customer Name:</h5>
                <h4 class="card-text text-info">{{$ordertrack->shipment?->customer?->name}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center ">
              <div class="card-body ">
                <h5 class="card-title text-danger">Delivery Man:</h5>
                <h4 class="card-text text-info">{{$ordertrack->shipment?->deliveryman?->name}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center ">
              <div class="card-body ">
                <h5 class="card-title text-danger">Comment:</h5>
                <h4 class="card-text text-info">{{$ordertrack->comment}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center ">
              <div class="card-body ">
                <h5 class="card-title text-danger">Status:</h5>
                <h4 class="card-text text-info">@if($ordertrack->status == 0) {{__('Pending') }} @elseif($ordertrack->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</h4>      
              </div>
            </div>
          </div>

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