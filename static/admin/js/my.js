// JavaScript Document
$(function() {
	//$( "#sort2" ).sortable();
});

function delcfm() { 
	if (!confirm("确认要删除？")) { 
		return false; 
	} else return true;
} 

$(document).ready(function() {
    $(".btn").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.g_hid').css("display","block");
		});
	});
});