@extends('frontend.app')
@section('title', 'Media')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">
            <!-- Show Product Banner from Settings -->
            <img src="{{ $settings && $settings->gallery_banner ? asset($settings->gallery_banner) : asset('/img/placeholder/Placeholder image-banner.webp') }}"
                alt="Gallery Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>Welcome to Ambala IT</h1>
                    <p>Innovative Solutions for a Digital World</p>
                </div>
            </div>
        </div>
    </div>

    <section class="gallery container">
        <!-- Image Gallery Section -->
        @if (isset($galleryImages) && $galleryImages->count() > 0)
            <div class="image-gallery-section top ambala-section">
                <div class="text-center mb-3">
                    <span class="ambala_heading">Photo Gallery</span>
                </div>
                <!-- Tabs -->
                <ul class="nav nav-pills mb-4 justify-content-center wow animate__animated animate__bounceInDown"
                    id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                            aria-controls="pills-all" aria-selected="true">All</a>
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" id="pills-{{ $category->id }}-tab" data-toggle="pill"
                                href="#pills-{{ $category->id }}" role="tab" aria-controls="pills-{{ $category->id }}"
                                aria-selected="false">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <!-- Tab Content -->
                <div class="tab-content wow animate__animated animate__bounceInUp" id="pills-tabContent">
                    <!-- All Tab -->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <div class="row" id="image-gallery">
                            @foreach ($galleryImages as $image)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 animate__animated animate__zoomIn gallery-item">
                                    <div class="position-relative">
                                        <img src="{{ asset($image->image) }}" class="img-fluid gallery-image" alt="Image"
                                            data-description="{{ $image->description }}">
                                        <div class="image-overlay">
                                            <div class="image-description">
                                                {{-- <p>{{ $image->description }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Show More Button for Images -->
                        <div class="text-center mt-4">
                            <button class="butn read_more" id="load-more-images">Show More Images</button>
                        </div>
                    </div>

                    <!-- Dynamic Tabs for Each Category -->
                    @foreach ($categories as $category)
                        <div class="tab-pane fade" id="pills-{{ $category->id }}" role="tabpanel"
                            aria-labelledby="pills-{{ $category->id }}-tab">
                            <div class="row">
                                @foreach ($galleryImages->where('category_id', $category->id) as $image)
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 wow animate__animated animate__zoomIn">
                                        <div class="image-wrapper position-relative">
                                            <img style="height: 200px !important; width:400px !important;"
                                                src="{{ asset($image->image) }}" class="img-fluid gallery-image"
                                                alt="{{ $category->name }} Image">
                                            <div class="image-overlay">
                                                <div class="image-description">
                                                    {{-- <p>{{ $image->description }}</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Video Section -->
        @if (isset($videos) && $videos->count() > 0)
            <div class="video-section ambala-section">
                <div class="text-center mb-5">
                    <span class="ambala_heading">Visual Media</span>
                </div>
                <div class="row" id="video-gallery">
                    @foreach ($videos as $video)
                        <div class="col-lg-4 col-md-6 mb-4 animate__animated animate__zoomIn video-item">
                            <div class="video-thumbnail-wrapper position-relative wow animate__animated animate__fadeInUp">
                                <div>
                                    <img style="height: 200px !important; width:400px !important;"
                                        src="{{ asset($video->image) }}" class="img-fluid video-thumbnail"
                                        alt="Video Thumbnail" data-video-url="{{ $video->media_url }}">
                                    <div class="play-icon">
                                        <i class="fa fa-play-circle play-icon-center"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2 text-center">{{ $video->name }}</p>
                        </div>
                    @endforeach
                </div>
                <!-- Show More Button for Videos -->
                <div class="text-center mt-4">
                    <button class="butn read_more" id="load-more-videos">Show More Videos</button>
                </div>
            </div>
        @endif

        <!-- Print Media Section -->
        @if (isset($mediaLinks) && $mediaLinks->count() > 0)
            <div class="print-media-section ambala-section">
                <div class="text-center mb-5">
                    <span class="ambala_heading">Print Media</span>
                </div>
                <div class="row" id="media-gallery">
                    @foreach ($mediaLinks as $media)
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-4 animate__animated animate__fadeInUp media-item">
                            <div class="card text-center">
                                <a href="{{ $media->media_url }}" target="_blank">
                                    <img style="height: 200px !important; width:400px !important;"
                                        src="{{ asset($media->image) }}" class="card-img-top" alt="Print Media">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $media->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Show More Button for Media -->
                <div class="text-center mt-4">
                    <button class="butn read_more" id="load-more-media">Show More Media</button>
                </div>
            </div>
        @endif
    </section>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="text-center">
                    <img id="modalImage" src="" alt="Modal Image" class="img-fluid next-image">
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" id="prevImage"><i
                            class="fa fa-arrow-left"></i></button>
                    <p id="modalImageDescription" class="mt-3"></p>
                    <button type="button" class="btn btn-secondary" id="nextImage"><i
                            class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="text-center">
                    <iframe id="videoModalIframe" width="100%" height="500" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Ensure all images, videos, and posters are the same size */
        .gallery-image,
        .video-thumbnail,
        .card-img-top {
            width: 100%;
            height: 220px !important;
            /* Fixed height */
            object-fit: cover;
            /* Ensures the aspect ratio is maintained */
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .image-gallery-section .img-fluid {
            max-width: 100%;
            height: 180px !important;
        }

        .image-wrapper,
        .video-thumbnail-wrapper,
        .card {
            overflow: hidden;
            border-radius: 5px;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3.5rem;
            color: rgba(255, 255, 255, 0.8);
            pointer-events: none;
        }

        .play-icon-center {
            font-size: 5rem !important;
            color: white;
        }

        .card-title {
            margin-top: 15px;
            font-weight: bold;
            font-size: 1rem;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-wrapper:hover .image-overlay {
            opacity: 1;
        }

        .image-description {
            color: #fff;
            text-align: center;
            font-size: 1rem;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.9rem;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
        }

        #imageModal .modal-dialog,
        #videoModal .modal-dialog {
            max-width: 90%;
        }

        #imageModal .modal-footer button {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let imagesToShow = 12; // Initial number of images to show
            let videosToShow = 6; // Initial number of videos to show
            let mediaToShow = 6; // Initial number of media items to show

            // Show More Images Functionality
            $('#load-more-images').click(function() {
                imagesToShow += 12; // Increase the number of images to show
                $('#image-gallery .gallery-item').slice(0, imagesToShow)
                    .show(); // Show images up to the new limit
                if ($('#image-gallery .gallery-item:hidden').length === 0) { // If no hidden items left
                    $(this).hide(); // Hide the "Show More" button
                }
            });

            // Show More Videos Functionality
            $('#load-more-videos').click(function() {
                videosToShow += 6; // Increase the number of videos to show
                $('#video-gallery .video-item').slice(0, videosToShow)
                    .show(); // Show videos up to the new limit
                if ($('#video-gallery .video-item:hidden').length === 0) { // If no hidden items left
                    $(this).hide(); // Hide the "Show More" button
                }
            });

            // Show More Media Functionality
            $('#load-more-media').click(function() {
                mediaToShow += 6; // Increase the number of media items to show
                $('#media-gallery .media-item').slice(0, mediaToShow)
                    .show(); // Show media items up to the new limit
                if ($('#media-gallery .media-item:hidden').length === 0) { // If no hidden items left
                    $(this).hide(); // Hide the "Show More" button
                }
            });

            // Initialize all elements to ensure only the initial set is displayed
            $('#image-gallery .gallery-item').slice(imagesToShow).hide(); // Hide images beyond initial set
            $('#video-gallery .video-item').slice(videosToShow).hide(); // Hide videos beyond initial set
            $('#media-gallery .media-item').slice(mediaToShow).hide(); // Hide media items beyond initial set

            // Handle Image Modal
            let currentImageIndex;
            const images = document.querySelectorAll('.gallery-image');
            const modalImage = document.getElementById('modalImage');
            const modalImageDescription = document.getElementById(
                'modalImageDescription'); // Reference the description container

            images.forEach((image, index) => {
                image.addEventListener('click', function() {
                    currentImageIndex = index;
                    modalImage.src = this.src; // Set modal image
                    modalImageDescription.textContent = this.dataset
                        .description; // Set modal description
                    $('#imageModal').modal('show'); // Show the modal
                });
            });

            // Handle previous image functionality
            document.getElementById('prevImage').addEventListener('click', function() {
                currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
                modalImage.src = images[currentImageIndex].src;
                modalImageDescription.textContent = images[currentImageIndex].dataset
                    .description; // Update description
            });

            // Handle next image functionality
            document.getElementById('nextImage').addEventListener('click', function() {
                currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
                modalImage.src = images[currentImageIndex].src;
                modalImageDescription.textContent = images[currentImageIndex].dataset
                    .description; // Update description
            });

            // Handle Video Modal
            const videoThumbnails = document.querySelectorAll('.video-thumbnail-wrapper');
            const videoModalIframe = document.getElementById('videoModalIframe');

            videoThumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const videoUrl = this.querySelector('.video-thumbnail').dataset.videoUrl;
                    videoModalIframe.src = videoUrl;
                    $('#videoModal').modal('show');
                });
            });

            // Clear video iframe on modal close
            $('#videoModal').on('hidden.bs.modal', function() {
                videoModalIframe.src = ''; // Clear video src when modal is closed
            });
        });
    </script>
@endsection
