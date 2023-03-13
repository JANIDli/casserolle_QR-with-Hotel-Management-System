@extends('layouts.app-master')

@section('content')
 
    
        @auth
        <h1 style="font-family: impact;font-size: 80px; color:white;">C A S S E R O L L</h1>
        <p class="lead" style="color:white;font-family: monospace;">Proceed to order food</p>
        <a href="{{ route('dashboard.index') }}" class="btn btn-lg btn-warning me-2">Lest Go</a>
       
        @endauth

        @guest
        <h1 style="color:white; font-size:80px; font-family: 'Berkshire Swash', cursive;">We Make Delicious Food</h1>
        <p class="lead" style="color: #F7B80C;font-size:35px; font-family: 'Nerko One', cursive;
">Log in or register frist to order food</p>
        @endguest
    
@endsection
