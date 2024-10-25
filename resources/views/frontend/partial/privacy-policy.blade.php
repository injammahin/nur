@extends('frontend.app') <!-- Assuming you are extending a master layout -->

@section('title', 'Privacy Policy')

@section('content')
    <div class="container ">
        <div class="row justify-content-center"
            style="    padding-top: 85px !important;
    padding-bottom: 50px !important;">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h1 class=" text-center ">Privacy Policy</h1>
                        <p class="text-muted text-center mb-5">Last updated:
                            Oct 20, 2024</p>

                        <section class="mb-5">
                            <h4 class="mb-3">Introduction</h4>
                            <p>At Ambala IT ("we," "our," "us"), we are committed to protecting your privacy. This Privacy
                                Policy explains how we collect, use, disclose, and safeguard your information when you use
                                our website, mobile applications, and any related services (collectively, the "Services").
                                Please read this Privacy Policy carefully. If you do not agree with the terms of this
                                Privacy Policy, please do not access or use the Services.</p>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Information We Collect</h4>

                            <strong>1. Personal Data</strong>
                            <p>We may collect personally identifiable information (PII) that you voluntarily provide
                                to us when you use our Services. This may include:</p>
                            <ul>
                                <li>Name</li>
                                <li>Email address</li>
                                <li>Phone number</li>
                                <li>Payment information</li>
                                <li>Company name</li>
                                <li>Job title</li>
                            </ul>
                            </li>
                            <li class="list-group-item mb-3">
                                <strong>2. Usage Data</strong>
                                <p>We may automatically collect certain information about your device and usage of the
                                    Services, including:</p>
                                <ul>
                                    <li>IP address</li>
                                    <li>Browser type</li>
                                    <li>Operating system</li>
                                    <li>Access times</li>
                                    <li>Pages viewed directly before and after accessing the Services</li>
                                    <li>Clickstream data</li>
                                </ul>
                            </li>
                            <li class="list-group-item mb-3">
                                <strong>3. Location Data</strong>
                                <p>With your consent, we may collect location data to provide location-based services.
                                </p>

                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">How We Use Your Information</h4>
                            <p>We use the information we collect in the following ways:</p>
                            <ul>
                                <li>To provide, operate, and maintain our Services</li>
                                <li>To improve, personalize, and expand our Services</li>
                                <li>To understand and analyze how you use our Services</li>
                                <li>To develop new products, services, features, and functionality</li>
                                <li>To communicate with you, including for customer service, updates, and promotional
                                    purposes</li>
                                <li>To process transactions and send related information</li>
                                <li>To send you text messages and push notifications</li>
                                <li>To prevent fraud and ensure security</li>
                                <li>To comply with legal obligations</li>
                            </ul>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Security of Your Information</h4>
                            <p>We use administrative, technical, and physical security measures to help protect your
                                personal information. While we have taken reasonable steps to secure the personal
                                information you provide to us, please be aware that no security measures are perfect or
                                impenetrable, and no method of data transmission can be guaranteed to prevent interception
                                or other types of misuse.</p>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Changes to This Privacy Policy</h4>
                            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by
                                posting the new Privacy Policy on this page. You are advised to review this Privacy Policy
                                periodically for any changes. Changes to this Privacy Policy are effective when they are
                                posted on this page.</p>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Cookies and Tracking Technologies</h4>
                            <p>We use cookies and similar tracking technologies to track the activity on our Services and
                                hold certain information. Cookies are files with a small amount of data that may include an
                                anonymous unique identifier. Cookies are sent to your browser from a website and stored on
                                your device. Tracking technologies also used are beacons, tags, and scripts to collect and
                                track information and to improve and analyze our Services.</p>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Do Not Track</h4>
                            <p>Do Not Track ("DNT") is a privacy preference that users can set in their web browsers. Our
                                Services do not respond to Do Not Track signals.</p>
                        </section>

                        <section class="mb-5">
                            <h4 class="mb-3">Contact Information</h4>
                            <h3 class="mt-5">Contact Us</h3>
                            <p>
                                To resolve a complaint regarding the Privacy & Policy
                            </p>
                            <p>
                                Ambala IT <br>
                                House-67, Block-Ka, Piciculture Housing Society, Shyamoli <br>
                                Dhaka-1207, Bangladesh <br>
                                Phone: 01708408686 <br>
                                Email: <a href="mailto:contact@ambalait.com">contact@ambalait.com</a>
                            </p>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Custom styles for this template -->
@section('styles')
    <style>
        body {
            background-color: #f4f6f9;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            color: #333;
        }

        h4 {
            color: #444;
            font-weight: 600;
        }



        .list-group-item {
            background-color: #f9f9f9;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
@endsection
