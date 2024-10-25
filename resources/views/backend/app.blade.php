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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote-lite.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('search/search.css') }}">
    <link rel="stylesheet" href="{{ asset('quform/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link href="{{ asset('backend/favicon.ico') }}" rel="icon">
    <link href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/summernote/summernote-lite.min.css') }}" rel="stylesheet">


    @yield('head-styles')
</head>

<body>
    @include('backend.append.sidebar')
    <main class="main">

        @yield('content')
    </main>


    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
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
    </script>

    <!-- JS files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('search/search.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('quform/js/plugins.js') }}"></script>
    <script src="{{ asset('quform/js/scripts.js') }}"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('/summernote/summernote-lite.min.js') }}"></script>




    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Check if the sidebar state is stored in localStorage and apply it
                if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                    document.body.classList.toggle('sb-sidenav-toggled');
                }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                        'sb-sidenav-toggled'));
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set editor height
                minHeight: null, // Set minimum height of editor
                maxHeight: null, // Set maximum height of editor
                focus: true // Set focus to editable area after initializing summernote
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('input[name="video_thumbnail"]');
            const saveButton = document.querySelector('button[type="submit"]');

            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];
                if (file && !file.type.startsWith('image/')) {
                    alert('Only image files are allowed for the video thumbnail.');
                    fileInput.value = ''; // Clear the invalid input
                    saveButton.disabled = true; // Disable the save button
                } else {
                    saveButton.disabled = false; // Enable the save button
                }
            });
        });
        // Apply validation to Add Partner modal
        if (addImageInput) {
            const addSubmitButton = document.querySelector('#addPartnerModal button[type="submit"]');
            validateImageInput(addImageInput, addSubmitButton);
        }

        // Apply validation to each Edit Partner modal
        editImageInputs.forEach((editImageInput, index) => {
            const editSubmitButton = document.querySelectorAll('.modal-footer button[type="submit"]')[index];
            validateImageInput(editImageInput, editSubmitButton);
        });
    </script>

    @yield('scripts')
</body>

</html>
