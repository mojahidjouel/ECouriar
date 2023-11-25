@extends('backend.layout.app')
@section('title',trans('Branch List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-end" href="{{route('branch.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Company Id')}}</th>
    <th scope="col">{{__('Branch Name')}}</th>
    <th scope="col">{{__('Branch Email')}}</th>
    <th scope="col">{{__('Contact Number')}}</th>
    <th scope="col">{{__('Branch Address')}}</th>
    <th scope="col">{{__('Branch City')}}</th>
    <th scope="col">{{__('Branch Division')}}</th>
    <th scope="col">{{__('Branch Code')}}</th>
    <th scope="col">{{__('Branch Country')}}</th>
    <th scope="col">{{__('Logo Image')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->company_id}}</td>
        <td>{{$p->branch_name}}</td>
        <td>{{$p->branch_email }}</td>
        <td>{{$p->branch_phone}}</td>
        <td>{{$p->branch_address}}</td>
        <td>{{$p->branch_city}}</td>
        <td>{{$p->branch_state}}</td>
        <td>{{$p->branch_pin}}</td>
        <td>{{$p->branch_country}}</td>
        <td><img width="100px" src="{{asset('public/uploads/branch/'.$p->logo_image)}}" alt=""></td>

        <td class="white-space-nowrap">
        <a href="{{route('branch.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        <a href="{{route('branch.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('branch.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Branch Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection