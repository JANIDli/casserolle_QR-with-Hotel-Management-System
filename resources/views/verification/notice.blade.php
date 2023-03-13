@extends('layouts.app-master')


@section('content')

    
        <h1 style="color:white;" >Please verify your email address</h1>
        
        @if (session('resent'))
            <div  class="alert alert-success" style="color:#007C00;" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif
       <p style="color:#F9B301;font-family: 'Roboto', sans-serif;"
> Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
            @csrf
          <button type="submit" class="btn btn-outline-success" style="font-family: 'Roboto', sans-serif;"> Click here to request another</button>


        </form>
                       


    
    <style>
       .j{
       background-size: cover;
       background-size: contain;
       background-color: black;     
       height: auto;
       }

        
    </style>
@endsection
