@extends('backend.layout.app')
@section('title',trans('Asset List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('asset.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr class="text-danger">
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Name')}}</th>
    <th scope="col">{{__('Registration Number')}}</th>
    <th scope="col">{{__('Driver Id')}}</th>
    <th scope="col">{{__('Registration Card')}}</th>
    <th scope="col">{{__('GML')}}</th>
    <th scope="col">{{__('CML')}}</th>
    <th scope="col">{{__('HML')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->name}}</td>
        <td>{{$p->registration_number}}</td>
        <td>{{$p->driver?->name}}</td>
        <td><img width="50px" src="{{asset('public/uploads/asset/'.$p->registration_card)}}" alt=""></td>
        <td>{{$p->gml}}</td>
        <td>{{$p->cml}}</td>
        <td>{{$p->hml}}</td>
        
        <td class="white-space-nowrap">
        <a href="{{route('asset.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('asset.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('asset.destroy',encryptor('encrypt',$p->id))}}" method="post">
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