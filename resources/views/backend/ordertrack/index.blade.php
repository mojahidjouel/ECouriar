@extends('backend.layout.app')
@section('title',trans('Order Track List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('ordertrack.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr class="text-danger">
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Delivery Man')}}</th>
    <th scope="col">{{__('Tracking Number')}}</th>
    <th scope="col">{{__('Comment')}}</th>
    <th scope="col">{{__('Status')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->shipment?->deliveryman?->name}}</td>
        <td>{{$p->shipment?->invoice_no}}</td>
        <td>{{$p->comment}}</td>
        <td>@if($p->status == 0) {{__('Pending') }} @elseif($p->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</td>

        <td class="white-space-nowrap">
        <a href="{{route('ordertrack.edit',encryptor('encrypt',$p->id))}}"><i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('ordertrack.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('ordertrack.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Order Track Found</th>
    </tr>
    @endforelse
  </tbody>
</table>
{{$data->links('pagination::bootstrap-5')}}

@endsection