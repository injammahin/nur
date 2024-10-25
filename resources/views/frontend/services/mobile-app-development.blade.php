@extends('frontend.app')

@section('title', 'Mobile App Development')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper mt-3">
            <!-- Use the video tag to play the video -->
            <video autoplay muted loop class="img-fluid">
                <source src="{{ asset('/img/services/Mobile/mobile-app-development-banner-ambalait (1).mp4') }}"
                    type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">


            <div id="about  " class="about-app-section">

                <div class="row align-items-center top ambala-section " data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-center ">
                        <h3 class="ambala_heading">Mobile App Development </h3>
                        <p class="ambala_sub_heading">Transform Your Vision into High-Performance Mobile Apps
                        </p>
                    </div>
                    <!-- Left Side: Image -->
                    <div class="col-lg-6">
                        <div class=" text-center">
                            <div class="">
                                <img src="{{ asset('/img/services/Mobile/Login-form-app-development-service-ambalait.webp') }}"
                                    alt="Webteck Main Image" data-aos="fade-right" data-aos-duration="1200"
                                    class="main-image">

                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Text and Content -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="content-box">

                            <p class="ambala_paragraph">
                                We specialize in developing high-performance mobile applications that enhance engagement,
                                improve user
                                experiences, and deliver measurable business outcomes. Our comprehensive mobile application
                                development
                                services encompass every phase, from concept and design to development, testing, and ongoing
                                support.
                                Whether you need a powerful enterprise application, a dynamic consumer-facing application,
                                or something in
                                between, our expert team is dedicated to bringing your vision to life with precision and
                                innovation.

                            </p>



                            <div class="btn-wrapper">
                                <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                        class="fa-solid  me-2"></i>
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="awesome-feature-section ambala-section  aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="1000">
                <div>
                    <!-- Section Title -->
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Awesome Feature</h3>
                        <p class="ambala_sub_heading">Our Awesome app Features</p>
                    </div>

                    <!-- Features Grid -->
                    <div class="row gy-4">
                        <!-- Cyber Security - Fade Right -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/app/20067942981535701994.svg') }}"
                                        alt="Cyber Security Icon">
                                </div>
                                <h3 class="box-title title-selector">User-Centered Design</h3>
                                <p class="feature-card_text desc-selector">We prioritize intuitive, accessible, and visually
                                    appealing designs that
                                    ensure seamless user experiences across all devices. </p>
                            </div>
                        </div>

                        <!-- Cloud Integration -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-right" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/app/14576486211579838419.svg') }}"
                                        alt="Cloud Integration Icon">
                                </div>
                                <h3 class="box-title title-selector">Cross-Platform Development</h3>
                                <p class="feature-card_text desc-selector">Build apps for both iOS and Android with
                                    technologies like
                                    React Native and Flutter, offering native-like performance while reducing development
                                    time and
                                    costs. </p>
                            </div>
                        </div>

                        <!-- Managed IT Services -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/app/2100679991579330134.svg') }}"
                                        alt="Managed IT Services Icon">
                                </div>
                                <h3 class="box-title title-selector">Agile Development Approach</h3>
                                <p class="feature-card_text desc-selector"> Using an agile methodology, we deliver
                                    high-quality apps on
                                    time and within budget, with regular feedback and collaboration to meet your evolving
                                    needs. </p>
                            </div>
                        </div>


                        <!-- Data Analytics -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/app/15319197701608486010.svg') }}"
                                        alt="Data Analytics Icon">
                                </div>
                                <h3 class="box-title title-selector">Security & Compliance</h3>
                                <p class="feature-card_text desc-selector">We implement strong security measures, including
                                    encryption and
                                    secure authentication, to protect your app and ensure compliance with industry
                                    standards. </p>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
            <div id="why-choose-app " class="why-choose-section ambala-section bg-white" data-aos="fade-up"
                data-aos-duration="1000">
                <div>
                    <div class="row">
                        <!-- Section Title -->
                        <div class="col-12 text-center">
                            <div class="title-area-wrap">
                                <div class="title-area">
                                    <h3 class="ambala_heading">Why ambala Is The Right Choice For You

                                    </h3>
                                    <p class="ambala_sub_heading">Boost your software development A-team with Ambala's
                                        personalized QA testing solutions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <!-- Left Column Features -->
                        <div class="col-lg-4">
                            <div class="why-feature-wrap">
                                <div class="about-feature style3">
                                    <div class="about-feature_icon" data-aos="fade-right" data-aos-duration="1000">
                                        <img src="{{ asset('img/services/QA/21367282501582960206.svg') }}"
                                            alt="Extensions & Addons">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Custom App Design
                                        </h3>
                                        <p class="ambala_paragraph about-feature_text"> Tailored UI/UX design to ensure a
                                            seamless and intuitive user
                                            experience, matching your brand’s identity.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature style3" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="about-feature_icon">
                                        <img src="{{ asset('img/services/QA/5316540931691579386.svg') }}"
                                            alt="Fast & Easy">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Native App Development</h3>
                                        <p class="ambala_paragraph about-feature_text">Develop apps specifically for iOS
                                            and Android platforms to
                                            maximize performance, security, and functionality. </p>
                                    </div>
                                </div>
                                <div class="about-feature style3" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="about-feature_icon">
                                        <img src="{{ asset('img/services/QA/10591195111582985670.svg') }}"
                                            alt="Fast & Easy">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Cloud Integration</h3>
                                        <p class="ambala_paragraph about-feature_text">Seamlessly integrate cloud-based
                                            services to enable real-time data
                                            access, scalability, and backup solutions.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature style3" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="about-feature_icon">
                                        <img src="{{ asset('img/services/QA/20080744421638245632.svg') }}"
                                            alt="Fast & Easy">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Push Notifications</h3>
                                        <p class="ambala_paragraph about-feature_text">Implement targeted push
                                            notifications to keep users engaged and
                                            informed in real time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Center Image -->
                        <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ asset('/img/services/Mobile/Sign-form-app-development-service-ambalait.webp') }}"
                                alt="WebTeck Wallet" class="main-image">
                        </div>

                        <!-- Right Column Features -->
                        <div class="col-lg-4">
                            <div class="why-feature-wrap">
                                <div class="about-feature style3">
                                    <div class="about-feature_icon"data-aos="fade-right" data-aos-duration="1000">
                                        <img src="{{ asset('img/services/QA/4366683951650441429.svg') }}"
                                            alt="Friendly Interface">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class=" box-title ">API Integrations </h3>
                                        <p class="ambala_paragraph about-feature_text"> Integrate third-party services,
                                            such as payment gateways, social media,
                                            and analytics tools, for enhanced functionality. </p>
                                    </div>
                                </div>
                                <div class="about-feature style3">
                                    <div class="about-feature_icon" data-aos="fade-right" data-aos-duration="1000">
                                        <img src="{{ asset('img/services/QA/11904956311638269307.svg') }}"
                                            alt="Saved Replies">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Offline Functionality</h3>
                                        <p class="ambala_paragraph about-feature_text"> Ensure core features of the app are
                                            accessible even when users are
                                            offline, improving usability. </p>
                                    </div>
                                </div>
                                <div class="about-feature style3">
                                    <div class="about-feature_icon" data-aos="fade-right" data-aos-duration="1000">
                                        <img src="{{ asset('img/services/QA/9629104131684494549.svg') }}"
                                            alt="Saved Replies">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Testing and Performance Optimization</h3>
                                        <p class="ambala_paragraph about-feature_text"> Conduct thorough testing and
                                            optimize the app for
                                            speed, smooth functionality, and battery efficiency to deliver an excellent user
                                            experience.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature style3">
                                    <div class="about-feature_icon" data-aos="fade-right" data-aos-duration="1000">
                                        <img src="{{ asset('img/services/QA/128776831616362720715005.svg') }}"
                                            alt="Saved Replies">
                                    </div>
                                    <div class="media-body" data-aos="fade-right" data-aos-duration="1000">
                                        <h3 class="box-title">Support and Maintenance</h3>
                                        <p class="ambala_paragraph about-feature_text"> Provide continuous updates, bug
                                            fixes, and performance
                                            improvements post-launch to keep the app running smoothly and up-to-date. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="screenshots ambala-section " class="screenshots-section ambala-section  " data-aos="fade-down"
                data-aos-duration="1000">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12 p-3">
                            <!-- Section Title -->
                            <h3 class="ambala_heading">SCREENSHOTS</h3>
                            <p class="ambala_sub_heading">Let’s See Our App Screenshots</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Swiper Container -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- Swiper Slides -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/account-details-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/account-information-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/application-development-ambalait.webp') }}"
                                            alt="Screenshot 3">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/customer-details-emi-manager-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 4">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/emi-manager-account-details-page-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 5">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/emi-manager-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 6">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/employee-location-HR-development-service-ambalait.webp') }}"
                                            alt="Screenshot 7">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/employee-Status-HR-and-payroll-service-ambalait.webp') }}"
                                            alt="Screenshot 8">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/loan-details-page-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 9">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/loan-shedule-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 10">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/Login-form-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 11">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/Project-status-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 12">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/Setting page-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 13">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/Sign-form-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 14">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('/img/services/Mobile/transation-details-app-development-service-ambalait.webp') }}"
                                            alt="Screenshot 15">
                                    </div>

                                </div>

                                <!-- Pagination (dots) -->
                                <div class="swiper-pagination"></div>

                                <!-- Navigation Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Work Process Section -->
            <div class="work-process-section ambala-section bg-white position-relative" data-aos="fade-right"
                data-aos-duration="1000">
                <div>
                    <!-- Title -->
                    <div class="text-center mb-5" data-aos="fade-up">
                        <h3 class="ambala_heading animate__animated animate__fadeInDown">Our Work Process</h3>
                        <p class="ambala_sub_heading animate__animated animate__fadeInUp">Our work process combines
                            collaboration, innovation, and agility to
                            deliver high-quality software solutions.</p>
                    </div>

                    <!-- Main Row -->
                    <div class="row">
                        <!-- Steps Navigation -->
                        <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-right">
                            <div class="nav flex-column nav-pills me-3 steps-nav" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="step-01-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-01" type="button" role="tab" aria-controls="step-01"
                                    aria-selected="true">
                                    <span class="step">STEP-01</span> Analysis
                                </button>
                                <button class="nav-link" id="step-02-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-02" type="button" role="tab" aria-controls="step-02"
                                    aria-selected="false">
                                    <span class="step">STEP-02</span> Planning
                                </button>
                                <button class="nav-link" id="step-03-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-03" type="button" role="tab" aria-controls="step-03"
                                    aria-selected="false">
                                    <span class="step">STEP-03</span> Execution
                                </button>
                                <button class="nav-link" id="step-04-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-04" type="button" role="tab" aria-controls="step-04"
                                    aria-selected="false">
                                    <span class="step">STEP-04</span> Testing & Revision
                                </button>
                                <button class="nav-link" id="step-05-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-05" type="button" role="tab" aria-controls="step-05"
                                    aria-selected="false">
                                    <span class="step">STEP-05</span> Delivery
                                </button>
                                <button class="nav-link" id="step-06-tab" data-bs-toggle="pill"
                                    data-bs-target="#step-06" type="button" role="tab" aria-controls="step-06"
                                    aria-selected="false">
                                    <span class="step">STEP-06</span> Support
                                </button>
                            </div>
                        </div>

                        <!-- Tab Content -->
                        <div class="col-lg-8 text-start" data-aos="fade-left">
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- Step 01 - Analysis -->
                                <div class="tab-pane fade show active animate__animated animate__fadeIn" id="step-01"
                                    role="tabpanel" aria-labelledby="step-01-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-md-7 pl-4">
                                                <h4>Analysis</h4>
                                                <p>We thoroughly analyze your project needs and requirements to ensure we
                                                    understand your
                                                    business goals and objectives.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Comprehensive
                                                        Needs Assessment</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Defining
                                                        Project Scope</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Functional
                                                        Requirements</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Competitive
                                                        Analysis</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Validation &
                                                        Documentation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/Analysis-ambalait.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 02 - Planning -->
                                <div class="tab-pane fade animate__animated animate__fadeIn" id="step-02"
                                    role="tabpanel" aria-labelledby="step-02-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-md-7 pl-4">
                                                <h4>Planning</h4>
                                                <p>We create a detailed project plan with timelines, milestones, and
                                                    resource allocation to ensure
                                                    seamless execution.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Detailed
                                                        Project Plan</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Setting Goals
                                                        and Milestones</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Resource
                                                        Allocation</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Methodology
                                                        Selection</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/Planning-ambalait.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 03 - Execution -->
                                <div class="tab-pane fade animate__animated animate__fadeIn" id="step-03"
                                    role="tabpanel" aria-labelledby="step-03-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-md-7 pl-4">
                                                <h4>Execution</h4>
                                                <p>Our team begins implementing the project, following the defined plan
                                                    while maintaining
                                                    flexibility for changes.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Precise
                                                        Implementation</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Agile Project
                                                        Management</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Team
                                                        Coordination</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Continuous
                                                        Monitoring</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Stakeholder
                                                        Feedback</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/executing.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 04 - Testing & Revision -->
                                <div class="tab-pane fade animate__animated animate__fadeIn" id="step-04"
                                    role="tabpanel" aria-labelledby="step-04-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-md-7 pl-4">
                                                <h4>Testing & Revision</h4>
                                                <p>Provide a structured approach to the testing and revision phase in
                                                    software development,
                                                    ensuring quality, functionality, and alignment with user needs.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Testing
                                                        Strategy Development</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> System
                                                        Integration Testing</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> User
                                                        Acceptance Testing (UAT)</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Bug Tracking
                                                        and Management</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Documentation
                                                        of Final Revisions and Refinements</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/testing-ambalait.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 05 - Delivery -->
                                <div class="tab-pane fade animate__animated animate__fadeIn" id="step-05"
                                    role="tabpanel" aria-labelledby="step-05-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-md-7 pl-4">
                                                <h4>Delivery</h4>
                                                <p>Providing a structured approach to the delivery phase in software
                                                    development, ensuring a smooth
                                                    transition to the new software, and addressing user needs effectively.
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Training
                                                        Sessions</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Deployment
                                                        Planning & User Documentation</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Implement
                                                        monitoring tools for performance</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>
                                                        Post-Deployment Review</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Feedback
                                                        Mechanisms</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/Software-delivery-ambalait.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 06 - Support -->
                                <div class="tab-pane fade animate__animated animate__fadeIn" id="step-06"
                                    role="tabpanel" aria-labelledby="step-06-tab">
                                    <div class="card border-0 shadow-sm p-4 rounded-card" data-aos="fade-up">
                                        <div class="row ">
                                            <div class="col-md-7 pl-4">
                                                <h4>Support</h4>
                                                <p>We ensure that comprehensive support and maintenance services ensure that
                                                    the software
                                                    performs optimally and evolves business needs.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Technical
                                                        Assistance</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Maintenance
                                                        Services</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Feedback
                                                        Collection</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Performance
                                                        Monitoring</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Emergency
                                                        Support</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('img/services/software/software-support-ambalait.webp') }}"
                                                    alt="Work Process Image" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
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
                                    src="{{ asset('img/services/tools/android-language-app-development-ambalait.webp') }}"
                                    alt="android">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/ios-language-application-ambalait.webp') }}"
                                    alt="IOS">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Visual-studio-application-development-ambalait.webp') }}"
                                    alt="vs code">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-right">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/firebase-language-application-ambalait.webp') }}"
                                    alt="firebase">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-in">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Mongodb-language-application-ambalait.webp') }}"
                                    alt="Mongodb">
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
            <div class="row align-items-center ambala-section " data-aos="fade-up" data-aos-duration="1000">
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

                    </div>
                    <!-- Carousel Navigation Icons -->

                    <!-- Next Button -->
                    <div class="owl-nav-next">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="ambala-section   text-center" data-aos="fade-up" data-aos-duration="1000">

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

                        <span class="text-uppercase text-danger">Who We Are</span>
                        <h1 class="custom-service-headline">We’re Building Modern And High Quality <span
                                class="custom_heading">Mobile</span>Applications</h1>
                        <p class="text-muted">
                            Partner with Ambala IT to bring your mobile application vision to life. Our client-first
                            approach,
                            technical
                            expertise, and passion for innovation ensure that we deliver applications that not only meet
                            your
                            expectations
                            but drive your business forward. Let us turn your ideas into a powerful, transformative mobile
                            app that
                            sets your business apart. Contact us today to initiate your project!
                        </p>

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
    <!-- Scripts for AOS Animation and Animated Counter -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true, // Infinite looping
            centeredSlides: true, // This centers the active slide
            autoplay: {
                delay: 2500, // Auto-slide every 2.5 seconds
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: 1, // Show 1 slide on small screens
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 1, // Show 1 slide on medium screens
                    centeredSlides: true,
                },
                992: {
                    slidesPerView: 2, // Show 2 slides on large screens
                },
                1200: {
                    slidesPerView: 3, // Show 3 slides on extra large screens
                },
                1400: {
                    slidesPerView: 4, // Show 4 slides on extra extra large screens
                },
            },
        });
    </script>






@endsection
