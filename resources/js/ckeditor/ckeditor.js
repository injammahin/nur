// resources/js/ckeditor/ckeditor.js

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Initialize CKEditor for all textareas with class 'ckeditor'
document.querySelectorAll('.ckeditor').forEach((element) => {
    ClassicEditor
        .create(element)
        .catch(error => {
            console.error(error);
        });
});
