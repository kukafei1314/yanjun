// JavaScript Document
$(document).ready(function(){
	get_check_num();
});

function get_check_num(){
	$.ajax({
			 type: "post",//使用post方法访问后台
			 dataType: "json",//返回json格式的数据
			 url: "/servicechannel/captcha",//要访问的后台地址
			 data: {data:1},//要发送的数据
			 success: function(data){
				if(data){    
					$("#check_num").html(data);
					checkout=data;
				} else {
				}
			}
		});
}
var checkout;
var error_num = "<div class='check_all check'>验证码错误</div>";

function is_empty_right(){
	var company = document.getElementById('company0').value;
	var phone = document.getElementById('phone0').value;
	var client_name = document.getElementById('client_name0').value;
	var email = document.getElementById('email0').value;
	var address = document.getElementById('address0').value;
	var checkin = document.getElementById('checkin').value;
	if(company ==""){
		alert("公司/机构不能为空！");
		return false;
	}else if(phone ==""){
		alert("电话不能为空！");
		return false;
	}else if(client_name ==""){
		alert("姓名/职务不能为空！");
		return false;
	}else if(email ==""){
		alert("邮箱不能为空！");
		return false;
	}else if(address ==""){
		alert("工作地址不能为空！");
		return false;
	}else if(checkin ==""){
		alert("验证码不能为空！");
		return false;
	}else if(checkin != checkout){
		alert("验证码输入错误！");
		return false;
	}else{
		return ture;
	}					
}
