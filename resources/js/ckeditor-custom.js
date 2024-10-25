// resources/js/ckeditor-custom.js

import ClassicEditorBase from '@ckeditor/ckeditor5-build-classic/src/classiceditor';

// Import necessary plugins
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight';
import Heading from '@ckeditor/ckeditor5-heading/src/heading';
import Link from '@ckeditor/ckeditor5-link/src/link';
import List from '@ckeditor/ckeditor5-list/src/list';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Table from '@ckeditor/ckeditor5-table/src/table';
import TableToolbar from '@ckeditor/ckeditor5-table/src/tabletoolbar';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';

export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
    Essentials,
    Bold,
    Italic,
    Font,
    Highlight,
    Heading,
    Link,
    List,
    Paragraph,
    Table,
    TableToolbar,
    Image,
    ImageToolbar,
    ImageCaption,
    ImageStyle,
    ImageResize,
    // Add other plugins here if needed
];

ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            'heading', '|',
            'bold', 'italic', '|',
            'fontSize', 'fontColor', 'fontBackgroundColor', '|', // Font options
            'highlight', '|',  // Highlighting
            'link', 'bulletedList', 'numberedList', '|',
            'insertTable', 'blockQuote', 'undo', 'redo', '|',
            'imageUpload', 'mediaEmbed', 'removeFormat'
            // Add more toolbar items as needed
        ]
    },
    image: {
        toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side', 'resizeImage:50', 'resizeImage:75', 'resizeImage:original']
    },
    table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
    },
    language: 'en',
    height: 500  // Adjust the height as needed
};

// Initialize CKEditor for all textareas with class 'ckeditor'
document.querySelectorAll('.ckeditor').forEach((element) => {
    ClassicEditor
        .create(element)
        .catch(error => {
            console.error('CKEditor Error:', error);
        });
});
