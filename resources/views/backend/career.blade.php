@extends('backend.app')

@section('title', 'Career FAQs Management')

@section('content')
    <div class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div id="app" class="content-wrapper">
                        <div class="pt-5 px-5">
                            <div class="card">
                                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Career</h3>
                                </div>

                                <!-- Success/Error Modals -->
                                <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class="fa fa-window-close"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                            <div class="modal-body" id="messageModalBody"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form id="careerForm" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Career Images Upload Section -->
                                        <div class="mb-4">
                                            <h4>Career Images (265 × 150)</h4>
                                            <table class="table table-bordered table-hover align-middle table-striped">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Preview</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['career_image_1', 'career_image_2', 'career_image_3', 'career_image_4'] as $index => $imageField)
                                                        <tr>
                                                            <td>Career Image {{ $index + 1 }}</td>
                                                            <td>
                                                                @if ($content && $content->{$imageField})
                                                                    <img src="{{ asset($content->{$imageField}) }}"
                                                                        alt="Career Image {{ $index + 1 }}"
                                                                        class="img-fluid rounded shadow-sm"
                                                                        style="max-width: 70px; height: auto;"
                                                                        id="preview-{{ $imageField }}">
                                                                @else
                                                                    <span class="text-muted">No Image Uploaded</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="file"
                                                                    class="form-control border-0 shadow-sm rounded"
                                                                    name="{{ $imageField }}" accept="image/*"
                                                                    onchange="validateImageFile(event, '{{ $imageField }}')">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Career Content</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </main>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Career FAQs</h3>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFaqModal">Add FAQ</button>
                </div>
                <div class="card-body">
                    <!-- Display FAQs Table -->
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-hover align-middle table-striped">
                            <thead>
                                <tr>
                                    <th>FAQ Title</th>
                                    <th>FAQ Answer</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="faqList">
                                @foreach ($faqs as $index => $faq)
                                    <tr id="faqRow{{ $index }}">
                                        <td>{{ $faq['title'] }}</td>
                                        <td>{!! $faq['answer'] !!}</td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm"
                                                onclick="editFaq('{{ $index }}')">Edit</button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="deleteFaq('{{ $index }}')">Delete</button>
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

    <!-- Add FAQ Modal -->
    <div class="modal fade" id="addFaqModal" tabindex="-1" aria-labelledby="addFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaqModalLabel">Add FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa fa-window-close" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <form id="addFaqForm">
                        <div class="mb-3">
                            <label for="faqTitle" class="form-label">FAQ Title</label>
                            <input type="text" class="form-control" id="faqTitle" name="faq_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="faqAnswer" class="form-label">FAQ Answer</label>
                            <textarea class="form-control summernote" id="faqAnswer" name="faq_answer" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveFaq">Add FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit FAQ Modal -->
    <div class="modal fade" id="editFaqModal" tabindex="-1" aria-labelledby="editFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFaqModalLabel">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editFaqForm">
                        <input type="hidden" id="faqIndex">
                        <div class="mb-3">
                            <label for="editFaqTitle" class="form-label">FAQ Title</label>
                            <input type="text" class="form-control" id="editFaqTitle" name="faq_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="editFaqAnswer" class="form-label">FAQ Answer</label>
                            <textarea class="form-control summernote" id="editFaqAnswer" name="faq_answer" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="updateFaq">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteFaqModal" tabindex="-1" aria-labelledby="deleteFaqModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteFaqModalLabel">Delete FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this FAQ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteFaq">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Initialize Summernote
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

        // Preview uploaded image instantly
        function previewImage(event, imageField) {
            const preview = document.getElementById(`preview-${imageField}`);
            preview.src = URL.createObjectURL(event.target.files[0]);
        }

        document.getElementById('careerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch('{{ route('backend.career_content.update') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showModalMessage('Success', 'Career content updated successfully.');
                        setTimeout(() => location.reload(), 3000); // Reload after 3 seconds
                    } else {
                        showModalMessage('Error', 'Error updating career content.');
                    }
                })
                .catch(error => showModalMessage('Error', 'Error updating career content.'));
        });

        // Add new FAQ
        document.getElementById('saveFaq').addEventListener('click', function() {
            const title = document.getElementById('faqTitle').value;
            const answer = $('#faqAnswer').summernote('code');

            fetch('{{ route('backend.faq.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        title,
                        answer
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('FAQ added successfully');
                        location.reload(); // Reload the page after adding FAQ
                    } else {
                        alert('Error adding FAQ');
                    }
                });
        });

        // Edit FAQ
        function editFaq(index, title, answer) {
            document.getElementById('faqIndex').value = index;
            document.getElementById('editFaqTitle').value = title;
            $('#editFaqAnswer').summernote('code', answer);

            var editModal = new bootstrap.Modal(document.getElementById('editFaqModal'));
            editModal.show();

            document.getElementById('updateFaq').onclick = function() {
                const updatedTitle = document.getElementById('editFaqTitle').value;
                const updatedAnswer = $('#editFaqAnswer').summernote('code');

                fetch('{{ route('backend.faq.update') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            index,
                            title: updatedTitle,
                            answer: updatedAnswer
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('FAQ updated successfully');
                            location.reload(); // Reload after FAQ update
                        } else {
                            alert('Error updating FAQ');
                        }
                    });
            };
        }
        // Delete FAQ
        function deleteFaq(index) {
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteFaqModal'));
            deleteModal.show();

            document.getElementById('confirmDeleteFaq').onclick = function() {
                fetch('{{ route('backend.faq.delete') }}', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            index
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('FAQ deleted successfully');
                            document.getElementById(`faqRow${index}`).remove(); // Remove row instantly
                        } else {
                            alert('Error deleting FAQ');
                        }
                    });
            };
        }

        // Function to show modal messages
        function showModalMessage(title, message) {
            const modal = new bootstrap.Modal(document.getElementById('messageModal'));
            document.getElementById('messageModalLabel').textContent = title;
            document.getElementById('messageModalBody').textContent = message;
            modal.show();
            setTimeout(() => {
                modal.hide();
            }, 3000);
        }
    </script>
@endsection
