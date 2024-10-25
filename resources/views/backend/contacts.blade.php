@extends('backend.app')
@section('title', 'Contacts')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Contact Requests</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Per Page Selection -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('backend.contacts') }}" method="GET" class="form-inline">
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
                            <form action="{{ route('backend.contacts') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by name, email, subject..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Contacts Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $index=> $contact)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ Str::limit($contact->message, 30) }}</td>
                                        <td class="d-flex">
                                            <!-- View Button -->
                                            <button type="button" class="btn btn-info btn-sm me-1 view-btn"
                                                data-bs-toggle="modal" data-bs-target="#viewModal"
                                                data-id="{{ $contact->id }}" data-name="{{ $contact->name }}"
                                                data-email="{{ $contact->email }}" data-subject="{{ $contact->subject }}"
                                                data-message="{{ $contact->message }}">
                                                <i class="fa fa-eye"></i>
                                            </button>

                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm delete-btn ml-2"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                data-id="{{ $contact->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No contacts found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination and Entry Info -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} of
                            {{ $contacts->total() }} entries
                        </div>
                        <div>
                            {{ $contacts->appends(request()->input())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Contact Modal -->
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Contact Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Name:</strong> <span id="modalName"></span></p>
                        <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                        <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
                        <p><strong>Message:</strong> <span id="modalMessage"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this contact?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Handle the "View" button click
                document.querySelectorAll('.view-btn').forEach(function(button) {
                    button.addEventListener('click', function() {
                        document.getElementById('modalName').textContent = this.getAttribute(
                            'data-name');
                        document.getElementById('modalEmail').textContent = this.getAttribute(
                            'data-email');
                        document.getElementById('modalSubject').textContent = this.getAttribute(
                            'data-subject');
                        document.getElementById('modalMessage').textContent = this.getAttribute(
                            'data-message');
                    });
                });

                // Handle the delete confirmation
                let deleteContactId = null;
                document.querySelectorAll('.delete-btn').forEach(function(button) {
                    button.addEventListener('click', function() {
                        deleteContactId = this.getAttribute('data-id');
                    });
                });

                document.getElementById('confirmDelete').addEventListener('click', function() {
                    if (deleteContactId) {
                        // Submit the delete form programmatically
                        const form = document.createElement('form');
                        form.method = 'POST';
                        // form.action = `/backend/contacts/${deleteContactId}`;
                        form.action = `{{ asset('/backend/contacts/${deleteContactId}') }}}`;

                        form.innerHTML = `
                            @csrf
                            @method('DELETE')
                        `;
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        </script>
    </div>
@endsection

<style>
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .modal-backdrop {
        position: relative;
    }

    .pagination {
        justify-content: center;
    }

    .text-truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .modal-body .text-wrap {
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .modal-content,
    .btn,
    .alert {
        border-radius: 0.5rem;
    }

    .btn:focus {
        box-shadow: none;
    }

    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-body {
        max-height: 60vh;
        overflow-y: auto;
    }


    .bg-contact {
        color: #f0eeee !important;
        background: white;
    }
</style>
