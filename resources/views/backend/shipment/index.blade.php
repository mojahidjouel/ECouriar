@extends('backend.layout.app')
@section('title',trans('Shipment List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('shipment.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('From City')}}</th>
    <th scope="col">{{__('Sender Address')}}</th>
    <th scope="col">{{__('To City')}}</th>
    <th scope="col">{{__('Receiver Address')}}</th>
    <th scope="col">{{__('Contact Name')}}</th>
    <th scope="col">{{__('Contact Number')}}</th>
    <th scope="col">{{__('Product Name')}}</th>
    <th scope="col">{{__('Product Description')}}</th>
    <th scope="col">{{__('Product Weight')}}</th>
    <th scope="col">{{__('Base Price')}}</th>
    <th scope="col">{{__('Unit Price')}}</th>
    <th scope="col">{{__('Cargo Cost')}}</th>
    <th scope="col">{{__('Total Cost')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->from_city}}</td>
        <td>{{$p->sender_address}}</td>
        <td>{{$p->to_city}}</td>
        <td>{{$p->receiver_address}}</td>
        <td>{{$p->contact_name}}</td>
        <td>{{$p->contact_number}}</td>
        <td>{{$p->product_name}}</td>
        <td>{{$p->product_description}}</td>
        <td>{{$p->product_weight}}</td>      
        <td>{{$p->base_price}}</td>
        <td>{{$p->unit_price}}</td>
        <td>{{$p->shipping_cost}}</td>
        <td>{{$p->total_cost}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('shipment.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('shipment.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('shipment.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Asset Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection