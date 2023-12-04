@extends('backend.layout.app')

@section('title',trans('Show Price'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">From City: </h6>
            <h4 class="card-title text-info">{{$price->from_city}}</h4>
          
            <h6 class="text-danger">To City: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$price->to_city}}</h4>

            <h6 class="text-danger">Base Price: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$price->base_price}}</h4>

            <h6 class="text-danger">Unit Size: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$price->unit_size}}</h4>

            <h6 class="text-danger">Unit Price: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$price->unit_price}}</h4>

         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('price.index')}}"><b>View All Price</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection