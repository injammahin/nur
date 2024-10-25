@extends('frontend.app')

@section('title', 'Welcome to Ambala IT')

@section('content')




    <div class=" main-wrapper bg-white">


        <div class="">
           
                <div class="hero-section shape_rotated mb-1 pb-1">
                    <div class="third-shape"></div>
                    <div class="fourth-shape"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Left Text Column -->
                            <div class="col-lg-6 text-start">
                                <h1 class="ambala_heading2">
                                    Best <span class="ambala_heading">Software Development</span>
                                    <span class="highlight-black">Company</span> for the Next
                                    <span class="highlight-green"> Generation Dreams</span>
                                </h1>
                                @if (isset($video) && $video->video_text)
                                    <p class="hero-description">
                                        {!! $video->video_text !!}
                                    </p>
                                @else
                                    <p class="hero-description">
                                        Default video description goes here.
                                    </p>
                                @endif
                            </div>

                            <!-- Right Video Column -->
                            @if ($video)
                                @php
                                    // Convert YouTube URL to embeddable format
                                    $embedUrl = str_replace('youtu.be/', 'www.youtube.com/embed/', $video->video_url);
                                    $embedUrl = str_replace('watch?v=', 'embed/', $embedUrl);
                                @endphp

                                <div class="col-lg-6 position-relative">
                                    <div class="video-container">
                                        <!-- Video Thumbnail -->
                                        <img src="{{ $video->video_thumbnail ? asset('media/sliders/' . $video->video_thumbnail) : asset('/img/placeholder/Placeholder image.webp') }}"
                                            alt="Team Working" class="img-fluid video-thumbnail">
                                        <div class="play-button" onclick="playWelcomeVideo('{{ $embedUrl }}')">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="experience-badge floating-element floating-2 d-none d-lg-block">
                                            <span>{{ \Carbon\Carbon::now()->year - 2016 }}+</span>
                                            <p class="cl-white">Years of Experience</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="text-center">No video available.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Video Modal -->
                <div class="modal fade" id="welcomeVideoModal" tabindex="-1" role="dialog"
                    aria-labelledby="welcomeVideoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="text-center">
                                <iframe id="welcomeVideoIframe" width="100%" height="500" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    function playWelcomeVideo(videoUrl) {
                        const welcomeVideoModal = document.getElementById('welcomeVideoModal');
                        const welcomeVideoIframe = document.getElementById('welcomeVideoIframe');

                        // Set the video URL with autoplay enabled
                        welcomeVideoIframe.src = videoUrl + '?autoplay=1';

                        // Show the modal
                        $('#welcomeVideoModal').modal('show');
                    }

                    // Clear the video iframe when the modal is closed
                    $('#welcomeVideoModal').on('hidden.bs.modal', function() {
                        const welcomeVideoIframe = document.getElementById('welcomeVideoIframe');
                        welcomeVideoIframe.src = ''; // Clear the src to stop the video
                    });
                </script>



                <script>
                    function playVideo() {
                        const videoModal = document.getElementById('videoModal');
                        const videoIframe = document.getElementById('videoIframe');
                        const videoUrl = 'https://www.youtube.com/embed/your-video-id'; // Replace with your video URL
                        videoIframe.src = videoUrl;
                        videoModal.style.display = 'flex';
                    }

                    function closeVideo() {
                        const videoModal = document.getElementById('videoModal');
                        const videoIframe = document.getElementById('videoIframe');
                        videoModal.style.display = 'none';
                        videoIframe.src = ''; // Stop the video when the modal is closed
                    }
                </script>
          
        </div>
        <div class="container">
            @if (isset($aboutContent) && $aboutContent->about_text)
                <!-- About Section -->
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
            <!-- service-->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let serviceBoxes = document.querySelectorAll('.service-box');

                    function checkVisibility() {
                        let windowHeight = window.innerHeight;
                        serviceBoxes.forEach(function(box, index) {
                            let boxTop = box.getBoundingClientRect().top;
                            if (boxTop < windowHeight - 50) {
                                setTimeout(() => {
                                    box.classList.add('appear');
                                }, index * 100); // Stagger the appearance of each box
                            }
                        });
                    }

                    window.addEventListener('scroll', checkVisibility);
                    checkVisibility(); // Check on load
                });
            </script>
            <div class="main-section ambala-section" data-aos="fade-right" data-aos-duration="1000">
                <div id="services-section">
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            let serviceBoxes = document.querySelectorAll('.service-box');

                            function checkVisibility() {
                                let windowHeight = window.innerHeight;
                                serviceBoxes.forEach(function(box, index) {
                                    let boxTop = box.getBoundingClientRect().top;
                                    if (boxTop < windowHeight - 50) {
                                        setTimeout(() => {
                                            box.classList.add('appear');
                                        }, index * 100); // Stagger the appearance of each box
                                    }
                                });
                            }

                            window.addEventListener('scroll', checkVisibility);
                            checkVisibility(); // Check on load
                        });
                    </script>


                    <div>
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading ">Our Services</h3>
                            <p class="ambala_sub_heading ">Delivering cutting-edge customized IT solutions that foster
                                innovation and empower businesses.

                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <!-- Static list of services -->
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/adaptive-software-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Software Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/it-consulting-services') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">IT Consulting</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/cybersecurity-companies') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Cybersecurity Services</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/web-application-development-services') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Web Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/mobile-app-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Mobile App Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/software-quality-and-assurance') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Quality Assurance and Testing</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/api-development') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">API Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/enterprise-resource-planning-systems') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">ERP Solution</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/uiux-design-agencies') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">UI/UX Design</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/digital-transformation') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">Digital Transformation Consultant</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/build-ecommerce-websites') }}';">
                                    <div class="icon me-3" style="background-color: #ffa500;"></div>
                                    <h4 class="mb-0 service">E-commerce Development</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="service-box p-3 d-flex align-items-center"
                                    onclick="location.href='{{ url('services/digital-marketing-agency') }}';">
                                    <div class="icon me-3"></div>
                                    <h4 class="mb-0 service">Digital Marketing</h4>
                                    <div class="arrow ms-auto"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- partner-->
            @if (isset($partners) && count($partners) > 0)
                <div class="main-section ambala-section" data-aos="fade-left" data-aos-duration="1000">
                    <div>
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading ">Our Partners</h3>
                            <p class="ambala_sub_heading ">Our trusted partner in driving innovation with cutting-edge
                                customized
                                software solutions.

                            </p>
                        </div>
                        <div class=" partners">
                            <div class="row justify-content-center text-center">
                                @foreach ($partners as $partner)
                                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                                        <div class="client-card">
                                            <img src="{{ asset('media/partners/' . $partner->image) }}"
                                                style="height: auto;width:auto !important;" alt="{{ $partner->name }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- revirew-->
            @if (isset($reviews) && count($reviews) > 0)
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
            @endif

            <div class="industries-section bg-white pt-0 pb-0 text-center" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading ">Industry we serve</h3>
                        <p class="ambala_sub_heading ">We are committed to transforming industries with unique
                            customized
                            software solutions

                        </p>
                    </div>

                    <div class="industries-row justify-content-center">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-university industry-icon"></i>
                                <p>Finance & Banking</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-shopping-cart industry-icon"></i>
                                <p>E-commerce</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-network-wired industry-icon"></i>
                                <p>Telco</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-city industry-icon"></i>
                                <p>Real Estate</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-laptop-code industry-icon"></i>
                                <p>Software</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-heartbeat industry-icon"></i>
                                <p>Health & Fitness</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-utensils industry-icon"></i>
                                <p>Food & Drink</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-music industry-icon"></i>
                                <p>Music</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-tv industry-icon"></i>
                                <p>Media</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-graduation-cap industry-icon"></i>
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-plane-departure industry-icon"></i>
                                <p>Travel</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="industry-icon-wrap">
                                <i class="fas fa-store industry-icon"></i>
                                <p>Retail</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($technologies) && count($technologies) > 0)
                <div class=" award bg-white ambala-section text-center " data-aos="fade-right" data-aos-duration="1000">
                    <div>
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading ">Innovative Tools for Superior Solutions
                            </h3>
                            <p class="ambala_sub_heading ">Emphasize the tools that enhance our development processes and
                                deliver
                                high-quality outcomes

                            </p>
                        </div>
                    </div>
                    <div class="row text-center wow fadeInUp" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Image Items -->
                        @foreach ($technologies as $technology)
                            <div class="col-6 col-md-2 border-end border-bottom">
                                <div class="py-6 img-hover">
                                    <div class="img-container">
                                        <img class="image-70px"
                                            src="{{ asset('media/technologies/' . $technology->image) }}"
                                            alt="{{ $technology->name }}">
                                        <div class="img-shade"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            @endif
            @if (isset($galleryImages) && count($galleryImages) > 0)
                <div class="bg-white ambala-section text-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>

                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading">Gallery</h3>
                            <p class="ambala_sub_heading ">Behind the Scenes: A Visual Journey of our Innovations,
                                Achievement,
                                and Success Stories.

                            </p>
                        </div>
                        <div class="gallery-track">
                            @foreach ($galleryImages as $image)
                                <div class='card-gallery'>
                                    <div class='card-gallery-image-wrapper'>
                                        <img src="{{ asset($image->image) }}" alt="{{ $image->title }}">
                                        <div class="description">
                                            <h2>{{ $image->title }}</h2>
                                            <p>{{ $image->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="gallery-see_more pt-4 ">
                            <a href="{{ route('frontend.gallery') }}" class="font-weight-600 butn very-small">See
                                More</a>
                        </div>
                    </div>
                </div>
            @endif
            @if (isset($blogs) && count($blogs) > 0)
                <div class="bg-white ambala-section " data-aos="fade-down" data-aos-duration="1000">
                    <div class="container">
                        <div class=" text-center mb-5">
                            <h3 class="ambala_heading ">Latest Article's</h3>
                            <p class="ambala_sub_heading ">Stay informed with Latest Insights, trends, and innovations
                                in
                                the
                                tech world.
                            </p>
                        </div>

                        <div class="row mt-n5">
                            @foreach ($blogs as $blog)
                                <div class="col-lg-4 mt-5">
                                    <article class="blog-grid">
                                        <div class=" blog-grid-img position-relative ">
                                            <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="img">
                                        </div>
                                        <div class="blog-grid-text p-3">
                                            <h3 class="h5"><a
                                                    href="{{ route('frontend.blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h3>
                                            <div class="meta mb-3">
                                                <ul>
                                                    <li><a href="#!"><i class="fas fa-calendar-alt"></i>
                                                            {{ $blog->created_at->format('d M, Y') }}</a></li>
                                                    {{-- <li><a href="#!"><i class="fas fa-user"></i>
                                                        {{ $blog->author }}</a>
                                                </li> --}}

                                                </ul>
                                            </div>
                                            <p>{{ Str::limit(strip_tags($blog->content), 70, '...') }}</p>

                                            <p class="display-30 mb-1-8">{{ Str::limit($blog->excerpt, 100) }}</p>
                                            <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                                                class="font-weight-600 butn very-small">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

    @endsection
    <style>
        .title,
        .caption {
            color: white;
            /* Make sure the text is a visible color */
            font-size: 2rem;
            /* Adjust the size as needed */
            text-align: center;
            /* Center the text */
            position: relative;
            /* Ensure it stays inside the slider container */
            z-index: 10;
            /* Make sure the text is above other elements */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Add a dark overlay to improve text visibility */
            z-index: 5;
        }

        .slide-content {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            text-align: center;
        }
    </style>
