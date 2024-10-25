@extends('frontend.app')

@section('title', 'Cyber Security')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <img src="{{ asset('img/services/security/Cyber-security-service-ambalait.webp') }}" alt="Service Banner"
                class="img-fluid">
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
            <div class=" service-details-section top ambala-section " data-aos="fade-up" data-aos-duration="1000">

                <div class="row align-items-center">
                    <!-- Text Content -->
                    <h3 class="ambala_heading">Comprehensive Cybersecurity Services to
                        Protect Your Business</h3>
                    <div class="col-lg-6">

                        <p class="ambala_paragraph">In today’s digital landscape, safeguarding your business from an
                            ever-evolving array of cyber
                            threats is crucial. We offer robust cybersecurity services that integrate advanced technologies
                            with expert knowledge and proactive strategies. Our holistic approach ensures that your critical
                            assets, data, and systems remain secure.
                        </p>
                        <p class="ambala_paragraph">Trusted by clients in diverse industries—including finance, healthcare,
                            government, retail, and
                            more—our solutions are tailored to meet the unique security challenges of each sector. With
                            our deep industry expertise and understanding of specific threats, we provide customized
                            strategies designed to fortify your business against potential risks.</p>
                        <!-- CTA Buttons -->
                        <div class="btn-wrapper">
                            <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                    class="fa-solid  me-2"></i>
                                Free Quote</a>
                        </div>

                    </div>

                    <!-- Right Column (Image Content) -->
                    <div class="col-lg-6 pt-2 text-center position-relative wow animate__animated animate__fadeInRight">
                        <!-- Background Shape -->
                        <div class="bg-shape position-absolute top-50 start-50 translate-middle"></div>
                        <!-- Main Image -->
                        <img src="{{ asset('img/services/security/hero_bg_11_1.webp') }}"
                            class="img-fluid main-image rounded-circle "
                            style="height: 400px !important ;width:300px !important;"
                            alt="Overview - Application Management Services">
                        <!-- Icons Over Image -->
                        <div class="icon-container icon-1">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div class="icon-container icon-2">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" service-details-section ambala-section " data-aos="fade-down" data-aos-duration="1000">

                <div class="row">
                    <!-- Feature 1 -->
                    <div class="col-lg-4 col-md-6 feature-item" data-aos="fade-right" data-aos-duration="1200">
                        <div class="feature-content d-flex align-items-center">
                            <div class="icon-box">
                                <img src="{{ asset('img/services/security/feature_box_1_1.svg') }}"
                                    alt="Block to all hackers">
                            </div>
                            <div class="text-box">
                                <h3 class="service-heading">Comprehensive Threat
                                    Protection</h3>
                                <p>Our cybersecurity services offer advanced threat detection and
                                    prevention.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-lg-4 col-md-6 feature-item" data-aos="fade-up" data-aos-duration="1200">
                        <div class="feature-content d-flex align-items-center">
                            <div class="icon-box">
                                <img src="{{ asset('img/services/security/feature_box_1_2.svg') }}"
                                    alt="Stop account takeovers">
                            </div>
                            <div class="text-box">
                                <h3 class="  service-heading">Prevent Unauthorized
                                    Access</h3>
                                <p>We help secure your accounts by integrating MFA, adding a robust
                                    layer of defence.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-lg-4 col-md-6 feature-item" data-aos="fade-left" data-aos-duration="1200">
                        <div class="feature-content d-flex align-items-center">
                            <div class="icon-box">
                                <img src="{{ asset('img/services/security/feature_box_1_3.svg') }}"
                                    alt="Private internet connection">
                            </div>
                            <div class="text-box">
                                <h3 class=" service-heading">Secure & Encrypted
                                    Connections</h3>
                                <p>We provide end-to-end encryption for all your connections and ensure data transmission.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=" service-details-section ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <h3 class="ambala_heading">About Us</h3>
                <p class="ambala_sub_heading">Identifying and Responding to Emerging Risks
                </p>
                <div class="row align-items-center">
                    <!-- Left Image Column -->
                    <div class="col-lg-6" div class=" service-details-section pt-0 pb-5  " data-aos="fade-right"
                        data-aos-duration="1200">
                        <div class="image-wrapper">
                            <img src="{{ asset('img/services/security/about_10_1.webp') }}" alt="Cyber Security Image"
                                class="img-fluid">
                        </div>
                    </div>

                    <!-- Right Text Column -->
                    <div class="col-lg-6" div class=" service-details-section pt-0 pb-5  " data-aos="fade-left"
                        data-aos-duration="1300">

                        <div class="content-wrapper">

                            <p class="description ambala_paragraph">
                                At Ambala IT, we specialize in cybersecurity—protecting your computer systems, networks,
                                devices, and data from unauthorized access, cyberattacks, theft, and damage. Our
                                comprehensive
                                approach combines advanced technologies with established processes and practices, all
                                designed
                                to safeguard your digital assets and ensure their integrity.

                            </p>
                            <div class="col-lg-6" div class=" service-details-section pt-0 pb-5  " data-aos="fade-up"
                                data-aos-duration="1200">
                                <ul class="checklist ambala_paragraph">
                                    <li class="ambala_paragraph"><i class="bi bi-check-circle-fill text-danger"></i> High
                                        Quality
                                        Service</li>
                                    <li class="ambala_paragraph"><i class="bi bi-check-circle-fill text-danger"></i>
                                        Effective
                                        Protection</li>
                                    <li class="ambala_paragraph"><i class="bi bi-check-circle-fill text-danger"></i>
                                        Website Security</li>
                                    <li class="ambala_paragraph"><i class="bi bi-check-circle-fill text-danger"></i>Security
                                        Management
                                    </li>
                                    <li class="ambala_paragraph"><i class="bi bi-check-circle-fill text-danger"></i> App
                                        Security

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="awesome-feature-section ambala-section  aos-init aos-animate" data-aos="fade-down"
                data-aos-duration="1000">
                <div class="">
                    <!-- Section Title -->
                    <div class="text-center mb-5">
                        <h3 class="ambala_heading">Our Services</h3>
                        <p class="ambala_sub_heading">We Provide Experts cyber security services</p>
                    </div>

                    <!-- Features Grid -->
                    <div class="row gy-4">

                        <!-- Network Security - Fade Left -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-down" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/locked-network-02-svgrepo-com.svg') }}"
                                        alt="Network Security Icon">
                                </div>
                                <h3 class="box-title title-selector">Network Security</h3>
                                <p class="feature-card_text desc-selector">Safeguard your network infrastructure against
                                    unauthorized access, data
                                    breaches, and cyber-attacks with firewalls, IDS/IPS, and secure network design.
                                </p>
                            </div>
                        </div>

                        <!-- Cyber Security - Fade Right -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/unify-endpoint-management-svgrepo-com.svg') }}"
                                        alt="Endpoint Security">
                                </div>
                                <h3 class="box-title title-selector">Endpoint Security</h3>
                                <p class="feature-card_text desc-selector">Ensuring the protection of servers against
                                    unauthorized access, data breaches,
                                    and cyber threats through robust authentication, updates, and monitoring solutions. </p>
                            </div>
                        </div>

                        <!-- Data Protection - Fade Up -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-right" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/server-lock-svgrepo-com.svg') }}"
                                        alt="Data Protection Icon">
                                </div>
                                <h3 class="box-title title-selector">Server Security</h3>
                                <p class="feature-card_text desc-selector">Building a cybersecurity culture within
                                    organizations is crucial for promoting server security, reducing risks, and ensuring
                                    employees prioritize safe practices in their daily activities.</p>
                            </div>
                        </div>

                        <!-- Server Security - Zoom In -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-left" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/data-privacy-svgrepo-com.svg') }}"
                                        alt="Server Security Icon">
                                </div>
                                <h3 class="box-title title-selector">Data Protection & Encryption</h3>
                                <p class="feature-card_text desc-selector">Safeguard your sensitive data both in transit
                                    and at rest using
                                    robust encryption and data loss prevention (DLP) technologies.
                                </p>
                            </div>
                        </div>

                        <!-- Data Encryption - Fade Right -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1200" data-aos="fade-right">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/8258923331685201925.svg') }}"
                                        alt="Data Encryption Icon">
                                </div>
                                <h3 class="box-title title-selector">Vulnerability Assessment</h3>
                                <p class="feature-card_text desc-selector"> Conduct regular assessments to identify and
                                    remediate vulnerabilities in your systems before attackers can exploit them.
                                </p>
                            </div>
                        </div>

                        <!-- Hacking Protection - Fade Up -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-right" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/15706546551638029481.svg') }}"
                                        alt="Hacking Protection Icon">
                                </div>
                                <h3 class="box-title title-selector"> Event Management (SIEM)</h3>
                                <p class="feature-card_text desc-selector">Enable centralized logging and analysis of
                                    security
                                    events across your organization to detect and respond to threats in real time. </p>
                            </div>
                        </div>

                        <!-- Backup & Recovery - Zoom In -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-left" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/16775106821600774621.svg') }}"
                                        alt="Backup & Recovery Icon">
                                </div>
                                <h3 class="box-title title-selector">Web Application Security</h3>
                                <p class="feature-card_text desc-selector">Protect your web applications from cyber
                                    threats by implementing security
                                    measures such as firewalls, input validation, and secure coding practices. </p>
                            </div>
                        </div>

                        <!-- Cloud Security - Fade Left -->
                        <div class="col-xl-3 col-lg-4 col-md-6 feature-card-wrap2 aos-init aos-animate"
                            data-aos="fade-down" data-aos-duration="1200">
                            <div class="feature-cards style2">
                                <div class="feature-card-icon flip-icon">
                                    <img src="{{ asset('img/services/security/security-as-a-service-svgrepo-com.svg') }}"
                                        alt="Cloud Security Icon">
                                </div>
                                <h3 class="box-title title-selector">Cyber Security Consultation</h3>
                                <p class="feature-card_text desc-selector"> Provide expert guidance and strategies to
                                    enhance your organization’s
                                    cybersecurity posture and mitigate potential risks.</p>
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
                                                <p>We perform a detailed analysis of your current security posture,
                                                    identifying vulnerabilities in your systems, networks, and
                                                    applications.This phase involves understanding your business
                                                    objectives and aligning them with the necessary cybersecurity
                                                    measures to protect sensitive data.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Threat
                                                        Landscape Assessment
                                                    </li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>
                                                        Vulnerability Scanning
                                                    </li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>

                                                        Risk Prioritization</li>

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
                                                <p>After identifying vulnerabilities, we create a tailored security
                                                    strategy to address your specific needs. We outline solutions to
                                                    mitigate risks and plan phased implementations for efficient roll-
                                                    out.
                                                    The plan is aligned with industry standards like ISO 27001 or NIST
                                                    to ensure compliance with regulatory requirements</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Security
                                                        Architecture Design</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Compliance
                                                        Mapping</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Incident
                                                        Response Planning</li>

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
                                                <p>We implement state-of-the-art security solutions like firewalls,
                                                    encryption, multi-factor authentication (MFA), and intrusion
                                                    detection/prevention systems (IDS/IPS) to secure your
                                                    infrastructure.
                                                    Our team ensures minimal disruption to your ongoing operations
                                                    while deploying new solutions.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Network
                                                        Security Setup</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Data Encryption
                                                    </li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Endpoint
                                                        Security</li>

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
                                                <p>We conduct penetration testing to simulate cyberattacks and
                                                    evaluate the effectiveness of your new security infrastructure. We
                                                    also perform continuous vulnerability assessments to ensure all
                                                    gaps are addressed.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Penetration
                                                        Testing</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Security
                                                        Audits</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Patch
                                                        Management</li>

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
                                                <p>After rigorous testing, we deploy the final security solution
                                                    across your environment, ensuring everything runs smoothly
                                                    and integrates seamlessly. We also provide a comprehensive
                                                    report and hand over documentation detailing the security
                                                    framework implemented.
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Final
                                                        Integration</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i>Security
                                                        Documentation</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Training &
                                                        Awareness</li>

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
                                                <p>Cybersecurity is an ongoing effort. We provide 24/7
                                                    monitoring services and real-time threat detection to
                                                    safeguard your organization from evolving cyber threats. In
                                                    the event of a security breach, we offer rapid incident
                                                    response and disaster recovery services to minimize
                                                    downtime and damage.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Real-time
                                                        Monitoring</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Threat
                                                        Intelligence</li>
                                                    <li><i class="bi bi-check-circle-fill text-primary"></i> Incident
                                                        Response</li>

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
                                    src="{{ asset('img/services/tools/nmap-org-language-application-ambalait.webp') }}"
                                    alt="Nmap">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/hydra-language-application-ambalait.webp') }}"
                                    alt="Hydra">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px" src="{{ asset('img/services/tools/burp-suite.webp') }}"
                                    alt="Burpsuite">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Metasploit-language-application-ambalait.webp') }}"
                                    alt="Metasploit">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/wireshark-application-development-ambalait.webp') }}"
                                    alt="wireshark">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="flip-right">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/kali-Linux-framwork-application-development-ambalait.webp') }}"
                                    alt="kali Linux">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-in">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/SqlMap-language-application-ambalait.webp') }}"
                                    alt="SqlMap">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/Havoc-language-application-ambalait.webp') }}"
                                    alt="Havoc">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/nessus-language-ambalait.webp') }}" alt="nessus">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2-4 border-end border-bottom" data-aos="zoom-out">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('img/services/tools/maltego-language-ambalait.webp') }}"
                                    alt="maltego">
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

            <div class=" service-details-section ambala-section " data-aos="fade-down" data-aos-duration="1000">
                <h3 class="ambala_heading">Your Trusted Partner in a Digital World Full of Threats </h3>
                <p class=" ambala_sub_heading  ">We have a team of seasoned cybersecurity professionals
                    with a
                    proven track record of success in protecting businesses of all sizes.</p>
                <div class="row align-items-center">
                    <!-- Text Content -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">

                        <div class="choose-feature5-wrap">
                            <div class="choose-feature5">
                                <div class="box-icon">
                                    <img src="{{ asset('img/services/security/feature_4_1.svg') }}" alt="Antivirus Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Antivirus and Anti-malware</h3>
                                    <p class="box-text">Block and remove malicious software from your devices with
                                        comprehensive antivirus and anti-malware solutions.</p>
                                </div>
                            </div>
                            <div class="choose-feature5">
                                <div class="box-icon">
                                    <img src="{{ asset('img/services/security/feature_4_2.svg') }}"
                                        alt="Phishing Simulation Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Phishing Simulation</h3>
                                    <p class="box-text">Identify vulnerabilities in your employees' awareness of
                                        phishing
                                        attacks and train them to be more vigilant.</p>
                                </div>
                            </div>
                            <div class="choose-feature5">
                                <div class="box-icon">
                                    <img src="{{ asset('img/services/security/feature_4_3.svg') }}"
                                        alt="Threat Intelligence Icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Threat Intelligence</h3>
                                    <p class="box-text">Stay informed about the latest cyber threats and
                                        vulnerabilities to
                                        proactively protect your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column (Image Content) -->
                    <div class="col-lg-6 pt-4 text-center position-relative wow animate__animated animate__fadeInRight">
                        <!-- Background Shape -->

                        <!-- Main Image -->
                        <img src="{{ asset('img/services/security/cybersecurity-service-ambalait-haker.svg') }}"
                            class="img-fluid main-image  " alt="Overview - Application Management Services"
                            style="    height: 500px;width: 500px !important;">
                        <!-- Icons Over Image -->
                        <div class="choose-line">
                            <img src="{{ asset('img//services/web/line-4.svg') }}" alt="Decorative Line">
                        </div>
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
