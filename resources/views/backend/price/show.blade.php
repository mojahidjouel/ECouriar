@extends('backend.layout.app')

@section('title',trans('Show Price'))

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">From City:</h5>
            <h4 class="card-text text-info">{{$price->f_city?->name}}</h4>      
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">To City:</h5>
            <h4 class="card-text text-info">{{$price->t_city?->name}}</h4>      
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">Base Price:</h5>
            <h4 class="card-text text-info">{{$price->base_price}}</h4>      
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">Unit Size:</h5>
            <h4 class="card-text text-info">{{$price->unit_size}}</h4>      
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">Unit Price:</h5>
            <h4 class="card-text text-info">{{$price->unit_price}}</h4>      
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('price.index')}}"><b>View All Price</b></a>
        </div>
    </div>
</div>
@endsection