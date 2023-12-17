@extends('backend.layout.app')
@section('title',trans('Visitor List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('message.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Name')}}</th>
    <th scope="col">{{__('Email')}}</th>
    <th scope="col">{{__('Mobile Number')}}</th>
    <th scope="col">{{__('Message')}}</th>

    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->name}}</td>
        <td>{{$p->email}}</td>
        <td>{{$p->contact}}</td>
        <td>{{$p->comment}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('message.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('message.destroy',encryptor('encrypt',$p->id))}}" method="post">
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