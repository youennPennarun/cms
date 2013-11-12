/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

	//var imgUploadPath = "/cms/web";
	
CKEDITOR.editorConfig = function( config) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = imgUploadPath+'';
    config.filebrowserImageBrowseUrl = imgUploadPath+'Settings/Uploads/selectImage-wysiwyg';
    config.filebrowserFlashBrowseUrl = imgUploadPath+'';
    config.filebrowserUploadUrl = imgUploadPath+'Settings/Uploads/Images-wysiwyg';
    config.filebrowserImageUploadUrl = imgUploadPath+'Settings/Uploads/Images-wysiwyg';
    config.filebrowserFlashUploadUrl = imgUploadPath+'';
};
