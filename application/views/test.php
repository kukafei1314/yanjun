<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
#blue{
height:200px;
background-color:#00F;
position:relative;
}
#green{
height:200px;
background-color:#0F0;
}
</style>
<script type="text/javascript">
function init(){
var b=document.getElementById("blue");
var g=document.getElementById("green");
hides(b,g);
}
function getTop(obj){
var style="";
if(document.defaultView&&document.defaultView.getComputedStyle){
style=document.defaultView.getComputedStyle(obj);
}else{
style=obj.currentStyle;
}
return style.top=="auto"?obj.offsetTop:style.top;
}
function hides(b,g){
var bw=getTop(b);
var gw=getTop(g);
alert(bw+":"+gw);
//b.style.height=parseInt(bw)+2+"px";
//g.style.height=parseInt(gw)-2+"px";
b.style.top=parseInt(bw)+2+"px";
var p=window.setTimeout(function(){hides(b,g)},2);
if(parseInt(gw)<=parseInt(bw)+8){
window.clearTimeout(p);
}
}
window.onload=init;
</script>
</head>

<body>
<div id="blue"></div>
<div id="green"></div>
</body>
</html>-->

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<script type="text/javascript" src="<?php echo base_url('static/js/jquery-1.8.0.js'); ?>"></script>
</head>

<body>
    <button id="go"> Run</button>
	<div id="block">Hello!</div>
    <script>
        /**
        * @para obj  内容对象
        * @para lbtn 左按钮
        * @para rbtn 右按钮
        * @para w      每次滚动的宽
        * @para duration 每次运行时间
        * @para tween 缓动类型
        */
        $(document).ready(function() {
		  $("#block").animate({ 
			width: "90%",
			height: "100%", 
			fontSize: "10em", 
			borderWidth: 10
		  }, 1000 );
		});
    </script>
</body>
</html>