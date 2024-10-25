@extends('backend.app')

@section('title', 'Manage Technologies')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Technologies</h3>
                    <button data-bs-toggle="modal" data-bs-target="#addTechnologyModal" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Technology
                    </button>
                </div>
            </div>

            <!-- Search Form and Items per Page Selection -->
            <div class="row mb-3 mt-5">
                <div class="col-md-6">
                    <form action="{{ route('backend.home.languages') }}" method="GET" class="form-inline">
                        <label for="per_page" class="mr-2">Items per page:</label>
                        <select name="per_page" id="per_page" class="form-control mr-2" onchange="this.form.submit()">
                            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                        </select>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('backend.home.languages') }}" method="GET"
                        class="form-inline justify-content-md-end">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Search by name"
                            value="{{ $search }}">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
                    </form>
                </div>
            </div>

            <!-- Display Technologies in a Table -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Technologies Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($technologies as $index => $technology)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset('media/technologies/' . $technology->image) }}"
                                                        width="50" alt="{{ $technology->name }}">
                                                </td>
                                                <td>{{ $technology->name }}</td>
                                                <td>
                                                    <!-- Edit Button -->
                                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editTechnologyModal{{ $technology->id }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>

                                                    <!-- Delete Form -->
                                                    <form
                                                        action="{{ route('backend.languages.destroy', $technology->id) }}"
                                                        method="POST" class="d-inline-block"
                                                        onsubmit="return confirm('Are you sure you want to delete this technology?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Edit Technology Modal -->
                                            <div class="modal fade edit-technology-modal"
                                                id="editTechnologyModal{{ $technology->id }}" tabindex="-1"
                                                aria-labelledby="editTechnologyModalLabel{{ $technology->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="editTechnologyModalLabel{{ $technology->id }}">Edit
                                                                Technology</h5>
                                                            <button type="button" class="btn" data-bs-dismiss="modal"
                                                                aria-label="Close"><i class="fa fa-window-close"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                        <form
                                                            action="{{ route('backend.languages.update', $technology->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Technology
                                                                        Name</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control"
                                                                        value="{{ $technology->name }}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Technology
                                                                        Image (70 × 70)</label>
                                                                    <input type="file" name="image"
                                                                        class="form-control" accept="image/*">
                                                                    <small>Current Image: <img
                                                                            src="{{ asset('media/technologies/' . $technology->image) }}"
                                                                            width="50"></small>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="order" class="form-label">Display
                                                                        Order</label>
                                                                    <input type="number" name="order"
                                                                        class="form-control"
                                                                        value="{{ $technology->order }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update
                                                                    Technology</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-center mt-4">
                                {{ $technologies->appends(['search' => $search, 'per_page' => $perPage])->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Technology Modal -->
            <div class="modal fade" id="addTechnologyModal" tabindex="-1" aria-labelledby="addTechnologyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTechnologyModalLabel">Add New Technology</h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-window-close" aria-hidden="true"></i>
                            </button>
                        </div>
                        <form action="{{ route('backend.languages.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Technology Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Technology Image (40 × 40)</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept="image/*" required>
                                </div>
                                <div class="form-group">
                                    <label for="order">Display Order</label>
                                    <input type="number" class="form-control" id="order" name="order"
                                        value="0">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Add Technology</button>
                            </div>
                        </form>
                    </div>
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
            $('#addTechnologyModal, .edit-technology-modal').on('hidden.bs.modal', function() {
                $(this).find('form')[0].reset();
            });
        });
    </script>
@endsection
