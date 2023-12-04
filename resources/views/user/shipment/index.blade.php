@extends('user.layout.app')
@section('title',trans('Order List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('order.create')}}"></a>
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
    <th scope="col">{{__('Status')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->f_city?->name}}</td>
        <td>{{$p->sender_address}}</td>
        <td>{{$p->t_city?->name}}</td>
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
        <td>@if($p->status == 0) {{__('Pending') }} @elseif($p->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</td>
       
 <!-- @php print_r($errors->all()) @endphp  -->


        <td class="white-space-nowrap">
        <a class="text-dark btn btn-primary" href="{{route('order.edit',encryptor('encrypt',$p->id))}}"><i class="fa fa-edit"></i>Edit </a>
        <a class="text-dark btn btn-info" href="{{route('order.show', $p->id)}}">View</a>
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

@endsection