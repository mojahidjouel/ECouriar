@extends('backend.layout.app')
@section('title',trans('Order List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('shipment.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr class="text-danger">
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('From')}}</th>
    <th scope="col">{{__('To')}}</th>
    <th scope="col">{{__('Con Name')}}</th>
    <th scope="col">{{__('Cont Number')}}</th>
    <th scope="col">{{__('Product Name')}}</th>
    <th scope="col">{{__('Weight')}}</th>
    <th scope="col">{{__('Total Cost')}}</th>
    <th scope="col">{{__('Status')}}</th>
    <th scope="col">{{__('Delivery Man')}}</th>
    <th scope="col">{{__('Customer Name')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->f_city?->name}}</td>
        <td>{{$p->t_city?->name}}</td>
        <td>{{$p->contact_name}}</td>
        <td>{{$p->contact_number}}</td>
        <td>{{$p->product_name}}</td>
        <td>{{$p->product_weight}}</td> 
        <td>{{$p->total_cost}}</td>
        <td>@if($p->status == 0) {{__('Pending') }} @elseif($p->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</td>
        <td>{{$p->deliveryman?->name}}</td>
        <td>{{$p->customer?->name}}</td>
        <td class="white-space-nowrap">
        <a href="{{route('shipment.edit',encryptor('encrypt',$p->id))}}"><i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('shipment.show',encryptor('encrypt',$p->id))}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Shipment Found</th>
    </tr>
    @endforelse
  </tbody>
</table>
{{$data->links('pagination::bootstrap-5')}}

@endsection