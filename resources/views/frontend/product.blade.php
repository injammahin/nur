@extends('frontend.app')
@section('title', 'Product')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section ">
        <div class="banner-wrapper">
            <!-- Logo Container -->
            <div id="logo-container" class="logo-container">
                <img src="{{ asset('media/products/product_logos/' . $product->logo) }}" alt="Product Logo" id="product-logo"
                    class="img-fluid" />
            </div>

            <!-- Product Image -->
            <img src="{{ asset('media/products/product_images/' . $product->image) }}" alt="Product Image" id="product-image"
                class="img-fluid" />

            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>{{ $product->name }}</h1>
                    <p>{!! $product->description !!}</p> <!-- Render HTML safely -->
                </div>
            </div>
        </div>
    </div>

    <section class="product">
        <!-- Product Section -->
        <section style="padding-top: 3rem; padding-bottom: 3rem;">
            <div class="container">
                <div class="row">
                    <!-- Product Details -->
                    <div class="col-md-8">
                        <div class="product-details">
                            <h3 id="product-title">{{ $product->name }}</h3>
                            <p id="product-description">{!! $product->description !!}</p> <!-- Render HTML safely -->
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <div class="product-sidebar">
                            <h2 class="sidebar-title">Our Products</h2>
                            <ul class="product-list">
                                @foreach ($products as $sidebarProduct)
                                    <li>
                                        <a href="{{ route('frontend.product.details', $sidebarProduct->slug) }}"
                                            data-id="{{ $sidebarProduct->id }}" data-slug="{{ $sidebarProduct->slug }}"
                                            data-url="{{ route('frontend.product.details', $sidebarProduct->slug) }}"
                                            data-title="{{ $sidebarProduct->name }}"
                                            data-description="{{ $sidebarProduct->description }}"
                                            data-image="{{ asset('media/products/product_images/' . $sidebarProduct->image) }}"
                                            data-logo="{{ asset('media/products/product_logos/' . $sidebarProduct->logo) }}"
                                            class="{{ $sidebarProduct->id == $product->id ? 'active' : '' }}">
                                            {{ $sidebarProduct->name }}
                                        </a>
                                    </li>
                                @endforeach


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tabbed Content Section -->
        <section style="padding-top: 3rem; padding-bottom: 3rem;">
            <section class="md">
                <div class="container">
                    <div class="section-heading2">
                        <h2 id="dynamic-product-name">{{ $product->name }}</h2>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="horizontaltab tab-style01">
                        <ul class="resp-tabs-list hor_1">
                            @foreach (['hr_payroll', 'accounting', 'inventory_management', 'fams'] as $category)
                                <li data-target="{{ $category }}"><i class="fas fa-icon"></i><span
                                        class="d-lg-block d-md-inline-block align-top">{{ ucfirst(str_replace('_', ' ', $category)) }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            @foreach (['hr_payroll', 'accounting', 'inventory_management', 'fams'] as $category)
                                <div id="{{ $category }}" style="{{ $loop->first ? '' : 'display:none;' }}">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-start">
                                                <img class="product-img"
                                                    src="{{ asset('media/products/' . $category . '/' . $product->{$category . '_image'}) }}"
                                                    alt="..." class="img-effect">
                                            </div>
                                            <div class="col-lg-5 offset-lg-1">
                                                <h3 class="h4 mb-4">{{ ucfirst(str_replace('_', ' ', $category)) }}</h3>
                                                <p>{!! $product->{$category . '_description'} !!}</p> <!-- Render HTML safely -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- FAQ and Video Section -->
        <section style="padding-top: 3rem; padding-bottom: 3rem;">
            <div class="container">
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-heading">FAQ</h3>
                        <div class="accordion" id="faqAccordion">
                            {{-- @foreach ($product->faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFaq{{ $index }}" aria-expanded="false"
                                            aria-controls="collapseFaq{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapseFaq{{ $index }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section-heading">Video</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="{{ Str::replace('watch?v=', 'embed/', $product->video_url) }}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productLinks = document.querySelectorAll('.product-list li a');
            const productUrl = link.getAttribute('data-url');
            const productTitle = document.getElementById('product-title');
            const productDescription = document.getElementById('product-description');
            const productImage = document.getElementById('product-image');
            const productLogo = document.getElementById('product-logo');

            productLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    productLinks.forEach(link => link.classList.remove('active'));
                    link.classList.add('active');

                    const sidebarProductSlug = link.getAttribute(
                        'data-slug'); // Define sidebarProductSlug here

                    // Fetch product details via AJAX using the slug
                    $.ajax({
                        url: productUrl,
                        method: 'GET',
                        success: function(response) {
                            // Update product details
                            productTitle.textContent = response.name;
                            productDescription.innerHTML = response
                                .description; // Set HTML content
                            productImage.src =
                                `{{ asset('media/products/product_images') }}/${response.image}`;
                            productLogo.src =
                                `{{ asset('media/products/product_logos') }}/${response.logo}`;

                            // Update FAQs
                            const faqAccordion = document.getElementById(
                                'faqAccordion');
                            faqAccordion.innerHTML = ''; // Clear existing FAQs
                            response.faqs.forEach((faq, index) => {
                                const faqItem = `
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading${index}">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFaq${index}"
                                            aria-expanded="false" aria-controls="collapseFaq${index}">
                                        ${faq.question}
                                    </button>
                                </h2>
                                <div id="collapseFaq${index}" class="accordion-collapse collapse"
                                     aria-labelledby="heading${index}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        ${faq.answer}
                                    </div>
                                </div>
                            </div>`;
                                faqAccordion.insertAdjacentHTML('beforeend',
                                    faqItem);
                            });

                            // Update video URL
                            const videoElement = document.querySelector(
                                '.embed-responsive-item');
                            videoElement.src = response.video_url.replace('watch?v=',
                                'embed/');
                        },
                        error: function(error) {
                            console.error('Failed to fetch product details:', error);
                        }
                    });
                });
            });
        });
    </script>
@endsection

<style>
    .logo-container {
        position: absolute;
        bottom: 122px;
        left: 10px;
        width: 150px;
        height: 150px;
        z-index: 10;
    }

    #product-logo {
        width: 100%;
        height: 100%;
        /* object-fit: contain; */
        border-radius: 50%;
        /* If you want a circular logo */
    }

    .banner-wrapper {
        position: relative;
    }

    .product-img {
        /* width: 600px !important; */
        height: 400px !important;
        height: auto;
        vertical-align: top;

    }

    .product-sidebar {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
    }

    .product-sidebar .sidebar-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 3rem;
    }

    .product-sidebar .product-list {
        list-style: none;
        padding: 0;
    }

    .product-sidebar .product-list li {
        margin-bottom: 10px;
    }

    .product-sidebar .product-list li a {
        text-decoration: none;
        font-size: 1.1rem;
        color: #333;
        padding: 2px;
        display: block;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .product-sidebar .product-list li a.active,
    .product-sidebar .product-list li a:hover {
        background-color: #dc354533;
        color: var(--gray-dark);
        border-radius: 5px;
    }

    .product-details {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease-in-out;
    }

    .product-details h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .product-details p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive::before {
        content: "";
        display: block;
        padding-top: 56.25%;
    }

    .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .accordion-button {
        background-color: #6a040f;
        color: #ffffff;
        border: none;
    }

    .accordion-button:hover {
        background-color: #dc354533;
        color: var(--gray-dark);
    }

    .accordion-item {
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {

        .product-sidebar,
        .product-details {
            margin-bottom: 20px;
        }

        .product-sidebar {
            padding: 15px;
        }

        .product-details {
            padding: 20px;
        }
    }

    .resp-tabs-list li.resp-tab-active i {
        background: linear-gradient(-45deg, rgb(119 60 66), #d42c3d) !important;
        color: #fff !important;
    }

    .tab-style01 ul.resp-tabs-list li.resp-tab-active {
        color: var(--bs-gray-dark) !important;
        border-bottom: 3px solid var(--danger) !important;
    }

    .resp-tabs-list li i {
        display: inline-block;
        width: 60px;
        height: 60px;
        line-height: 60px;
        background: rgba(241, 241, 241, 0.15);
        text-align: center;
        font-size: 22px;
        border-radius: 50%;
        margin-bottom: 10px;
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        color: var(--gray-dark) !important;
    }
</style>
