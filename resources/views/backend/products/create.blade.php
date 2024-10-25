@extends('backend.app')

@section('title', 'Create Product')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create Product</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.product.index') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to Products
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <!-- Product Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Product Description</label>
                            <textarea name="description" id="description" class="form-control summernote" required></textarea>
                        </div>

                        <!-- Product Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control summernote" required></textarea>
                        </div>

                        <!-- Product Thumbnail Image -->
                        <div class="mb-3">
                            <label for="thumb_image" class="form-label">Product Thumbnail Image</label>
                            <input type="file" name="thumb_image" id="thumb_image" class="form-control">
                        </div>

                        <!-- Product Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <!-- Product Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Product Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                        </div>

                        <!-- HR Payroll Description -->
                        <div class="mb-3">
                            <label for="hr_payroll_description" class="form-label">HR Payroll Description</label>
                            <textarea name="hr_payroll_description" id="hr_payroll_description" class="form-control summernote"></textarea>
                        </div>

                        <!-- HR Payroll Image -->
                        <div class="mb-3">
                            <label for="hr_payroll_image" class="form-label">HR Payroll Image</label>
                            <input type="file" name="hr_payroll_image" id="hr_payroll_image" class="form-control">
                        </div>

                        <!-- Accounting Description -->
                        <div class="mb-3">
                            <label for="accounting_description" class="form-label">Accounting Description</label>
                            <textarea name="accounting_description" id="accounting_description" class="form-control summernote"></textarea>
                        </div>

                        <!-- Accounting Image -->
                        <div class="mb-3">
                            <label for="accounting_image" class="form-label">Accounting Image</label>
                            <input type="file" name="accounting_image" id="accounting_image" class="form-control">
                        </div>

                        <!-- Inventory Management Description -->
                        <div class="mb-3">
                            <label for="inventory_management_description" class="form-label">Inventory Management
                                Description</label>
                            <textarea name="inventory_management_description" id="inventory_management_description" class="form-control summernote"></textarea>
                        </div>

                        <!-- Inventory Management Image -->
                        <div class="mb-3">
                            <label for="inventory_management_image" class="form-label">Inventory Management Image</label>
                            <input type="file" name="inventory_management_image" id="inventory_management_image"
                                class="form-control">
                        </div>

                        <!-- FAMS Description -->
                        <div class="mb-3">
                            <label for="fams_description" class="form-label">FAMS Description</label>
                            <textarea name="fams_description" id="fams_description" class="form-control summernote"></textarea>
                        </div>

                        <!-- FAMS Image -->
                        <div class="mb-3">
                            <label for="fams_image" class="form-label">FAMS Image</label>
                            <input type="file" name="fams_image" id="fams_image" class="form-control">
                        </div>

                        <!-- Video URL -->
                        <div class="mb-3">
                            <label for="video_url" class="form-label">Video URL</label>
                            <input type="text" name="video_url" id="video_url" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">FAQs</label>
                            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                                data-bs-target="#addFaqModal">Add FAQ</button>
                            <table class="table table-striped mt-3" id="faqTable">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Existing FAQs will be loaded here -->
                                    @if (isset($product) && $product->faqs)
                                        @foreach ($product->faqs as $faq)
                                            <tr>
                                                <td><input type="hidden" name="faq_questions[]"
                                                        value="{{ $faq->question }}">{{ $faq->question }}</td>
                                                <td><input type="hidden" name="faq_answers[]"
                                                        value="{{ $faq->answer }}">{{ $faq->answer }}</td>
                                                <td><button type="button"
                                                        class="btn btn-sm btn-danger remove-faq-btn">Delete</button></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add FAQ Modal -->
    <div class="modal fade" id="addFaqModal" tabindex="-1" aria-labelledby="addFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaqModalLabel">Add FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addFaqForm">
                        <div class="mb-3">
                            <label for="faqQuestion" class="form-label">FAQ Question</label>
                            <input type="text" class="form-control" id="faqQuestion" name="faq_question" required>
                        </div>
                        <div class="mb-3">
                            <label for="faqAnswer" class="form-label">FAQ Answer</label>
                            <textarea class="form-control" id="faqAnswer" name="faq_answer" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveFaq">Add FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                tabsize: 2,
                placeholder: 'Enter text here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
        $(document).ready(function() {
            // Add FAQ to Table
            $('#saveFaq').click(function() {
                let question = $('#faqQuestion').val();
                let answer = $('#faqAnswer').val();

                if (question && answer) {
                    // Append new FAQ to table
                    $('#faqTable tbody').append(`
                    <tr>
                        <td><input type="hidden" name="faq_questions[]" value="${question}">${question}</td>
                        <td><input type="hidden" name="faq_answers[]" value="${answer}">${answer}</td>
                        <td><button type="button" class="btn btn-sm btn-danger remove-faq-btn">Delete</button></td>
                    </tr>
                `);
                    $('#addFaqModal').modal('hide'); // Hide modal
                    $('#addFaqForm')[0].reset(); // Clear form
                }
            });

            // Remove FAQ from Table
            $(document).on('click', '.remove-faq-btn', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>
@endsection
