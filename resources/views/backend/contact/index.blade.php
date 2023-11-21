@extends('backend.layout.app')
@section('title',trans('Contact List'))

@section('content')

<div class="table-responsive table-hover"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('contact.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Contract_Number')}}</th>
    <th scope="col">{{__('Customer_Id')}}</th>
    <th scope="col">{{__('Product_Id')}}</th>
    <th scope="col">{{__('Charge_Type')}}</th>
    <th scope="col">{{__('Amount')}}</th>
    <th scope="col">{{__('Start_Date')}}</th>
    <th scope="col">{{__('Finish_Date')}}</th>
    <th scope="col">{{__('Collect_Form')}}</th>
    <th scope="col">{{__('Delivered_To')}}</th>
    <th scope="col">{{__('Total_Weight')}}</th>
    <th scope="col">{{__('Total_Distance')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->contract_number}}</td>
        <td>{{$p->customer_id}}</td>
        <td>{{$p->product_id}}</td>
        <td>{{$p->charge_type}}</td>
        <td>{{$p->amount}}</td>
        <td>{{$p->start_date}}</td>
        <td>{{$p->finish_date}}</td>
        <td>{{$p->collect_form}}</td>
        <td>{{$p->delivered_to}}</td>
        <td>{{$p->total_weight}}</td>
        <td>{{$p->total_distance}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('contact.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('contact.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Contact Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection