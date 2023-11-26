@extends('backend.layout.app')
@section('title',trans('Company List'))

@section('content')

<div class="table-responsive">
  <div>
    <a class="fs-5 d-flex justify-content-start" href="{{route('company.create')}}"><i class="fa fa-plus"></i></a>
  </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Company Name')}}</th>
    <th scope="col">{{__('Contact Number')}}</th>
    <th scope="col">{{__('Contact Email')}}</th>
    <th scope="col">{{__('Company Address')}}</th>
    <th scope="col">{{__('Company City')}}</th>
    <th scope="col">{{__('Company Division')}}</th>
    <th scope="col">{{__('Company Code')}}</th>
    <th scope="col">{{__('Company Country')}}</th>
    <th scope="col">{{__('Logo Image')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->company_name}}</td>
        <td>{{$p->contact_number}}</td>
        <td>{{$p->company_email}}</td>
        <td>{{$p->company_address}}</td>
        <td>{{$p->company_city}}</td>
        <td>{{$p->company_state}}</td>
        <td>{{$p->company_pin}}</td>
        <td>{{$p->company_country}}</td>
        <td><img width="50px" src="{{asset('public/uploads/company/'.$p->logo_image)}}" alt=""></td>

        <td class="white-space-nowrap">
        <a href="{{route('company.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('company.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('company.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Company Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection