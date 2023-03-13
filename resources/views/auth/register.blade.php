@extends('layouts.auth-master')

@section('content')

    <form class="form-signup" method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img  src="{!! url('images/loo.png') !!}" alt="" width="200" height="100">
        
        <h1 class="h3 mb-3 fw-normal"style="font-family: impact; font-style: blod;">Register</h1>

        <div class="form-group >
            <div class="row">
                <div col-md-6>
            <label for="floatingEmail" style= "font-family: 'Roboto', sans-serif;">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div col-md-6>
            <label for="floatingName"style="font-family: 'Roboto', sans-serif;">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div col-md-6>
            <label for="floatingPassword" style="font-family: 'Roboto', sans-serif;">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
                </div>
            </div>
        </div>

        <div class="form-group ">
            <div class="row">
                <div col-md-6>
            <label for="floatingConfirmPassword" style="font-family: 'Roboto', sans-serif;">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="">
                I accept the <a href="#">Terms of use </a>&<a href=#>"Privacy policy"</a>
            </label>
        </div>

        <input type="submit" class="btn btn-success btn-blo" name="" value="Register">
        
       
    </form>

@endsection