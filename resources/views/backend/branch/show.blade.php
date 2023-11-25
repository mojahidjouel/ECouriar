@extends('backend.layout.app')

@section('title',trans('Show Branch'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-90 mx-auto text-center">
          <div class="card-body bg-info">
            <h4>Company Id: </h4>
            <h4 class="card-title">{{$branch->company_id}}</h4>

            <h4>Branch Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_name}}</p>

            <h4>Contact Email: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_email}}</p>

            <h4>Contact Number: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_phone}}</p>

            <h4>Branch Address: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_address}}</p>

            <h4>Branch City: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_city}}</p>

            <h4>Branch Division: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_state}}</p>

            <h4>Branch Code: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_pin}}</p>

            <h4>Branch Country: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$branch->branch_country}}</p>

            <h4>Logo Image: </h4>
            <img src="{{asset('public/uploads/branch/'.$branch->logo_image)}}" width="100" alt="">
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('branch.index')}}"><b>View All Branch</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection