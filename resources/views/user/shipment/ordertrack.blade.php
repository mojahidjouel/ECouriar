@extends('user.layout.app')
@section('title',trans('Order Track'))

@section('content')
  <div class="container">
    <div class="row">
      @forelse($data as $d)
          <div class="col-sm-6 mb-1">
            <div class="card text-center ">
              <div class="card-body ">
                <h5 class="card-title text-danger">Delivery Man:</h5>
                <h4 class="card-text text-info">{{$d->shipment?->deliveryman?->name}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">Customer ID:</h5>
                <h4 class="card-text text-info">{{$d->shipment?->invoice_no}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">Comment:</h5>
                <h4 class="card-text text-info">{{$d->comment}}</h4>      
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-1">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">Status:</h5>
                <h4 class="card-text text-info">@if($d->status == 0) {{__('Pending') }} @elseif($d->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</h4>      
              </div>
            </div>
          </div>
            @empty
    @endforelse
         </div> 
         </div>
        <div class="p-2 w-20 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('order.index')}}"><b>View All Order Tracking</b></a>
        </div>
      </div>
    </div>
  </div>
@endsection