@extends('frontend.app')

@section('title', 'Digital Transmission')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('/img/services/digital-transformation/White and Blue Modern IT Consulting Services Leaderboard Ad.webp') }}"
                alt="Service Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container ">
            <!-- Service Details Section -->
            <div class=" service-details-section top ambala-section" data-aos="fade-down" data-aos-duration="1000">

                <div class="row align-items-center">
                    <!-- Left Content (Text) -->
                    <h3 class="ambala_heading">Digital Transformation Services
                        Make The Easiest Solution For
                        You
                    </h3>
                    <div class="col-lg-6">

                        <p class="ambala_paragraph">We are dedicated to guiding businesses through the complexities of
                            digital transformation,
                            helping you harness technology to drive innovation, efficiency, and growth. Our digital
                            transformation services modernize operations, enhance customer experiences, and create more
                            agile, competitive organizations. From strategic planning to implementation and beyond, we
                            offer end-to-end solutions that ensure a seamless transition into the digital age.
                        </p>
                        <p class="ambala_paragraph">Our services cater to various industries, including NGOs, finance,
                            healthcare, retail,
                            manufacturing, technology, and more. By understanding unique challenges and opportunities,
                            we deliver effective, industry-specific solutions.
                        </p>

                        <div class="btn-wrapper">
                            <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                    class="fa-solid  me-2"></i>
                                Free Quote</a>
                        </div>
                    </div>

                    <div class="col-lg-6 position-relative">
                        <div class="hero-img-container text-center">
                            <img src="{{ asset('img/services/digital-transformation/Deigital-transformation-home-image.webp') }}"
                                alt="Hero Image" class="img-fluid hero-image"
                                style="height: 500px !important ;width:500px !important;">
                        </div>

                    </div>
                </div>

            </div>
            <div class=" service-details-section ambala-section" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="ambala_heading">We Are Increasing Business Success with Technology
                </h3>
                <div class="row align-items-center">
                    <!-- Left Side (Video/Image) -->
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="position-relative">
                            <img src="{{ asset('img/services/digital-transformation/Deigital-transformation-colsultsent-service-ambalait.gif') }}"
                                class="img-fluid rounded" alt="Business Meeting" style="height:500px;width:500px;">

                        </div>
                    </div>

                    <!-- Right Side (Text Content + Tabs) -->
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <!-- About Section Title -->
                        <div class="mb-4">

                            <p class="ambala_paragraph">In today’s fast-paced world, the right technology can be the game
                                changer that transforms a struggling
                                business into a thriving success story. At Ambala, we believe in the power of technology to
                                drive growth
                                and innovation, and we have witnessed firsthand how it can revolutionize businesses across
                                various
                                industries. </p>
                        </div>
                    </div>

                </div>
            </div>
            <style>
                #services {
                    /* background: url('https://themeholy.com/wordpress/fresh/wp-content/uploads/2024/01/hero-background.jpg') no-repeat center center/cover; */
                    background-image: url("{{ asset('img/services/digital-transformation/service_bg_2.webp') }}") !important;

                    color: #fff;

                    position: relative;
                }

                .digital {
                    padding-bottom: 3rem !important;
                }

                #services .sub-title {
                    font-size: 18px;
                    font-weight: 600;
                    color: #6c63ff;
                }

                #services .bi {
                    font-size: 1.5rem;
                    color: white;
                }

                #services .sec-title {
                    font-size: 40px;
                    font-weight: 700;
                }

                #services .sec-title span {
                    color: #6c63ff;
                }

                #services .no-js .owl-carousel,
                .owl-carousel.owl-loaded {
                    display: block;
                    top: 60px;
                }
            </style>
            <div class="digital  service-details-section pb-5 ambala-section" data-aos="fade-right"
                data-aos-duration="1000">
                <div id="services"
                    style=" background-size: cover; background-position: center; height: 450px; border-radius: 25px;">
                    <div class="container">
                        <!-- Title and Subtitle -->
                        <div class="row align-items-center mb-5">
                            <div class="col-md-8">

                                <h3 class="sec-title text-white">We Provide Exclusive Service For <span>Your
                                        Business</h3>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="{{ route('frontend.services') }}" class="butn read_more">VIEW ALL SERVICES <i
                                        class="fa fa-arrow-right "></i></a>
                            </div>
                        </div>

                        <!-- Service Cards -->
                        <div class="row">
                            <div class="carousel-container position-relative">

                                <!-- Previous Button -->
                                <div class="owl-nav-prev">
                                    <i class="bi bi-arrow-left"></i>
                                </div>
                                <div class="owl-carousel  service-carousel pl-4 mr-4 p-4">

                                    <!-- Service Card 1 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Mobile App Development</h4>
                                                <p>Engaging and user-friendly mobile apps tailored to your audience.</p>
                                                <a href="{{ route('frontend.services.mobile-app-development') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 2 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Software Development</h4>
                                                <p>Comprehensive software development services from design to deployment.
                                                </p>
                                                <a href="{{ route('frontend.services.adaptive-software-development') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 3 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">IT Consulting</h4>
                                                <p>Expert advice to optimize and modernize your IT infrastructure.</p>
                                                <a href="{{ route('frontend.services.it-consulting-services') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 4 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Cybersecurity Services</h4>
                                                <p>Protect your organization from threats with our cybersecurity solutions.
                                                </p>
                                                <a href="{{ route('frontend.services.cybersecurity-companies') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 5 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Quality Assurance and Testing</h4>
                                                <p>Ensure your software runs smoothly with our quality assurance services.
                                                </p>
                                                <a href="{{ route('frontend.services.software-quality-and-assurance') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 6 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Web Development</h4>
                                                <p>Build responsive and scalable web applications with our web development
                                                    services.
                                                </p>
                                                <a href="{{ route('frontend.services.web-application-development-services') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 7 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">API Development</h4>
                                                <p>Build custom APIs to connect your software with other systems
                                                    effortlessly.</p>
                                                <a href="{{ route('frontend.services.api-development') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 8 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">ERP Solution</h4>
                                                <p>Streamline your business operations with our comprehensive ERP solutions.
                                                </p>
                                                <a href="{{ route('frontend.services.enterprise-resource-planning-systems') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 9 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">E-commerce Development</h4>
                                                <p>Create a high-converting online store with our e-commerce development
                                                    services.
                                                </p>
                                                <a href="{{ route('frontend.services.build-ecommerce-websites') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Service Card 10 -->
                                    <div class="item">
                                        <div class="">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">Digital Marketing</h4>
                                                <p>Boost your online presence with our strategic digital marketing services.
                                                </p>
                                                <a href="{{ route('frontend.services.digital-marketing-agency') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Service Card 11 -->
                                    <div class="item">
                                        <div class="card">
                                            <div class="service-card p-4">
                                                <h4 class="service-heading">UI/UX Design</h4>
                                                <p>Boost your online presence with our strategic digital marketing services.
                                                </p>
                                                <a href="{{ route('frontend.services.uiux-design-agencies') }}"
                                                    class="service-learn-more">See More →</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- Carousel Navigation Icons -->

                                <!-- Next Button -->
                                <div class="owl-nav-next">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Work Process Section -->
            <div class="work-process-section  pt-3 ambala-section" data-aos="fade-right" data-aos-duration="1000">
                <div>
                    <!-- Title -->
                    <div class="title-area-wrap text-center mb-5">

                        <h3 class="ambala_heading">Work Process</h3>
                        <p class="ambala_sub_heading">From concept to launch, we deliver tailored Business solutions

                        <p>
                    </div>

                    <!-- Process Steps -->
                    <div class="process-card-area ">
                        <div class="process-line d-none d-lg-block">
                            <img src="{{ asset('img/services/digital-transformation/process_line-1.svg') }}"
                                alt="Process Line" />
                        </div>

                        <div class="row gy-40">
                            <div class="col-sm-6 col-xl-3 process-card-wrap">
                                <div class="process-card">
                                    <div class="process-card_number">
                                        <span>01</span>
                                    </div>
                                    <div class="process-card_icon">
                                        <img src="{{ asset('img/services/digital-transformation/9482869571685271463.svg') }}"
                                            alt="Step 1 Icon">
                                    </div>
                                    <h3 class="box-title">Assessment</h3>
                                    <p class="process-card_text">Understand the current state of the business, including
                                        existing technologies, processes,
                                        and workflows.
                                        .</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 process-card-wrap">
                                <div class="process-card">
                                    <div class="process-card_number">
                                        <span>02</span>
                                    </div>
                                    <div class="process-card_icon">
                                        <img src="{{ asset('img/services/digital-transformation/21391124161638269324.svg') }}"
                                            alt="Step 2 Icon">
                                    </div>
                                    <h3 class="box-title">Strategy Development</h3>
                                    <p class="process-card_text"> Create a comprehensive digital transformation roadmap
                                        tailored to the
                                        business's specific needs and goals.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 process-card-wrap">
                                <div class="process-card">
                                    <div class="process-card_number">
                                        <span>03</span>
                                    </div>
                                    <div class="process-card_icon">
                                        <img src="{{ asset('img/services/digital-transformation/816291651678773564 (1).svg') }}"
                                            alt="Step 3 Icon">
                                    </div>
                                    <h3 class="box-title">Implementation</h3>
                                    <p class="process-card_text">Execute the digital transformation strategy by deploying
                                        new technologies and
                                        processes.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 process-card-wrap">
                                <div class="process-card">
                                    <div class="process-card_number">
                                        <span>04</span>
                                    </div>
                                    <div class="process-card_icon">
                                        <img src="{{ asset('img/services/digital-transformation/1963368411678861362.svg') }}"
                                            alt="Step 4 Icon">
                                    </div>
                                    <h3 class="box-title">Optimization</h3>
                                    <p class="process-card_text">Continuously improve and adapt the digital transformation
                                        initiatives based on
                                        performance data and feedback. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- technologies Section -->
            <div class="work-process-section ambala-section bg-white position-relative" data-aos="fade-left"
                data-aos-duration="1000">

                <div class="text-center mb-5">
                    <h3 class="ambala_heading">Innovative Tools for Superior Solutions</h3>
                    <p class="ambala_sub_heading">Emphasize the tools that enhance our development processes and deliver
                        high-quality outcomes</p>
                </div>

                <div class="row justify-content-center">
                    <!-- Image Items with different animation directions -->

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-up">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/java-language-application-ambalait.webp') }}"
                                    alt="java">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Flutter-language-application-ambalait.webp') }}"
                                    alt="Flutter">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/reactjs-language-application-ambalait.webp') }}"
                                    alt="React js">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Laravel-framwork-application-development-ambalait.webp') }}"
                                    alt="Laravel">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/yii-framwork-application-development-ambalait.webp') }}"
                                    alt="YII">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-right">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/python-language-application-ambalait.webp') }}"
                                    alt="python">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-in">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/pgsql-framwork-application-development-ambalait.webp') }}"
                                    alt="PG-Sql">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Oracle-application-development-ambalait.webp') }}"
                                    alt="Oracle">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/php-language-application-ambalait.webp') }}"
                                    alt="PHP">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/dart-language-application-ambalait.webp') }}"
                                    alt="mysql">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Other Services Section -->
            <div class="ambala-section  text-center" data-aos="fade-up" data-aos-duration="1000">

                <div class="row align-items-center">
                    <!-- Left Image Column -->
                    <div class="col-lg-5 position-relative" data-aos="fade-right" data-aos-duration="1000">

                        <div class="image-container position-relative">
                            <img src="{{ asset('img/services/software/about image.webp') }}" alt="Main Person"
                                class="img-fluid rounded-5 shadow-lg">
                            <!-- Floating Box 1 -->
                            <div class="floating-box floating-box-1" data-aos="fade-left" data-aos-duration="1200">
                                <div class="box-content">
                                    <p>Business thrive supervision</p>
                                    <img src="{{ asset('img/services/software/about122.webp') }}" alt="Chart">
                                </div>
                            </div>


                            <div class="floating-box floating-box-2" data-aos="fade-left" data-aos-duration="1200">
                                <div class="box-content">

                                    <img src="{{ asset('img/services/software/about_12_3 .webp') }}" alt="Chart">
                                </div>
                            </div>

                            <div class=" mobile-floating-box-3" data-aos="fade-right" data-aos-duration="1200">
                                <div class="">

                                    <img src="{{ asset('img/services/software/arrow.webp') }}" alt="Chart">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Right Text Column -->
                    <div class="col-lg-6 offset-lg-1 text-start position-relative" data-aos="fade-up"
                        data-aos-duration="1000">

                        <span class="text-uppercase text-primary">Who We Are</span>
                        <h1 class="custom-service-headline">We’re Building Modern And High Quality <span
                                class="custom_heading">Software</span></h1>
                        <p class="text-muted">
                            At Ambala, we believe that business automation is not just about implementing new tools; it’s
                            about
                            leveraging intellectual capital to craft strategies that align with your business goals. We are
                            dedicated to
                            delivering tailored solutions that drive efficiency, reduce costs, and unlock your
                            organization’s full
                            potential. Let us partner with you on your automation journey and help you achieve unparalleled
                        </p>

                    </div>
                </div>
            </div>
            <div class="bg-white ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <div class="container">
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading ">Latest Article's</h3>
                        <p class="ambala_sub_heading ">Stay informed with Latest Insights, trends, and innovations in the
                            tech world.
                        </p>
                    </div>

                    <div class="row mt-n5">
                        @foreach ($relatedBlogs as $blog)
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
                                                <li><a href="#!"><i class="fas fa-user"></i>
                                                        {{ $blog->author }}</a>
                                                </li>
                                                <li><a href="#!"><i class="fas fa-comments"></i>
                                                        {{ $blog->comments_count }}</a></li>
                                            </ul>
                                        </div>
                                        <p>{{ Str::limit(strip_tags($blog->content), 50, '...') }}</p>

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
        </div>

    </section>
    <!-- Scripts for AOS Animation and Animated Counter -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Default animation duration
            once: true, // Animation happens once per scroll
        });
        $(document).ready(function() {
            var owl = $(".service-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false, // Disable default nav buttons
                items: 4,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000, // 5 seconds
                smartSpeed: 800,
                responsive: {
                    0: {
                        items: 1 // 1 item on small screens
                    },
                    600: {
                        items: 2 // 2 items on tablets
                    },
                    1000: {
                        items: 4 // 4 items on desktops
                    }
                }
            });

            // Custom navigation
            $('.owl-nav-next').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('.owl-nav-prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>





    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Bootstrap Icons for Checkmarks and Phone Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
@endsection
