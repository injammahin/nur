<!-- resources/views/backend/new_products/partials/add_module_modal.blade.php -->

<div class="modal fade" id="addModuleModal" tabindex="-1" aria-labelledby="addModuleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModuleModalLabel">Add Module</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addModuleForm">
                    <div class="mb-3">
                        <label for="moduleSelect" class="form-label">Select Module</label>
                        <select class="form-control" id="moduleSelect">
                            @foreach ($modules as $module)
                                <option value="{{ $module->id }}">{{ $module->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="moduleDescription" class="form-label">Module Description</label>
                        <textarea class="form-control" id="moduleDescription" name="module_description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="moduleImage" class="form-label">Module Image</label>
                        <input type="file" class="form-control" id="moduleImage" name="module_image">
                    </div>
                    <button type="button" class="btn btn-primary" id="saveModule">Add Module</button>
                </form>
            </div>
        </div>
    </div>
</div>
