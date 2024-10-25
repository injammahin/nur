@extends('frontend.app')

@section('title', 'E-Commerce Development')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('/img/services/e-commerce/build-ecommerce-websites-ambalait.webp') }}" alt="Service Banner"
                class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container e-commerce">
            <!-- Service Details Section -->
            <div class=" service-details-section top ambala-section" data-aos="fade-up" data-aos-duration="1000">

                <div class="row align-items-center">
                    <!-- Text Content -->
                    <div class="text-center mb-3">
                        <h3 class="ambala_heading">E-Commerce Development
                        </h3>
                        <p class="ambala_sub_heading">Tailored E-Commerce Solutions to Drive Sales and Industry-Specific
                            Growth
                        </p>
                    </div>
                    <div class="col-lg-6">


                        <p class="ambala_paragraph">Boost your sales and grow your online business with our customized
                            e-commerce solutions. We
                            design robust, scalable, and user-friendly online stores that enhance customer engagement and
                            provide a seamless shopping experience. From design to ongoing support, we’re committed to
                            your e-commerce success.
                        </p>
                        <p class="ambala_paragraph">Businesses across various industries—retail, fashion, electronics,
                            healthcare, supermarkets, and many
                            more—leverage our e-commerce development services. We understand the unique challenges of
                            different sectors, enabling us to deliver effective, industry-specific solutions.
                        </p>
                        <div class="btn-wrapper">
                            <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                    class="fa-solid  me-2"></i>
                                Free Quote</a>
                        </div>

                    </div>

                    <!-- Right Column (Image Content) -->
                    <div class="col-lg-6 text-center position-relative wow animate__animated animate__fadeInRight">
                        <!-- Background Shape -->

                        <!-- Main Image -->
                        <img src="{{ asset('img/services/e-commerce/E-commerce-Development.webp') }}" class="  "
                            alt="Overview - Application Management Services">

                    </div>
                </div>
            </div>
            <!-- Working Process Section -->
            <div id="working-process" class="working-process-section ambala-section" data-aos="fade-down"
                data-aos-duration="1000">
                <div class="text-center">
                    <!-- Section Header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="icon-masking">
                                <img src="{{ asset('img/services/e-commerce/19189471801548329625.svg') }}" alt="Icon">
                                <span>WORKING PROCESS</span>
                            </div>
                            <h3 class="ambala_heading pb-5" style="color:white !important;">From concept to launch, we
                                deliver tailored e-commerce solutions</h3>
                        </div>
                    </div>

                    <!-- Process Steps Row with Padding for Left Gap -->
                    <div class="row justify-content-start align-items-center mt-4" style="padding-left: 25px;">
                        <!-- Step 1 -->
                        <div class="col-md-2">
                            <div class="process-card shadow-lg text-center">
                                <div class="process-card_number">01</div>
                                <div class="process-card_icon mb-3">
                                    <img src="{{ asset('img/services/e-commerce/3141904241652869864.svg') }}"
                                        alt="Plan & Strategize" class="img-fluid">
                                </div>
                                <h5 class="box-title">Consultation & Planning</h5>
                                <p class="card-text">We identify your business goals, target audience, and industry needs,
                                    crafting a strategy that aligns with your vision.</p>
                            </div>
                        </div>

                        <!-- Arrow after Step 1 -->
                        <div class="col-md-1 arrow-column">
                            <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    stroke-dasharray="5,5" />
                                <defs>
                                    <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="10" refY="3.5"
                                        orient="auto">
                                        <polygon points="0 0, 10 3.5, 0 7" fill="white" />
                                    </marker>
                                </defs>
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    marker-end="url(#arrowhead)" />
                            </svg>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-md-2">
                            <div class="process-card shadow-lg text-center">
                                <div class="process-card_number">02</div>
                                <div class="process-card_icon mb-3">
                                    <img src="{{ asset('img/services/e-commerce/14375043741555931407.svg') }}"
                                        alt="Design & Development" class="img-fluid">
                                </div>
                                <h5 class="box-title">Design & Development</h5>
                                <p class="card-text">We design a scalable, user-friendly e-commerce platform tailored to
                                    your brand for seamless customer experiences.</p>
                            </div>
                        </div>

                        <!-- Arrow after Step 2 -->
                        <div class="col-md-1 arrow-column">
                            <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    stroke-dasharray="5,5" />
                                <defs>
                                    <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="10" refY="3.5"
                                        orient="auto">
                                        <polygon points="0 0, 10 3.5, 0 7" fill="white" />
                                    </marker>
                                </defs>
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    marker-end="url(#arrowhead)" />
                            </svg>
                        </div>

                        <!-- Step 3 -->
                        <div class="col-md-2">
                            <div class="process-card shadow-lg text-center">
                                <div class="process-card_number">03</div>
                                <div class="process-card_icon mb-3">
                                    <img src="{{ asset('img/services/e-commerce/4366683951650441429.svg') }}"
                                        alt="Testing & Launch" class="img-fluid">
                                </div>
                                <h5 class="box-title">Testing & Launch</h5>
                                <p class="card-text">We rigorously test functionality and security before launching your
                                    store with confidence.</p>
                            </div>
                        </div>

                        <!-- Arrow after Step 3 -->
                        <div class="col-md-1 arrow-column">
                            <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    stroke-dasharray="5,5" />
                                <defs>
                                    <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="10"
                                        refY="3.5" orient="auto">
                                        <polygon points="0 0, 10 3.5, 0 7" fill="white" />
                                    </marker>
                                </defs>
                                <path d="M10,80 Q50,40 90,80" stroke="white" stroke-width="2" fill="none"
                                    marker-end="url(#arrowhead)" />
                            </svg>
                        </div>

                        <!-- Step 4 -->
                        <div class="col-md-2">
                            <div class="process-card shadow-lg text-center">
                                <div class="process-card_number">04</div>
                                <div class="process-card_icon mb-3">
                                    <img src="{{ asset('img/services/e-commerce/2515875551582823581.svg') }}"
                                        alt="Support & Optimization" class="img-fluid">
                                </div>
                                <h5 class="box-title">Support & Optimization</h5>
                                <p class="card-text">Post-launch, we provide continuous support and updates to keep your
                                    platform competitive and scalable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features Section -->
            <div class="features-section ambala-section text-center">
                <div class="features">
                    <h3 class="ambala_heading pt-5">Our Services</h3>
                    <p class="ambala_sub_heading ">
                        Boost sales, engage customers, and fuel your business growth with tailored e-commerce solutions.
                    </p>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!-- E-commerce Development -->
                        <div class="col wow animate__animated animate__zoomIn">
                            <div class="card  text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/web/feature/E-commerce-Development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="E-commerce Development">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger ">E-commerce Development</h5>
                                    <p class="card-text text-muted">Designing custom e-commerce sites with unique features
                                        to meet your business needs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Platform Integration -->
                        <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Platform-Integration-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Platform Integration">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Platform Integration</h5>
                                    <p class="card-text text-muted">Assisting with platform selection and integration,
                                        including Shopify, Magento, WooCommerce, or custom-built solutions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Responsive Design -->
                        <div class="col wow animate__animated animate__zoomIn">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Responsive-web-Design-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Responsive Design">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Responsive Design</h5>
                                    <p class="card-text text-muted">Delivering a seamless shopping experience across all
                                        devices—desktops, tablets, and smartphones.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Optimized Checkout -->
                        <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Optimized-Checkout-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Optimized Checkout">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Optimized Checkout</h5>
                                    <p class="card-text text-muted">Implementing user-friendly shopping cart and checkout
                                        processes to boost conversions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Product Management -->
                        <div class="col wow animate__animated animate__zoomIn">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Product-Management-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Product Management">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Product Management</h5>
                                    <p class="card-text text-muted">Efficient tools for inventory control, product
                                        listings, and search functionality.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Integration -->
                        <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Payment-Integration-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Payment Integration">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Payment Integration</h5>
                                    <p class="card-text text-muted">Securing transactions with integrated payment gateways
                                        supporting multiple methods.</p>
                                </div>
                            </div>
                        </div>

                        <!-- SEO & Marketing -->
                        <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/SEO-Marketing-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="SEO & Marketing">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">SEO & Marketing</h5>
                                    <p class="card-text text-muted">Optimizing search engines and integrating digital
                                        marketing strategies to boost traffic and increase sales.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Ongoing Support -->
                        <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                            <div class="card h-100 text-center border-0 p-3 feature-card">
                                <div class="card-img-top feature-img mb-3">
                                    <img src="{{ asset('img/services/e-commerce/Ongoing-Support-e-commerce-development-service-ambalait.webp') }}"
                                        style="height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                        alt="Ongoing Support">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-danger">Ongoing Support</h5>
                                    <p class="card-text text-muted">Continuous support and maintenance for smooth operation
                                        and updates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Discover Our Latest Projects Section -->
            {{-- <div class="projects-section ambala-section bg-white" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <!-- Section Title -->
                    <div class="text-center mb-5" data-aos="fade-down">
                        <h3 class="ambala_heading">Our Project</h3>
                        <p class="ambala_paragraph">Discover Our Latest Projects</p>
                    </div>

                    <!-- Projects Grid -->
                    <div class="row gy-4 align-items-stretch">
                        <!-- Left Large Image -->
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="project-card position-relative overflow-hidden">
                                <img src="{{ asset('img/demo/digital7.webp') }}" alt="Project 1"
                                    class="img-fluid rounded">
                                <div class="project-overlay">
                                    <div class="overlay-content">
                                        <p class="project-category">Digital Marketing</p>
                                        <h3 class="project-title">Social Media Marketing</h3>
                                    </div>
                                    <a href="#" class="project-link">
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Small Images -->
                        <div class="col-md-6">
                            <div class="row gy-4">
                                <!-- Top Right Image -->
                                <div class="col-md-12" data-aos="fade-rift">
                                    <div class="project-card position-relative overflow-hidden">
                                        <img src="{{ asset('img/demo/digital8.webp') }}" alt="Project 2"
                                            class="img-fluid rounded">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <p class="project-category">Digital Marketing</p>
                                                <h3 class="project-title">Website Development</h3>
                                            </div>
                                            <a href="#" class="project-link">
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bottom Right Images -->
                                <div class="col-md-6" data-aos="fade-right">
                                    <div class="project-card position-relative overflow-hidden">
                                        <img src="{{ asset('img/demo/digital9.webp') }}" alt="Project 3"
                                            class="img-fluid rounded">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <p class="project-category">Digital Marketing</p>
                                                <h3 class="project-title">SEO Optimization</h3>
                                            </div>
                                            <a href="#" class="project-link">
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="fade-right">
                                    <div class="project-card position-relative overflow-hidden">
                                        <img src="{{ asset('img/demo/digital10.webp') }}" alt="Project 4"
                                            class="img-fluid rounded">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <p class="project-category">Digital Marketing</p>
                                                <h3 class="project-title">Website Design</h3>
                                            </div>
                                            <a href="#" class="project-link">
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                                    src="{{ asset('img/services/tools/Laravel-framwork-application-development-ambalait.webp') }}"
                                    alt="laravel">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/vuejs-language-application-ambalait.webp') }}"
                                    alt="vuejs">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/python-language-application-ambalait.webp') }}"
                                    alt="python">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/jquary-language-application-ambalait.webp') }}"
                                    alt="jquary">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/php-language-application-ambalait.webp') }}"
                                    alt="php">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-right">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/bootstrap-language-application-ambalait.webp') }}"
                                    alt="bootstrap">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-in">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Sass-language-application-ambalait.webp') }}"
                                    alt="Sass">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/css-language-application-ambalait.webp') }}"
                                    alt="css">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/javascript-language-application-ambalait.webp') }}"
                                    alt="javascript">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/mysql-framwork-application-development-ambalait.webp') }}"
                                    alt="mysql">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Other Services Section -->
            <div class="row align-items-center ambala-section" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center mb-2">
                    <h3 class="ambala_heading">Other services</h3>
                </div>
                <!-- Container for carousel and navigation -->
                <div class="carousel-container position-relative">

                    <!-- Previous Button -->
                    <div class="owl-nav-prev">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="owl-carousel owl-theme service-carousel pl-4 mr-4 p-4">

                        <!-- Service Card 1 -->
                        <div class="item">
                            <div class="card">
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
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Software Development</h4>
                                    <p>Comprehensive software development services from design to deployment.</p>
                                    <a href="{{ route('frontend.services.adaptive-software-development') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 3 -->
                        <div class="item">
                            <div class="card">
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
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Cybersecurity Services</h4>
                                    <p>Protect your organization from threats with our cybersecurity solutions.</p>
                                    <a href="{{ route('frontend.services.cybersecurity-companies') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 5 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Quality Assurance and Testing</h4>
                                    <p>Ensure your software runs smoothly with our quality assurance services.</p>
                                    <a href="{{ route('frontend.services.software-quality-and-assurance') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 6 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Web Development</h4>
                                    <p>Build responsive and scalable web applications with our web development services.</p>
                                    <a href="{{ route('frontend.services.web-application-development-services') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 7 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">API Development</h4>
                                    <p>Build custom APIs to connect your software with other systems effortlessly.</p>
                                    <a href="{{ route('frontend.services.api-development') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 8 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">ERP Solution</h4>
                                    <p>Streamline your business operations with our comprehensive ERP solutions.</p>
                                    <a href="{{ route('frontend.services.enterprise-resource-planning-systems') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 11 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">UI/UX Design</h4>
                                    <p>Boost your online presence with our strategic digital marketing services.</p>
                                    <a href="{{ route('frontend.services.uiux-design-agencies') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 12 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Digital Transformation Consultant </h4>
                                    <p>Boost your online presence with our strategic digital marketing services.</p>
                                    <a href="{{ route('frontend.services.digital-transformation') }}"
                                        class="service-learn-more">See More →</a>
                                </div>
                            </div>
                        </div>


                        <!-- Service Card 10 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">Digital Marketing</h4>
                                    <p>Boost your online presence with our strategic digital marketing services.</p>
                                    <a href="{{ route('frontend.services.digital-marketing-agency') }}"
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
            <!-- Why Choose Webteck Section -->
            <div class="why-choose-section ambala-section bg-white" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Why Choose Ambala
                        </h3>
                        <p class="ambala_sub_heading">The Ambala Advantage</p>
                    </div>
                    <div class="row align-items-center">
                        <!-- Left Image Column -->
                        <div class="col-lg-6  pr-4" data-aos="fade-right" data-aos-duration="1000">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/services/e-commerce/about-us.webp') }}" alt="Why Choose Us Image"
                                    class="img-fluid">
                            </div>
                        </div>

                        <!-- Right Text Content Column -->
                        <div class="col-lg-6 text-start " data-aos="fade-left" data-aos-duration="1000">
                            <div class="title-area mb-5">

                                <p class="ambala_paragraph">At Ambala, we are committed to helping businesses succeed
                                    online with expert e-commerce
                                    development services. Our passionate team is dedicated to helping businesses online with
                                    unique
                                    combination of innovative strategies, client-centric service, and data-driven insights
                                    sets us apart. </p>
                            </div>

                            <!-- Features Section -->
                            <div class="choose-feature-wrap">
                                <!-- Feature 1 -->
                                <div class="choose-feature d-flex align-items-center mb-1" data-aos="fade-up"
                                    data-aos-duration="1000">
                                    <div class="choose-feature_icon me-4 svg_custom ">
                                        <img src="{{ asset('img/services/e-commerce/15676310531552979089.svg') }}"
                                            alt="Feature Icon 1">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Years in the Industry</h5>
                                        <p class="feature-text">With 8 years of proven track record, we’ve helped local
                                            businesses boost their businesses.</p>
                                    </div>
                                </div>

                                <!-- Feature 2 -->
                                <div class="choose-feature d-flex align-items-center mb-1" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="choose-feature_icon me-4 svg_custom ">
                                        <img src="{{ asset('img/services/e-commerce/15342586681683261555.svg') }}"
                                            alt="Feature Icon 2">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Client-Centric Approach</h5>
                                        <p class="feature-text">We take the time to understand client-specific business
                                            goals
                                            and target audiences, ensuring that every strategy we create is tailored to
                                            unique needs. </p>
                                    </div>
                                </div>

                                <!-- Feature 3 -->
                                <div class="choose-feature d-flex align-items-center" data-aos="fade-up"
                                    data-aos-duration="1400">
                                    <div class="choose-feature_icon me-4 svg_custom ">
                                        <img src="{{ asset('img/services/e-commerce/4880975291633054614.svg') }}"
                                            alt="Feature Icon 3">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Data-Driven Approach</h5>
                                        <p class="feature-text">Our strategies are crafted meticulously using data and
                                            analytics, ensuring that every decision is backed by insight and precision.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

@endsection
