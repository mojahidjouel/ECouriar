@extends('backend.layout.app')

@section('title',trans('Show Asset'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">Name:</h6>
            <h4 class="card-title text-info">{{$asset->name}}</h6>

            <h6 class="text-danger">Registration Number: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$asset->registration_number}}</h6>

            <h6 class="text-danger">Driver Id: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$asset->driver_id}}</h6>

            <h6 class="text-danger">Registration Card: </h6>
            <h4 class="card-subtitle mb-2 text-info">
            <img src="{{asset('public/uploads/asset/'.$asset->registration_card)}}" width="100" alt="">
           

            <h6 class="text-danger">GML: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$asset->gml}}</h6>

            <h6 class="text-danger">CML: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$asset->cml}}</h6>

            <h6 class="text-danger">HML: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$asset->hml}}</h6>

            <!-- <h6 class="text-danger">Logo: </h6>
            <img src="{{asset('public/uploads/company/'.$asset->logo)}}" width="100" alt=""> -->
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('asset.index')}}"><b>View All Asset</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection