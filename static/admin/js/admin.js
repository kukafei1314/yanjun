/*
 * 左侧导航栏选中保持
 */
$(document).ready(function(){
    var pn = location.pathname;
    var find = 0;
	$("#main_nav li").each(function(n) {
		var b = $(this).attr("id");
		//alert(pn.indexOf(b));
		if (pn.indexOf(b) != -1){
			$(this)[0].className = 'parent active';
			
			find = 1;
		}
    });
	if(!find) {
		$("#main_nav li a")[0].className = 'parent active';
	}

});
