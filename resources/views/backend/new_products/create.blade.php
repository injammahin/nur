@extends('backend.app')

@section('title', 'Create New Product')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create New Product</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.new_products.index') }}" class="btn btn-info ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to New Products
                    </a>
                </div>
                <div class="card-body">
                    <form id="productForm" action="{{ route('backend.new_products.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <!-- Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control summernote" name="short_description" id="short_description" required></textarea>
                        </div>

                        <!-- Long Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Long Description</label>
                            <textarea name="description" id="description" class="form-control summernote" required></textarea>
                        </div>

                        <!-- Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Product Logo (120 × 115)</label>
                            <input type="file" name="logo" id="logo" class="form-control" accept="image/*"
                                required>
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="mb-3">
                            <label for="thumb_image" class="form-label">Thumbnail Image (450 × 280)</label>
                            <input type="file" name="thumb_image" id="thumb_image" class="form-control" accept="image/*"
                                required>
                        </div>

                        <!-- Banner Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Banner Image (1920 × 400)</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                required>
                        </div>

                        <!-- Navmenu Image -->
                        <div class="mb-3">
                            <label for="navmenu_image" class="form-label">Navmenu Image (650 × 400)</label>
                            <input type="file" name="navmenu_image" id="navmenu_image" class="form-control"
                                accept="image/*" required>
                        </div>

                        <!-- Brochure -->
                        <div class="mb-3">
                            <label for="brochure" class="form-label">Brochure (PDF)</label>
                            <input type="file" name="brochure" id="brochure" class="form-control" accept=".pdf">
                        </div>

                        <!-- Video URL -->
                        <div class="mb-3">
                            <label for="video_url" class="form-label">Video URL (YouTube URL)</label>
                            <input type="text" name="video_url" id="video_url" class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Create New Product</button>
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
                        event.preventDefault(); // Prevent form submission if invalid
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
