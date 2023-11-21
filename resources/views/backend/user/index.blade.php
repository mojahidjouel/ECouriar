@extends('backend.layout.app')
@section('title',trans('Users List'))

@section('content')

<div class="table-responsive table table-hover"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('user.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Name')}}</th>
    <th scope="col">{{__('Email')}}</th>
    <th scope="col">{{__('Contact')}}</th>
    <th scope="col">{{__('Role')}}</th>
    <th scope="col">{{__('Image')}}</th>
    <th scope="col">{{__('Status')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->name_en}}</td>
        <td>{{$p->email}}</td>
        <td>{{$p->contact_no_en}}</td>
        <td>{{$p->role?->type}}</td>
        <td><img width="50px" src="{{asset('public/uploads/users/'.$p->image)}}" alt=""></td>
        <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
        <td class="white-space-nowrap">
        <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('user.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Pruduct Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection