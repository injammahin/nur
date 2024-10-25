@extends('backend.app')

@section('title', 'Manage Blogs')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Blogs</h3>
                    <a href="{{ route('backend.manage-categories') }}" class="btn btn-primary ml-2 ">Manage Categories</a>

                    <a href="{{ route('backend.manage-tags') }}" class="btn btn-info ml-2">
                        Manage Tags
                    </a>

                    <a href="{{ route('backend.blogs.create') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i>Create Blog
                    </a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif



                    <!-- Per Page Selection -->
                    <div class="row mb-3 mt-5">
                        <div class="col-md-6">
                            <form action="{{ route('backend.blogs.index') }}" method="GET" class="form-inline">
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
                            <form action="{{ route('backend.blogs.index') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by title..." value="{{ $search }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Blog List Table -->
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $index => $blog)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category->name }}</td>
                                    <td>
                                        @foreach ($blog->tags as $tag)
                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}" target="_blank"
                                            class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> View
                                        </a>

                                        <a href="{{ route('backend.blogs.edit', $blog->id) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('backend.blogs.destroy', $blog->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $blogs->appends(['search' => $search, 'per_page' => $perPage])->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
