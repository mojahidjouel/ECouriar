@extends('backend.layout.app')
@section('title',trans('Price List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('price.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('From City')}}</th>
    <th scope="col">{{__('To City')}}</th>
    <th scope="col">{{__('Base Price')}}</th>
    <th scope="col">{{__('Unit Size')}}</th>
    <th scope="col">{{__('Unit Price')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->f_city?->name}}</td>
        <td>{{$p->t_city?->name}}</td>
        <td>{{$p->base_price}}</td>
        <td>{{$p->unit_size}}</td>
        <td>{{$p->unit_price}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('price.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="{{route('price.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('price.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Price Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection