<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>

    <!-- Font Awesome for Icons -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}

    <!-- Include jQuery, Vue, and Axios -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script> --}}
</head>

<body>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="sidebarToggle" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- User Dropdown Menu -->
            <li class="nav-item dropdown">

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <li class="nav-item">
                <a href="#" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <p> <i class="nav-icon fas fa-sign-out-alt"></i> Logout</p>


                </a>
                <!-- Logout Form -->
                <form id="logout-form" action="{{ route('backend.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <!-- Logout Form -->
            <form id="logout-form" action="" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="iWOuijeQtOOVWZZRHBw2Oo27hvDktRcrHXtqOdrk">
            </form>
            </div>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 fixed-left" id="mainSidebar">
        <!-- Brand Logo -->
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-start">
            <!-- Display the site logo -->
            @if ($siteLogo)
                <img src="{{ asset($siteLogo) }}" alt="Site Logo" class="img-fluid logo p-1"
                    style="height: 3rem; width:7rem !important; padding-left: 15px !important;">
            @else
                <!-- Default fallback if no logo is set -->
                <span class="navbar-brand">Site Name</span>
            @endif
        </a>

        <!-- Sidebar Navigation -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('backend.dashboard') }}"
                        class="nav-link {{ request()->is('backend/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.home.image-slider') }}"
                        class="nav-link {{ request()->is('backend/home/image-slider') ? 'active' : '' }}">
                        <i class="far fa-images nav-icon"></i>
                        <p>Hero content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.home.partner') }}"
                        class="nav-link {{ request()->is('backend/home/partner') ? 'active' : '' }}">
                        <i class="fas fa-handshake nav-icon"></i>
                        <p>Partner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.home.review') }}"
                        class="nav-link {{ request()->is('backend/home/review') ? 'active' : '' }}">
                        <i class="fas fa-star nav-icon"></i>
                        <p>Review</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.home.languages') }}"
                        class="nav-link {{ request()->is('backend/home/languages') ? 'active' : '' }}">
                        <i class="fas fa-language nav-icon"></i>
                        <p>Languages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.blogs.index') }}"
                        class="nav-link {{ request()->is('backend/blog') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-concierge-bell"></i>
                        <p>Blog</p>
                    </a>
                </li>


                <!-- Gallery -->
                <li class="nav-item">
                    <a href="{{ route('backend.media.images.index') }}"
                        class="nav-link {{ request()->is('backend/media/image*') ? 'active' : '' }}">
                        <i class="far fa-image nav-icon"></i>
                        <p>Images</p>
                    </a>
                </li>
                <!-- Videos Subsection -->
                <li class="nav-item">
                    <a href="{{ route('backend.media.videos.index') }}"
                        class="nav-link {{ request()->is('backend/media/video*') ? 'active' : '' }}">
                        <i class="fas fa-video nav-icon"></i>
                        <p>Videos</p>
                    </a>
                </li>
                <!-- Media Links Subsection -->
                <li class="nav-item">
                    <a href="{{ route('backend.media.links.index') }}"
                        class="nav-link {{ request()->is('backend/media/link*') ? 'active' : '' }}">
                        <i class="fas fa-link nav-icon"></i>
                        <p>Media Links</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('backend.statistics.index') }}"
                        class="nav-link {{ request()->is('backend/statistics') ? 'active' : '' }}">
                        <i class="fas fa-chart-bar nav-icon"></i>
                        <p>Statistics</p>
                    </a>
                </li>


                <!-- About Us -->
                <li class="nav-item">
                    <a href="{{ route('backend.about.index') }}"
                        class="nav-link {{ request()->is('backend/about') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>About Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.new_products.index') }}">
                        <i class="fas fa-boxes"></i>
                        Manage Products
                    </a>
                </li>

                <!-- Service -->
                {{-- <li class="nav-item">
                    <a href="{{ url('backend/service') }}"
                        class="nav-link {{ request()->is('backend/service') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>Service</p>
                    </a>
                </li> --}}

                <!-- Career -->
                <li class="nav-item">
                    <a href="{{ route('backend.career') }}"
                        class="nav-link {{ request()->is('backend/career') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Career</p>
                    </a>
                </li>

                <!-- Jobs -->
                <li class="nav-item">
                    <a href="{{ route('backend.job') }}"
                        class="nav-link {{ request()->is('backend/job') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Jobs</p>
                    </a>
                </li>

                <!-- Contracts -->
                <li class="nav-item">
                    <a href="{{ route('backend.contacts') }}"
                        class="nav-link {{ request()->is('backend/contacts') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Contracts</p>
                    </a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="{{ route('backend.settings') }}"
                        class="nav-link {{ request()->is('backend/settings') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Bannaer settings</p>
                    </a>
                </li>
                <!-- Main Settings Link -->
                <li class="nav-item">
                    <a href="{{ route('backend.main_settings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Main Settings</p>
                    </a>
                </li>






            </ul>
        </nav>
    </aside>

    <!-- JavaScript for Sidebar Toggle and Submenu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const mainSidebar = document.getElementById('mainSidebar');
            const body = document.body;

            // Check local storage to determine the sidebar state
            if (localStorage.getItem('sidebarVisible') === 'true') {
                body.classList.add('sidebar-visible');
                body.classList.remove('sidebar-hidden');
                mainSidebar.style.transform = 'translateX(0)';
            } else {
                body.classList.add('sidebar-hidden');
                body.classList.remove('sidebar-visible');
                mainSidebar.style.transform = 'translateX(-100%)';
            }
            window.addEventListener('load', function() {
                document.body.classList.add('sidebar-visible');
                document.body.classList.remove('sidebar-hidden');
                document.getElementById('mainSidebar').style.transform = 'translateX(0)';
                localStorage.setItem('sidebarVisible', 'true');
            });

            function toggleSidebar() {
                const isVisible = body.classList.toggle('sidebar-visible');
                body.classList.toggle('sidebar-hidden', !isVisible);
                mainSidebar.style.transform = isVisible ? 'translateX(0)' : 'translateX(-100%)';
                // Save the state in local storage
                localStorage.setItem('sidebarVisible', true);
            }

            sidebarToggle.addEventListener('click', function(event) {
                toggleSidebar();
                event.stopPropagation(); // Prevent click from propagating to the body
            });

            // Handle click outside of sidebar in mobile mode
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 768 &&
                    !mainSidebar.contains(event.target) &&
                    !sidebarToggle.contains(event.target)) {
                    body.classList.add('sidebar-hidden');
                    body.classList.remove('sidebar-visible');
                    mainSidebar.style.transform = 'translateX(-100%)';
                    localStorage.setItem('sidebarVisible', 'false');
                }
            });

            // Prevent clicks inside the sidebar from closing it
            mainSidebar.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>

    <!-- CSS Styles for Sidebar and Navbar -->
    <style>
        .main-header.navbar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1050;
        }

        .main-sidebar {
            transition: transform .3s ease;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            z-index: 1040;
            /* Lower z-index than navbar */
        }

        .sidebar-hidden #app {
            margin-left: 0;
        }

        .sidebar-hidden .main-sidebar {
            transform: translateX(-100%);
        }

        .sidebar-visible .main-sidebar {
            transform: translateX(0);
        }

        .content-wrapper {
            transition: margin-left .3s ease-in-out;
            margin-left: 0;
            padding-top: 56px;
            /* Adjust for fixed navbar height */
        }

        .sidebar-visible .content-wrapper {
            margin-left: 250px;
        }

        @media (max-width: 768px) {
            .main-sidebar {
                width: 250px;
                z-index: 1050;
            }

            .sidebar-visible .main-sidebar {
                transform: translateX(0);
            }

            .sidebar-hidden .main-sidebar {
                transform: translateX(-100%);
            }

            .fas.fa-bars {
                transition: margin-left 0.3s ease-in-out;
                position: fixed;
                z-index: 1060;
            }
        }

        .nav-sidebar .nav-item>.nav-link {
            width: calc(250px - .5rem * 2);
        }

        body:not(.layout-fixed) .main-sidebar {
            height: inherit;
            min-height: 100%;
            position: fixed !important;
            top: 0;
        }

        @media (min-width: 768px) {

            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,
            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,
            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
                transition: margin-left .0s ease-in-out !important;
                margin-left: 250px;
            }
        }

        .main-header.navbar {
            position: fixed;
            width: calc(100% - 250px);
            /* Adjust width to account for sidebar */
            top: 0;
            right: 0;
            /* Keep navbar on the right */
            z-index: 1050;
            transition: width .3s ease;
            /* Smooth transition for width */
        }

        /* Adjust main-header when sidebar is hidden */
        .sidebar-hidden .main-header.navbar {
            width: 100%;
            /* Full width when sidebar is hidden */
            margin-left: 0;
        }

        /* Content Wrapper should also take full width when sidebar is hidden */
        .sidebar-hidden .content-wrapper {
            margin-left: 0;
            width: 100%;
            /* Full width */
        }

        /* Content Wrapper should have left margin when sidebar is visible */
        .sidebar-visible .content-wrapper {
            margin-left: 250px;
            /* Set to the sidebar width */
        }

        /* Sidebar hidden and visible transitions */
        .main-sidebar {
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            z-index: 1040;
            /* Lower z-index than navbar */
        }

        /* Hide sidebar when hidden */
        .sidebar-hidden .main-sidebar {
            transform: translateX(-100%);
        }

        /* Show sidebar when visible */
        .sidebar-visible .main-sidebar {
            transform: translateX(0);
        }

        /* Adjust the transition for smaller screens */
        @media (max-width: 768px) {
            .main-sidebar {
                z-index: 1050;
                width: 250px;
            }

            .sidebar-visible .main-sidebar {
                transform: translateX(0);
            }

            .sidebar-hidden .main-sidebar {
                transform: translateX(-100%);
            }

            .fas.fa-bars {
                transition: margin-left 0.3s ease-in-out;
                position: fixed;
                z-index: 1060;
            }

            .main-header.navbar {
                width: 100%;
                /* Ensure full width in mobile */
            }

            .sidebar-hidden .content-wrapper {
                margin-left: 0;
                width: 100%;
            }
        }

        /* Main header transitions */
        .main-header.navbar {
            transition: width 0.3s ease, margin-left 0.3s ease;
            top: 0;
            right: 0;
            z-index: 1050;
        }
    </style>
</body>

</html>
