<!-- resources/views/backend/new_products/partials/add_faq_modal.blade.php -->

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
