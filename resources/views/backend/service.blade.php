@extends('backend.app')

@section('title', 'Manage Services')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Services</h3>
                    <a href="{{ route('backend.services.create') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Service
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Per Page Selection -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('backend.service') }}" method="GET" class="form-inline">
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
                            <form action="{{ route('backend.service') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by name or description..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Services Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th> service Name</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $index=> $service)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $service->name }}</td>
                                        {{-- <td>{!! Str::limit($service->short_description, 50) !!}</td> --}}
                                        {{-- <td>
                                            <img src="{{ asset('media/service/service_image/' . $service->service_image) }}"
                                                width="75" class="img-fluid rounded shadow-sm">
                                        </td> --}}
                                        <td>
                                            <!-- View Button -->
                                            <a href="{{ route('frontend.services.details', $service->slug) }}"
                                                target="_blank" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i> View
                                            </a>

                                            <!-- Edit Button -->
                                            <a href="{{ route('backend.services.edit', $service->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <!-- Delete Button -->
                                            <form action="{{ route('backend.services.destroy', $service->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this service?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No services found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination and Entry Info -->
                    {{-- <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            Showing {{ $services->firstItem() }} to {{ $services->lastItem() }} of
                            {{ $services->total() }} entries
                        </div>
                        <div>
                            {{ $services->appends(request()->input())->links('pagination::bootstrap-4') }}
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
