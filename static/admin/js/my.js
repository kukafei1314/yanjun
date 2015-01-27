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


//删除提醒函数
function del_alert(){
	return confirm('删除操作不可恢复，确定删除么？');
}