@extends('backend.layout.app')
@section('title',trans('Couriar Information List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('couriar_information.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Sender Branch Id')}}</th>
    <th scope="col">{{__('Tracking Number')}}</th>
    <th scope="col">{{__('Sender Name')}}</th>
    <th scope="col">{{__('Sender Email ')}}</th>
    <th scope="col">{{__('sender_phone')}}</th>
    <th scope="col">{{__('Sender Address')}}</th>
    <th scope="col">{{__('Sender City')}}</th>
    <th scope="col">{{__('Sender Division')}}</th>
    <th scope="col">{{__('Sender Code')}}</th>
    <th scope="col">{{__('Sender Country')}}</th>
    <th scope="col">{{__('Sender Branch Staff Id')}}</th>
    <th scope="col">{{__('Receiver Name')}}</th>
    <th scope="col">{{__('Receiver Email')}}</th>
    <th scope="col">{{__('Receiver Phone')}}</th>
    <th scope="col">{{__('Receiver Address')}}</th>
    <th scope="col">{{__('Receiver City')}}</th>
    <th scope="col">{{__('Receiver Division')}}</th>
    <th scope="col">{{__('Receiver Code')}}</th>
    <th scope="col">{{__('Receiver Country')}}</th>
    <th scope="col">{{__('Receiver Branch Staff Id')}}</th>
    <th scope="col">{{__('Couriar Description')}}</th>
    <th scope="col">{{__('Payment Receiver Id')}}</th>
    <th scope="col">{{__('Payment Branch Id')}}</th>
    <th scope="col">{{__('Sayment Status')}}</th>
    <th scope="col">{{__('Payment Method Name')}}</th>
    <th scope="col">{{__('Payment Transaction Id')}}</th>
    <th scope="col">{{__('Payment Date')}}</th>
    <th scope="col">{{__('Payment Balance')}}</th>
    <th scope="col">{{__('Payment Transaction Image')}}</th>
    <th scope="col">{{__('Payment Note')}}</th>
    <th scope="col">{{__('Code')}}</th>
    <th scope="col">{{__('Invoice Id')}}</th>
    <th scope="col">{{__('Status')}}</th>
    
    <th scope="col">{{__('Weight')}}</th>
    <th scope="col">{{__('Height')}}</th>
    <th scope="col">{{__('Price')}}</th>
    <th scope="col">{{__('From Location')}}</th>
    <th scope="col">{{__('To Location')}}</th>
    <th scope="col">{{__('Package Id')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->sender_branch_id}}</td>
        <td>{{$p->tracking_no}}</td>
        <td>{{$p->sender_name}}</td>
        <td>{{$p->sender_email}}</td>
        <td>{{$p->sender_phone}}</td>
        <td>{{$p->sender_address}}</td>
        <td>{{$p->sender_city}}</td>
        <td>{{$p->sender_state}}</td>
        <td>{{$p->sender_pin}}</td>
        <td>{{$p->sender_country}}</td>
        <td>{{$p->sender_branch_staff_id}}</td>
        <td>{{$p->receiver_name}}</td>
        <td>{{$p->receiver_email}}</td>
        <td>{{$p->receiver_phone}}</td>
        <td>{{$p->receiver_address}}</td>
        <td>{{$p->receiver_city}}</td>
        <td>{{$p->receiver_state}}</td>
        <td>{{$p->receiver_pin}}</td>
        <td>{{$p->receiver_country}}</td>
        <td>{{$p->receiver_branch_staff_id}}</td>
        <td>{{$p->couriar_description}}</td>
        <td>{{$p->payment_receiver_id}}</td>
        <td>{{$p->payment_branch_id}}</td>
        <td>{{$p->payment_status}}</td>
        <td>{{$p->payment_method_name}}</td>
        <td>{{$p->payment_transaction_id}}</td>
        <td>{{$p->payment_date}}</td>
        <td>{{$p->payment_balance}}</td>
        <td><img src="{{asset('/uploads/couriar_information/'.$p->payment_transaction_image)}}" width="100" alt=""></td>
        <td>{{$p->payment_note}}</td>
        <td>{{$p->code}}</td>
        <td>{{$p->invoice_id}}</td>
        <td>{{$p->status}}</td>
        <td>{{$p->weight}}</td>
        <td>{{$p->height}}</td>
        <td>{{$p->price}}</td>
        <td>{{$p->from_location}}</td>
        <td>{{$p->to_location}}</td>
        <td>{{$p->package_id}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('couriar_information.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('couriar_information.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Couriar Information Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection