@extends('backend.app')

@section('title', 'Manage Categories and Tags')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Category tag</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.blogs.index') }}" class="btn btn-info ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to blogs
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

                    <!-- Manage Categories -->
                    <form action="{{ route('backend.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </form>
                    <!-- Per Page Selection -->
                    <div class="row mb-3 mt-5">
                        <div class="col-md-6">
                            <form action="{{ route('backend.manage-categories') }}" method="GET" class="form-inline">
                                <label for="per_page" class="mr-2">Items per page:</label>
                                <select name="per_page" id="per_page" class="form-control mr-2"
                                    onchange="this.form.submit()">
                                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="15" {{ request('per_page') == 15 ? 'selected' : '' }}>15</option>
                                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                                </select>
                            </form>
                        </div>

                        <!-- Search Bar -->
                        <div class="col-md-6">
                            <form action="{{ route('backend.manage-categories') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by title..." value="{{ $search }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Display Categories in a Table -->
                    <div class="mt-4">
                        <h4>Categories</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index => $category)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form action="{{ route('backend.categories.destroy', $category->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $categories->appends(['search' => $search, 'per_page' => $perPage])->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
