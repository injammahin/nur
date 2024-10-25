{{-- @extends('backend.app')
@section('title', 'Media Management')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Media</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Manage Categories -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4>Manage Categories</h4>
                            <form action="{{ route('backend.media.storeCategory') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Add Category</button>
                            </form>
                            <ul class="list-group mt-3">
                                @foreach ($categories as $category)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $category->name }}
                                        <div>
                                            <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $category->id }}">Edit</button>
                                            <form action="{{ route('backend.media.deleteCategory', $category->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </li>

                                    <!-- Edit Category Modal -->
                                    <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1"
                                        aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">
                                                        Edit Category</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('backend.media.updateCategory', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Category Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $category->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Category</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Manage Gallery Images -->
                    <div class="row mb-4">
                        <h4>Upload Gallery Image</h4>
                        <form action="{{ route('backend.media.storeGalleryImage') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" class="form-select" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Upload Image</button>
                        </form>
                        <hr />

                        <!-- Gallery Images Table -->
                        <h4>All Gallery Images</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gallery as $image)
                                        <tr>
                                            <td><img src="{{ asset($image->image) }}" alt="Gallery Image"
                                                    class="img-thumbnail" style="max-width: 100px;"></td>
                                            <td>{{ $image->description }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                    data-bs-target="#editGalleryImageModal{{ $image->id }}">Edit</button>
                                                <form action="{{ route('backend.media.deleteGalleryImage', $image->id) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Edit Gallery Image Modal -->
                                        <div class="modal fade" id="editGalleryImageModal{{ $image->id }}"
                                            tabindex="-1" aria-labelledby="editGalleryImageModalLabel{{ $image->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editGalleryImageModalLabel{{ $image->id }}">Edit
                                                            Gallery Image</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form
                                                        action="{{ route('backend.media.updateGalleryImage', $image->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="category_id">Select Category</label>
                                                                <select name="category_id" class="form-select" required>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            {{ $category->id == $image->category_id ? 'selected' : '' }}>
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="image">Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="image">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="description">Description</label>
                                                                <textarea class="form-control" name="description" rows="3">{{ $image->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update
                                                                Image</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Manage Videos -->
                    <div class="row mb-4">
                        <h4>Add Video</h4>
                        <form action="{{ route('backend.media.storeVideo') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="video_url">Video URL</label>
                                <input type="url" class="form-control" name="video_url" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="video_poster">Video Poster</label>
                                <input type="file" class="form-control" name="video_poster" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Add Video</button>
                        </form>
                        <hr />

                        <!-- Videos Table -->
                        <h4>All Videos</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Poster</th>
                                        <th>Title</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td><img src="{{ asset($video->image) }}" alt="Video Poster"
                                                    class="img-thumbnail" style="max-width: 100px;"></td>
                                            <td>{{ $video->name }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                    data-bs-target="#editVideoModal{{ $video->id }}">Edit</button>
                                                <form action="{{ route('backend.media.deleteVideo', $video->id) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Edit Video Modal -->
                                        <div class="modal fade" id="editVideoModal{{ $video->id }}" tabindex="-1"
                                            aria-labelledby="editVideoModalLabel{{ $video->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editVideoModalLabel{{ $video->id }}">Edit Video</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('backend.media.updateVideo', $video->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="video_url">Video URL</label>
                                                                <input type="url" class="form-control"
                                                                    name="video_url" value="{{ $video->media_url }}"
                                                                    required>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="video_poster">Video Poster</label>
                                                                <input type="file" class="form-control"
                                                                    name="video_poster">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    value="{{ $video->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update
                                                                Video</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Manage Media Links -->
                    <div class="row mb-4">
                        <h4>Add Media Link</h4>
                        <form action="{{ route('backend.media.storeMediaLink') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="media_url">Media URL</label>
                                <input type="url" class="form-control" name="media_url" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="media_poster">Media Poster</label>
                                <input type="file" class="form-control" name="media_poster" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Add Media Link</button>
                        </form>
                        <hr />

                        <!-- Media Links Table -->
                        <h4>All Media Links</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Poster</th>
                                        <th>Title</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mediaLinks as $media)
                                        <tr>
                                            <td><img src="{{ asset($media->image) }}" alt="Media Poster"
                                                    class="img-thumbnail" style="max-width: 100px;"></td>
                                            <td>{{ $media->name }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                    data-bs-target="#editMediaLinkModal{{ $media->id }}">Edit</button>
                                                <form action="{{ route('backend.media.deleteMediaLink', $media->id) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Edit Media Link Modal -->
                                        <div class="modal fade" id="editMediaLinkModal{{ $media->id }}"
                                            tabindex="-1" aria-labelledby="editMediaLinkModalLabel{{ $media->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editMediaLinkModalLabel{{ $media->id }}">Edit Media
                                                            Link</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form
                                                        action="{{ route('backend.media.updateMediaLink', $media->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="media_url">Media URL</label>
                                                                <input type="url" class="form-control"
                                                                    name="media_url" value="{{ $media->media_url }}"
                                                                    required>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="media_poster">Media Poster</label>
                                                                <input type="file" class="form-control"
                                                                    name="media_poster">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    value="{{ $media->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update Media
                                                                Link</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Handle click on media images to redirect to their respective URLs
            $('img[alt="Media Poster"]').on('click', function() {
                window.open($(this).closest('tr').find('td:nth-child(2)').text().trim(), '_blank');
            });
        });
    </script>
@endsection --}}
