@extends('backend.app')

@section('title', 'Edit Product - ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Product - {{ $new_product->name }}</h3>
                    <a href="{{ route('backend.new_products.index') }}" class="btn btn-info ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to Products
                    </a>
                </div>
                <div class="card-body">
                    <form id="productForm" action="{{ route('backend.new_products.update', $new_product->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $new_product->name }}" required>
                        </div>

                        <!-- Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control summernote" required>{{ $new_product->short_description }}</textarea>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control summernote" required>{{ $new_product->description }}</textarea>
                        </div>

                        <!-- Product Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Product Logo (120 × 115)</label>
                            @if ($new_product->logo)
                                <div class="mb-2">
                                    <img src="{{ asset('media/new_product/logos/' . $new_product->logo) }}" alt="Logo"
                                        width="100">
                                </div>
                            @endif
                            <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="mb-3">
                            <label for="thumb_image" class="form-label">Thumbnail Image (450 × 280)</label>
                            @if ($new_product->thumb_image)
                                <div class="mb-2">
                                    <img src="{{ asset('media/new_product/thumbs/' . $new_product->thumb_image) }}"
                                        alt="Thumb Image" width="100">
                                </div>
                            @endif
                            <input type="file" name="thumb_image" id="thumb_image" class="form-control" accept="image/*">
                        </div>

                        <!-- Main Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Main Image (1920 × 400)</label>
                            @if ($new_product->image)
                                <div class="mb-2">
                                    <img src="{{ asset('media/new_product/images/' . $new_product->image) }}"
                                        alt="Main Image" width="100">
                                </div>
                            @endif
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        </div>

                        <!-- Navmenu Image -->
                        <div class="mb-3">
                            <label for="navmenu_image" class="form-label">Navmenu Image (650 × 400)</label>
                            @if ($new_product->navmenu_image)
                                <div class="mb-2">
                                    <img src="{{ asset('media/new_product/navmenu_images/' . $new_product->navmenu_image) }}"
                                        alt="Navmenu Image" width="100">
                                </div>
                            @endif
                            <input type="file" name="navmenu_image" id="navmenu_image" class="form-control"
                                accept="image/*">
                        </div>

                        <!-- Brochure (PDF) -->
                        <div class="mb-3">
                            <label for="brochure" class="form-label">Brochure (PDF)</label>
                            @if ($new_product->brochure)
                                <div class="mb-2">
                                    <a href="{{ asset('media/new_product/brochures/' . $new_product->brochure) }}"
                                        target="_blank">View Current Brochure</a>
                                </div>
                            @endif
                            <input type="file" name="brochure" id="brochure" class="form-control" accept=".pdf">
                        </div>

                        <!-- YouTube Video URL -->
                        <div class="mb-3">
                            <label for="video_url" class="form-label">YouTube Video URL</label>
                            <input type="url" name="video_url" id="video_url" class="form-control"
                                value="{{ $new_product->video_url }}" placeholder="https://www.youtube.com/watch?v=...">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Summernote
            $('.summernote').summernote({
                height: 200,
                minHeight: null,
                maxHeight: null,
                focus: true
            });

            // Validate image file types before form submission
            $('#productForm').on('submit', function(event) {
                let isValid = true;
                const validImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

                // Check file inputs for images only
                $('#productForm').find('input[type="file"][accept="image/*"]').each(function() {
                    const file = this.files[0];
                    if (file && !validImageTypes.includes(file.type)) {
                        isValid = false;
                        alert('Please select a valid image file (JPEG, PNG, GIF, or WEBP).');
                        event.preventDefault();
                        return false; // Break out of the loop
                    }
                });

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission if not valid
                }
            });

            // Clear form fields on reset
            $('#productForm').on('reset', function() {
                $(this).find('input[type="file"]').val('');
                $(this).find('textarea').val('');
            });
        });
    </script>
@endsection
