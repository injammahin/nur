<!-- resources/views/backend/new_product_faqs/create.blade.php -->

@extends('backend.app')

@section('title', 'Add FAQs for ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Add FAQs for {{ $new_product->name }}</h3>
                    <a href="{{ route('backend.new_products.faqs.index', $new_product) }}" class="btn btn-success ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to FAQs
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.new_products.faqs.store', $new_product) }}" method="POST">
                        @csrf

                        <!-- FAQs Section -->
                        <div class="mb-3">
                            <label class="form-label">FAQs</label>
                            <button type="button" class="btn btn-primary btn-sm float-end" id="addFaqButton">Add
                                FAQ</button>
                            <table class="table table-striped mt-3" id="faqTable">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- FAQs will be dynamically added here -->
                                    <tr>
                                        <td><input type="text" name="faqs[0][question]" class="form-control" required>
                                        </td>
                                        <td>
                                            <textarea name="faqs[0][answer]" class="form-control summernote" rows="2" required></textarea>
                                        </td>
                                        <td><button type="button"
                                                class="btn btn-sm btn-danger remove-faq-btn">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Save FAQs</button>
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
            let faqIndex = 1; // Start index for new FAQ entries

            // Initialize Summernote for the first FAQ
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

            // Add FAQ to Table
            $('#addFaqButton').click(function() {
                $('#faqTable tbody').append(`
                    <tr>
                        <td><input type="text" name="faqs[${faqIndex}][question]" class="form-control" required></td>
                        <td><textarea name="faqs[${faqIndex}][answer]" class="form-control summernote" rows="2" required></textarea></td>
                        <td><button type="button" class="btn btn-sm btn-danger remove-faq-btn">Delete</button></td>
                    </tr>
                `);

                // Initialize Summernote for the newly added FAQ answer
                $(`textarea[name="faqs[${faqIndex}][answer]"]`).summernote({
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

                faqIndex++; // Increment index for the next FAQ
            });

            // Remove FAQ from Table
            $(document).on('click', '.remove-faq-btn', function() {
                $(this).closest('tr').remove(); // Remove the selected FAQ row
            });
        });
    </script>
@endsection
