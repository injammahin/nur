@extends('backend.app')

@section('title', 'Partner Management')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Partner Management</h3>
                    <button data-bs-toggle="modal" data-bs-target="#addPartnerModal" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Partner
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

                    <!-- Search and Per Page Options -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('backend.home.partner') }}" method="GET" class="form-inline">
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

                        <div class="col-md-6">
                            <form action="{{ route('backend.home.partner') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by name..." value="{{ $search }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Partner Table -->
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
                                @forelse ($partners as $index => $partner)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{ asset('media/partners/' . $partner->image) }}"
                                                style="height: 65px; width:65px;" alt="Partner Image"></td>
                                        <td>{{ $partner->name }}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editPartnerModal{{ $partner->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>

                                            <form action="{{ route('backend.partners.destroy', $partner->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this partner?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Partner Modal -->
                                    <div class="modal fade edit-partner-modal" id="editPartnerModal{{ $partner->id }}"
                                        tabindex="-1" aria-labelledby="editPartnerModalLabel{{ $partner->id }}"
                                        aria-hidden="true">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editPartnerModalLabel{{ $partner->id }}">
                                                        Edit Partner</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"><i class="fa fa-window-close"
                                                            aria-hidden="true"></i></button>
                                                </div>
                                                <form action="{{ route('backend.partners.update', $partner->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Partner Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $partner->name }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Partner Image (120 ×
                                                                80)</label>
                                                            <input type="file" name="image" class="form-control"
                                                                accept="image/*">
                                                            <small>Current Image:</small>
                                                            <img src="{{ asset('media/partners/' . $partner->image) }}"
                                                                width="75" class="img-fluid rounded shadow-sm">
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Partner</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No partners found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $partners->appends(['search' => $search, 'per_page' => $perPage])->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Partner Modal -->
        <div class="modal fade" id="addPartnerModal" tabindex="-1" aria-labelledby="addPartnerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPartnerModalLabel">Add New Partner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                                class="fa fa-window-close" aria-hidden="true"></i></button>
                    </div>
                    <form action="{{ route('backend.partners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Partner Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Partner Image (120 × 80)</label>
                                <input type="file" class="form-control" id="image" name="image"
                                    accept="image/*" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Partner</button>
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

            // Reset form fields when modals are closed
            $('#addPartnerModal, .edit-partner-modal').on('hidden.bs.modal', function() {
                // Reset the form inside the modal
                $(this).find('form')[0].reset();

                // Reset file input
                $(this).find('input[type="file"]').val('');

                // Remove file name display (for better user experience)
                $(this).find('input[type="file"]').next('.custom-file-label').html('Choose file');
            });
        });
    </script>
@endsection
