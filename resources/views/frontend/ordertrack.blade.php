@extends('frontend.layout.app')
@section('title',trans('Order Track'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-8">
        <div class="card w-85 mx-auto text-center">
        <div class="card-body bg-white">
          
            <h6 class="text-danger">From City:</h6>
            <h4 class="card-title text-info"></h6>
          <?php print_r($data); ?>
            
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