{{-- <!-- resources/views/backend/new_products/index.blade.php -->

@extends('backend.app')

@section('title', 'Manage Products')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Products</h3>
                    <a href="{{ url('backend/modules/index') }}" class="btn btn-primary">Go to Modules</a>
                    <a href="{{ route('backend.new_products.create') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Product
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Display Products Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($new_products as $new_product)
                                    <tr>
                                        <td>{{ $new_product->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($new_product->short_description, 50) }}</td>
                                        <td>
                                            @if ($new_product->thumb_image)
                                                <img src="{{ asset('media/products/thumbs/' . $new_product->thumb_image) }}"
                                                    width="75" class="img-fluid rounded shadow-sm" alt="Thumb Image">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('backend.new_products.edit', $new_product->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('backend.new_products.destroy', $new_product->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{-- {{ $new_products->links() }} --}}
</div>
</div>
</div>
</div>
</div>
@endsection --}}
