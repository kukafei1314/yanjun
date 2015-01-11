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
			next = 2;
		} else {
			next = focus_cur - 1;
		}
	} else if(id==1) {
		if (focus_cur==2){
			next = 1;
		} else {
			next = focus_cur + 1;
		}
	}
	move();
}

function move() {
	if (focus_cur==2){
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
}
function hideup(obj) {
	if($(obj).css("height") != 130) {
		$(obj).css("height","130");
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


/**
 *  首页鼠标悬停动画
*/
$(document).ready(function() {
    $(".main_block1").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.main_block-yellow').css("display","block");
			//$(this).children('.main_block-detail').slideDown("slow");
			$(this).children('.main_block-detail').css("display","block");
			$(this).children('.main_block-detail').animate({ top: "-60px", }, 100 );
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
			$(this).children('.main_work_detail').slideDown("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.main_pic_mask').css("display","none");
			$(this).children('.main_work_detail').css("display","none");
		});
	});
	
	$(".c_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.slide').slideDown("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').css("display","none");
		});
	});
	
	$(".l_img").each(function() {
		$(this).mouseenter(function(){
			$(this).children('.slide').slideDown("slow");
		});
		$(this).mouseleave(function(){
			$(this).children('.slide').css("display","none");
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
});

