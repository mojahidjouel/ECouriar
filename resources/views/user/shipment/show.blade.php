@extends('user.layout.app')

@section('title',trans('Show Shipment'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-8">
        <div class="card w-85 mx-auto text-center">
          <div class="card-body bg-gray-dark">
            <h4>From City:</h4>
            <h5 class="card-title text-whit ">{{$shipment->f_city?->name}}</h5>

            <h4>To City:</h4>
            <p class="card-subtitle mb-2 text-black" >{{$shipment->t_city?->name}}</p>

            <h4>Product Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_name}}</p>

            <h4>Product Description:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_description}}</p>

            <h4>Product Weight:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_weight}}</p>

            <h4>Receiver Address:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->receiver_address}}</p>

            <h4>Sender Address:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->sender_address}}</p>

            <h4>Contact Name:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->contact_name}}</p>

            <h4>Contact Number:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->contact_number}}</p>

            <h4>Base Price:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->base_price}}</p>

            <h4>Unit Price: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->unit_price}}</p>

            <h4>Shipping Cost:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->shipping_cost}}</p>

            <h4>Total Cost:</h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->total_cost}}</p>
 
         </div>
        </div>
        <div class="p-2 w-20 mx-auto">
          <a class="btn btn-success form-control" href="{{route('shipment.index')}}"><b>View All Shipment</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection