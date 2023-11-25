@extends('backend.layout.app')

@section('title',trans('Show Shipment'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-90 mx-auto text-center">
          <div class="card-body bg-info">
          <h4>From City: </h4>
            <h4 class="card-title">{{$shipment->from_city}}</h4>

            <h4>To City: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->to_city}}</p>

            <h4>Product Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_name}}</p>

            <h4>Product Description: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_description}}</p>

            <h4>Product Weight: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->product_weight}}</p>

            <h4>Receiver Address: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->receiver_address}}</p>

            <h4>Sender Address: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->sender_address}}</p>

            <h4>Contact Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->contact_name}}</p>

            <h4>Contact Number: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->contact_number}}</p>

            <h4>Base Price: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->base_price}}</p>

            <h4>Receiver Branch Staff Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->receiver_branch_staff_id}}</p>

            <h4>Unit Price: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->unit_price}}</p>

            <h4>Shipping Cost: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->shipping_cost}}</p>

            <h4>Total Cost: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$shipment->total_cost}}</p>
 
         </div>
        </div>
        <div class="p-2 w-15 mx-auto">
          <a class="btn btn-success form-control" href="{{route('shipment.index')}}"><b>View All Couriar Information</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection