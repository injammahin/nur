@extends('backend.app')
@section('title', 'Manage Images')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Images</h3>
                    <!-- Add Category Button -->
                    <button class="btn btn-primary ml-2" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add
                        Category</button>
                    <!-- Upload Gallery Image Button -->
                    <button class="btn btn-success ml-2" data-bs-toggle="modal"
                        data-bs-target="#uploadGalleryImageModal">Upload Gallery Image</button>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Manage Categories -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="col-span-1">
                            <h4 class="text-lg font-semibold mb-4">Manage Categories</h4>
                            <!-- Categories List -->
                            <ul class="list-group">
                                @foreach ($categories as $category)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $category->name }}
                                        <div>
                                            <!-- Edit Button -->
                                            <button class="btn btn-info btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#editCategoryModal{{ $category->id }}">Edit</button>

                                            <!-- Delete Button -->
                                            <form action="{{ route('backend.media.deleteCategory', $category->id) }}"
                                                method="POST" class="d-inline-block"
                                                onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </li>

                                    <!-- Edit Category Modal -->
                                    <div class="modal fade edit-modal" id="editCategoryModal{{ $category->id }}"
                                        tabindex="-1" aria-labelledby="editCategoryModalLabel{{ $category->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">
                                                        Edit Category</h5>
                                                    <button type="button" class="btn" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                                    </button>
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

                    <!-- Gallery Images Table -->
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold mb-4 mt-4">All Gallery Images</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-light">
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
                                            <td class="text-center d-flex p-2">
                                                <button class="btn bg-info text-white font-bold py-1 px-3 rounded-lg"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editGalleryImageModal{{ $image->id }}">Edit</button>
                                                <form action="{{ route('backend.media.deleteGalleryImage', $image->id) }}"
                                                    method="POST" class="inline-block"
                                                    onsubmit="return confirm('Are you sure you want to delete this image?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn bg-danger text-white font-bold py-1 px-3 rounded-lg">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Edit Gallery Image Modal -->
                                        <div class="modal fade edit-modal" id="editGalleryImageModal{{ $image->id }}"
                                            tabindex="-1" aria-labelledby="editGalleryImageModalLabel{{ $image->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editGalleryImageModalLabel{{ $image->id }}">Edit Gallery
                                                            Image</h5>
                                                        <button type="button" class="btn" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <form
                                                        action="{{ route('backend.media.updateGalleryImage', $image->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="category_id" class="form-label">Select
                                                                    Category</label>
                                                                <select name="category_id"
                                                                    class="form-select w-full rounded-lg border-gray-300"
                                                                    required>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            {{ $category->id == $image->category_id ? 'selected' : '' }}>
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="image" class="form-label">Image (260 ×
                                                                    160)</label>
                                                                <input type="file" class="form-control" name="image"
                                                                    accept="image/jpeg,image/png,image/gif,image/svg+xml,image/webp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="description"
                                                                    class="form-label">Description</label>
                                                                <textarea class="form-control" name="description" rows="3">{{ $image->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary bg-blue-600 text-white">Update
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

                        <!-- Pagination Controls -->
                        <div class="mt-4">
                            {{ $gallery->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade edit-modal" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </button>
                </div>
                <form action="{{ route('backend.media.storeCategory') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Upload Gallery Image Modal -->
    <div class="modal fade edit-modal" id="uploadGalleryImageModal" tabindex="-1"
        aria-labelledby="uploadGalleryImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadGalleryImageModalLabel">Upload Gallery Image</h5>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </button>
                </div>
                <form action="{{ route('backend.media.storeGalleryImage') }}" method="POST"
                    enctype="multipart/form-data" id="uploadGalleryImageForm">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-4">
                            <label for="category_id" class="block mb-2 font-semibold">Select Category</label>
                            <select name="category_id" class="form-select w-full rounded-lg border-gray-300" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="image" class="block mb-2 font-semibold">Image (280 × 160)</label>
                            <input type="file" class="form-control" name="image"
                                accept="image/jpeg,image/png,image/gif,image/svg+xml,image/webp" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="block mb-2 font-semibold">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Clear input fields after modal close
            $('.edit-modal').on('hidden.bs.modal', function() {
                $(this).find('form')[0].reset();
            });

            // Image file validation
            $('input[name="image"]').on('change', function() {
                var file = this.files[0];
                if (file) {
                    var fileType = file.type;
                    var validImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml',
                        'image/webp'
                    ];
                    if (!validImageTypes.includes(fileType)) {
                        alert('Invalid file type. Please select an image file (JPG, PNG, GIF, SVG, WEBP).');
                        $(this).val(''); // Clear the file input
                    }
                }
            });
        });
    </script>
@endsection
