<!--function:公共header文件--> 
<!--author:lizzyphy-->  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<html xmlns:wb="http://open.weibo.com/wb"></html>
<head>
<meta property="wb:webmaster" content="b7a6eb002e61a8b5" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url('static/css/home.css'); ?>"/>
<script type="text/javascript" src="<?php echo base_url('static/js/jquery-1.8.0.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/news.js'); ?>"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AwiCeIVhbizweIdRqOIavdAZ"></script>
<script>
window.onload=fnInit;
	function fnInit(){ 
		if ($.browser.msie && $.browser.version <= 9.0)
		{
			//alert('666');
		} else {	
		//alert(document.body.clientWidth);
			var left1=document.body.clientWidth/2 + 986/2;
	   		$('#main_out').css({left:left1});
		}
	}
</script>
<title>晏钧设计</title>
</head>

<body>
	<div class="main_header"><!--header开始-->
    	<div class="main_header_left">
        	<a href="<?php echo base_url('index');?>"><img src="<?php echo base_url('static/image/header1.png');?>"/></a>
        </div>
        <div class="main_header_right">
        	<div class="main_header_top">
            	<!--<img src="<?php echo base_url('static/image/header_title_new.png');?>"/>-->
                <p>Brand Tel:&nbsp;4001&nbsp;606&nbsp;909</p>
            </div>
            <div class="main_header_nav">
            	<div class="main_ul1">
                	<a href="<?php echo base_url('cases');?>">案例</a>
                    <a href="<?php echo base_url('service');?>">服务</a>
                    <a href="<?php echo base_url('about_us');?>">我们</a>
                </div>
                <div class="main_ul2">
                	<a href="<?php echo base_url('servicechannel');?>">业务通道</a>
                    <a href="<?php echo base_url('join_us');?>">加入我们</a>
                    <a href="<?php echo base_url('share');?>">分享中心</a>
                    <a href="<?php echo base_url('news');?>">新闻</a>
                </div>
                <!--<div class="cl"></div>-->
            </div>
        </div>
        <!--<div class="cl"></div>-->
    </div><!--header结束-->
    <div class="main_content"><!--主要内容层开始，以限制宽度为986px-->
    	<div id="main_out" style="_position:absolute !important;_top:expression(eval(document.documentElement.scrollTop)); _right:-43px !important;">
            <a href="#"><img src="<?php echo base_url('static/image/main_totop.png');?>"/></a><a href="#main_contact"><img src="<?php echo base_url('static/image/main_contact.png');?>"/></a>
        </div>
