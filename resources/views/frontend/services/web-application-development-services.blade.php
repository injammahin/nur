@extends('frontend.app')

@section('title', 'Web Development')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('img/services/web/Web-Development-service-ambalait.webp') }}" alt="Service Banner"
                class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section class="container">
        <!-- Service Details Section -->
        <div class=" service-details-section top ambala-section ">
            <div class="row align-items-center">
                <h3 class="ambala_heading">Web Application Development
                </h3>
                <!-- Text Content -->
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">

                    <p class="ambala_paragraph">At Ambala IT, we leverage the latest IT innovations to create custom,
                        cutting-edge web and mobile
                        applications that enhance our client's competitive advantage and drive business efficiency.
                        Specializing in web application development, we empower businesses to thrive in the digital
                        landscape.
                        Whether you require a simple content-rich website or a complex, dynamic web application, our
                        expert
                        team is ready to turn your vision into reality</p>
                    <p class="ambala_paragraph">We combine technical expertise, creative design, and strategic thinking
                        to develop web applications that
                        not only look exceptional but also deliver measurable business results. With extensive
                        experience across
                        various industries, including e-commerce, healthcare, finance, education. our
                        industry specific expertise allows us to understand your unique challenges. </p>
                    <div class="btn-wrapper">
                        <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i class="fa-solid  me-2"></i>
                            Free Quote</a>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('img/services/web/web-application-development-services-ambalait.webp') }}"
                        class="custom-img" alt="Web Development Illustration">
                </div>
            </div>
        </div>
        <!-- Features Section -->
        <div class="features-section ambala-section  text-center">
            <div class="features">
                <h2 class="ambala_heading">Services</h2>
                <p class="ambala_sub_heading">
                    Transforming ideas into immersive digital experiences—where every click counts!

                </p>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <!-- Feature Item 1 -->
                    <div class="col wow animate__animated animate__zoomIn">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/Custom-Web-Application-Development-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold  text-danger">Custom Web Application Development
                                </h5>
                                <p class="card-text text-muted"> Business with custom-built web applications designed
                                    to meet your exact goals. From idea to execution, our solutions are tailored to enhance
                                    operational efficiency.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 2 -->
                    <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/Progressive-Web-Applications-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold  text-danger">Progressive Web Applications (PWA)
                                </h5>
                                <p class="card-text text-muted">
                                    Experience the future of digital interactions with PWAs, which
                                    merge web and mobile technologies to provide lightning-fast load times and seamless
                                    offline
                                    capabilities.

                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 3 -->

                    <div class="col wow animate__animated animate__zoomIn">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/E-commerce-Development-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold t text-danger">E-commerce Solutions</h5>
                                <p class="card-text text-muted"> Boost your online sales with user-friendly scalable and
                                    secure ecommerce platforms featuring integrated payment gateways and real-time
                                    inventory.

                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 4 -->
                    <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/Single-Page -applications-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 4">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Single Page Applications (SPA)</h5>
                                <p class="card-text text-muted">Boost speed and user engagement with single-page
                                    applications. SPAs
                                    deliver quick load times, smooth navigation, and a highly responsive user interface.
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 5 -->
                    <div class="col wow animate__animated animate__zoomIn">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/cms-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 5">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title  fw-bold text-danger">
                                    Custom Content Management Systems (CMS) </h5>
                                <p class="card-text text-muted"> Take control of your website with intuitive, custom CMS
                                    solutions that
                                    allow you to manage, publish, optimize, and maintain full oversight of your digital
                                    assets.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 6 -->
                    <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/api-development-and-integration-service-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 6">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">
                                    API Development & Integration</h5>
                                <p class="card-text text-muted">: Extend the capabilities of your web applications with our
                                    expert API
                                    development and integration. we create robust APIs to connect the digital ecosystem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 7 -->
                    <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/Responsive-web-Design-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 7">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title fw-bold text-danger">Responsive Web Design</h4>
                                <p class="card-text text-muted"> Drive engagement with responsive web designs that adapt
                                    flawlessly to any
                                    screen size. We ensure a visually stunning and consistently high-performing experience
                                    on all devices. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item 8 -->
                    <div class="col wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="card h-100 text-center border-0 p-3 feature-card">
                            <div class="card-img-top feature-img mb-3">
                                <img src="{{ asset('img/services/web/feature/Support-Services-ambalait.webp') }}"
                                    style="    height: 75px !important;" class="img-fluid zoom-on-hover rounded"
                                    alt="Feature 8">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Maintenance & Support Services</h5>
                                <p class="card-text text-muted">: Ensure your web applications run smoothly with our
                                    comprehensive
                                    maintenance and support services that keep them operating like clockwork.</p>
                            </div>
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
                        collaboration, innovation, and agility to deliver high-quality software
                        solutions.</p>
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
                            <button class="nav-link" id="step-02-tab" data-bs-toggle="pill" data-bs-target="#step-02"
                                type="button" role="tab" aria-controls="step-02" aria-selected="false">
                                <span class="step">STEP-02</span> Planning
                            </button>
                            <button class="nav-link" id="step-03-tab" data-bs-toggle="pill" data-bs-target="#step-03"
                                type="button" role="tab" aria-controls="step-03" aria-selected="false">
                                <span class="step">STEP-03</span> Execution
                            </button>
                            <button class="nav-link" id="step-04-tab" data-bs-toggle="pill" data-bs-target="#step-04"
                                type="button" role="tab" aria-controls="step-04" aria-selected="false">
                                <span class="step">STEP-04</span> Testing & Revision
                            </button>
                            <button class="nav-link" id="step-05-tab" data-bs-toggle="pill" data-bs-target="#step-05"
                                type="button" role="tab" aria-controls="step-05" aria-selected="false">
                                <span class="step">STEP-05</span> Delivery
                            </button>
                            <button class="nav-link" id="step-06-tab" data-bs-toggle="pill" data-bs-target="#step-06"
                                type="button" role="tab" aria-controls="step-06" aria-selected="false">
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
                            <div class="tab-pane fade animate__animated animate__fadeIn" id="step-02" role="tabpanel"
                                aria-labelledby="step-02-tab">
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
                            <div class="tab-pane fade animate__animated animate__fadeIn" id="step-03" role="tabpanel"
                                aria-labelledby="step-03-tab">
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
                            <div class="tab-pane fade animate__animated animate__fadeIn" id="step-04" role="tabpanel"
                                aria-labelledby="step-04-tab">
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
                            <div class="tab-pane fade animate__animated animate__fadeIn" id="step-05" role="tabpanel"
                                aria-labelledby="step-05-tab">
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
                            <div class="tab-pane fade animate__animated animate__fadeIn" id="step-06" role="tabpanel"
                                aria-labelledby="step-06-tab">
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
                <div class="owl-carousel owl-theme service-carousel pl-4 mr-4">

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


                    <!-- Service Card 7 -->
                    <div class="item">
                        <div class="card">
                            <div class="service-card p-4">
                                <h4 class="service-heading">API Development</h4>
                                <p>Build custom APIs to connect your software with other systems effortlessly.</p>
                                <a href="{{ route('frontend.services.api-development') }}" class="service-learn-more">See
                                    More →</a>
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
        <div class="ambala-section  text-center" data-aos="fade-right" data-aos-duration="1000">

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

                        <div class="web-floating-box-3" data-aos="fade-right" data-aos-duration="1200">
                            <div class="">

                                <img src="{{ asset('img/services/software/arrow.webp') }}" alt="Chart">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 offset-lg-1 text-start position-relative" data-aos="fade-up"
                    data-aos-duration="1000">

                    <span class="text-uppercase text-danger">Who We Are</span>
                    <h3 class="custom-service-headline">Elevate Your Business Success with Tailored <span
                            class="ambala_heading">Web Consulting </span> Solutions</h3>
                    <p class="ambala_paragraph">
                        Innovative Web Development Solutions to Drive Your Success
                        We have a team of web development experts who are committed to your success. With a customer focused
                        approach and extensive technical knowledge, we take pride in delivering high-quality,
                        innovative solutions that not only produce results but also surpass expectations. Our goal is to
                        develop
                        web applications that are both functional and impactful, empowering your business in the digital
                        world.
                        Join forces with us to start a collaborative journey toward reaching your objectives.

                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-primary"></i>We are making every business grow
                        </li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i> Defining
                            Project Scope</li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i>Superuser and easy-to-use interface
                        </li>
                        <li><i class="bi bi-check-circle-fill text-primary"></i>The easiest way to grow your business in
                            days </li>

                    </ul>
                    </p>



                    <div class="cta-buttons" data-aos="fade-up" data-aos-duration="1200">


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
    </section>

    </section>

@endsection
