@extends('backend.app')

@section('content')
    <div id="app" class="content-wrapper p-5 mt-5">
        <!-- About Content Section -->
        <main>
            <div >
                <div class="row ">
                    <div class="col-md-12">
                        <h2>About Us Content</h2>
                        <div class="card">
                            <div class="card-body">
                                <!-- Display About Content in a Table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Section</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- About Section -->
                                            <tr>
                                                <td>About Ambala IT</td>
                                                <td>{!! $aboutContent->about_text ?? 'No content available.' !!}</td>
                                                <td>
                                                    @if ($aboutContent->about_image)
                                                        <img src="{{ asset('uploads/about/' . $aboutContent->about_image) }}"
                                                            alt="About Image" class="img-fluid" width="100">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editAboutModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Vision Section -->
                                            <tr>
                                                <td>Our Vision</td>
                                                <td>{!! $aboutContent->vision_text ?? 'No content available.' !!}</td>
                                                <td>
                                                    @if ($aboutContent->vision_image)
                                                        <img src="{{ asset('uploads/about/' . $aboutContent->vision_image) }}"
                                                            alt="Vision Image" class="img-fluid" width="100">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editVisionModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Mission Section -->
                                            <tr>
                                                <td>Our Mission</td>
                                                <td>{!! $aboutContent->mission_text ?? 'No content available.' !!}</td>
                                                <td>
                                                    @if ($aboutContent->mission_image)
                                                        <img src="{{ asset('uploads/about/' . $aboutContent->mission_image) }}"
                                                            alt="Mission Image" class="img-fluid" width="100">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editMissionModal">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Modals for Editing Content -->
        <!-- Edit About Modal -->
        <div class="modal fade edit-modal" id="editAboutModal" tabindex="-1" aria-labelledby="editAboutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAboutModalLabel">Edit About Content</h5>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-window-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    <form action="{{ route('backend.about.updateAbout') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <!-- About Text -->
                            <div class="form-group mb-3">
                                <label for="about_text">About Text</label>
                                <textarea class="form-control summernote" id="about_text" name="about_text" rows="4">{{ $aboutContent->about_text }}</textarea>
                            </div>

                            <!-- About Image -->
                            <div class="form-group mb-3">
                                <label for="about_image">About Image</label>
                                <input type="file" class="form-control" id="about_image" name="about_image"
                                    accept="image/jpeg, image/png, image/gif, image/svg+xml, image/webp">
                                @if ($aboutContent->about_image)
                                    <small>Current Image: {{ $aboutContent->about_image }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Vision Modal -->
        <div class="modal fade edit-modal" id="editVisionModal" tabindex="-1" aria-labelledby="editVisionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editVisionModalLabel">Edit Vision Content</h5>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-window-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    <form action="{{ route('backend.about.updateVision') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <!-- Vision Text -->
                            <div class="form-group mb-3">
                                <label for="vision_text">Vision Text</label>
                                <textarea class="form-control summernote" id="vision_text" name="vision_text" rows="4">{{ $aboutContent->vision_text }}</textarea>
                            </div>

                            <!-- Vision Image -->
                            <div class="form-group mb-3">
                                <label for="vision_image">Vision Image (600 × 400)</label>
                                <input type="file" class="form-control" id="vision_image" name="vision_image"
                                    accept="image/jpeg, image/png, image/gif, image/svg+xml, image/webp">
                                @if ($aboutContent->vision_image)
                                    <small>Current Image: {{ $aboutContent->vision_image }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Mission Modal -->
        <div class="modal fade edit-modal" id="editMissionModal" tabindex="-1" aria-labelledby="editMissionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMissionModalLabel">Edit Mission Content</h5>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-window-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    <form action="{{ route('backend.about.updateMission') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <!-- Mission Text -->
                            <div class="form-group mb-3">
                                <label for="mission_text">Mission Text</label>
                                <textarea class="form-control summernote" id="mission_text" name="mission_text" rows="4">{{ $aboutContent->mission_text }}</textarea>
                            </div>

                            <!-- Mission Image -->
                            <div class="form-group mb-3">
                                <label for="mission_image">Mission Image (600 × 400)</label>
                                <input type="file" class="form-control" id="mission_image" name="mission_image"
                                    accept="image/jpeg, image/png, image/gif, image/svg+xml, image/webp">
                                @if ($aboutContent->mission_image)
                                    <small>Current Image: {{ $aboutContent->mission_image }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Clear modal fields after closing
            $('.edit-modal').on('hidden.bs.modal', function() {
                $(this).find('form')[0].reset();
            });

            // Validate image file type
            $('input[type="file"]').on('change', function() {
                var file = this.files[0];
                if (file) {
                    var fileType = file.type;
                    var validImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml',
                        'image/webp'
                    ];
                    if (!validImageTypes.includes(fileType)) {
                        alert('Invalid file type. Please select an image file (JPG, PNG, GIF, SVG, WEBP).');
                        $(this).val(''); // Clear file input
                    }
                }
            });
        });
    </script>
@endsection
