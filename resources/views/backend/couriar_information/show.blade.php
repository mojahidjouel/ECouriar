@extends('backend.layout.app')

@section('title',trans('Show Couriar Information'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="cc p-5">
        <div class="card w-75 mx-auto text-center">
          <div class="card-body">
            <h4>Contact Person: </h4>
            <p class="card-title mb-2 text-muted">
            {{$couriar_information->sender_branch_id}}</p>

            <h4>Sender Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->sender_name}}</p>

            <h4>Sender Email: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->sender_email}}</p>

            <h4>Sender Phone: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->sender_phone}}</p>

            <h4>Sender Address: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->sender_address}}</p>

            <h4>Sender Branch Staff Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->sender_branch_staff_id}}</p>

            <h4>Receiver Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->receiver_name}}</p>

            <h4>Receive Email: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->receiver_email}}</p>

            <h4>Receiver Phone: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->receiver_phone}}</p>

            <h4>Receiver Address: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->receiver_address}}</p>

            <h4>Receiver Branch Staff Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->receiver_branch_staff_id}}</p>

            <h4>Payment Receiver Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_receiver_id}}</p>

            <h4>Payment Branch Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_branch_id}}</p>

            <h4>Payment Status: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_status}}</p>

            <h4>Payment Method Name: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_method_name}}</p>

            <h4>Payment Transaction Id: </h4>
            <p class="card-subtitle mb-2 text-muted">
            <img src="{{asset('/uploads/couriar_information/'.$couriar_information->payment_transaction_id)}}" width="100" alt="">

            <h4>Payment Date: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_date}}</p>

            <h4>Payment Balance: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_balance}}</p>

            <h4>Payment Transaction Image: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_transaction_image}}</p>

            <h4>Payment Note: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->payment_note}}</p>

            <h4>Code: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->code}}</p>

            <h4>Invoice Id: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->	invoice_id}}</p>

            <h4>Status: </h4>
            <p class="card-subtitle mb-2 text-muted">{{$couriar_information->status}}</p>

            <!-- <h4>Logo: </h4>
            <img src="{{asset('/uploads/company/'.$couriar_information->logo)}}" width="100" alt=""> -->
 
         </div>
        </div>
        <div class="p-2 w-25 mx-auto">
          <a class="btn btn-primary form-control" href="{{route('couriar_information.index')}}"><b>View All Couriar Information</b></a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection