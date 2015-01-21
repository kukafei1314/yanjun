// JavaScript Document
$(document).ready(function(){
	$("#upload_file").change(function(){
		if($("#upload_file").val() != '') $("#submit_form").submit();
	});
});