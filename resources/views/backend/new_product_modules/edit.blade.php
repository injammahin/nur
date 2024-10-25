@extends('backend.app')

@section('title', 'Edit Module for ' . $new_product->name)

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Module for {{ $new_product->name }}</h3>
                    <a href="{{ route('backend.new_products.modules.index', $new_product->id) }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i> Back to Modules
                    </a>
                </div>
                <div class="card-body">
                    <!-- Disable native form validation -->
                    <form id="editModuleForm"
                        action="{{ route('backend.new_products.modules.update', [$new_product->id, $module->id]) }}"
                        method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control summernote" rows="3">{{ $module->description }}</textarea>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image (450 * 350) </label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            @if ($module->image)
                                <img src="{{ asset('media/new_product/modules/' . $module->image) }}" width="75"
                                    class="img-fluid rounded shadow-sm mt-2" alt="Module Image">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update Module</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        // Initialize CKEditor for all textareas with class 'ckeditor'
        const editorInstances = {};

        document.querySelectorAll('.ckeditor').forEach((element) => {
            ClassicEditor
                .create(element)
                .then(editor => {
                    editorInstances[element.id] = editor; // Store the editor instance by element id
                })
                .catch(error => {
                    console.error('CKEditor Error:', error);
                });
        });

        // Custom form validation before submission
        document.getElementById('editModuleForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Check for CKEditor content
            document.querySelectorAll('.ckeditor').forEach((element) => {
                const editorData = editorInstances[element.id].getData()
                    .trim(); // Get data from CKEditor instance
                if (!editorData) {
                    isValid = false;
                    alert('Please fill in the Description field.');
                    editorInstances[element.id].focus(); // Focus on the CKEditor instance
                    event.preventDefault(); // Prevent form submission
                }
            });

            return isValid;
        });
    </script>
@endsection
