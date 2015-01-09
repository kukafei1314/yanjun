// JavaScript Document
/**
 * 大图滚动
 */
var scrollmove = "";
var masktime = 10;
var focus_cur = 1;	
function change(id){
	clearInterval(scrollmove);
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
	scrollmove = setInterval("scrollMove("+next+")",masktime);
	focus_cur = next;
}
function scrollMove(m){
	var p = $("#pic li");
	var srl = $("#pic").scrollLeft();
	var dsrl = Math.floor((p.width()*(m-1)-srl)/5);
	var xsrl = Math.ceil((p.width()*(m-1)-srl)/5);
	if(srl > p.width()*(m-1)){
		$("#pic").scrollLeft(srl + dsrl);
	}else if(srl < p.width()*(m-1)){
		$("#pic").scrollLeft(srl + xsrl);
	}else{
		clearInterval(scrollmove);
	}
}

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
});

