/**
 * 大图滚动
 */
var scrollmove = "";
var masktime = 10;
var focus_cur = 1;	
var next;
var interval = "";
function change(id){
	clearTimeout(scrollmove);
	clearTimeout(interval);
	if(id==0) {
		if(focus_cur==1) {
			next = 3;
		} else {
			next = focus_cur - 1;
		}
	} else if(id==1) {
		if (focus_cur==3){
			next = 1;
		} else {
			next = focus_cur + 1;
		}
	}
	move();
}

function move() {
	if (focus_cur==3){
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
	$(obj).prev(".right_middle").css("overflow","visible");

}
function hideup(obj) {
	if($(obj).css("height") != 130) {
		$(obj).css("height","130");
		$(obj).css("overflow","hidden");
		$(obj).next(".not").css("display","block");
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
	$(obj).prev(".m_text").css("overflow","visible");
}
function unhide(obj) {
	if($(obj).css("height") != 395) {
		$(obj).css("height","395");
		$(obj).css("overflow","hidden");
		$(obj).next(".show").css("display","block");
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
			$(this).children('.main_block-detail').css("display","block");
			$(this).children('.main_block-detail').animate({ top: "-60px" }, 100 );
		});
		$(this).mouseleave(function(){
			$(this).children('.main_block-yellow').css("display","none");
			$(this).children('.main_block-detail').css("display","none");
			$(this).children('.main_block-detail').css("top","0");
		});
	});
	
	$(".main_work_pic").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.main_pic_mask').css("display","block");
			$(this).children('.main_work_detail').slideDown("fast");
			$(this).children('.main_work_detail').fadeIn("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.main_pic_mask').css("display","none");
			$(this).children('.main_work_detail').stop(true,true);
			$(this).children('.main_work_detail').fadeOut("slow");
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
			$(this).children('.slide').fadeIn("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').stop(true,true);
			$(this).children('.slide').fadeOut("slow");
		});
	});
	
	$(".l_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.slide').slideDown("slow");
			$(this).children('.slide').fadeIn("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').stop(true,true);
			$(this).children('.slide').fadeOut("slow");
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
		 type: "post",//使用get方法访问后台
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
		 type: "post",//使用get方法访问后台
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

$(document).ready(function() {
	$(".div_h").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".a_link").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children('.a_link').stop(true,true);
			$(this).children(".a_link").fadeIn("slow");
		});
	});
});

$(document).ready(function() {
	$(".news_list_img").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".fade").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children('.fade').stop(true,true);
			$(this).children(".fade").css({opacity:0.7});
			$(this).children(".fade").fadeIn("slow");
			
		});
	});
});

$(document).ready(function() {
	$(".div_opa").each(function() {
		$(this).mouseenter(function() {
			$(this).children(".case_left_expand").children(".case_opacity").fadeOut("slow");
			$(this).children(".case_opacity").fadeOut("slow");
		});
		$(this).mouseleave(function() {
			$(this).children(".case_opacity").stop(true,true);
			$(this).children(".case_opacity").css({opacity:0.7});
			$(this).children(".case_left_expand").children(".case_opacity").fadeIn("slow");
			$(this).children(".case_opacity").fadeIn("slow");
		});
	});
});

