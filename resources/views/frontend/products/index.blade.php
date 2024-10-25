@extends('frontend.app')
@section('title', 'Products')

@section('content')

    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ $settings && $settings->product_banner ? asset($settings->product_banner) : asset('/img/placeholder/Placeholder image-banner.webp') }}"
                alt="Product Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>Our Products</h1>
                    <p>Explore our innovative and high-quality products</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <section class="product container">
        <div>
            <div class="text-center pt-5 pb-5">
                <h3 class="ambala_heading">Our Range of Products</h3>
                <p class="ambala_sub_heading">Discover the perfect solution for your needs with our extensive range of
                    products.</p>
            </div>
            <div class="row product-row">
                @foreach ($new_products as $index => $new_product)
                    {{-- product-details --}}
                    <div class="row align-items-center  bg-white ambala-section wow fadeInUp"
                        data-wow-delay="{{ $index * 0.2 }}s">
                        @if ($index % 2 == 0)
                            <div class="col-lg-6">
                                <div class="image-wrapper">
                                    <img src="{{ asset('media/new_product/thumbs/' . $new_product->thumb_image) }}"
                                        alt="{{ $new_product->name }}" class="product-img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="ambala_heading">{{ $new_product->name }}</h3>
                                <p class="ambala_paragraph">
                                    {{ Str::limit(strip_tags($new_product->short_description), 300) }}
                                </p>
                                <a href="{{ route('frontend.product.details', $new_product->slug) }}"
                                    class="butn read_more">Read More</a>
                            </div>
                        @else
                            <div class="col-lg-6 order-lg-2 ">
                                <div class="image-wrapper">
                                    <img src="{{ asset('media/new_product/thumbs/' . $new_product->thumb_image) }}"
                                        alt="{{ $new_product->name }}" class="product-img">
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <h3 class="ambala_heading">{{ $new_product->name }}</h3>
                                <p class="ambala_paragraph">
                                    {{ Str::limit(strip_tags($new_product->short_description), 300) }}</p>
                                <a href="{{ route('frontend.product.details', $new_product->slug) }}"
                                    class="butn read_more">Read More</a>

                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <!-- Add any additional scripts if needed -->
@endsection

<style>
    .product-details {
        padding: 3rem 0;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .product-details h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }

    .product-details p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 1.5rem;
    }

    .image-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        overflow: hidden;
    }

    .product-img {
        /* width: 700px !important; */
        height: 450px !important;
        object-fit: cover;
        border-radius: 10px;
    }

    .wow {
        visibility: hidden;
    }

    .fadeInUp {
        animation-name: fadeInUp;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 40px, 0);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    #product-image {
        width: 100%;
        height: 450px !important;
        object-fit: fill !important;
    }
</style>
