@extends('backend.layout.app')

@section('title',trans('Show City'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-success">Name: </h6>
            <h4 class="card-title text-danger">
            {{$city->name}}</h4>

            <h6 class="text-success">Code: </h6>
            <h4 class="card-subtitle mb-2 text-danger">
            {{$city->code}}</h4>           
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-success form-control" href="{{route('city.index')}}"><b>View All City</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection