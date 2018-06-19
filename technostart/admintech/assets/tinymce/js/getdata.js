$(document).ready(function(){

	$("#get-data-form").submit(function(e){

		var content = tinymce.get("texteditor").getContent();
		var file =tinymce.get('file1').getContent();
		$("#data-container").html(content);
		$("#data-container").html(file);
		return false;

	});

});