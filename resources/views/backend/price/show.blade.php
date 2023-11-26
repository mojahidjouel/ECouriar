@extends('backend.layout.app')

@section('title',trans('Show Price'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body">
          <h4>To City: </h4>
            <p class="card-title mb-2 text-muted">{{$price->to_city}}</p>

            <h4>From City: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$price->from_city}}</p>

            <h4>Base Price: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$price->base_price}}</p>

            <h4>Unit Size: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$price->unit_size}}</p>

            <h4>Unit Price: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$price->unit_price}}</p>

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