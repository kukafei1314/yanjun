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
				} else {
				}
			}
		});
}

function check_login_right() {
	var check_num = $('#login_num').val();
	$.ajax({  
        type: "POST", 
		async: false,     
        url: "/servicechannel/get_login",      
        data: {check_num:check_num},
        success: function(data){
			if(data == 1) {
				$("#error").empty();
				$("#error").append(error_num);
				$("#error").show()
				 setTimeout(function () {
        		$("#error").hide();}, 1000);
				error = 1;
			} else if(data == 2) {
				$("#error").empty();
				$("#error").append(error_user);
				$("#error").show()
				 setTimeout(function () {
        		$("#error").hide();}, 1000);
			} else {
				window.location.reload();
			}
        }            
    }); 
}

function check_repw_right() {
	var old_password  = $('#old_password').val();
	var new_password  = $('#new_password').val();
	var re_new_password = $('#re_new_password').val();
	var error = 0;
	if(old_password == '') {
		$("#div").empty();
		$("#div").append(oldpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	if(new_password == '') {
		$("#div").empty();
		$("#div").append(newpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	if(re_new_password == '') {
		$("#div").empty();
		$("#div").append(renewpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	
	if(re_new_password != new_password) {
		$("#div").empty();
		$("#div").append(newpass_error);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	$.ajax({  
        type: "POST", 
		async: false,     
        url: "index/reset_password",      
        data: {old_password:old_password,new_password:new_password},
        success: function(data){
			if(data == "false") {
				$("#div").empty();
				$("#div").append(oldpass_error);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 1000);
				error = 1;
			} else if(data == "true") {
				$("#div").empty();
				$("#div").append(repass_right);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 100);
				window.location.reload();
			}
        }            
    }); 
	if(error == 1) {
		return false;
	}
}

var error_num = "<div class='check_all check'>验证码错误</div>";
var error_user = "<div class='check_all check1'>用户名或者密码错误</div>";
var oldpass_empty = "<div class='check_all check2'>请输入原始密码</div>";
var newpass_empty = "<div class='check_all check3'>请输入新密码</div>";
var renewpass_empty = "<div class='check_all check4'>请输入确认的新密码</div>";
var newpass_error = "<div class='check_all check4'>两次输入的新密码不一致</div>";
var oldpass_error = "<div class='check_all check2'>原始密码错误</div>";
var repass_right = "<div class='check_all check2'>重置密码成功</div>";

function is_empty(){
	var company = document.getElementById('company0').value;
	var phone = document.getElementById('phone0').value;
	var client_name = document.getElementById('client_name0').value;
	var email = document.getElementById('email0').value;
	var address = document.getElementById('address0').value;
	var login_num = document.getElementById('login_num').value;
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
	}else if(login_num ==""){
		alert("验证码不能为空！");
		return false;
	}else {
		return ture;
	}					
}

function twofun(){
   is_empty();  
   check_login_right();
}		    