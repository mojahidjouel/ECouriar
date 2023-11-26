@extends('backend.layout.app')

@section('title',trans('Show City'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body">
            <h4>Name: </h4>
            <p class="card-title">
            {{$city->name}}</p>

            <h4>Code: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$city->code}}</p>           
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('city.index')}}"><b>View All City</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection