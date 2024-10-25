@extends('backend.app')

@section('title', 'Edit Product')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Product</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.product.index') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to Products
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.product.update', $product->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $product->name }}" required>
                        </div>

                        <!-- Product Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Product Description</label>
                            <textarea name="description" id="description" class="form-control summernote" required>{{ $product->description }}</textarea>
                        </div>

                        <!-- Product Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control summernote" required>{{ $product->short_description }}</textarea>
                        </div>

                        <!-- Product Thumbnail Image -->
                        <div class="mb-3">
                            <label for="thumb_image" class="form-label">Product Thumbnail Image</label>
                            <input type="file" name="thumb_image" id="thumb_image" class="form-control">
                            @if ($product->thumb_image)
                                <img src="{{ asset('media/products/product_thumbs/' . $product->thumb_image) }}"
                                    width="100" class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Product Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @if ($product->image)
                                <img src="{{ asset('media/products/product_images/' . $product->image) }}" width="100"
                                    class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Product Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Product Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                            @if ($product->logo)
                                <img src="{{ asset('media/products/product_logos/' . $product->logo) }}" width="100"
                                    class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- HR Payroll Description -->
                        <div class="mb-3">
                            <label for="hr_payroll_description" class="form-label">HR Payroll Description</label>
                            <textarea name="hr_payroll_description" id="hr_payroll_description" class="form-control summernote">{{ $product->hr_payroll_description }}</textarea>
                        </div>

                        <!-- HR Payroll Image -->
                        <div class="mb-3">
                            <label for="hr_payroll_image" class="form-label">HR Payroll Image</label>
                            <input type="file" name="hr_payroll_image" id="hr_payroll_image" class="form-control">
                            @if ($product->hr_payroll_image)
                                <img src="{{ asset('media/products/hr_payroll/' . $product->hr_payroll_image) }}"
                                    width="100" class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Accounting Description -->
                        <div class="mb-3">
                            <label for="accounting_description" class="form-label">Accounting Description</label>
                            <textarea name="accounting_description" id="accounting_description" class="form-control summernote">{{ $product->accounting_description }}</textarea>
                        </div>

                        <!-- Accounting Image -->
                        <div class="mb-3">
                            <label for="accounting_image" class="form-label">Accounting Image</label>
                            <input type="file" name="accounting_image" id="accounting_image" class="form-control">
                            @if ($product->accounting_image)
                                <img src="{{ asset('media/products/accounting/' . $product->accounting_image) }}"
                                    width="100" class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Inventory Management Description -->
                        <div class="mb-3">
                            <label for="inventory_management_description" class="form-label">Inventory Management
                                Description</label>
                            <textarea name="inventory_management_description" id="inventory_management_description"
                                class="form-control summernote">{{ $product->inventory_management_description }}</textarea>
                        </div>

                        <!-- Inventory Management Image -->
                        <div class="mb-3">
                            <label for="inventory_management_image" class="form-label">Inventory Management Image</label>
                            <input type="file" name="inventory_management_image" id="inventory_management_image"
                                class="form-control">
                            @if ($product->inventory_management_image)
                                <img src="{{ asset('media/products/inventory_management/' . $product->inventory_management_image) }}"
                                    width="100" class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- FAMS Description -->
                        <div class="mb-3">
                            <label for="fams_description" class="form-label">FAMS Description</label>
                            <textarea name="fams_description" id="fams_description" class="form-control summernote">{{ $product->fams_description }}</textarea>
                        </div>

                        <!-- FAMS Image -->
                        <div class="mb-3">
                            <label for="fams_image" class="form-label">FAMS Image</label>
                            <input type="file" name="fams_image" id="fams_image" class="form-control">
                            @if ($product->fams_image)
                                <img src="{{ asset('media/products/fams/' . $product->fams_image) }}" width="100"
                                    class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Video URL -->
                        <div class="mb-3">
                            <label for="video_url" class="form-label">Video URL</label>
                            <input type="text" name="video_url" id="video_url" class="form-control"
                                value="{{ $product->video_url }}">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
