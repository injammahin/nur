@extends('frontend.app')
@section('title', 'About Us')

@section('content')

    <div class="banner-section">
        <div class="banner-wrapper">
            {{-- Show Product Banner from Settings --}}
            <img src="{{ $settings && $settings->about_banner ? asset($settings->about_banner) : asset('/img/placeholder/Placeholder image-banner.webp') }}"
                alt="about Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>Welcome to Ambala IT</h1>
                    <p>Innovative Solutions for a Digital World</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about container">
        @if (isset($aboutContent) && $aboutContent->about_text)
            <div class="about top ambala-section" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <div class="row align-items-center">
                        <h3 class="ambala_heading">We are the next generation of the business world.</h3>

                        <!-- Text Column -->
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <div class="wow fadeInUp" data-wow-delay=".1s">
                                    {{-- <span class="custom_heading">About Ambala IT</span> --}}
                                </div>

                                <!-- Check if 'about_text' is available -->
                                @if (!empty($aboutContent) && !empty($aboutContent->about_text))
                                    <div class="ambala_paragraph">
                                        <p class="ambala_paragraph mb-4">
                                            {!! $aboutContent->about_text !!}
                                        </p>
                                    </div>
                                @else
                                    <div class="ambala_paragraph">
                                        <p class="ambala_paragraph mb-4">
                                            No content available at the moment.
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Video Column -->
                        <div class="col-lg-6 col-md-12">
                            <div class="experience-image-wrapper position-relative">
                                {{-- <img src="{{ asset('img/home/ambalait-about-us-image-video.webp') }}" alt="home about image"> --}}
                                <video autoplay muted loop class="img-fluid">
                                    <source src="{{ asset('/img/home/ambalait-about-us-homepage-video.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="about ambala-section" data-aos="fade-down" data-aos-duration="1000">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <!-- Tech Partners -->
                    <div class="col-md-4 col-lg-2 mb-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon mb-3">
                            <i class="fas fa-handshake fa-3x"></i>
                        </div>
                        <h3 class="ambala_heading mb-0">
                            <span class="countup">{{ $statistics['Tech Partners']->value ?? 0 }}</span>
                        </h3>
                        <p class="center ambala_padding">Tech Partners</p>
                    </div>
                    <!-- Second Item -->
                    <div class="col-md-4 col-lg-2 mb-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon mb-3">
                            <i class="fas fa-clock fa-3x "></i>
                        </div>
                        <h3 class="ambala_heading mb-0 h1"><span
                                class="countup">{{ \Carbon\Carbon::now()->year - 2016 }}</span>+</h3>
                        <p class="center ambala_padding">Years of Experience</p>
                    </div>

                    <!-- Countries Served -->
                    <div class="col-md-4 col-lg-2 mb-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon mb-3">
                            <i class="fas fa-globe fa-3x"></i>
                        </div>
                        <h3 class="ambala_heading mb-0 h1">
                            <span class="countup">{{ $statistics['Countries Served']->value ?? 0 }}</span>+
                        </h3>
                        <p class="center ambala_padding">Countries Served</p>
                    </div>

                    <!-- IT Professionals -->
                    <div class="col-md-4 col-lg-2 mb-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon mb-3">
                            <i class="fas fa-user-tie fa-3x"></i>
                        </div>
                        <h3 class="ambala_heading mb-0 h1">
                            <span class="countup">{{ $statistics['IT Professionals']->value ?? 0 }}</span>+
                        </h3>
                        <p class="center ambala_padding">IT Professionals</p>
                    </div>

                    <!-- Projects Completed -->
                    <div class="col-md-4 col-lg-2 mb-4 wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon mb-3">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </div>
                        <h3 class="ambala_heading mb-0 h1">
                            <span class="countup">{{ $statistics['Projects Completed']->value ?? 0 }}</span>%
                        </h3>
                        <p class="center ambala_padding">Projects Completed</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about  ambala-section" data-aos="fade-left" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-lg-6 text-start wow fadeInLeft">
                    <img src="{{ $aboutContent->vision_image ? asset('uploads/about/' . $aboutContent->vision_image) : asset('/img/placeholder/Placeholder image.webp') }}"
                        alt="Vision Image" class="img-fluid vision-mission-img rounded shadow">
                </div>
                <div class="col-lg-6 wow fadeInRight mt-5">
                    <div class="ps-sm-4 ps-xl-5">
                        <h3 class=" text-start ambala_heading">Our Vision</h3>
                        <div class="ambala_paragraph ">
                            <p class="ambala_paragraph mb-4">
                                {!! $aboutContent->vision_text !!}

                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center text-start mt-5">
                <div class="col-lg-6 wow fadeInLeft order-2 order-lg-1">
                    <div>
                        <h3 class=" text-start ambala_heading">Our Mission</h3>
                        <div class="ambala_paragraph ">
                            <p class="ambala_paragraph mb-4">
                                {!! $aboutContent->mission_text !!}

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-end pb-3 pb-lg-0 wow fadeInRight order-1 order-lg-2">
                    <img src="{{ $aboutContent->mission_image ? asset('uploads/about/' . $aboutContent->mission_image) : asset('/img/placeholder/Placeholder image.webp') }}"
                        alt="Mission Image" class="img-fluid rounded vision-mission-img shadow">
                </div>
            </div>
        </div>

        <div class="about ambala-section" data-aos="fade-right" data-aos-duration="1000">
            <div class="main-section">
                <div class="">
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading ">Testimonials from Our Respected Clients
                        </h3>
                        <p class="ambala_sub_heading ">Trusted by leading brands, we deliver exceptional software
                            solutions that drive results.

                        </p>
                    </div>
                </div>
                <div class="container customr">
                    <div class="owl-carousel owl-theme unique-testimonial-carousel">
                        @foreach ($reviews as $review)
                            <div class="item">
                                <div class="unique-testimonial-block d-flex flex-column justify-content-between">
                                    <span class="alt-font quote">“</span>
                                    <p class="review-text">{!! $review->text !!}</p>
                                    <div class="d-flex align-items-center justify-content-center author-info">
                                        <img class="img-fluid rounded-circle me-3"
                                            src="{{ asset('media/review/' . $review->image) }}"
                                            alt="{{ $review->author }}" style="width: 50px; height: 50px;">
                                        <div>
                                            <h6 class="mb-0 font-weight-bold">{{ $review->author }}</h6>
                                            <small>{{ $review->role }}</small>
                                            @if ($review->video_url)
                                                <i class="fab fa-youtube youtube-icon ms-2" data-toggle="modal"
                                                    data-target="#youtubeModal{{ $review->id }}"
                                                    style="cursor: pointer; color: #FF0000;"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        @foreach ($reviews as $review)
            @if ($review->video_url)
                @php
                    // Convert the YouTube URL to an embeddable format
                    $embedUrl = str_replace('youtu.be/', 'www.youtube.com/embed/', $review->video_url);
                    $embedUrl = str_replace('watch?v=', 'embed/', $embedUrl);
                @endphp
                <div class="modal fade" id="youtubeModal{{ $review->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="youtubeModalLabel{{ $review->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="" style="background: #000!important;">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $embedUrl }}"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <script>
            $(document).ready(function() {
                $(".unique-testimonial-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    center: true,
                    items: 1,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000, // 3 seconds
                    smartSpeed: 700,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
        </section>
    @endsection

    @section('scripts')
        <script>
            AOS.init({
                duration: 1200,
            });

            // Count Up Animation
            $('.countup').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

            $(document).ready(function() {
                $(".unique-testimonial-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    center: true,
                    items: 1,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000, // 3 seconds
                    smartSpeed: 700,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
    @endsection
    <style>
        .about.h2 {
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            color: var(--light) !important;

        }

        .service-details {
            padding: 0rem 0 !important;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1) !important;
            margin-bottom: 2rem;
        }

        .unique-testimonial-block {
            text-align: center;
            padding: 50px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            margin: 10px;
            display: flex;
            flex-direction: column;
            height: 350px;
            /* Set a fixed height for uniformity */
            justify-content: space-between;
            /* Align elements with space between */
        }

        .review-text {
            margin-bottom: auto;
            /* Push the text to the top */
            color: #333;
            font-style: italic;
            padding: 0 15px;
            /* Padding around the text */
        }

        .author-info {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .author-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .quote {
            font-size: 30px;
            color: #FF0000;
            position: absolute;
            top: 15px;
            /* Position the quote at the top */
            left: 20px;
        }

        .youtube-icon {
            font-size: 20px;
            margin-left: 10px;
            color: #FF0000;
            cursor: pointer;
        }

        .unique-testimonial-carousel .item {
            padding: 10px;
        }

        .customr {
            margin-top: 30px;
        }

        .justify-content-center {
            justify-content: start !important;
        }

        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
        }

        .icon i {
            color: #e63946 !important;
            transition: transform 0.3s ease;
        }

        .icon:hover i {
            transform: scale(1.2);
        }

        .text-primary {
            color: #302f2f !important;
        }

        .text-primary {
            color: #302f2f !important;
        }

        @media (min-width: 992px) {
            .col-lg-5 {
                flex: 0 0 auto;
                height: 23rem !important;
                width: 41.666667%;
            }
        }
    </style>
