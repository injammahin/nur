@extends('frontend.app')

@section('title', 'ERP Solutions')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('img/services/ERP/enterprise-resource-planning-systems-ambalait-web.webp') }}"
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
            <!-- Service Details Section -->
            <div class=" service-details-section top ambala-section" data-aos="fade-up" data-aos-duration="1000">

                <div class="row align-items-center">
                    <h3 class="ambala_heading mb-2">Custom ERP Solution & Service

                    </h3>
                    <!-- Text Content -->
                    <div class="col-lg-6">

                        <p class="ambala_paragraph">We develop customized Enterprise Resource Planning (ERP) solutions that
                            streamline your business
                            processes, enhance efficiency, and drive growth. Our tailored ERP systems are designed to meet
                            the
                            unique requirements of your organization, seamlessly integrating with your operations and
                            providing you with the tools needed to manage every aspect of your business from a single
                            platform.
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
                        <img src="{{ asset('img/services/ERP/ERP-solution-ervice.webp') }}" class="img-fluid main-image  "
                            alt="Overview - Application Management Services">

                    </div>
                </div>
            </div>
            <!-- ERP Services Section -->
            <div class="service-details-section ambala-section" data-aos="fade-down" data-aos-duration="1000">

                <!-- Heading Section -->
                <div class="row text-center mb-5">

                    <h3 class="ambala_heading">Comprehensive ERP Solutions</h3>
                    <p class="ambala_sub_heading">Optimize your business operations with our expert ERP services, tailored
                        to meet
                        your unique needs and ensure seamless integration with your existing infrastructure.
                    </p>

                </div>

                <!-- Service Cards -->
                <div class="row g-4">
                    <!-- Consulting -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/12866618751674218444.svg') }}" alt="Consulting Icon"
                                    width="50">

                            </div>
                            <h3 class="service-title text-nowrap ">Consulting</h3>
                            <p class="service-description">We provide companies with a comprehensive range of consulting
                                services,
                                and ensure a timely, budget-friendly, and effective enterprise resource planning solution.
                            </p>
                        </div>
                    </div>

                    <!-- Development -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class=" feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/15666647341638009278.svg') }}" alt="Development Icon"
                                    width="50">

                            </div>
                            <h3 class="service-title text-nowrap ">Development</h3>
                            <p class="service-description">Our full range of consulting services helps you choose the
                                perfect ERP
                                provider and ensures a smooth implementation of an effective enterprise resource planning
                                solution.</p>
                        </div>
                    </div>

                    <!-- Customization -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class=" feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/10978259061691576311.svg') }}" alt="Customization Icon"
                                    width="50">

                            </div>
                            <h3 class="service-title text-nowrap">Customization</h3>
                            <p class="service-description">We tailor and enhance ERP systems to align with your unique
                                business needs
                                and vision, all while adhering to industry best practices.</p>
                        </div>
                    </div>

                    <!-- Integration -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/1254654151678855803.svg') }}" alt="Integration Icon"
                                    width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Integration</h3>

                            <p class="service-description">Our ERP software integration service connects your ERP system
                                with other
                                essential business applications, ensuring a seamless flow of data and processes across your
                                organization.</p>
                        </div>
                    </div>

                    <!-- Implementation -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/816291651678773564.svg') }}" alt="Implementation Icon"
                                    width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Implementation</h3>

                            <p class="service-description">We provide comprehensive custom ERP software, handling the entire
                                implementation process from business to platform deployment and after-launch support.</p>
                        </div>
                    </div>

                    <!-- Testing -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon  d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/ERP/4747547191685194340.svg') }}" alt="Testing Icon"
                                    width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Testing</h3>

                            <p class="service-description">We validate ERP software functionality, performance,
                                compatibility, and
                                usability to ensure it meets the company's requirements and user expectations.</p>
                        </div>
                    </div>
                </div>


            </div>

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

                            <div class=" ux-floating-box-3" data-aos="fade-right" data-aos-duration="1200">
                                <div class="">

                                    <img src="{{ asset('img/services/software/arrow.webp') }}" alt="Chart">
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Right Text Column -->
                    <div class="col-lg-6 offset-lg-1 text-start position-relative" data-aos="fade-up"
                        data-aos-duration="1000">


                        <h1 class="custom-service-headline">We’re Building Modern And High Quality <span
                                class="custom_heading">Software</span></h1>
                        <p class="text-muted">
                            Choosing Ambala IT means partnering with a team that is passionate
                            about innovation, dedicated to quality, and committed to your success.
                            Our track record of delivering successful software solutions speaks for
                            itself, and we pride ourselves on building long-term relationships with
                            our clients.
                        </p>
                        <p class="text-muted">
                            Transform your ideas into reality with our customized software
                            development services. Contact us today to discuss your project and
                            discover how we can help you achieve your business goals.
                        </p>

                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="ambala-section roadmap  text-center" data-aos="fade-up" data-aos-duration="1000">
                <div class=" ">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <h3 class="ambala_heading animate__animated animate__fadeInDown">Our ERP implementation roadmap
                        </h3>
                        <p class="ambala_sub_heading animate__animated animate__fadeInUp">Our ERP implementation roadmap
                            ensures a smooth journey from planning to performance!
                        </p>
                    </div>

                    <div class="main-timeline">
                        <!-- Step 1: Analysis -->
                        <div class="timeline left" data-aos="fade-right">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3 class="card-title">1. Analysis</h3>
                                    <p class="mb-1">
                                        Our ERP consultants start with a comprehensive analysis of your business processes,
                                        workflows, and technology environment...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="timeline right" data-aos="fade-left">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>2. Design & Technology Selection</h3>
                                    <p class="mb-1">Based on the elicited requirements, our team conceptualizes an ERP
                                        solution and designs its architecture...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="timeline left" data-aos="fade-right">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>3. Planning</h3>
                                    <p class="mb-1">After defining the initial scope of the ERP system with the
                                        stakeholders, our team outlines project timeframes, budget, and required
                                        resources...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="timeline right" data-aos="fade-left">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>4. Customization/Development</h3>
                                    <p class="mb-1">Following the DevOps approach, our team builds tailored ERP software
                                        or configures/customizes an off-the-shelf ERP suite...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="timeline left" data-aos="fade-right">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>5. Testing</h3>
                                    <p class="mb-1">Our QA engineers perform acceptance testing to ensure the solution
                                        meets both functional and non-functional requirements...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="timeline right" data-aos="fade-left">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>6. Deployment</h3>
                                    <p class="mb-1">Our ERP team deploys the ERP solution to production and performs data
                                        migration from corporate systems and apps to the new business management software...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 7 -->
                        <div class="timeline left" data-aos="fade-right">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>7. Launch</h3>
                                    <p class="mb-1">Our ERP consultants carry out user acceptance testing and conduct
                                        user training, onboarding, and change management for ERP adoption...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 8 -->
                        <div class="timeline right" data-aos="fade-left">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>8. Post-launch Support</h3>
                                    <p class="mb-1">Once the ERP solution is rolled out, our support specialists
                                        fine-tune the system and troubleshoot any issues while performing security and
                                        system updates on request...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="erp-industry-section ambala-section bg-white  position-relative" data-aos="fade-up"
                data-aos-duration="1000">
                <div>
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">ERP Solutions Across Industries</h3>
                    </div>

                    <!-- Tabs -->
                    <div class="tabs">
                        <ul class="tab-list">
                            <li class="tab-item active" data-tab="ngo">NGO</li>
                            <li class="tab-item" data-tab="healthcare">Healthcare</li>
                            <li class="tab-item" data-tab="manufacturing">Manufacturing</li>
                            <li class="tab-item" data-tab="retail-ecommerce">Retail and E-commerce</li>
                        </ul>
                        <div class="long-line"></div>
                    </div>

                    <div class="tab-content">
                        <!-- NGO Tab -->
                        <div class="tab-pane active" id="ngo">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3>NGO</h3>
                                    <p>Automating repetitive tasks and integrating core business processes for NGOs and
                                        Microcredit companies to standardizes operations, increase productivity,
                                        enhance customer experience, and meet regulatory compliance requirements.</p>
                                    <ul class="erp-list">
                                        <li>Microfinance Management</li>
                                        <li>Accounting Management</li>
                                        <li>HR & Payroll Management</li>
                                        <li>Inventory Management</li>
                                        <li>Fixed Asset Management</li>
                                        <li>Procurement Management</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-image">
                                        <img src="{{ asset('img/services/ERP/NGO-Foundation.webp') }}" alt="NGO ERP">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Healthcare Tab -->
                        <div class="tab-pane" id="healthcare">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3>Healthcare</h3>
                                    <p>Automating core business processes for healthcare organizations to deliver quality
                                        patient care, reduce clinical errors, cut operational costs, and improve industry
                                        compliance.</p>
                                    <ul class="erp-list">
                                        <li>Human Resource Management</li>
                                        <li>Customer Relationship Management</li>
                                        <li>Inventory and Medication Management</li>
                                        <li>Supply Chain Management</li>
                                        <li>Order Management</li>
                                        <li>Finance and Accounting</li>
                                        <li>Regulatory Compliance</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-image">
                                        <img src="{{ asset('img/services/ERP/Healthcare.webp') }}" alt="Healthcare ERP">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Manufacturing Tab -->
                        <div class="tab-pane" id="manufacturing">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3>Manufacturing</h3>
                                    <p>Automating manual processes for manufacturing companies to identify optimization
                                        opportunities, maximize resource and equipment utilization, and facilitate lean
                                        manufacturing.</p>
                                    <ul class="erp-list">
                                        <li>Production Planning</li>
                                        <li>Inventory Management</li>
                                        <li>Compliance and Quality Management</li>
                                        <li>Supply Chain Management</li>
                                        <li>Procurement Management</li>
                                        <li>Order Management</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-image">
                                        <img src="{{ asset('img/services/ERP/Manufacturing.webp') }}"
                                            alt="Manufacturing ERP">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Retail and E-commerce Tab -->
                        <div class="tab-pane" id="retail-ecommerce">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3>Retail and E-commerce</h3>
                                    <p>Implementing ERP solutions in retail and e-commerce businesses can enhance
                                        operational efficiency, improve customer experiences, and drive growth in a
                                        competitive marketplace.</p>
                                    <ul class="erp-list">
                                        <li>Inventory Management</li>
                                        <li>Order Processing</li>
                                        <li>Sales Analytics</li>
                                        <li>Multi-Channel Integration</li>
                                        <li>Supply Chain Management</li>
                                        <li>Mobile Accessibility</li>
                                        <li>Customizable Solutions</li>
                                        <li>Payment Management</li>
                                        <li>Customer Relationship Management</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-image">
                                        <img src="{{ asset('img/services/ERP/Retail and E-commerce.webp') }}"
                                            alt="Retail ERP">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="erp-capabilities-section ambala-section bg-white  position-relative" data-aos="fade-up"
                data-aos-duration="1000">

                <div class="row">
                    <!-- Title & Description -->
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">ERP capabilities we deliver</h3>
                        <p class="ambala_sub_heading">
                            We deliver tailored ERP solutions with a unique feature set to cater to your specific goals
                            and objectives. Among the capabilities we enable within ERP software are:
                        </p>
                    </div>


                    <!-- Capabilities List -->
                    <div class="capabilities-list">
                        <!-- Capability 1 -->
                        <div class="capability-item">

                            <h3 class="box-title title-selector">Data consolidation</h3>
                            <p class="capability-description">
                                Getting a unified and consistent view of core business processes via integrating business
                                information from across different departments into a single ERP database. Facilitates
                                business process transparency, enhanced collaboration, and data-driven decision-making.
                            </p>
                        </div>

                        <!-- Capability 2 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Automation</h3>


                            <p class="capability-description">
                                Automating repetitive tasks such as invoicing, order processing, reporting, and payroll.
                                Besides freeing employees from mundane activities, ERP implementation helps streamline
                                business processes and minimize errors rooted in manual data input.
                            </p>
                        </div>

                        <!-- Capability 3 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Business Intelligence (BI) & Analytics</h3>
                            <p class="capability-description">
                                Consolidating transactional data on every aspect of business operations into the ERP
                                database. Fast and role-based access to the integrated real-time data, self-service
                                reporting capabilities, and tailored dashboards with KPI sets help business users optimize
                                current operations with more informed decisions.
                            </p>
                        </div>

                        <!-- Capability 4 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Accounting & financial management</h3>
                            <p class="capability-description">
                                Tracking, storing, and analyzing finance-related data, such as accounts payable, accounts
                                receivable, and general ledger, to perform financial reconciliation, financial planning and
                                budgeting, revenue, expenses, and tax management.
                            </p>
                        </div>

                        <!-- Capability 5 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Customer relationship management (CRM)</h3>
                            <p class="capability-description">
                                Providing marketing and sales teams with a 360-degree customer view for customer
                                segmentation and targeting, automating quote generation and purchase order creation, and
                                predicting the demand.
                            </p>
                        </div>

                        <!-- Capability 6 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Human resource (HR) management</h3>
                            <p class="capability-description">
                                Covering the full scope of employee lifecycle management from onboarding to offboarding.
                                Automating payroll management, employee attendance tracking, employee performance
                                assessment, training and learning management, and employee request management.
                            </p>
                        </div>

                        <!-- Capability 7 -->
                        <div class="capability-item">
                            <h3 class="box-title title-selector">Supply chain management (SCM)</h3>
                            <p class="capability-description">
                                Enabling end-to-end supply chain visibility to gain greater control over inventory,
                                warehousing, logistics, and distribution operations. Identifying areas of inefficiency,
                                balancing supply and demand, streamlining procurement activities, and fostering supplier
                                relationships.
                            </p>
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
                                    <p>Build responsive and scalable web applications with our web development services.
                                    </p>
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

                        <!-- Service Card 9 -->
                        <div class="item">
                            <div class="card">
                                <div class="service-card p-4">
                                    <h4 class="service-heading">E-commerce Development</h4>
                                    <p>Create a high-converting online store with our e-commerce development services.
                                    </p>
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
            <div class="bg-white ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <div class="container">
                    <div class=" text-center mb-5">
                        <h3 class="ambala_heading ">Latest Article's</h3>
                        <p class="ambala_sub_heading">Stay informed with Latest Insights, trends, and innovations in the
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
        document.querySelectorAll('.tab-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.tab-item').forEach(tab => tab.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');

                // Hide all tab panes
                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));

                // Show the corresponding tab pane
                const tabPane = document.getElementById(this.getAttribute('data-tab'));
                if (tabPane) {
                    tabPane.classList.add('active');
                }
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
