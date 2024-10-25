@extends('frontend.app')

@section('title', 'Digital Marketing Agency')

@section('content')
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('img/services/digital/digital-marketing-agency-ambalait.webp') }}" alt="Service Banner"
                class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add any additional text if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Section with Animated Counter and AOS Animations -->
    <section class="ditigal-marketing">
        <div class="container ">
            <div class="row align-items-center top ambala-section" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center mb-5">
                    <h3 class="ambala_heading">Who We Are And What We Do</h3>
                    <p class="ambala_sub_heading">Infusing Passion Into Digital Marketing For Impactful Solutions</p>
                </div>
                <!-- Left Image Column -->
                <div class="col-lg-6 d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row g-3">
                        <!-- First Image -->
                        <div class="col-md-6">
                            <img src="{{ asset('img/services/digital/digital1.webp') }}" alt="Image 1"
                                class="img-fluid shadow-lg"
                                style="height: 500px !important; width: 100%; object-fit: cover; border-radius:15px;">
                        </div>

                        <!-- Second Image with Badge -->
                        <div class="col-md-6 position-relative">
                            <img src="{{ asset('img/services/digital/digital2.webp') }}" alt="Image 2"
                                class="img-fluid shadow-lg"
                                style="height: 500px !important; width: 100%; object-fit: cover; border-radius:15px;">
                        </div>
                    </div>
                </div>

                <!-- Right Text Content Column -->
                <div class="col-lg-6 text-start" data-aos="fade-left" data-aos-duration="1000">

                    <p class="ambala_paragraph">
                        We bring creativity, strategy, and passion together to deliver powerful digital marketing solutions
                        that
                        make a lasting impact. Let us help you elevate your brand and connect with your audience in
                        meaningful
                        ways.
                    </p>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <ul class="list-unstyled">

                                <li class="ambala_paragraph"><img decoding="async" class=" ambala_paragraph p-2"
                                        src="https://wordpress.themeholy.com/webteck/wp-content/uploads/2024/07/check_4.svg"
                                        alt="Webteck"> Search Engine Optimization</li>
                                <li class="ambala_paragraph"><img decoding="async" class="p-2"
                                        src="https://wordpress.themeholy.com/webteck/wp-content/uploads/2024/07/check_4.svg"
                                        alt="Webteck"> Pay-Per-Click Advertising</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="ambala_paragraph"><img decoding="async"class="p-2"
                                        src="https://wordpress.themeholy.com/webteck/wp-content/uploads/2024/07/check_4.svg"
                                        alt="Webteck"> Pay-Per-Click Advertising</li>
                                <li class="ambala_paragraph"><img decoding="async"class="p-2"
                                        src="https://wordpress.themeholy.com/webteck/wp-content/uploads/2024/07/check_4.svg"
                                        alt="Webteck"> Content Marketing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-wrapper">
                        <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i class="fa-solid  me-2"></i>
                            Free Quote</a>
                    </div>
                </div>
            </div>
            <!-- Service Cards Section with Owl Carousel -->
            <div class="row align-items-center ditigal-marketing ambala-section" data-aos="fade-down"
                data-aos-duration="1000">
                <div class="text-center ">
                    <h3 class="ambala_heading">Our services</h3>
                    <p class="ambala_sub_heading">Complete Digital Marketing Solutions</p>
                </div>
                <!-- Carousel Container -->
                <div class="carousel-container position-relative">

                    <!-- Previous Button -->
                    <div class="owl-nav-prev">
                        <i class="bi bi-arrow-left"></i>
                    </div>

                    <div class="owl-carousel owl-theme service-carousel">


                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Digital-Marketing-Strategy-Development.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Digital Marketing Strategy Development</h5>
                                    <p class="card-text left"> Tailored strategies aligned with business goals
                                        and audience needs. </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 2 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Search-Engine-Optimization.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Search Engine Optimization (SEO)</h5>
                                    <p class="card-text left">Boosting website ranking through on-page
                                        optimization, link building, and keyword research. </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service Card 3 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Pay-Per-Click-Advertising.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Pay-Per-Click (PPC) Advertising</h5>
                                    <p class="card-text left">Managing PPC campaigns on platforms like Google Ads
                                        to drive targeted traffic and maximize ROI.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 4 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Social-Media-Management.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Social Media Management</h5>
                                    <p class="card-text left"> Creating and managing social media campaigns to engage and
                                        grow your audience. </p>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 5 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Content-Marketing.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Content Marketing</h5>
                                    <p class="card-text left"> Developing engaging content like blogs, infographics, and
                                        videos
                                        to
                                        attract and retain customers. </p>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 6 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-Email-Marketing.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Email Marketing</h5>
                                    <p class="card-text left">Crafting and automating email campaigns to nurture leads and
                                        drive
                                        conversions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 7 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-campaign-Analytics-and-Reporting.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Analytics and Reporting</h5>
                                    <p class="card-text left">Measuring performance and providing insights through data
                                        analysis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Service Card 8 -->
                        <div class="item">
                            <div class="card shadow-lg">
                                <div class="card-img-wrapper position-relative">
                                    <!-- Background Image -->
                                    <img class="card-img-top p-4 rounnded"
                                        src="{{ asset('img/services/digital/ambalait-CRO-report.webp') }}"
                                        alt="Email Marketing">

                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">Conversion Rate Optimization (CRO)</h5>
                                    <p class="card-text left">Optimizing website elements to improve user experience and
                                        increase conversions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Next Button -->
                    <div class="owl-nav-next">
                        <i class="bi bi-arrow-right"></i>
                    </div>

                </div>


            </div>
            <div class="row align-items-center ambala-section bg-white" data-aos="fade-left" data-aos-duration="1000">
                <div class="col-12 text-center mb-5">
                    <h3 class="ambala_heading">Steps of Digital Marketing</h3>
                    <p class="ambala_sub_heading">From strategy to success, our digital marketing steps are designed to
                        drive
                        impactful results at every
                        stage.
                    </p>
                </div>
                <div class="col-12 text-center">
                    <img src="{{ asset('img/services/digital/Steps-of-Digital-Marketing-ambalait.webp') }}"
                        alt="Steps of Digital Marketing" style="width: 500px;" class="img-fluid mx-auto d-block">
                </div>
            </div>

            <!-- Awesome Feature with Owl Carousel -->
            <div class="awesome-feature-section ambala-section" data-aos="fade-rigt" data-aos-duration="1000">
                <div class="">
                    <!-- Section Title -->
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Our Features</h3>
                        <p class="ambala_sub_heading">your brand with our comprehensive digital marketing features
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="row gy-4 ">
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-right">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/21391124161638269324.svg') }}"
                                        alt="Feature Icon 1">
                                </div>
                                <h3 class="box-title title-selector">Strategy Development</h3>
                                <p class="feature-card_text desc-selector"> Crafting data-driven, customized digital
                                    marketing strategies tailored to
                                    client's unique needs and objectives.</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-up">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/18438166451678855809.svg') }}"
                                        alt="Feature Icon 2">
                                </div>
                                <h3 class="box-title title-selector">SEO Expertise</h3>
                                <p class="feature-card_text desc-selector">Offering advanced search engine optimization
                                    services to boost clients' organic
                                    visibility and improve search rankings. </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="zoom-in">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/15909504461639642581.svg') }}"
                                        alt="Feature Icon 3">
                                </div>
                                <h3 class="box-title title-selector">PPC Campaigns</h3>
                                <p class="feature-card_text desc-selector">Managing high-impact pay-per-click advertising
                                    campaigns to drive targeted traffic
                                    and maximize ROI. </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-left">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/19792821141605806466.svg') }}"
                                        alt="Feature Icon 4">
                                </div>
                                <h3 class="box-title title-selector">Social Media Marketing</h3>
                                <p class="feature-card_text desc-selector">Creating and executing effective social media
                                    strategies that grow
                                    followers, enhance engagement, and build brand awareness. </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-right">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/15883537481650784317.svg') }}"
                                        alt="Feature Icon 1">
                                </div>
                                <h3 class="box-title title-selector">conversion Optimization</h3>
                                <p class="feature-card_text desc-selector">Improving website design and functionality to
                                    maximize lead generation
                                    and sales conversions.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-up">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/20185881511694184836.svg') }}"
                                        alt="Feature Icon 2">
                                </div>
                                <h3 class="box-title title-selector">Data Analytics & Reporting</h3>
                                <p class="feature-card_text desc-selector">Providing clients with detailed performance
                                    tracking and actionable
                                    insights to optimize ongoing campaigns.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="zoom-in">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/12804753761639555194.svg') }}"
                                        alt="Feature Icon 3">
                                </div>
                                <h3 class="box-title title-selector">Reputation Management</h3>
                                <p class="feature-card_text desc-selector">Proactively managing and enhancing clients'
                                    online reputation through
                                    monitoring and positive engagement. </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2" data-aos="fade-left">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/digital/12830932311579838420.svg') }}"
                                        alt="Feature Icon 4">
                                </div>
                                <h3 class="box-title title-selector">Full-Service Support</h3>
                                <p class="feature-card_text desc-selector">Offering end-to-end digital marketing services,
                                    from strategy to execution and
                                    ongoing optimization.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Why Choose Webteck Section -->
            <div class="why-choose-section ambala-section bg-white" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Why Choose Ambala</h3>
                        <p class="ambala_sub_heading">The Ambala Advantage</p>
                    </div>
                    <div class="row align-items-center">
                        <!-- Left Image Column -->
                        <div class="col-lg-6  pr-4" data-aos="fade-right" data-aos-duration="1000">
                            <div class="image-wrapper">
                                <img src="{{ asset('img/services/digital/about-us.webp') }}" alt="Why Choose Us Image"
                                    class="img-fluid">
                            </div>
                        </div>

                        <!-- Right Text Content Column -->
                        <div class="col-lg-6 text-start" data-aos="fade-left" data-aos-duration="1000">
                            <div class="title-area mb-5">

                                <p class="ambala_paragraph">At Ambala, we’re more than just a digital marketing
                                    agency—we’re a dedicated team passionate about
                                    helping businesses succeed online. Our blend of innovative strategies, client-focused
                                    service, and data-driven insights sets us apar</p>
                            </div>

                            <!-- Features Section -->
                            <div class="choose-feature-wrap">
                                <!-- Feature 1 -->
                                <div class="choose-feature d-flex align-items-center mb-1" data-aos="fade-up"
                                    data-aos-duration="1000">
                                    <div class=" me-4 ">
                                        <img src="{{ asset('img/services/digital/186834117516376536136724.svg') }}"
                                            alt="Feature Icon 1">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Years in the Industry</h5>
                                        <p class="feature-text">We have helped local businesses increase their social media
                                            engagement by
                                            300% within a year. </p>
                                    </div>
                                </div>

                                <!-- Feature 2 -->
                                <div class="choose-feature d-flex align-items-center mb-1" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="choose-feature_icon me-4 svg_custom ">
                                        <img src="{{ asset('img/services/digital/900462271639478447.svg') }}"
                                            alt="Feature Icon 2">
                                    </div>

                                    <div class="media-body">
                                        <h5 class="box-title">Client-Centric Approach</h5>
                                        <p class="feature-text">We take the time to deeply understand your specific
                                            business goals
                                            and target audience, ensuring every strategy is tailored to your needs.</p>
                                    </div>
                                </div>

                                <!-- Feature 3 -->
                                <div class="choose-feature d-flex align-items-center" data-aos="fade-up"
                                    data-aos-duration="1400">
                                    <div class="choose-feature_icon me-4 svg_custom ">
                                        <img src="{{ asset('img/services/digital/18348536081640501793.svg') }}"
                                            alt="Feature Icon 3">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Data-Driven Approach</h5>
                                        <p class="feature-text"> We don’t rely on guesswork—our strategies are meticulously
                                            crafted
                                            using data and analytics, ensuring every decision is backed by insight and
                                            precision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Discover Our Latest Projects Section -->
            {{-- <div class="projects-section ambala-section bg-white" data-aos="fade-down" data-aos-duration="1000">
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
                                <img src="{{ asset('/img/services/digital/lead-generate-campaign-service-ambalait.webp') }}"
                                    alt="Project 1" class="img-fluid rounded">
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
                                        <img src="{{ asset('/img/services/digital/local-seo-and-ppc-marketing-agency-ambalait.webp') }}"
                                            alt="Project 2" class="img-fluid rounded">
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
                                        <img src="{{ asset('/img/services/digital/Paid-marketing-ppc-googleads-ambalait.webp') }}"
                                            alt="Project 3" class="img-fluid rounded">
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
                                        <img src="{{ asset('/img/services/digital/Social-media-marketing-ambalait.webp') }}"
                                            alt="Project 4" class="img-fluid rounded">
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
                    <div class="owl-carousel owl-theme service-carousel pl-4 mr-4 ">

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

                        <!-- Service Card 9 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">E-commerce Development</h4>
                                    <p>Create a high-converting online store with our e-commerce development services.</p>
                                    <a href="{{ route('frontend.services.build-ecommerce-websites') }}"
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


                    </div>
                    <!-- Carousel Navigation Icons -->

                    <!-- Next Button -->
                    <div class="owl-nav-next">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <div class="container">
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading">Latest Article's</h3>
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
