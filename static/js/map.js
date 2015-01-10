// JavaScript Document

$(document).ready(function() {
	// 百度地图API功能
	var map = new BMap.Map("map_shi");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(114.529032,38.055124), 8);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	
	var bottom_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	//var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角，仅包含平移和缩放按钮
	map.addControl(bottom_left_control);        
	map.addControl(top_left_navigation);     
	//map.addControl(top_right_navigation);
	var local = new BMap.LocalSearch(map, {
    renderOptions:{map: map, autoViewport:true}});
    local.searchNearby("美东国际", "美东国际C座");
});

/*$(document).ready(function() {
	// 百度地图API功能		
	var map1 = new BMap.Map("map_bj");    // 创建Map实例
	map1.centerAndZoom(new BMap.Point(116.466448,39.911301), 10);  // 初始化地图,设置中心点坐标和地图级别
	map1.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map1.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	var bottom_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	map1.addControl(bottom_left_control);        
	map1.addControl(top_left_navigation); 
	var local1 = new BMap.LocalSearch(map1, {
    renderOptions:{map: map1, autoViewport:true}});
    local1.searchNearby("建外SOHO", "建外SOHO东区2号楼");
});*/

