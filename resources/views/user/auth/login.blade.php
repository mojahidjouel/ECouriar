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
                        <h3>Sign Up</h3>
                    </div>
                    <form action="{{route('user.login.check')}}" method="post">
                        @csrf
                   
                   
                    <div class="form-group">
                        <label for="username">Contact Number/ Email:</label>
                        <input type="text" class="form-control" required="" id="username" name="username" value="{{old('username')}}">
                        @if($errors->has('username'))
                        <small class="d-block text-danger">
                            {{$errors->first('username')}}
                        </small>
						@endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" required="" id="password" name="password">
                        @if($errors->has('password'))
                        <small class="d-block text-danger">
                            {{$errors->first('password')}}
                        </small>
						@endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                    <p class="text-center mb-0">Don't you have a account? <a href="{{route('user.register')}}">Sign In</a></p>
                </div>
            </form>
            </div>
       
        </div>
    </div>
    <!-- Sign Up End -->
</div>
@endsection