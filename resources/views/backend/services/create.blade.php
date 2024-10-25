@extends('backend.app')

@section('title', 'Create Service')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create Blog</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.service') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to services
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Service Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" class="form-control summernote" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea name="long_description" class="form-control summernote" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="service_image" class="form-label">Service Image</label>
                            <input type="file" name="service_image" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="service_banner" class="form-label">Service Banner</label>
                            <input type="file" name="service_banner" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200
            });
        });
    </script>
@endsection
