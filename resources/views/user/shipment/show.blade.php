@extends('user.layout.app')

@section('title',trans('Show Shipment'))

@section('content')
<div class="container">
  <div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">From:</h5>
        <h4 class="card-text text-info">{{$shipment->f_city?->name}}</h4>      
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Sender Address:</h5>
        <h4 class="card-text text-info">{{$shipment->sender_address}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">To:</h5>
        <h4 class="card-text text-info">{{$shipment->t_city?->name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Receiver Address:</h5>
        <h4 class="card-text text-info">{{$shipment->receiver_address}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Product Name:</h5>
        <h4 class="card-text text-info">{{$shipment->product_name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Product Description:</h5>
        <h4 class="card-text text-info">{{$shipment->product_description}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Product Weight:</h5>
        <h4 class="card-text text-info">{{$shipment->product_weight}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Contact Name:</h5>
        <h4 class="card-text text-info">{{$shipment->contact_name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Contact Number:</h5>
        <h4 class="card-text text-info">{{$shipment->contact_number}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Base Price:</h5>
        <h4 class="card-text text-info">{{$shipment->base_price}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Unit Price:</h5>
        <h4 class="card-text text-info">{{$shipment->unit_price}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Shipping Cost:</h5>
        <h4 class="card-text text-info">{{$shipment->shipping_cost}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Total Cost:</h5>
        <h4 class="card-text text-info">{{$shipment->total_cost}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Status:</h5>
        <h4 class="card-text text-info">{{$shipment->status}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">User Id:</h5>
        <h4 class="card-text text-info">{{$shipment->deliveryman?->name}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">Customer Id:</h5>
        <h4 class="card-text text-info">{{$shipment->customer?->name}}</h4>
      </div>
    </div>
  </div>

</div>
         </div>
        </div>
        <div class="p-2 w-10 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('order.index')}}"><b>View All Shipment</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection