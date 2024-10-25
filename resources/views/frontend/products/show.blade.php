@extends('frontend.app')

@section('title', $new_product->name)

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="product-banner-wrapper">
            <!-- Logo Container -->
            <div id="logo-container" class="logo-container">
                @if ($new_product->logo && file_exists(public_path('media/new_product/logos/' . $new_product->logo)))
                    <img src="{{ asset('media/new_product/logos/' . $new_product->logo) }}" alt="Product Logo"
                        id="product-logo" class="img-fluid" />
                @else
                    <img src="{{ asset('media/default-logo.png') }}" alt="Default Logo" id="product-logo"
                        class="img-fluid product-banner" />
                @endif
            </div>

            <!-- Product Image -->
            @if ($new_product->image && file_exists(public_path('media/new_product/images/' . $new_product->image)))
                <img src="{{ asset('media/new_product/images/' . $new_product->image) }}" alt="Product Image"
                    id="product-images" class="img-fluid" />
            @else
                <img src="{{ asset('media/default-image.png') }}" alt="Default Product Image" id="product-image"
                    class="img-fluid" />
            @endif

            <div class="banner-overlay">
                <div class="banner-text">
                    <h3 class="ambala_heading">{{ $new_product->name }}</h3>
                    <p>{!! $new_product->description !!}</p> <!-- Render HTML safely -->
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Section -->
    <section class="container">
        <div class="product  ambala-section">
            <div class=" custom-container">
                <div class="row">
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <div class="product-details">
                            <h3 class="ambala_heading text-center" id="product-title">{{ $new_product->name }}</h3>
                            <p class="ambala_paragraph text-start" id="product-description">{!! $new_product->description !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image-container">
                            @if (
                                $new_product->navmenu_image &&
                                    file_exists(public_path('media/new_product/navmenu_images/' . $new_product->navmenu_image)))
                                <img src="{{ asset('media/new_product/navmenu_images/' . $new_product->navmenu_image) }}"
                                    alt="Navmenu Image" class="img-fluid" style="height: 400px !important;width:auto;" />
                            @else
                                <img src="{{ asset('media/default-navmenu.png') }}" alt="Default Navmenu Image"
                                    class="img-fluid" />
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabbed Content Section -->
            <div style="padding-top: 0rem; padding-bottom: 3rem;">
                <div class="md">
                    <div class="horizontaltab tab-style01">
                        <ul class="resp-tabs-list hor_1">
                            @foreach ($modules as $new_product_module)
                                @if ($new_product_module->module)
                                    <li data-target="module_{{ $new_product_module->id }}">
                                        @if (
                                            $new_product_module->module->logo &&
                                                file_exists(public_path('media/modules/logos/' . $new_product_module->module->logo)))
                                            <img src="{{ asset('media/modules/logos/' . $new_product_module->module->logo) }}"
                                                alt="{{ $new_product_module->module->name }}"
                                                style="width: 50px; height: 50px; border-radius: 50%;">
                                        @else
                                            <img src="{{ asset('media/default-module-logo.png') }}"
                                                alt="Default Module Logo"
                                                style="width: 50px; height: 50px; border-radius: 50%;">
                                        @endif
                                        <span
                                            class="d-lg-block d-md-inline-block align-top">{{ $new_product_module->module->name }}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                        <div class="resp-tabs-container hor_1">
                            @foreach ($modules as $module)
                                <div id="module_{{ $module->id }}" style="{{ $loop->first ? '' : 'display:none;' }}">
                                    <div class="tab-pane fade show active" id="pills-module" role="tabpanel"
                                        aria-labelledby="pills-module-tab">
                                        <div class="container">
                                            <div class="row module-description-container">
                                                <div class="col-lg-5 text-center">
                                                    <!-- Module Image -->
                                                    <img class="product-img"
                                                        src="{{ asset('media/new_product/modules/' . $module->image) }}"
                                                        alt="{{ $module->name }}">
                                                </div>
                                                <div class="col-lg-7 description-text">
                                                    <!-- Module Description -->
                                                    <p>{!! Str::limit($module->description, 300) !!}</p>
                                                    @if (strlen(strip_tags($module->description)) > 300)
                                                        <a href="javascript:void(0);" class="read_more butn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#moduleModal{{ $module->id }}">See
                                                            more</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modals for Modules -->
            @foreach ($modules as $module)
                <div class="modal fade" id="moduleModal{{ $module->id }}" tabindex="-1"
                    aria-labelledby="moduleModalLabel{{ $module->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="moduleModalLabel{{ $module->id }}">{{ $module->name }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! $module->description !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="butn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- FAQ and Video Section -->
            <div class="row p-4">
                <hr />
                <div class="col-md-6">
                    <h3 class="ambala_heading pt-2 pb-3">FAQ</h3>
                    <div class="accordion" id="faqAccordion">
                        @foreach ($new_product->faqs as $index => $faq)
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
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="ambala_heading pt-3 pb-3">Video</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        @if ($new_product->video_url)
                            <iframe class="embed-responsive-item" src="{{ $new_product->video_url }}"
                                allowfullscreen></iframe>
                        @else
                            <p>No video available for this product.</p>
                        @endif
                    </div>
                    <!-- Brochure Download Section -->
                    <div class="download-section mt-2 p-4">
                        <h4 class="card-title text-center">Download Brochure</h4>
                        @if ($new_product->brochure && file_exists(public_path('media/new_product/brochures/' . $new_product->brochure)))
                            <div class="text-center pt-3">
                                <a href="{{ asset('media/new_product/brochures/' . $new_product->brochure) }}"
                                    class="butn btn-danger read_more pt-3" download>
                                    <i class="fas fa-file-pdf"></i> Download PDF
                                </a>
                            </div>
                        @else
                            <p class="text-center">No brochure available for this product.</p>
                        @endif
                    </div>
                </div>
                <hr />
                <!-- Card for Brochure and Related Products -->

                <div class="card shadow p-3 mb-4 bg-white rounded">
                    <div>
                        <h3 class="ambala_heading text-nowrap">Related Products</h3>
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-md-6">
                                <ul class="list-group list-group d-flex flex-wrap product-list pt-4">
                                    @foreach ($new_products as $index => $product)
                                        @if ($index % 2 == 0)
                                            <!-- For even-indexed products -->
                                            <li class="list-group-item product-item">
                                                <a href="{{ route('frontend.product.details', $product->slug) }}"
                                                    class="product-link" data-id="{{ $product->id }}"
                                                    data-title="{{ $product->name }}"
                                                    data-description="{{ Str::limit($product->description, 300) }}"
                                                    data-image="{{ asset('media/new_product/images/' . $product->image) }}"
                                                    data-logo="{{ asset('media/new_product/logos/' . $product->logo) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Second Column -->
                            <div class="col-md-6">
                                <ul class="list-group list-group d-flex flex-wrap product-list pt-4">
                                    @foreach ($new_products as $index => $product)
                                        @if ($index % 2 == 1)
                                            <!-- For odd-indexed products -->
                                            <li class="list-group-item product-item">
                                                <a href="{{ route('frontend.product.details', $product->slug) }}"
                                                    class="product-link" data-id="{{ $product->id }}"
                                                    data-title="{{ $product->name }}"
                                                    data-description="{{ Str::limit($product->description, 300) }}"
                                                    data-image="{{ asset('media/new_product/images/' . $product->image) }}"
                                                    data-logo="{{ asset('media/new_product/logos/' . $product->logo) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // When a 'See more' link is clicked, show the modal
            $('.see-more').on('click', function() {
                var moduleId = $(this).data('bs-target');
                $(moduleId).modal('show');
            });
        });
    </script>
@endsection


<style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 1.2rem;
        color: #d42c3d;
    }

    .btn-danger {
        background-color: #d42c3d;
        border-color: #d42c3d;
    }

    .btn-danger:hover {
        background-color: #b52030;
        border-color: #b52030;
    }

    .list-group-item {
        background-color: transparent;
        border: none;
    }



    /* //////////////////// */
    /* Custom Styles for Product Page */
    .logo-container {
        position: absolute;
        bottom: 122px;
        left: 10px;
        width: 150px;
        height: 150px;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #6e0404;
        background-color: #f8f9fa;
    }

    #product-logo {
        width: 80% !important;
        height: 80% !important;
        /* object-fit: cover !important; */
        object-fit: scale-down;
        /* border-radius: 50% !important; */
        /* border: 2px solid #fff; */
    }

    .banner-wrapper {
        position: relative;
    }

    .product-img {
        width: 450px !important;
        height: 350px !important;
        object-fit: cover;
        vertical-align: top;
    }

    .module-description-container {
        display: flex !important;
        align-items: flex-start !important;
    }

    .module-description-container .description-text {
        margin-top: -26px;
        margin-left: 20px;
        /* Adjust the left margin to align the description with the title */
        max-width: 600px;
        /* Adjust width as per the layout */
    }

    /* Adjust padding for better alignment */
    .tab-style01 ul.resp-tabs-list li {
        padding: 15px 30px;
        /* Adjust as needed */
    }

    .tab-style01 .resp-tabs-container {
        padding-top: 0;
        margin-top: 10px;
        /* Adjust margin to space out the content */
    }

    /* Add bottom margin to space out the see-more link */
    .module-description-container .see-more {
        margin-top: 10px;
        color: #ff0000;
        /* Change the color if needed */
    }

    .product-details {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        transition: opacity 0.3s ease-in-out;
    }

    /* .product-details h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    } */

    /* .product-details p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 1rem;
    } */

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
        transition: .4s;
        color: var(--gray-dark) !important;
    }

    /* .custom-container {
        width: 90% !important;
        margin: 0 auto;
    } */

    /* For larger screens (above 1200px) */
    /* @media (max-width: 1200px) {
        .custom-container {
            width: 80% !important;
            margin: 0 auto;
        }
    } */
    /* Container for product list */
    .product-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        /* Adds space between items */
        list-style: none;
        padding-left: 0;
    }

    /* Each product item */
    .product-item {
        flex: 0 0 48%;
        /* Two items per row */
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: all 0.3s ease;
        padding: 10px;
    }

    /* Hover effect for each product item */
    .product-item:hover {
        background-color: #e9ecef;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
        /* Slight lift effect */
    }

    /* Link style for product name */
    .product-link {
        text-decoration: none;
        color: #333;
        font-weight: 500;
    }

    /* Hover effect for product link */
    .product-link:hover {
        color: #000000;
        /* Change color on hover */
    }

    .product-banner-wrapper {
        padding-top: 15px;
        position: relative;
        width: 100%;
        /* height: 450px !important; */
        overflow: hidden;
    }
</style>
