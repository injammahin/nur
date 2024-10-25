@extends('backend.app')

@section('title', 'Manage Products')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Products</h3>
                    <a href="{{ route('backend.product.create') }}" class="btn btn-success ml-auto">
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

                    <!-- Per Page Selection -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('backend.product.index') }}" method="GET" class="form-inline">
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
                            <form action="{{ route('backend.product.index') }}" method="GET"
                                class="form-inline justify-content-md-end">
                                <input type="text" name="search" class="form-control mr-2"
                                    placeholder="Search by name or description..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Display Products Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Product Image</th>
                                    <th>Product Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        {{-- <td>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</td> --}}
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('media/products/product_images/' . $product->image) }}"
                                                    width="75" class="img-fluid rounded shadow-sm" alt="Product Image">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->logo)
                                                <img src="{{ asset('media/products/product_logos/' . $product->logo) }}"
                                                    width="75" class="img-fluid rounded shadow-sm" alt="Product Logo">
                                            @else
                                                <span>No Logo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('backend.product.edit', $product->slug) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('backend.product.destroy', $product->id) }}"
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
                        {{-- {{ $products->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 3000);
        });
    </script>
@endsection
