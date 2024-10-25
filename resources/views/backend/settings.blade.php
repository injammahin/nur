@extends('backend.app')

@section('title', 'Manage Settings')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-light text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Settings</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form to upload banners -->
                    <form id="bannerForm" action="{{ route('backend.settings.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Row for Dropdown and Upload Section -->
                        <div class="row mb-4">
                            <!-- Left Column: Dropdown for selecting banner type -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        Select Banner Type to Upload
                                    </div>
                                    <div class="card-body">
                                        <label for="banner_type" class="form-label">Choose Banner Type (1920 × 400)</label>
                                        <select id="banner_type" class="form-control"
                                            onchange="showUploadSection(this.value)">
                                            <option value="">Select a banner type</option>
                                            <option value="career">Career Page Banner</option>
                                            <option value="service">Service Page Banner</option>
                                            <option value="gallery">Gallery Page Banner</option>
                                            <option value="product">Product Page Banner</option>
                                            <option value="about">About Page Banner</option>
                                            <option value="job">Job Page Banner</option>
                                            <option value="apply">Apply Page Banner</option>
                                            <option value="contact">Contact Us Page Banner</option>
                                            <option value="article">Article Page Banner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Upload Section and Update Button -->
                            <div class="col-md-6">
                                @foreach (['career', 'service', 'gallery', 'product', 'about', 'job', 'apply', 'contact', 'article'] as $type)
                                    <div id="{{ $type }}_banner_section" class="card d-none mb-4">
                                        <div class="card-header bg-secondary text-white">
                                            {{ ucfirst($type) }} Page Banner
                                        </div>
                                        <div class="card-body">
                                            <label for="{{ $type }}_banner" class="form-label">Upload
                                                {{ ucfirst($type) }} Page Banner</label>
                                            <input type="file"
                                                class="form-control @error('{{ $type }}_banner') is-invalid @enderror"
                                                name="{{ $type }}_banner" accept="image/*"
                                                onchange="previewAndValidateImage(this)">
                                            @error('{{ $type }}_banner')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            <div id="{{ $type }}_image_preview" class="mt-3">
                                                @if ($settings && $settings->{$type . '_banner'})
                                                    <img src="{{ asset($settings->{$type . '_banner'}) }}"
                                                        class="img-fluid rounded shadow-sm"
                                                        style="max-width: 100%; height: auto;">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Update Button (Initially Hidden) -->
                                <div class="d-none" id="updateButtonContainer">
                                    <button type="submit" class="btn btn-primary w-100 py-2">Update Banners</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Display All Banners in a Table Format -->
                    <div class="mt-5">
                        <h4 class="text-center">All Banners</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>Page</th>
                                        <th>Current Banner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (['career', 'service', 'gallery', 'product', 'about', 'job', 'apply', 'contact', 'article'] as $type)
                                        <tr>
                                            <td>{{ ucfirst($type) }} Page Banner</td>
                                            <td class="text-center">
                                                @if ($settings && $settings->{$type . '_banner'})
                                                    <img src="{{ asset($settings->{$type . '_banner'}) }}"
                                                        class="img-fluid rounded shadow-sm"
                                                        style="max-width: 200px; height: auto;">
                                                @else
                                                    <p>No banner uploaded</p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle banner type selection, clear input fields, and auto-hide success message -->
    <script>
        function showUploadSection(value) {
            const types = ['career', 'service', 'gallery', 'product', 'about', 'job', 'apply', 'contact', 'article'];
            types.forEach(type => {
                document.getElementById(`${type}_banner_section`).classList.add('d-none');
                document.querySelector(`input[name="${type}_banner"]`).value = ''; // Clear input fields
            });

            if (value) {
                document.getElementById(`${value}_banner_section`).classList.remove('d-none');
                document.getElementById('updateButtonContainer').classList.remove('d-none');
            } else {
                document.getElementById('updateButtonContainer').classList.add('d-none');
            }
        }

        function previewAndValidateImage(input) {
            const file = input.files[0];
            const validImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml', 'image/webp'];

            if (file && validImageTypes.includes(file.type)) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    input.nextElementSibling.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                alert('Please select a valid image file (JPEG, PNG, GIF, SVG, or WEBP).');
                input.value = ''; // Clear input if invalid
            }
        }

        // Auto-hide success message after 2 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.classList.remove('show');
                    successAlert.classList.add('d-none'); // Hides the alert after fade
                }, 2000);
            }
        });
    </script>
@endsection
