<!-- resources/views/includes/header.blade.php -->
<header id="header" class="{{ request()->routeIs('home') ? 'transparent-header' : 'solid-header fixed-header' }}">
    <div class="navbar-default">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">


                        <a data-mdb-button-init class="navbar-toggler " data-mdb-collapse-init
                            data-mdb-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2"
                            aria-expanded="false" aria-label="Toggle navigation">
                        </a>


                        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
                            <div class="navbar-header navbar-header-custom">
                                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-start">
                                    <!-- Display the site logo -->
                                    @if ($siteLogo)
                                        <img src="{{ asset($siteLogo) }}" alt="Site Logo" class="img-fluid logo p-1"
                                            style="height: 3.5rem; width:10rem !important;">
                                    @else
                                        <!-- Default fallback if no logo is set -->
                                        <span class="navbar-brand">Site Name</span>
                                    @endif
                                </a>
                            </div>


                            <ul class="navbar-nav ms-auto" id="navbarNav" style="display: none;">
                                <li class="main"><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="main"><a href="{{ route('frontend.about') }}">Who we are</a></li>

                                <li><a class="main" href="{{ route('frontend.services') }}">Services</a>
                                    <ul>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.adaptive-software-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.adaptive-software-development') }}">Software
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.it-consulting-services') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.it-consulting-services') }}">IT
                                                Consulting</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.cybersecurity-companies') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.cybersecurity-companies') }}">Cybersecurity
                                                Services</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.web-application-development-services') ? 'active' : '' }}">
                                            <a
                                                href="{{ route('frontend.services.web-application-development-services') }}">Web
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.mobile-app-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.mobile-app-development') }}">Mobile
                                                App Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.software-quality-and-assurance') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.software-quality-and-assurance') }}">Quality
                                                Assurance and Testing</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.api-development') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.api-development') }}">API
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.enterprise-resource-planning-systems') ? 'active' : '' }}">
                                            <a
                                                href="{{ route('frontend.services.enterprise-resource-planning-systems') }}">ERP
                                                Solution</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.uiux-design-agencies') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.uiux-design-agencies') }}">UI/UX
                                                Design</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.digital-transformation') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.digital-transformation') }}">Digital
                                                Transformation Consultant</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.build-ecommerce-websites') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.build-ecommerce-websites') }}">E-commerce
                                                Development</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('frontend.services.digital-marketing-agency') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.services.digital-marketing-agency') }}">Digital
                                                Marketing</a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- this product will hide in mobile and tablet  --}}
                                <li class="d-none d-lg-block"><a class="main"
                                        href="{{ route('frontend.product.index') }}">Products</a>
                                    <ul>
                                        @foreach ($newProducts as $product)
                                            <li>
                                                <a href="{{ route('frontend.product.details', $product->slug) }}"
                                                    class="product-link" data-id="{{ $product->id }}"
                                                    data-title="{{ $product->name }}"
                                                    data-navmenu-image="{{ asset('media/new_product/navmenu_images/' . $product->navmenu_image) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- for mobile and tabmood thid product will show --}}
                                <li class="nav-item dropdown d-lg-none"><a class="main"
                                        href="{{ route('frontend.product.index') }}">Product</a>

                                    <ul>
                                        @foreach ($newProducts as $product)
                                            <li><a href="{{ route('frontend.product.details', $product->slug) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                {{--  --}}
                                <li class="main"><a href="{{ route('frontend.blog') }}">Article</a></li>
                                <li class="main"><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
                                <li class="main"><a href="{{ route('frontend.career') }}">Career</a></li>
                                <li class="main"><a href="{{ route('frontend.contract_us') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="product-image-display">
        <img id="product-image" class="img-fluid" src="{{ asset('img/demo/bannerr.webp') }}" alt="Product Image"
            style="width: 400px; height: auto; object-fit: contain;">
    </div> --}}
</header>

{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/popper.min.js') }}"></script> --}}

{{-- <script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('search/search.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('quform/js/plugins.js') }}"></script>
<script src="{{ asset('quform/js/scripts.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script src="{{ asset('js/core.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/main.js') }}"></script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productLinks = document.querySelectorAll('.product-link');
        const productImage = document.getElementById('product-image');

        productLinks.forEach(link => {
            // On hover, display the navmenu image
            link.addEventListener('mouseover', function() {
                const navmenuImageUrl = link.getAttribute('data-navmenu-image');
                productImage.src = navmenuImageUrl; // Set navmenu image on hover
            });

            // On mouseout, reset to placeholder image
            link.addEventListener('mouseout', function() {
                productImage.src =
                    '{{ asset('img/demo/bannerr.webp') }}'; // Reset to default image when hover ends
            });
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const productLinks = document.querySelectorAll('.product-link');
        const productImageDisplay = document.getElementById('product-image-display');
        const productImage = document.getElementById('product-image');

        productLinks.forEach(link => {
            // On hover, display the navmenu image
            link.addEventListener('mouseover', function() {
                const navmenuImageUrl = link.getAttribute('data-navmenu-image');
                productImage.src = navmenuImageUrl; // Set the navmenu image on hover
                productImageDisplay.style.display = 'block'; // Show the image container
            });

            // On mouseout, hide the image
            link.addEventListener('mouseout', function() {
                productImageDisplay.style.display = 'none'; // Hide the image container
            });
        });
    });
</script>


<style>
    .navbar-brand img {
        height: 4.5rem !important;
        /* Set the desired height for the logo */
        width: 12rem !important;
        /* Set the desired width for the logo */
        object-fit: contain;
        /* Ensure the logo maintains aspect ratio */
        transition: height 0.3s ease, width 0.3s ease;
        /* Smooth transition if any */
    }

    #header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        padding: 8px 0;
        /* Adjust padding to avoid height change on scroll */
        background-color: white;
        /* Ensure consistent header background */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    @media screen and (min-width: 992px) {
        .scrollHeader .navbar-brand img {
            max-height: 45px !important;
            transition-duration: 0.5s !important;
        }
    }

    @media (min-width: 992px) {
        #header {
            padding: 0px !important;
        }

        #product-image-display {
            display: block;
        }
    }

    @media (max-width: 992px) {
        #product-image-display {
            display: none !important;
        }
    }

    /* Ensure logo size doesn't change on scroll */
    .solid-header .navbar-brand img {
        height: 3.5rem !important;
        /* Maintain fixed size on scroll */
        width: 10rem !important;
        transition: none;
        /* Prevent any transition during scroll */
    }

    /* Remove transition for header */
    .solid-header {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav li a {
        position: relative;
        display: inline-block;
        color: #000;
        text-decoration: none;
        padding: 5px 0;
        transition: color 0.3s ease;
    }

    .navbar-nav li a::before {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: red;
        transition: width 0.3s ease;
        border-radius: 2px;
    }

    .navbar-nav li a:hover::before {
        width: 100%;
    }

    .navbar-nav li a:hover {
        color: red;
    }

    .navbar-toggler {
        border: none;
        background: transparent;
    }

    .navbar-toggler .navbar-toggler-icon {
        background-image: none;
        position: relative;
        width: 30px;
        height: 2px;
        background-color: black;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .navbar-toggler .navbar-toggler-icon::before,
    .navbar-toggler .navbar-toggler-icon::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 2px;
        background-color: black;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .navbar-toggler .navbar-toggler-icon::before {
        top: -8px;
    }

    .navbar-toggler .navbar-toggler-icon::after {
        top: 8px;
    }

    .navbar-toggler.collapsed .navbar-toggler-icon {
        background-color: transparent;
    }

    .navbar-toggler.collapsed .navbar-toggler-icon::before {
        transform: rotate(45deg);
        top: 0;
    }

    .navbar-toggler.collapsed .navbar-toggler-icon::after {
        transform: rotate(-45deg);
        top: 0;
    }

    @media (max-width: 992px) {
        .navbar-nav {
            display: none;
            text-align: center;
        }

        .navbar-toggler.collapsed+.navbar-nav {
            display: flex;
            animation: slide-down 0.3s ease;
        }
    }

    @keyframes slide-down {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #product-image {
        width: 100%;
        height: 100%;
        object-fit: fill !important;
    }

    .navbar {
        top: 1px !important;
        left: 1px !important;
    }

    @media (max-width: 992px) {
        #navbarNav {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-height: 90vh;
            /* Restrict height to 70% of viewport */
            overflow-y: auto;
            /* Enable scrolling */
            width: 100%;
        }

        /* Make submenu scrollable too */
        #navbarNav ul {
            max-height: 350px;
            /* Max height for submenu */
            overflow-y: auto;
            padding-left: 20px;
        }

        /* Toggle button styles */
        .navbar-toggler {
            border: none;
            background: transparent;
        }

        .navbar-toggler .navbar-toggler-icon {
            width: 30px;
            height: 2px;
            background-color: black;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .navbar-toggler .navbar-toggler-icon::before,
        .navbar-toggler .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 2px;
            background-color: black;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .navbar-toggler .navbar-toggler-icon::before {
            top: -8px;
        }

        .navbar-toggler .navbar-toggler-icon::after {
            top: 8px;
        }

        .navbar-toggler.collapsed .navbar-toggler-icon {
            background-color: transparent;
        }

        .navbar-toggler.collapsed .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 0;
        }

        .navbar-toggler.collapsed .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            top: 0;
        }

        /* Smooth dropdown animation */
        @keyframes slide-down {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    }

    #product-image-display {
        display: none;
        /* Initially hidden */
        position: absolute;
        /* Absolute positioning */
        top: 60px;
        /* Adjust the top position as needed based on the menu height */
        right: 491px !important;
        /* Adjust the left position to align it below the product menu */
        width: 400px;
        /* Adjust the width of the image container */
        height: auto;
        z-index: 999;


        padding: 10px;
    }

    /* Make sure dropdown icons are visible in mobile */
    .dropdown-icon {
        display: inline-block;
        margin-left: 10px;
        transition: transform 0.3s ease;
    }

    /* Ensure visibility in mobile */
    @media (max-width: 992px) {
        .dropdown-icon {
            display: inline-block !important;
            /* Ensure it's not hidden */
        }
    }

    /* Styling for all menu items */
    .navbar-nav ul li {
        position: relative;
        padding-left: 20px;
        /* Ensure space for the icon */
    }

    /* Active state: icon is visible */
    .navbar-nav ul li.active:before {
        width: 20px;
        font-weight: bold;
        /* Adjust this width as needed for the desired icon size */
    }
</style>
