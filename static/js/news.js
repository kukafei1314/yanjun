/**
 * 大图滚动
 */
var scrollmove = "";
var masktime = 10;
var focus_cur = 1;	
var next;
var interval = "";
var num;
function change(id){
	clearTimeout(scrollmove);
	clearTimeout(interval);
	if(id==0) {
		if(focus_cur==1) {
			next = num;
		} else {
			next = focus_cur - 1;
		}
	} else if(id==1) {
		if (focus_cur==num){
			next = 1;
		} else {
			next = focus_cur + 1;
		}
	}
	move();
}

function move() {
	if (focus_cur==num){
		next = 1;
	} else {
		next = focus_cur + 1;
	}
	focus_cur = next;
	scrollmove = setInterval("scrollMove("+next+")",masktime);
}

function scrollMove(m){
	var p = $("#pic li");
	var srl = $("#pic").scrollLeft();
	var dsrl = Math.floor((p.width()*(m-1)-srl)/5);
	var xsrl = Math.ceil((p.width()*(m-1)-srl)/5);
	if(srl > p.width()*(m-1)) {
		$("#pic").scrollLeft(srl + dsrl);
	} else if (srl < p.width()*(m-1)){
		$("#pic").scrollLeft(srl + xsrl);
	} else {
		clearTimeout(scrollmove);
		clearTimeout(interval);
		run();
	}
}

/**
* 大图自动滚动
**/
$(document).ready(function() {
	num = $("#pic_num").val();
	if ($.browser.msie && $.browser.version <= 9.0)
	{
		//alert('666');
	} else {	
		var left1=document.body.clientWidth/2 + 986/2;
		$('#main_out').css({left:left1});
	}
  	 run();      //加载页面时启动定时器  
});

function run() {
	interval = setTimeout("move()","4000");
}

/*
*加入我们三级页面 省略号点击消失与显示
*/
function showdown(obj) {
	$(obj).css("display","none");
	$(obj).prev(".right_middle").css("height","auto");
}
function hideup(obj) {
	if($(obj).css("height") != 130) {
		$(obj).css("height","130").css("overflow","hidden").next(".not").css("display","block");
	}
}
$(document).ready(function() {
  $(".right_middle_content").each(function(){
	  if(parseInt($(this).css("height"))> 90) {
		  $(this).parent(".right_middle").after(dot);
	  }
  });
});
var dot = "<a class='not' onclick='showdown(this)'>……</a>";

/*
*业务通道二级页面  more...点击消失与显示
*/
function showall(obj) {
	$(obj).css("display","none");
	$(obj).prev(".m_text").css("height","auto");
}
function unhide(obj) {
	if($(obj).css("height") != 395) {
		$(obj).css("height","395").css("overflow","hidden").next(".show").css("display","block");
	}
}
$(document).ready(function() {
  $(".text_li").each(function(){
	  if(parseInt($(this).css("height"))> 360) {
		  $(this).parent(".m_text").after(more);
	  }
  });
});
var more = "<a class='show float' onclick='showall(this)'>more……</a>";

/**
 *  首页鼠标悬停动画
*/
$(document).ready(function() {
    $(".main_block1").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.main_block-yellow').css("display","block");
			//$(this).children('.main_block-detail').slideDown("slow");
			$(this).children('.main_block-detail').css("display","block").animate({ top: "-60px" }, 100 );
		});
		$(this).mouseleave(function(){
			$(this).children('.main_block-yellow').css("display","none");
			$(this).children('.main_block-detail').css("display","none").css("top","0");
		});
	});
	
	$(".main_work_pic").each(function() {
		$(this).mouseenter(function(){
			$(this).children('a').children('.main_pic_mask').css("display","block");
			$(this).children('.main_work_detail').slideDown("fast");
		});
		$(this).mouseleave(function(){
			$(this).children('a').children('.main_pic_mask').css("display","none");
			$(this).children('.main_work_detail').stop(true,true).fadeOut("slow");
		});
	});
	
	$(".news_list_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.main_news_mask').css("display","none");
		});
		$(this).mouseleave(function(){
			$(this).children('.main_news_mask').css("display","block");
		});
	});
	
	$(".c_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.slide').slideDown("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').stop(true,true).fadeOut("slow");
		});
	});
	
	$(".l_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.slide').slideDown("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').stop(true,true).fadeOut("slow");
		});
	});
	
	$(".share").each(function() {
		$(this).mouseenter(function(){
			$(this).children(".share_1").slideDown();
		});
		$(this).mouseleave(function(){
			$(this).children(".share_1").slideUp();
		});
	});
	
	$(".share_work").each(function() {
		$(this).mouseenter(function(){
			$(this).children(".share_2").slideDown();
		});
		$(this).mouseleave(function(){
			$(this).children(".share_2").slideUp();
		});
	});
});

function get_single_news(id)
{
	$.ajax({
		 type: "post",//使用post方法访问后台
	     dataType: "json",//返回json格式的数据
	     url: "/news/single_news",//要访问的后台地址
	     data: {new_id:id},//要发送的数据
	     success: function(data){
	    	 if(data){
	            $("#news_title").html(data.title);
	            $("#news_content").html(data.content);
		     }
	     }
	});
}

function get_single_cases(id)
{
	$.ajax({
		 type: "post",//使用post方法访问后台
	     dataType: "json",//返回json格式的数据
	     url: "/cases_expand/single_cases",//要访问的后台地址
	     data: {case_id:id},//要发送的数据
	     success: function(data){
	    	 if(data){
	            $(".text_title").html(data.name);
	            $(".text_st_project").html(data.project);
	            $(".text").html(data.abstract);
				$(".text_st_date").html(data.date.format);
	            $(".case_img").html(data.content);
				
		     }
	     }
	});
}

function get_single_joy(id)
{
	$.ajax({
		 type: "post",//使用post方法访问后台
	     dataType: "json",//返回json格式的数据
	     url: "/share/single_joy",//要访问的后台地址
	     data: {joy_id:id},//要发送的数据
	     success: function(data){
	    	 if(data){
	            $("#joy_title").html(data.title);
	            $("#joy_content").html(data.content);
		     }
	     }
	});
}

$(document).ready(function() {
	$(".div_h").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".a_link").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children('.a_link').stop(true,true).fadeIn("slow");
		});
	});
});

$(document).ready(function() {
	$(".news_list_img").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".fade").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children('.fade').stop(true,true).fadeIn("slow");
		});
	});
});

$(document).ready(function() {
	$(".div_opa").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".case_opacity").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children(".case_opacity").stop(true,true).fadeIn("slow");
		});
	});
	
	$("#upload_file").change(function(){
		if($("#upload_file").val() != '') $("#submit_form").submit();
	});
});

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