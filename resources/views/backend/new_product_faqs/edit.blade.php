<!-- resources/views/backend/new_product_faqs/edit.blade.php -->

@extends('backend.app')

@section('title', 'Edit FAQ for ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit FAQ for {{ $new_product->name }}</h3>
                    <a href="{{ route('backend.new_products.faqs.index', $new_product) }}" class="btn btn-success ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to FAQs
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.new_products.faqs.update', [$new_product->id, $faq->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')

                        <!-- FAQ Question -->
                        <div class="mb-3">
                            <label for="question" class="form-label">FAQ Question</label>
                            <input type="text" name="question" id="question" class="form-control"
                                value="{{ $faq->question }}" required>
                        </div>

                        <!-- FAQ Answer (with Summernote) -->
                        <div class="mb-3">
                            <label for="answer" class="form-label">FAQ Answer</label>
                            <textarea name="answer" id="answer" class="form-control summernote" rows="5" required>{{ $faq->answer }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- @vite(['resources/js/app.js']) --}}

    <script>
        $(document).ready(function() {
            // Initialize Summernote for the answer field
            $('.summernote').summernote({
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
