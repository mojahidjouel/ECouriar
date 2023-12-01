@extends('backend.layout.app')

@section('title',trans('Show Branch'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-90 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">Company Id: </h6>
            <h4 class="card-title text-info">{{$branch->company_id}}</h4>

            <h6 class="text-danger">Branch Name: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_name}}</h4>

            <h6 class="text-danger">Contact Email: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_email}}</h4>

            <h6 class="text-danger">Contact Number: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_phone}}</h4>

            <h6 class="text-danger">Branch Address: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_address}}</h4>

            <h6 class="text-danger">Branch City: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_city}}</h4>

            <h6 class="text-danger">Branch Division: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_state}}</h4>

            <h6 class="text-danger">Branch Code: </h4>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_pin}}</h4>

            <h6 class="text-danger">Branch Country: </h4>
            <h4 class="card-subtitle mb-2 text-info">{{$branch->branch_country}}</h4>

            <h6 class="text-danger">Logo Image: </h4>
            <img src="{{asset('public/uploads/branch/'.$branch->logo_image)}}" width="100" alt="">
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('branch.index')}}"><b>View All Branch</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection