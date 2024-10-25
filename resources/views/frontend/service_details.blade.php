@extends('frontend.app')

@section('title', $service->name)

@section('content')
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ $service->service_banner ? asset('media/service/service_banner/' . $service->service_banner) : asset('img/demo/service.gif') }}"
                alt="Service Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>{{ $service->name }}</h1>
                    <p>Innovative Solutions for a Digital World</p>
                </div>
            </div>
        </div>
    </div>

    <section class="service-details-section" style="padding-top: 3rem; padding-bottom: 7rem;">
        <div class="container">
            <div class="row">
                <!-- Long Description Column -->
                <div class="col-lg-8">
                    <div class="service-details">
                        <h2 class="font-weight-700 mb-4" style="color: red;">{{ $service->name }}</h2>
                        <div class="service-description">
                            {!! $service->long_description !!} <!-- Render HTML safely -->
                        </div>
                    </div>
                </div>

                <!-- Services List Column -->
                <div class="col-lg-4">
                    <div class="services-list">
                        <h3 class="font-weight-700 mb-3">Other Services</h3>
                        <ul class="list-group">
                            @foreach ($allServices as $s)
                                <li class="list-group-item">
                                    <a href="{{ route('frontend.services.details', $s->slug) }}">{{ $s->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .service-details {

        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .service-description p {
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .services-list ul {
        list-style-type: none;
        padding-left: 0;
    }

    .services-list ul li a {
        text-decoration: none;
        color: #000;
        transition: color 0.3s;
    }

    /* .services-list ul li a:hover {
        color: red;
    } */

    .services-list {
        background-color: ##f4f4f4 !important;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .list-group-item li {
        margin-bottom: 10px;
    }

    .list-group-item a {
        text-decoration: none;
        font-size: 1.1rem;
        color: #333;
        padding: 2px;
        display: block;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .list-group-item a.active,
    .list-group-item a:hover {
        background-color: #dc354533;
        color: var(--gray-dark);
        border-radius: 5px;
    }
</style>
