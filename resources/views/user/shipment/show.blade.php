@extends('user.layout.app')

@section('title',trans('Show Shipment'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-8">
        <div class="card w-85 mx-auto text-center">
        <div class="card-body bg-white">
            <h6 class="text-danger">From City:</h6>
            <h4 class="card-title text-info">{{$shipment->f_city?->name}}</h6>

            <h6 class="text-danger">To City:</h6>
            <h4 class="card-title text-info">{{$shipment->t_city?->name}}</h4>

            <h6 class="text-danger">Product Name: </h6>
            <h4 class="card-title text-info">{{$shipment->product_name}}</h4>

            <h6 class="text-danger">Product Description:</h6>
            <h4 class="card-title text-info">{{$shipment->product_description}}</h4>

            <h6 class="text-danger">Product Weight:</h6>
            <h4 class="card-title text-info">{{$shipment->product_weight}}</h4>

            <h6 class="text-danger">Receiver Address:</h6>
            <h4 class="card-title text-info">{{$shipment->receiver_address}}</h4>

            <h6 class="text-danger">Sender Address:</h6>
            <h4 class="card-title text-info">{{$shipment->sender_address}}</h4>

            <h6 class="text-danger">Contact Name:</h6>
            <h4 class="card-title text-info">{{$shipment->contact_name}}</h4>

            <h6 class="text-danger">Contact Number:</h6>
            <h4 class="card-title text-info">{{$shipment->contact_number}}</h4>

            <h6 class="text-danger">Base Price:</h6>
            <h4 class="card-title text-info">{{$shipment->base_price}}</h4>

            <h6 class="text-danger">Unit Price: </h6>
            <h4 class="card-title text-info">{{$shipment->unit_price}}</h4>

            <h6 class="text-danger">Shipping Cost:</h6>
            <h4 class="card-title text-info">{{$shipment->shipping_cost}}</h4>

            <h6 class="text-danger">Total Cost:</h6>
            <h4 class="card-title text-info">{{$shipment->total_cost}}</h4>
 
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