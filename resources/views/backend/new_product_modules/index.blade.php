@extends('backend.app')

@section('title', 'Manage Modules for ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Modules for {{ $new_product->name }}</h3>
                    <div class="d-flex">
                        <!-- Back to Products Button -->
                        <a href="{{ route('backend.new_products.index') }}" class="btn btn-primary me-2">
                            <i class="fas fa-arrow-left"></i> Back to Products
                        </a>
                        <!-- Add New Module Description Button -->
                        <a href="{{ route('backend.new_products.modules.create', $new_product->id) }}"
                            class="btn btn-success">
                            <i class="fas fa-plus"></i> Add New Module Description
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Module Name</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modules as $module)
                                    <tr>
                                        <td>{{ $module->module->name }}</td>
                                        {{-- <td>{{ $module->description }}</td> --}}
                                        <td>
                                            @if ($module->image)
                                                <!-- Ensure the image path matches where the images are stored -->
                                                <img src="{{ asset('media/new_product/modules/' . $module->image) }}"
                                                    width="75" class="img-fluid rounded shadow-sm" alt="Module Image">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Edit Module Button -->
                                            <a href="{{ route('backend.new_products.modules.edit', [$new_product->id, $module->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <!-- Delete Module Form -->
                                            <form action="{{ route('backend.new_products.modules.destroy', $module->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this module?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
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
