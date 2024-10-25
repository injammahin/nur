@extends('backend.app')

@section('title', 'Review Management')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Review Management</h3>
                    <button data-bs-toggle="modal" data-bs-target="#addReviewModal" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Review
                    </button>
                </div>
                <div class="card-body">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Review Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Role</th>
                                    <th>Review Text</th>
                                    <th>Image</th>
                                    <th>Video URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reviews as $index => $review)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $review->author }}</td>
                                        <td>{{ $review->role }}</td>
                                        <td>{!! Str::limit(strip_tags($review->text), 50, '...') !!}</td>
                                        <td>
                                            @if ($review->image)
                                                <img src="{{ asset('media/review/' . $review->image) }}" width="75"
                                                    alt="{{ $review->author }}">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($review->video_url)
                                                <a href="{{ $review->video_url }}" target="_blank"
                                                    class="btn btn-primary btn-sm">Watch Video</a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Actions -->
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editReviewModal{{ $review->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>

                                            <form action="{{ route('backend.reviews.destroy', $review->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this review?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Review Modal -->
                                    <div class="modal fade edit-review-modal" id="editReviewModal{{ $review->id }}"
                                        tabindex="-1" aria-labelledby="editReviewModalLabel{{ $review->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editReviewModalLabel{{ $review->id }}">
                                                        Edit Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"><i class="fa fa-window-close"
                                                            aria-hidden="true"></i></button>
                                                </div>
                                                <form action="{{ route('backend.reviews.update', $review->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="author" class="form-label">Author Name</label>
                                                            <input type="text" class="form-control" id="author"
                                                                name="author" value="{{ $review->author }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="role" class="form-label">Role</label>
                                                            <input type="text" class="form-control" id="role"
                                                                name="role" value="{{ $review->role }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="text" class="form-label">Review Text</label>
                                                            <textarea class="form-control summernote" id="text" name="text" rows="4" required>{{ $review->text }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Review Image (40 ×
                                                                40)</label>
                                                            <input type="file" class="form-control" id="image"
                                                                name="image" accept="image/*">
                                                            <small>Current Image:
                                                                @if ($review->image)
                                                                    <img src="{{ asset('media/review/' . $review->image) }}"
                                                                        width="50" class="mt-2">
                                                                @endif
                                                            </small>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="video_url" class="form-label">YouTube Video
                                                                URL</label>
                                                            <input type="url" class="form-control" id="video_url"
                                                                name="video_url" value="{{ $review->video_url }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No reviews found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Review Modal -->
        <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addReviewModalLabel">Add New Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa fa-window-close" aria-hidden="true"></i></button>
                    </div>
                    <form action="{{ route('backend.reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="author" class="form-label">Author Name</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role" name="role" required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Review Text</label>
                                <textarea class="form-control summernote" id="text" name="text" rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Review Image (40 × 40)</label>
                                <input type="file" class="form-control" id="image" name="image"
                                    accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="video_url" class="form-label">YouTube Video URL</label>
                                <input type="url" class="form-control" id="video_url" name="video_url">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Review</button>
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
            // Auto-hide success messages after a few seconds
            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 3000);

            // Clear modal fields after closing
            $('#addReviewModal, .edit-review-modal').on('hidden.bs.modal', function() {
                $(this).find('form')[0].reset();
                $(this).find('.summernote').summernote('reset');
            });
        });
    </script>
@endsection
