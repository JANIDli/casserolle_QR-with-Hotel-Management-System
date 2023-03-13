@extends('layouts.auth-master')

@section('content')
    <form  class="form-signup" method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/loo.png') !!}" alt="" width="200" height="100">
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group >
            <div class="row">
                <div col-md-6>
            <label for="floatingName">Email or Username</label>

            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
                </div>
        </div>
        </div>
        
        <div class="form-group >
            <div class="row">
                <div col-md-6>
             <label for="floatingPassword">Password</label>

            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
                </div>
        </div>
        </div>

        <input type="submit" class="btn btn-success btn-blo" name="" value="Login">
        
        @include('auth.partials.copy')
    </form>
@endsection