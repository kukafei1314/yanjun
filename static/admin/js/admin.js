/**
 * function:注册页面信息检测
 * author:lizzyphy
 * date:2015.01.11
 */
function chkUserName(obj){
	 if (checks(obj.value)== false)
	  {
		$(obj).addClass = "FrameDivWarn";
		showInfo("username_notice",msg_un_format);
		change_submit("true");
	  }
	else if(obj.value.length<1){
		alert(obj.value.length);
		$(obj).addClass = "FrameDivWarn";
		showInfo("username_notice",msg_un_blank);
		change_submit("true");
	}

	else{
		//调用Ajax函数,向服务器端发送查询
		var username = obj.value;
		showInfo("username_notice",process_request);//显示状态
		$.ajax({
			 type: "post",//使用post方法访问后台
			 dataType: "json",//返回json格式的数据
			 url: "/admin/register/check_username",//要访问的后台地址
			 data: {name:username},//要发送的数据
			 success: function(data){
				if(data != "true"){      
					$("#username").addClass = "FrameDivWarn";
					showInfo("username_notice",msg_un_registered);
					change_submit("true"); 
				} else {
					$("#username").addClass("FrameDivPass");
					showInfo("username_notice",info_can);
					change_submit("false"); 
				}
			}
		});
	}			

}

function checks(t){
    szMsg="[#%&'\",;:=!^@]";
    for(i=1;i<szMsg.length+1;i++){
    	if(t.indexOf(szMsg.substring(i-1,i))>-1){
     	 //alertStr="请勿包含非法字符如[#_%&'\",;:=!^]";
      	return false;
     	}
    }
    return true;
}
   
//-----------EMAIL检测--------------------------------//
function checkEmail(email)
{
	if (chekemail(email.value)==false)
	{
		$(email).addClass = "FrameDivWarn";
		showInfo("email_notice",msg_email_format);
		change_submit("true");  
	} 
	else
	{
		//调用Ajax函数,向服务器端发送查询
		var email = email.value;
		$.ajax({
			 type: "post",//使用post方法访问后台
			 dataType: "json",//返回json格式的数据
			 url: "/admin/register/check_email",//要访问的后台地址
			 data: {email:email},//要发送的数据
			 success: function(data){
				if(data != "true"){      
					$("#email").addClass = "FrameDivWarn";
					showInfo("email_notice",msg_email_registered);
					change_submit("true"); 
				} else {
					$("#email").addClass("FrameDivPass");
					showInfo("email_notice",info_can);
					change_submit("false");
				}
			}
		});
	}
}

function chekemail(temail) {  
	 var pattern = /^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,4}$/i;  
	 if(pattern.test(temail)) {  
	  	return true;  
	 }  
	 else {  
	  	return false;  
	 }  
} 

//--------------------密码检测-----------------------------//
function check_password( password )
{
	re_password = document.getElementById('repassword').value;
	
	if ( password.value.length < 6 )
    {
		showInfo("password_notice",password_shorter_s);
		$(password).addClass("FrameDivWarn");
		change_submit("true");//禁用提交按钮
    }
	else if(password.value.length > 30){
		showInfo("password_notice",password_shorter_m);
		$(password).addClass("FrameDivWarn");
		change_submit("true");//禁用提交按钮
		}
	else if(re_password!=password.value && re_password.length>0)
		{
			showInfo("password_notice",confirm_password_invalid);
			$(password).addClass("FrameDivWarn");
			change_submit("true");//禁用提交按钮
		}
	else
    {
		showInfo("password_notice",info_right);
		$(password).addClass("FrameDivPass");
		change_submit("false");//允许提交按钮
    }
}

function check_conform_password( conform_password )
{
    password = document.getElementById('password').value;

    if ( conform_password.value.length < 6 )
    {
		showInfo("conform_password_notice",password_shorter_s);
		$(conform_password).addClass("FrameDivWarn");
		change_submit("true");//禁用提交按
        return false;
    }
    if ( conform_password.value!= password)
    {
		showInfo("conform_password_notice",confirm_password_invalid);
		$(conform_password).addClass("FrameDivWarn");
		change_submit("true");//禁用提交按
    }
    else
    {   
	    $(conform_password).addClass("FrameDivPass");
		showInfo("conform_password_notice",info_right);
		change_submit("false");//允许提交按钮
    }
}


//-------------处理注册程序-----------------------------//
function register() {
	if(document.formUser.username.value=="")
	{
		$('#username').addClass("FrameDivWarn");
		showInfo("username_notice",msg_un_blank);
		document.formUser.username.focus();
		return false;
	}
	else if(document.formUser.email.value=="")
	{
		$('#email').addClass("FrameDivWarn");
		showInfo("email_notice",msg_email_blank);
		document.formUser.email.focus();
		return false;
	}	
	
	else if(document.formUser.password.value=="")
	{
		$('#password').addClass("FrameDivWarn");
		showInfo("password_notice",password_empty);
		document.formUser.password.focus();
		return false;
	}
	else if(document.formUser.confirm_password.value=="")
	{
		$('#confirm_password').addClass("FrameDivWarn");
		showInfo("conform_password_notice",confirm_password_invalid);
		document.formUser.password.focus();
		return false;
	}
}

//------------ 按钮状态设置-----------------------------//
function change_submit(zt)
{ 
     if (zt == "true")
     {
   document.forms['formUser'].elements['Submit1'].disabled = 'disabled';
     }
   else
     {
   document.forms['formUser'].elements['Submit1'].disabled = '';
     }
}
//------公用程序------------------------------------//
function showInfo(target,Infos){
    document.getElementById(target).innerHTML = Infos;
}

function showclass(target,Infos){
    document.getElementById(target).className = Infos;
}	
	var process_request = "<img src='../static/img/loading.gif' width='14' height='14'  border='0' align='absmiddle'>正在数据处理中...";	
	var username_empty = "<span style='COLOR:#ff0000'> <img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 用户名不能为空!</span>";
	var username_shorter = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 用户名长度不能少于 3 个字符。</span>";
	var password_empty = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 登录密码不能为空。</span>";
	var password_shorter_s = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 登录密码不能少于 6 个字符。</span>";
	var password_shorter_m = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 登录密码不能多于 30 个字符。</span>";
	var confirm_password_invalid = "<span style='COLOR:#ff0000'> <img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'>两次输入密码不一致!</span>";
	var email_empty = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'>Email 为空</span>";
	var email_invalid = "- Email 不是合法的地址";
	var msg_un_blank = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14' ' border='0'> 用户名不能为空!</span>";
	var msg_un_length = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg'width='14' height='14'  border='0'> 用户名最长不得超过15个字符</span>";
	var msg_un_format = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 用户名含有非法字符!</span>";
	var msg_un_registered = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14' border='0'> 用户名已经存在,请重新输入!</span>";
	var msg_can_rg = "<span style='COLOR:#006600'><img src='../../static/image/dui.jpg' width='14' height='14'  border='0'>可以注册！</span>";
	var msg_email_blank = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'>邮件地址不能为空!</span>";
	var msg_email_registered = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 邮箱已存在,请重新输入!</span>";
	var msg_email_format = "<span style='COLOR:#ff0000'><img src='../../static/image/cuo.jpg' width='14' height='14'  border='0'> 邮件地址不合法!</span>";
	var info_can="<span style='COLOR:#006600'> <img src='../../static/image/dui.jpg' width='14' height='14'  border='0'> 可以注册!</span>";
	var info_right="<span style='COLOR:#006600'><img src='../../static/image/dui.jpg' width='14' height='14'  border='0'> 填写正确!</span>";