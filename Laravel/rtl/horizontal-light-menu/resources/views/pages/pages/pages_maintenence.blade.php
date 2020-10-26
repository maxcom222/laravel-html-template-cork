@extends('layouts.app')

@section('content')
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <img alt="logo" src="{{asset('storage/img/90x90.jpg')}}">
            </div>
            <h1 class="error-title">Under Maintenance</h1>
            <p class="error-text">Thank you for visiting us.</p>
            <p class="text">We are currently working on making some improvements <br/> to give you better user experience.</p>
            <p class="text">Please visit us again shortly.</p>
            <a href="/sales" class="btn btn-info mt-4">Home</a>
        </div>
    </div>
    
@endsection