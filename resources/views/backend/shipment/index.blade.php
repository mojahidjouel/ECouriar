@extends('backend.layout.app')
@section('title',trans('Shipment List'))

@section('content')

<div class="table-responsive"><div>
  <a class="" href="{{route('shipment.create')}}"></a>
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
        <td>{{$p->unit_size}}</td>      
        <td>{{$p->shipping_cost}}</td>
        <td>{{$p->total_cost}}</td>
       
 <!-- @php print_r($errors->all()) @endphp  -->


        <td class="white-space-nowrap">
        <a href="{{route('shipment.edit',encryptor('encrypt',$p->id))}}"><i class="fa fa-edit btn btn-info btn-sm"></i></a>
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
        <th colspan="8" class="text-center">No Shipment Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection