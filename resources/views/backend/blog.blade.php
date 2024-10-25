@extends('backend.app')

@section('title', 'Manage Blogs')

@section('content')

    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage blogs</h3>
                </div>
                <div class="row">
                    <!-- Manage Categories -->
                    <div class="col-md-4">
                        <h4>Manage Categories</h4>
                        <form action="{{ route('backend.categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Add Category</button>
                        </form>
                        <hr>
                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $category->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Blog List and Management -->
                    <div class="col-md-8">
                        <h4>Manage Blogs</h4>

                        <!-- Blog Create/Edit Form -->
                        <form id="blogForm" action="{{ route('backend.blogs.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="blog_id">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control summernote" id="content" name="content" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-success mt-2" id="submitBtn">Create Blog</button>
                        </form>

                        <hr>

                        <!-- Blog List Table -->
                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"
                                                onclick="editBlog({{ $blog->id }})">Edit</button>
                                            <form action="{{ route('backend.blogs.destroy', $blog->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                tabsize: 2,
                placeholder: 'Enter blog content here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        function editBlog(id) {
            const blog = @json($blogs).find(blog => blog.id === id);
            document.getElementById('title').value = blog.title;
            document.getElementById('category_id').value = blog.category_id;
            document.getElementById('content').value = blog.content;
            document.getElementById('blog_id').value = blog.id;
            document.getElementById('submitBtn').textContent = 'Update Blog';
            document.getElementById('blogForm').action = `/backend/blogs/update/${id}`;
        }
    </script>
@endsection
