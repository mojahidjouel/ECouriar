@extends('backend.layout.app')

@section('title',trans('Show Company'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">Company Name</h6>
            <h4 class="card-title text-info">{{$company->company_name}}</h6>

            <h6 class="text-danger">contact Number:</h6>
            <h4 class="card-title text-info">{{$company->contact_number}}</h6>

            <h6 class="text-danger">Contact Person:</h6>
            <h4 class="card-title text-info">{{$company->company_email}}</h6>

            <h6 class="text-danger">Company Address:</h6>           
            <h4 class="card-title text-info">{{$company->company_address}}</h6>

            <h6 class="text-danger">Company City:</h6>           
            <h4 class="card-title text-info">{{$company->company_city}}</h6>

            <h6 class="text-danger">Company Division:</h6>           
            <h4 class="card-title text-info">{{$company->company_state}}</h6>

            <h6 class="text-danger">Company Code: </h6>           
            <h4 class="card-title text-info">{{$company->company_pin}}</h6>

            <h6 class="text-danger">Company Country:</h6>           
            <h4 class="card-title text-info">{{$company->company_country}}</h6>

            <h6 class="text-danger">Logo Image: </h6>
            <img src="{{asset('public/uploads/company/'.$company->logo_image)}}" width="100" alt="">
         </div>
        </div>
        <div class="p-2 w-20 mx-auto">
          <a class="btn btn-danger form-control" href="{{route('company.index')}}"><b>View All Company</b></a>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
