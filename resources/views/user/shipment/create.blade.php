@extends('user.layout.app')

@section('title',trans('Create Shipment'))

@section('content')

<div class="row">
<form class="row g-6 needs-validation" method="post" enctype="multipart/form-data" action="{{route('order.store')}}" novalidate>
  @csrf
<div class="row">
  <div class="col-md-6 col-12 position-relative">
    <label for="from_city" class="form-label mb-1">From City</label>
    <select class="form-control" onchange="check_price()" name="from_city" id="from_city">
      <option value="">Select From City</option>
      @forelse($city as $r)
          <option value="{{$r->id}}" {{ old('from_city')==$r->id?"selected":""}}> {{ $r->name}}</option>
      @empty
          <option value="">No From City</option>
      @endforelse
      </select>
      @if($errors->has('from_city'))
      <span class="text-danger"> {{ $errors->first('from_city') }}</span>
      @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="to_city" class="form-label mb-1">To City</label>
    <select class="form-control" onchange="check_price()" name="to_city" id="to_city">
        <option value="">Select To City</option>
        @forelse($city as $r)
            <option value="{{$r->id}}" {{ old('to_city')==$r->id?"selected":""}}> {{$r->name}}</option>
        @empty
            <option value="">No Role found</option>
        @endforelse
        </select>
        @if($errors->has('to_city'))
        <span class="text-danger"> {{$errors->first('to_city')}}</span>
        @endif
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="sender_address" class="form-label mb-1">Sender Address</label>
    <input type="text" class="form-control" id="sender_address" value="{{old('sender_address')}}" name="sender_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="receiver_address" class="form-label mb-1">Receiver Address</label>
    <input type="text" class="form-control" id="receiver_address" value="{{old('receiver_address')}}" name="receiver_address">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_name" class="form-label mb-1">Contact Name</label>
    <input type="text" class="form-control" id="contact_name" value="{{old('contact_name')}}" name="contact_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="contact_number" class="form-label mb-1">Contact Number</label>
    <input type="text" class="form-control" id="contact_number" value="{{old('contact_number')}}" name="contact_number">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_name" class="form-label mb-1">Product Name</label>
    <input type="text" class="form-control" id="product_name" value="{{old('product_name')}}" name="product_name">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_description" class="form-label mb-1">Product Description</label>
    <input type="text" class="form-control" id="product_description" value="{{old('product_description')}}" name="product_description">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="product_weight" class="form-label mb-1">Product Weight</label>
    <input type="text" class="form-control" onkeyup="check_price()" id="product_weight" value="{{old('product_weight')}}" name="product_weight">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="base_price" class="form-label mb-1">Base Price</label>
    <input type="text" readonly class="form-control" id="base_price" value="{{old('base_price')}}" name="base_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="unit_price" class="form-label mb-1">Unit Price</label>
    <input type="text" readonly class="form-control" id="unit_price" value="{{old('unit_price')}}" name="unit_price">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="shipping_cost" class="form-label mb-1">Cargo Cost</label>
    <input type="text" readonly class="form-control" id="shipping_cost" value="{{old('shipping_cost')}}" name="shipping_cost">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="total_cost" class="form-label mb-1">Total Cost</label>
    <input type="text" readonly class="form-control" id="total_cost" value="{{old('total_cost')}}" name="total_cost">
  </div>

  <div class="col-md-6 col-12 position-relative">
    <label for="status" class="form-label mb-1">Status</label>
    <select id="status" class="form-control" name="status">
    <option value="0" @if(old('status')==0) selected @endif>Pending</option>
    <option value="1" @if(old('status')==1) selected @endif>Picked Up</option>
    <option value="2" @if(old('status')==2) selected @endif>Delivered</option>
  </select>
    @if($errors->has('status'))
        <span class="text-danger"> {{ $errors->first('status') }}</span>
    @endif
  </div>

</div>

<div class="row">
  <div class="col-12 d-flex justify-content-start">
      <button type="submit" class="btn btn-info ms-1 mt-1">Save</button>
  </div>
  </div>
</form>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  function check_price(){
    var from_city=$('#from_city').val();
    var to_city=$('#to_city').val();
    var product_weight=$('#product_weight').val();
    $.ajax({
        autoFocus:true,
        url: "{{route('order_price')}}",
        method: 'GET',
        dataType: 'json',
        data: {from_city: from_city,to_city:to_city,product_weight:product_weight},
        success: function(res){
            $('#shipping_cost').val(res.shipping_cost);
            $('#unit_price').val(res.unit_price);
            $('#base_price').val(res.base_price);
            $('#total_cost').val(res.total_cost);
        },error: function(e){console.log("error "+e);}
    });

  }
</script>

@endpush