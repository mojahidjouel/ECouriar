@extends('backend.layout.app')
@section('title',trans('City List'))

@section('content')

<div class="table-responsive">
  <div><a class="fs-5 d-flex justify-content-start" href="{{route('city.create')}}"><i class="fa fa-plus"></i></a>

<table class="table table-hover table-striped">
  <thead>
    <tr class="text-danger">
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Name')}}</th>
    <th scope="col">{{__('Code')}}</th>
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->name}}</td>
        <td>{{$p->code}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('city.edit',encryptor('encrypt',$p->id))}}"><i class="fa fa-edit btn btn-info btn-sm"></i></a>
        <a href="{{route('city.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('city.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No city Found</th>
    </tr>
    @endforelse
  </tbody>
  <!-- {{$data->links()}} -->
</table>


</div>
</div>

@endsection