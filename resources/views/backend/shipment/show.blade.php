@extends('backend.layout.app')

@section('title',trans('Show Shipment'))

@section('content')
<div class="container">
  <div class="row">
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">From City:</h5>
        <h4 class="card-text text-dark">{{$shipment->f_city?->name}}</h4>      
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">To City:</h5>
        <h4 class="card-text text-dark">{{$shipment->t_city?->name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Product Name:</h5>
        <h4 class="card-text text-dark">{{$shipment->product_name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Product Description:</h5>
        <h4 class="card-text text-dark">{{$shipment->product_description}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Product Weight:</h5>
        <h4 class="card-text text-dark">{{$shipment->product_weight}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Receiver Address:</h5>
        <h4 class="card-text text-dark">{{$shipment->receiver_address}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Sender Address:</h5>
        <h4 class="card-text text-dark">{{$shipment->sender_address}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Contact Name:</h5>
        <h4 class="card-text text-dark">{{$shipment->contact_name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Contact Number:</h5>
        <h4 class="card-text text-dark">{{$shipment->contact_number}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Base Price:</h5>
        <h4 class="card-text text-dark">{{$shipment->base_price}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Unit Price:</h5>
        <h4 class="card-text text-dark">{{$shipment->unit_price}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Shipping Cost:</h5>
        <h4 class="card-text text-dark">{{$shipment->shipping_cost}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Total Cost:</h5>
        <h4 class="card-text text-dark">{{$shipment->total_cost}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Status:</h5>
        <h4 class="card-text text-dark">@if($shipment->status == 0) {{__('Pending') }} @elseif($shipment->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif
        </h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Delivary Man:</h5>
        <h4 class="card-text text-dark">{{$shipment->deliveryman?->name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-light">Customer Name:</h5>
        <h4 class="card-text text-dark">{{$shipment->customer?->name}}</h4>
      </div>
    </div>
  </div>

</div>
         </div>
        </div>
        <div class="p-2 w-10 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('shipment.index')}}"><b>View All Shipment</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection