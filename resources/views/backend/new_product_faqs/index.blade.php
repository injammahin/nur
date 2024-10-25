<!-- resources/views/backend/new_product_faqs/index.blade.php -->

@extends('backend.app')

@section('title', 'Manage FAQs for ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage FAQs for {{ $new_product->name }}</h3>

                    <a href="{{ route('backend.new_products.faqs.create', $new_product) }}" class="btn btn-success me-2">
                        <i class="fas fa-plus"></i> Add FAQ
                    </a>
                    <!-- Back to Products Button -->
                    <a href="{{ route('backend.new_products.index') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i> Back to Products
                    </a>
                </div>

                <div class="card-body">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display FAQs Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->question }}</td>
                                        <!-- Show the first 30 characters of the answer -->
                                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($faq->answer), 30) }}</td>
                                        <td class="d-flex">
                                            <!-- Edit FAQ Button -->
                                            <a href="{{ route('backend.new_products.faqs.edit', [$new_product->id, $faq->id]) }}"
                                                class="btn btn-info btn-sm me-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <!-- Delete FAQ Form -->
                                            <form action="{{ route('backend.new_products.faqs.destroy', $faq->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this FAQ?')">
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

@section('scripts')
    <script>
        // Hide success message after 2 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 2000); // 2 seconds
    </script>
@endsection
