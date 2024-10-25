@extends('backend.app')

@section('title', 'Edit Service')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Service</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.service') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to services
                    </a>
                </div>
                <div class="card-body">
                    <!-- Show Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Service Edit Form -->
                    <form action="{{ route('backend.services.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-label">Service Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span> <!-- Show error for name -->
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" class="form-control summernote" rows="3" required>{{ $service->short_description }}</textarea>
                            @if ($errors->has('short_description'))
                                <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                <!-- Show error for short description -->
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea name="long_description" class="form-control summernote" rows="5" required>{{ $service->long_description }}</textarea>
                            @if ($errors->has('long_description'))
                                <span class="text-danger">{{ $errors->first('long_description') }}</span>
                                <!-- Show error for long description -->
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="service_image" class="form-label">Service Image</label>
                            <input type="file" name="service_image" class="form-control">
                            <small>Current Image:</small>
                            <img src="{{ asset('media/service/service_image/' . $service->service_image) }}" width="75"
                                class="img-fluid rounded shadow-sm">
                            @if ($errors->has('service_image'))
                                <span class="text-danger">{{ $errors->first('service_image') }}</span>
                                <!-- Show error for service image -->
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="service_banner" class="form-label">Service Banner</label>
                            <input type="file" name="service_banner" class="form-control">
                            <small>Current Banner:</small>
                            <img src="{{ asset('media/service/service_banner/' . $service->service_banner) }}"
                                width="75" class="img-fluid rounded shadow-sm">
                            @if ($errors->has('service_banner'))
                                <span class="text-danger">{{ $errors->first('service_banner') }}</span>
                                <!-- Show error for service banner -->
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Summernote for content editor -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                tabsize: 2,
                placeholder: 'Enter service description here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontsize', ['fontsize']], // Font size option
                    ['fontname', ['fontname']], // Font family option
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact',
                    'Tahoma', 'Times New Roman', 'Verdana'
                ], // Custom font names
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28',
                    '30', '32', '34', '36', '48', '64', '82', '150'
                ], // Custom font sizes
                popover: {
                    air: [
                        ['font', ['bold', 'italic', 'underline', 'fontsize', 'fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }
            });
        });
    </script>
@endsection
