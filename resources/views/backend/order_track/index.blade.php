@extends('backend.layout.app')
@section('title',trans('Order Track List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('order_track.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('User Id')}}</th>
    <th scope="col">{{__('Shipment Id')}}</th>
    <th scope="col">{{__('Comment')}}</th>
    <th scope="col">{{__('Status')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->user_id}}</td>
        <td>{{$p->shipment_id}}</td>
        <td>{{$p->comment}}</td>
        <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>

        <td class="white-space-nowrap">
        <a href="{{route('order_track.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('order_track.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Visitor Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection