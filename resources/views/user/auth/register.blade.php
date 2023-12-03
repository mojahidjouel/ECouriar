@extends('user.layout.app')
@section('title','Sign Up')
@section('content')


<div class="container-fluid position-relative d-flex p-0">

    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8">
                <div class=" rounded">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ECouriar</h3>
                        </a>
                        <h3 class="text-primary">Sign Up</h3>
                    </div>
                    <form action="{{route('user.register.store')}}" method="post">
                        @csrf
                    
                    <div class="form-group"> 
                        <label for="FullName">Full Name:</label>
                        <input type="text" class="form-control" id="FullName" name="FullName" value="{{old('FullName')}}" required="">
                        @if($errors->has('FullName'))
							<small class="d-block text-danger">
							{{$errors->first('FullName')}}
							</small>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="EmailAddress">Email Address:</label>
                        <input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}">
                        @if($errors->has('EmailAddress'))
                        <small class="d-block text-danger">
                        {{$errors->first('EmailAddress')}}
                        </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="contact_no">Contact Number:</label>
                        <input type="text" class="form-control" required="" id="contact_no" name="contact_no" value="{{old('contact_no')}}">
                        @if($errors->has('contact_no'))
                        <small class="d-block text-danger">
                            {{$errors->first('contact_no')}}
                        </small>
						@endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" required="" id="password" name="password">
                        @if($errors->has('password'))
                        <small class="d-block text-danger">
                            {{$errors->first('password')}}
                        </small>
						@endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="password_confirmation"> Confirm Password:</label>
                        <input type="password" class="form-control" required="" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Registration</button>
                    <p class="text-center mb-0">Do you have a account? <a href="{{route('user.login')}}" class="text-primary">Sign In</a></p>
                </div>
            </form>
            </div>
       
        </div>
    </div>
    <!-- Sign Up End -->
</div>
@endsection