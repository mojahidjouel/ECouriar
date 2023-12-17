@extends('backend.layout.app')

@section('title',trans('Show Visitor'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

    <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body bg-white">
            <h6 class="text-danger">Name: </h6>
            <h4 class="card-title text-info">{{$message->name}}</h4>
          
            <h6 class="text-danger">Email:</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$message->email}}</h4>

            <h6 class="text-danger">Mobile Number :</h6>
            <h4 class="card-subtitle mb-2 text-info">{{$message->contact}}</h4>

            <h6 class="text-danger">Message: </h6>
            <h4 class="card-subtitle mb-2 text-info">{{$message->comment}}</h4>
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('message.index')}}"><b>View All Visitor</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection