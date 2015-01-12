// JavaScript Document
$(document).ready(function(){
	get_check_num();
});

function get_check_num(){
	$.ajax({
			 type: "post",//使用post方法访问后台
			 dataType: "json",//返回json格式的数据
			 url: "/admin/login/captcha",//要访问的后台地址
			 data: {data:1},//要发送的数据
			 success: function(data){
				if(data){    
					$("#check_num").html(data);
				} else {
				}
			}
		});
}