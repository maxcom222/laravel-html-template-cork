@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="/sales" class="ml-md-5">
                    <img alt="image-500" src="{{asset('storage/img/90x90.jpg')}}" class="theme-logo">
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">500</h1>
            <p class="mini-text">Ooops!</p>
            <p class="error-text">Internal Server Error!</p>
            <a href="/sales" class="btn btn-secondary mt-5">Go Back</a>
        </div>
    </div>

@endsection