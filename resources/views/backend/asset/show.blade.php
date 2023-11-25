@extends('backend.layout.app')

@section('title',trans('Show Asset'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-info">
            <h1 class="card-title">{{$asset->name}}</h1>

            <h4>Registration Number: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->registration_number}}</p>

            <h4>Driver Id: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->driver_id}}</p>

            <h4>Registration Card: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->registration_card}}</p>

            <h4>GML: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->gml}}</p>

            <h4>CML: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->cml}}</p>

            <h4>HML: </h4>
            <p class="card-subtitle mb-2 text-muted">
            {{$asset->hml}}</p>

            <!-- <h4>Logo: </h4>
            <img src="{{asset('/uploads/company/'.$asset->logo)}}" width="100" alt=""> -->
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('asset.index')}}"><b>View All Asset</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection