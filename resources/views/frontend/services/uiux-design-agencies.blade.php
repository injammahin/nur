@extends('frontend.app')

@section('title', 'UI/UX Design')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper mt-3">
            <!-- Use the video tag to play the video -->
            <video autoplay muted loop class="img-fluid">
                <source src="{{ asset('img/services/UI/uiux-design-agencies-ambalait.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="banner-overlay">
                <div class="banner-text">
                    <!-- Add banner text or any other content if needed -->
                </div>
            </div>
        </div>
    </div>
    <section class="uiux">
        <div class="container">


            <!-- UI/UX Hero Section -->

            <div class="service-details-section top ambala-section" data-aos="fade-down" data-aos-duration="1000">
                <div>
                    <div class="row align-items-center">
                        <h3 class="ambala_heading">UI/UX Design <span class="theme-clr">&</span> <span
                                class="blk_span">Development
                                Services</span></h3>
                        <!-- Text Section -->
                        <div class="col-md-6 uiux-hero-content animate__animated animate__slideInLeft">

                            <p class="ambala_paragraph">We specialize in creating user-centric UI/UX designs that transform
                                digital products into
                                intuitive and
                                engaging experiences. Our design services focus on crafting interfaces that are not only
                                visually stunning
                                but also highly functional, ensuring seamless and enjoyable interactions for your users
                                across
                                applications and websites. From in-depth research to the final design, we are committed to
                                delivering
                                solutions that align with your business goals while exceeding user expectations.
                            </p>
                            <div class="btn-wrapper">
                                <a href="{{ route('frontend.contract_us') }}" class="butn read_more "><i
                                        class="fa-solid  me-2"></i>
                                    Free Quote</a>
                            </div>
                        </div>
                        <!-- Hero Image Section -->
                        <div class="col-md-6 text-center hero-image rounded">
                            <img src="{{ asset('img/services/UI/uiux-design-and-development-ambalait.webp') }}"
                                alt="UI/UX Design Image">
                            {{-- <div class="uiux-icon uiux-icon-1">
                                <img src="{{ asset('img/demo/about122.webp') }}" alt="Icon 1">
                            </div> --}}
                            {{-- <div class="uiux-icon uiux-icon-2">
                                <img src="{{ asset('img/demo/about122.webp') }}" alt="Icon 2">
                            </div>
                            <div class="uiux-icon uiux-icon-3">
                                <img src="{{ asset('img/demo/about122.webp') }}" alt="Icon 3">
                            </div>
                            <div class="uiux-icon uiux-icon-4">
                                <img src="{{ asset('img/demo/about122.webp') }}" alt="Icon 4">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-details-section ambala-section" data-aos="fade-down" data-aos-duration="1000">

                <!-- Heading Section -->
                <div class="row text-center">
                    <div class="col-12 mb-4">
                        <h3 class="ambala_heading">Our Seamless UI/UX Design and Development Services</h3>
                        <p class="ambala_sub_heading">Bring your brand's vision to life with UI/UX designers who craft
                            visually stunning, intuitive designs for a seamless user experience!
                        </p>
                    </div>
                </div>

                <!-- Service Cards -->
                <div class="row g-4">
                    <!-- Consulting Services -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class=" feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/8361348101540207006.svg') }}"
                                    alt="Consulting Services Icon" width="50">

                            </div>
                            <h3 class="service-title text-nowrap ">Consulting Services</h3>
                            <p class="service-description">Our team offers expert consulting services, guiding you through
                                every
                                stage of the design process, from mobile app UI design to web design, ensuring optimal
                                results at
                                every step.
                            </p>
                        </div>
                    </div>

                    <!-- Prototyping -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/wireframe-svgrepo-com.svg') }}" alt="Prototyping Icon"
                                    width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Prototyping</h3>

                            <p class="service-description">We develop prototypes to guarantee usability, meticulously
                                optimizing
                                page layouts for a seamless, intuitive, and responsive digital experience.
                            </p>
                        </div>
                    </div>

                    <!-- Web Design -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/18814230001693422652.svg') }}" alt="Web Design Icon"
                                    width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Web Design</h3>

                            <p class="service-description">With our responsive web design services, we elevate your online
                                presence,
                                delivering visually stunning and user-friendly designs that adapt seamlessly across all
                                devices.
                            </p>
                        </div>
                    </div>

                    <!-- Mobile App Design -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class=" feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/mobile-app-phone-smartphone-svgrepo-com.svg') }}"
                                    alt="Mobile App Design Icon" width="50">
                            </div>
                            <h3 class="service-title text-nowrap">Mobile App Design</h3>

                            <p class="service-description">Specializing in mobile UI/UX design for both iOS and Android, we
                                deliver
                                exceptional usability and seamless experiences across all devices.
                            </p>
                        </div>
                    </div>

                    <!-- Wireframing -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/wireframe-svgrepo-com (1).svg') }}"
                                    alt="Wireframing Icon" width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">Wireframing</h3>

                            <p class="service-description">Wireframing is a vital component of UI/UX design, outlining the
                                structure
                                of your applications and serving as a clear blueprint for seamless development.
                            </p>
                        </div>
                    </div>

                    <!-- UI Design Services -->
                    <div class="col-md-4">
                        <div class="feature-cards text-center">
                            <div class="feature-card-icon d-flex align-items-center justify-content-start">
                                <img src="{{ asset('img/services/UI/basic-ui-computer-8-svgrepo-com.svg') }}"
                                    alt="UI Design Services Icon" width="50">
                            </div>
                            <h3 class="service-title text-nowrap ">UI Design Services</h3>

                            <p class="service-description">Specializing in UI design, we ensure that your application
                                interfaces are
                                crafted for optimal efficiency and an enjoyable user experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" ambala-section  bg-white position-relative d-none d-lg-block" data-aos="fade-up"
                data-aos-duration="1000">
                <div class="text-center mb-5">
                    <h3 class="ambala_heading">Crafting Flawless Experiences: How We Excel in UI & UX Design
                    </h3>
                    <p class="ambala_sub_heading">With over a decade of experience, we’ve perfected our process for
                        delivering
                        outstanding UI and UX
                        services, ensuring your vision aligns seamlessly with established standards, innovation, and timely
                        execution.
                    </p>
                    <div class="col-12 text-center" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('img/services/UI/Ui-ux-design-process-ambalait.webp') }}"
                            alt="Steps of Digital Marketing" style="width: 700px;" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <!-- technologies Section -->
            <div class="work-process-section ambala-section  bg-white position-relative" data-aos="fade-up"
                data-aos-duration="1000">

                <div class="text-center mb-5">
                    <span class="ambala_heading">Innovative Tools for Superior Solutions
                    </span>
                    <p class="ambala_sub_heading">Tired of Simple design system that maintains perfect in any design</p>
                </div>

                <div class="row justify-content-center">
                    <!-- Image Items with different animation directions -->

                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="fade-up">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/figma-language-application-ambalait.webp') }}"
                                    alt="C++">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="fade-down">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/Adobe-XD-language-application-ambalait.webp') }}"
                                    alt="HTML/CSS">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="fade-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/html-language-application-ambalait.webp') }}"
                                    alt="Java">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="fade-right">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/sketch-language-application-ambalait.webp') }}"
                                    alt="JavaScript">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/javascript-language-application-ambalait.webp') }}"
                                    alt="JS">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 border-end border-bottom" data-aos="flip-left">
                        <div class="py-6 img-hover language-wrapper">
                            <div class="img-container">
                                <img class="image-70px"
                                    src="{{ asset('/img/services/UI/Sass-language-application-ambalait.webp') }}"
                                    alt="JS">
                                <div class="img-shade"></div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Continue with more images... -->

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
                                        class="service-learn-more">See
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
                                class="custom_heading">UI/UX</span></h1>
                        <p class="text-muted">
                            At Ambala IT, we place your users at the center of our design process. Through thorough research
                            methods, including user interviews, surveys, and usability testing, we gain valuable insights
                            into your
                            users’ needs, behaviors, and pain points. Our dedication to creating exceptional user
                            experiences drives
                            engagement and satisfaction. With a client-centric approach and a commitment to excellence, we
                            ensure that our UI/UX designs meet and exceed your expectations.
                        </p>

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
        </div>
    </section>

@endsection
