{{-- resources/views/errors/404.blade.php --}}
@extends('master') {{-- Extend your main layout file --}}
@section('title', 'Page Not Found')

@section('content')
    <div class="container text-center mt-18">
        {{-- <h1 class="display-1 text-danger">404</h1>
        <h2 class="display-4">Oops! Page Not Found</h2>
        <p class="lead">The page you are looking for does not exist. It might have been moved or deleted.</p> --}}
        <img src="{{ asset('/img/error/Page-not-found-404.webp') }}" alt="Career Banner" class="img-fluid"
            style="height:800px; width:800px;">
        <a href="{{ url('/') }}" class="btn btn-danger mt-4"><i class="fas fa-home"></i> Go to Homepage</a>
    </div>
@endsection

@section('styles')
    <style>
        r .container {
            margin-top: 10%;
        }

        h1 {
            font-size: 10rem;
        }

        h2 {
            font-size: 3rem;
        }

        p {
            font-size: 1.5rem;
            color: #666;
        }
    </style>
@endsection
