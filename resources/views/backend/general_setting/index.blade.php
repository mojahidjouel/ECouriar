@extends('backend.layout.app')
@section('title',trans('Couriar Information List'))

@section('content')

<div class="table-responsive"><div>
  <a class="fs-5 d-flex justify-content-start" href="{{route('general_setting.create')}}"><i class="fa fa-plus"></i></a>
</div>
<table class="table">
  <thead>
    <tr class="text-danger">
    <th scope="col">{{__('#SL')}}</th>
    <th scope="col">{{__('Title')}}</th>
    <th scope="col">{{__('Header Title')}}</th>
    <th scope="col">{{__('Header Subtitle')}}</th>
    <th scope="col">{{__('Testimonial Title')}}</th>
    <th scope="col">{{__('Search Courier Title')}}</th>
    <th scope="col">{{__('Search Courier Details')}}</th>
    <th scope="col">{{__('About Keyword')}}</th>
    <th scope="col">{{__('About Title')}}</th>
    <th scope="col">{{__('About Details')}}</th>
    <th scope="col">{{__('Gallery Title')}}</th>
    <th scope="col">{{__('Gallery Details')}}</th>
    <th scope="col">{{__('Service Sitle')}}</th>
    <th scope="col">{{__('Service_Details')}}</th>
    <th scope="col">{{__('Footer Text')}}</th>
    <th scope="col">{{__('Contact Title')}}</th>
    <th scope="col">{{__('Contact Address')}}</th>
    <th scope="col">{{__('Contact Phone')}}</th>
    <th scope="col">{{__('Contact Email')}}</th>
    <th scope="col">{{__('Address')}}</th>
    <th scope="col">{{__('Color Code')}}</th>
    <th scope="col">{{__('Email Notification')}}</th>
    <th scope="col">{{__('Email Template')}}</th>
    <th scope="col">{{__('Sms Api')}}</th>
    <th scope="col">{{__('Departure Courier')}}</th>
    <th scope="col">{{__('Upcoming Courier')}}</th>
    <th scope="col">{{__('Total Deliver')}}</th>
    <th scope="col">{{__('Sms Notification')}}</th>
    <th scope="col">{{__('Registration Verification')}}</th>
    <th scope="col">{{__('Email Verification')}}</th>
    <th scope="col">{{__('Sms Verification')}}</th>
    <th scope="col">{{__('Base Currency')}}</th>
    <th scope="col">{{__('Base Currency Symbol')}}</th>
    
    <th class="white-space-nowrap">{{__('Action') }}</th>
    </tr>
  </thead>
  <tbody>
  @forelse($data as $p)
  <th scope="row">{{ ++$loop->index }}</th>
        <td>{{$p->title}}</td>
        <td>{{$p->header_title}}</td>
        <td>{{$p->header_subtitle}}</td>
        <td>{{$p->testimonial_title}}</td>
        <td>{{$p->search_courier_title}}</td>
        <td>{{$p->search_courier_details}}</td>
        <td>{{$p->about_keyword}}</td>
        <td>{{$p->about_title}}</td>
        <td>{{$p->about_details}}</td>
        <td>{{$p->gallery_title}}</td>
        <td>{{$p->gallery_details}}</td>
        <td>{{$p->service_sitle}}</td>
        <td>{{$p->service_details}}</td>
        <td>{{$p->footer_text}}</td>
        <td>{{$p->contact_title}}</td>
        <td>{{$p->contact_address}}</td>
        <td>{{$p->contact_phone}}</td>
        <td>{{$p->contact_email}}</td>
        <td>{{$p->address}}</td>
        <td>{{$p->color_code}}</td>
        <td>{{$p->email_notification}}</td>
        <td>{{$p->email_template}}</td>
        <td>{{$p->sms_api}}</td>
        <td>{{$p->departure_courier}}</td>
        <td>{{$p->upcoming_courier}}</td>
        <td>{{$p->total_deliver}}</td>
        <td>{{$p->sms_notification}}</td>
        <td>{{$p->registration_verification}}</td>
        <td>{{$p->email_verification}}</td>
        <td>{{$p->Sms_Verification}}</td>
        <td>{{$p->base_currency}}</td>
        <td>{{$p->base_currency_symbol}}</td>

        <td class="white-space-nowrap">
        <a href="{{route('general_setting.edit',encryptor('encrypt',$p->id))}}"> <i class="fa fa-edit"></i></a>
        
        <a href="{{route('general_setting.show', $p->id)}}"><i class="bi bi-eye btn btn-success btn-sm"></i></a>
        <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()"><i class="fa fa-trash"></i></a>
        <form id="form{{$p->id}}" action="{{route('general_setting.destroy',encryptor('encrypt',$p->id))}}" method="post">
        @csrf
        @method('delete')
        </form>
        </td>
    </tr>
    @empty
    <tr>
        <th colspan="8" class="text-center">No Couriar Information Found</th>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection