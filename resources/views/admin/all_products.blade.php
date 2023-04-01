@extends('layouts.admin')

@section('styles')

@endsection

@section('content')

<div class="mt-4">
    <div class="container">
        <div class="row">
            @foreach ($foods as $food)
                <x-food :dish="$food" />
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection