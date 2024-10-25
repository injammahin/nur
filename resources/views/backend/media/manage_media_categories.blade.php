@extends('backend.app')
@section('title', 'Manage Image Categories')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Image Categories</h3>
                    <a href="{{ route('backend.media.images.index') }}" class="btn btn-secondary ml-auto">Back to Gallery
                        Images</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Form to Add New Category -->
                    <form action="{{ route('backend.media.storeCategory') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="font-semibold">Category Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>

                    <!-- Display List of Categories -->
                    <div class="mt-4">
                        <h4 class="font-semibold mb-4">Existing Categories</h4>
                        <ul class="list-group">
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
            </div>
        </div>
    </div>
@endsection
