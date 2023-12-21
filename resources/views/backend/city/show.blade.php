@extends('backend.layout.app')

@section('title',trans('Show City'))

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">Name:</h5>
            <h4 class="card-text text-info">{{$city->name}}</h4>      
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-1">
        <div class="card text-center ">
          <div class="card-body ">
            <h5 class="card-title text-danger">Code:</h5>
            <h4 class="card-text text-info">{{$city->code}}</h4>      
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="p-2 w-25 mx-auto">
        <a class="btn btn-success form-control" href="{{route('city.index')}}"><b>View All City</b></a>
      </div>
    
@endsection