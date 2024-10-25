// resources/js/ckeditor.js

import ClassicEditorBase from '@ckeditor/ckeditor5-build-classic/src/classiceditor';

// Import CKEditor plugins
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import UploadAdapter from '@ckeditor/ckeditor5-adapter-ckfinder/src/uploadadapter';
import Autoformat from '@ckeditor/ckeditor5-autoformat/src/autoformat';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import BlockQuote from '@ckeditor/ckeditor5-block-quote/src/blockquote';
import Heading from '@ckeditor/ckeditor5-heading/src/heading';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';
import Link from '@ckeditor/ckeditor5-link/src/link';
import List from '@ckeditor/ckeditor5-list/src/list';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Table from '@ckeditor/ckeditor5-table/src/table';
import TableToolbar from '@ckeditor/ckeditor5-table/src/tabletoolbar';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Indent from '@ckeditor/ckeditor5-indent/src/indent';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight';
import CodeBlock from '@ckeditor/ckeditor5-code-block/src/codeblock';
import HtmlEmbed from '@ckeditor/ckeditor5-html-support/src/htmlembed';  // Correct import
import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice';
import WordCount from '@ckeditor/ckeditor5-word-count/src/wordcount';
import SpecialCharacters from '@ckeditor/ckeditor5-special-characters/src/specialcharacters';
// Include other necessary plugins

export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
    Essentials,
    UploadAdapter,
    Autoformat,
    Bold,
    Italic,
    BlockQuote,
    Heading,
    Image,
    ImageCaption,
    ImageStyle,
    ImageToolbar,
    ImageUpload,
    Link,
    List,
    Paragraph,
    Table,
    TableToolbar,
    Alignment,
    Font,
    Indent,
    Highlight,
    CodeBlock,
    HtmlEmbed,  // Include HtmlEmbed correctly here
    PasteFromOffice,
    WordCount,
    SpecialCharacters,
    // Add other plugins here
];

// Default editor configuration
ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            'heading', '|',
            'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', '|',
            'link', 'bulletedList', 'numberedList', '|',
            'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo', '|',
            'alignment', 'fontSize', 'fontColor', 'fontBackgroundColor', 'removeFormat', 'codeBlock', 'htmlEmbed', 'specialCharacters', 'wordCount'
            // Add more toolbar items as needed
        ]
    },
    image: {
        toolbar: [
            'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
        ]
    },
    table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
    },
    language: 'en',
    height: 500  // Set the desired height in pixels
};
