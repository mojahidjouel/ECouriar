@extends('backend.layouts.appAuth')
@section('title','Sign Up')
@section('content')


<div class="container-fluid position-relative d-flex p-0">

    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ECouriar</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>
                    <form action="{{route('register.store')}}" method="post">
                        @csrf
                    
                    <label for="FullName">Full Name:</label>
                    <div class="form-floating mb-2"> 
                        <input type="text" class="form-control" id="FullName" name="FullName" value="{{old('FullName')}}" required="">
                        @if($errors->has('FullName'))
							<small class="d-block text-danger">
							{{$errors->first('FullName')}}
							</small>
						@endif
                    </div>
                    <label for="EmailAddress">Email Address:</label>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}">
                        @if($errors->has('EmailAddress'))
                        <small class="d-block text-danger">
                        {{$errors->first('EmailAddress')}}
                        </small>
                        @endif
                    </div>
                   <label for="contact_no_en">Contact Number:</label>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en" value="{{old('contact_no_en')}}">
                        @if($errors->has('contact_no_en'))
                        <small class="d-block text-danger">
                            {{$errors->first('contact_no_en')}}
                        </small>
						@endif
                    </div>
                    <label for="password">Password:</label>
                    <div class="form-floating mb-2">                   
                        <input type="password" class="form-control" required="" id="password" name="password">
                        @if($errors->has('password'))
                        <small class="d-block text-danger">
                            {{$errors->first('password')}}
                        </small>
						@endif
                    </div>
                    <label for="password_confirmation"> Confirm Password:</label>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" required="" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Registration</button>
                    <p class="text-center mb-0">Do you have a account? <a href="{{route('login')}}">Sign In</a></p>
                </div>
            </form>
            </div>
       
        </div>
    </div>
    <!-- Sign Up End -->
</div>
@endsection