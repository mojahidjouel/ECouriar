@extends('user.layout.app')
@section('title',trans('Order Track'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-8">
        <div class="card w-85 mx-auto text-center">
        <div class="card-body bg-white">   
      @forelse($data as $d)
          <div class="card-body bg-white">
            <h6 class="text-danger">Delivery Man: </h6>
            <h4 class="card-title text-info">{{$d->shipment?->deliveryman?->name}}</h4>

            <h6 class="text-danger">Customer Id: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$d->shipment?->invoice_no}}</h4>

            <h6 class="text-danger">Comment: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$d->comment}}</h4>

            <h6 class="text-danger">Status: </h6>
            <h4 class="card-subtitle mb-2 text-info">
            @if($d->status == 0) {{__('Pending') }} @elseif($d->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif
            </h4>
            @empty
    @endforelse
         </div> 
         </div>
        </div>

        <div class="p-2 w-20 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('order.index')}}"><b>View All Shipment</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection