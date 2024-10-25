<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ambalait | @yield('title')</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/logos/ambalait-fav-logo.png') }}" alt="Ambala IT Logo" />
    <link rel="apple-touch-icon" href="{{ asset('img/logos/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logos/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logos/apple-touch-icon-114x114.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('search/search.css') }}">
    <link rel="stylesheet" href="{{ asset('quform/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/service.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/responsive.css') }}">
    @yield('head-styles')
</head>

<body>
    @include('includes.header')

    <main class="main">
        @yield('content')
    </main>

    @include('includes.footer')

    <a href="#!" class="scroll-to-top">
        <i class="fas fa-angle-up" aria-hidden="true"></i>
    </a>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.querySelector('.scroll-to-top');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollToTopButton.style.display = 'block';
                } else {
                    scrollToTopButton.style.display = 'none';
                }
            });

            scrollToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
        // Animated Counter for Clients
        document.addEventListener("DOMContentLoaded", function() {
            const counter = document.getElementById('clientCount');
            let count = 0;
            const target = 25;
            const interval = 50; // Speed of counting

            const counterInterval = setInterval(() => {
                if (count < target) {
                    count++;
                    counter.innerHTML = count;
                } else {
                    clearInterval(counterInterval);
                }
            }, interval);
        });

        $(document).ready(function() {
            var owl = $(".service-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false, // Disable default nav buttons
                items: 3,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000, // 5 seconds
                smartSpeed: 800,
                responsive: {
                    0: {
                        items: 1 // Show 1 item on mobile
                    },
                    600: {
                        items: 2 // Show 2 items on tablet
                    },
                    1000: {
                        items: 3 // Show 3 items on desktop
                    }
                }
            });

            // Custom navigation functionality
            $('.owl-nav-next').click(function() {
                owl.trigger('next.owl.carousel');
            });

            $('.owl-nav-prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('search/search.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('quform/js/plugins.js') }}"></script>
    <script src="{{ asset('quform/js/scripts.js') }}"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function() {
            $(".toggle-element").click(function() {
                $(this).next(".element-to-toggle").slideToggle();
            });

            $(".navbar-toggler").click(function() {
                $("#navbarNav").slideToggle();
            });

            $(window).resize(function() {
                if ($(window).width() >= 992) {
                    $("#navbarNav").show();
                } else {
                    $("#navbarNav").hide();
                }
            });
        });

        var options = {
            accessibility: true,
            prevNextButtons: true,
            pageDots: true,
            setGallerySize: false,
            autoPlay: 5000,
            wrapAround: true,
            arrowShape: {
                x0: 10,
                x1: 60,
                y1: 50,
                x2: 60,
                y2: 45,
                x3: 15
            }
        };

        var $carousel = $('[data-carousel]').flickity(options);
        var flkty = $carousel.data('flickity');
        var selectedSlide;

        if (flkty) {
            selectedSlide = flkty.selectedElement;

            flkty.on('settle', function(index) {
                selectedSlide = flkty.selectedElement;
            });

            flkty.on('change', function(index) {
                $($slideContent.eq(index)).removeClass('mask');

                setTimeout(function() {
                    $slideContent.addClass('mask');
                }, 200);
            });

            flkty.on('dragStart', function(event) {
                var index = 0;
                if (event.layerX > 0) {
                    index = $(selectedSlide).index() + 1;
                } else {
                    index = $(selectedSlide).index() - 1;
                }
                $($slideContent.eq(index)).removeClass('mask');
            });

            setTimeout(function() {
                $slideContent.addClass('mask');
            }, 500);
        }

        // Owl Carousel for Testimonials
        var owl = $('.unique-testimonial-carousel');
        if (owl.length) {
            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                items: 1,
                center: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            owl.on('changed.owl.carousel', function(event) {
                var item = event.item.index - 2;
                $('.owl-item').not('.cloned').eq(item).addClass('center').siblings().removeClass('center');
            });

            owl.trigger('changed.owl.carousel');
        }

        // Chatbox functionality
        $('.chat-toggle').on('click', function() {
            $('.chat-box').toggle();
        });

        $('.close-chat').on('click', function() {
            $('.chat-box').hide();
        });
    </script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

    @yield('scripts')
</body>

</html>
