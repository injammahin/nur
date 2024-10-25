@extends('frontend.app')

@section('title', 'IT Consulting')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('img/services/it/it-consulting-services-ambalait-software-company.webp') }}"
                alt="Service Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">

            <div class="awesome-feature-section top ambala-section aos-init aos-animate " data-aos="fade-down"
                data-aos-duration="1000">

                <div class="row align-items-center" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Left Section: Text -->
                    <h3 class="ambala_heading">Overview</h3>
                    <p class="ambala_sub_heading">We Deliver Consumer Centric Tech Solutions.</p>
                    <div class="col-lg-6">
                        <div class="content">

                            <p class="ambala_paragraph">
                                At Ambala IT, we offer expert IT consulting services tailored to your needs. Our team of
                                skilled IT consultants works closely with you to develop customized solutions that drive
                                innovation, improve operations, and maximize profitability.
                            </p>
                            <p class="ambala_paragraph">Our IT consulting services cater to various industries, including
                                finance, healthcare,
                                retail, manufacturing, and more. With a deep understanding of industry-specific challenges
                                and regulatory requirements, we provide solutions that are both effective and compliant.</p>
                            </ul>
                            <div class="btn-wrapper">
                                <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                        class="fa-solid  me-2"></i>
                                    Free Quote</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section: Image Group -->
                    <div class="col-lg-6 text-center position-relative  wow animate__animated animate__fadeInRight d-none d-lg-block"
                        style="top:150px">
                        <!-- Background Shape -->
                        <div class="img1"><img src="{{ asset('img/services/it/it-consulting-office-ambalait.webp') }}"
                                alt="Tech Image 1" data-aos="fade-right" data-aos-duration="1200">
                        </div>
                        <div class="img2"><img src="{{ asset('img/services/it/it-consulting-office-ambalait2.webp') }}"
                                alt="Tech Image 2" data-aos="fade-up" data-aos-duration="1200">
                        </div>
                        <div class="img3"><img src="{{ asset('img/services/it/it-consulting-office-ambalait3.webp') }}"
                                alt="Tech Image 3" data-aos="fade-down" data-aos-duration="1200">
                        </div>
                    </div>

                </div>

            </div>
            <div class="awesome-feature-section ambala-section aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="1000">
                <div>
                    <!-- Section Title -->
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Tech Solutions</h3>
                        <p class="ambala_sub_heading">Empowering businesses with expert IT consulting and tailored software
                            solutions</p>
                    </div>

                    <!-- Features Grid -->
                    <div class="row gy-4">
                        <!-- Cyber Security - Fade Right -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">

                                    <img src="{{ asset('img/services/it/manage-it-services.svg') }}" alt="IT Services">
                                </div>
                                <h3 class="box-title title-selector">IT Services</h3>
                                <p class="feature-card_text desc-selector">Enhancing business efficiency with proactive,
                                    dependable Managed IT Services for smooth and uninterrupted technology performance.</p>
                            </div>
                        </div>

                        <!-- Cloud Integration -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-right" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/IT-CONSULTION.svg') }}" alt="Strategy & Planning">
                                </div>
                                <h3 class="box-title title-selector">Strategy & Planning</h3>
                                <p class="feature-card_text desc-selector">Crafting a tailored IT roadmap that aligns
                                    technology initiatives with your business objectives for long-term success.</p>
                            </div>
                        </div>

                        <!-- Managed IT Services -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/translation-svgrepo-com.svg') }}"
                                        alt="Digital Transformation">
                                </div>
                                <h3 class="box-title text-nowrap title-selector">Digital Transformation</h3>
                                <p class="feature-card_text desc-selector">Empowering the business by harnessing digital
                                    technologies to optimize processes and elevate customer experiences.</p>
                            </div>
                        </div>

                        <!-- Software Development -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-down"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/software-development.svg') }}"
                                        alt="Cloud Consulting">
                                </div>
                                <h3 class="box-title title-selector">Cloud Consulting</h3>
                                <p class="feature-card_text desc-selector"> Providing expert guidance in cloud strategy,
                                    migration, and management to boost your business agility and scalability.</p>
                            </div>
                        </div>

                        <!-- Data Analytics -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/cyber-security-solutions.svg') }}"
                                        alt="Cybersecurity Consulting">
                                </div>
                                <h3 class="box-title title-selector">Cybersecurity Consulting</h3>
                                <p class="feature-card_text desc-selector">Delivering proactive security solutions to
                                    safeguard your business and ensure regulatory compliance.</p>
                            </div>
                        </div>

                        <!-- Product Design -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-right" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/Infrastructure-Optimization.svg') }}"
                                        alt="Infrastructure Optimization">
                                </div>
                                <h3 class="box-title title-selector">Infrastructure Optimization</h3>
                                <p class="feature-card_text desc-selector">Evaluating and enhancing your IT infrastructure
                                    to achieve superior performance and maximize cost efficiency.
                                </p>
                            </div>
                        </div>

                        <!-- Web Marketing -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-left" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/Business-Process-Improvement.svg') }}"
                                        alt="Business Process Improvement">
                                </div>
                                <h3 class="box-title title-selector">Business Process Improvement</h3>
                                <p class="feature-card_text desc-selector">Uncovering opportunities and deploying
                                    technology solutions to enhance productivity and streamline operations.

                                </p>
                            </div>
                        </div>
                        <!-- Web Marketing -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-left" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/it/peoduct-development.svg') }}"
                                        alt="peoduct-development">
                                </div>
                                <h3 class="box-title title-selector">Product Development</h3>
                                <p class="feature-card_text desc-selector">Fostering innovation and driving growth with
                                    customized, comprehensive product development solutions.</p>
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

                            <div class=" it-floating-box-3" data-aos="fade-right" data-aos-duration="1200">
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
                                class="ambala_heading">IT Consulting </span> Solutions</h3>
                        <p class="ambala_paragraph">
                            Choosing our IT consulting services means partnering with a dedicated team focused on your
                            success. With a client-centric approach, coupled with our technical expertise and deep industry
                            knowledge, we deliver solutions that not only meet but surpass your expectations. We take pride
                            in cultivating long-term relationships with our clients, offering continuous support and
                            guidance as your business grows and evolves.

                        </p>
                        <p class="ambala_paragraph">
                            Empower your business with a robust technology strategy tailored to your needs. Contact us today
                            to discover how our IT consulting services can help you achieve your business objectives and
                            maintain a competitive edge in the marketplace.


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
        document.addEventListener("DOMContentLoaded", function() {
            let counter = 0;
            let target = 25; // Target value for the counter
            let experienceCounter = document.querySelector('.experience-year span');

            function countUp() {
                let increment = setInterval(() => {
                    if (counter < target) {
                        counter++;
                        experienceCounter.innerText = counter;
                    } else {
                        clearInterval(increment);
                    }
                }, 100); // Adjust speed here
            }

            // Trigger the count-up when the section scrolls into view
            const experienceSection = document.querySelector('.experience-box');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        countUp();
                        observer.disconnect(); // Stop observing after the count-up
                    }
                });
            });

            observer.observe(experienceSection);
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
<style>
    /* Container Styling */
    .about-area {
        padding: 80px 0;
        background-color: #f9f9f9;
    }

    /* Text Section */
    .sub-title {
        color: #3366ff;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .sec-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .description {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }

    /* Checklist Styling */
    .checklist {
        list-style: none;
        padding-left: 0;
    }

    .checklist li {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .checklist i {
        color: #3366ff;
        font-size: 20px;
        margin-right: 10px;
    }

    /* Button Styling */
    .btn-wrapper {
        margin-top: 20px;
    }

    .btn-view-client-stories {
        background-color: #3366ff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 50px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .btn-view-client-stories:hover {
        background-color: #1d4db2;
    }

    /* Image Group */
    .image-groups {
        position: relative;
    }

    .img1,
    .img2,
    .img3 {
        border-radius: 15px;
        overflow: hidden;
    }

    .img1 {
        position: absolute;
        top: -138px;
        left: 0;
        width: 200px;
    }

    .img2 {
        position: absolute;
        top: -138px;
        left: 216px;
        width: 180px;
        height: 165px;
    }

    .img3 {
        position: absolute;
        top: 44px;
        left: 216px;
        width: 179px;
        height: 170px;
    }

    .experience-box {
        position: absolute;
        bottom: 0;
        left: -6px;
        top: 156px;
        /* height: 20px !important; */
        background-color: var(--bs-highlight-bg);
        color: var(--bs-black);
        padding: 24px;
        border-radius: 10px;
        text-align: center !important;
        z-index: 1;
        font-weight: 400;
        height: 61px;
    }


    .experience-text {
        font-size: 14px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .image-groups {
            text-align: center;
        }

        .img1,
        .img2,
        .img3 {
            position: relative;
            width: 80px;
            height: 100px;
        }

        .experience-box {
            left: 50%;
            transform: translateX(-50%);
        }
    }
</style>
