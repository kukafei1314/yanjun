<?php $this->load->view('common/common_header'); ?>
     
    <div class="pic_div">
        <div id="pic">
            <ul>
            <?php foreach($imgs as $img): ?>
                <li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div id="tip">
            <a class="pic_left" onclick="change(1)"></a>
            <a class="pic_right" onclick="change(0)"></a>
        </div>
    </div>
    <div class="map_title">
    	<img src="<?php echo base_url('static/image/map_title1.png');?>"/>
    </div>
    <div class="map">
    	<div class="allmap" id="map_shi"></div>
    </div>
    
<script type="text/javascript">
	//百度地图API功能
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
	var point = new BMap.Point(114.528487,38.055067);
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);              // 将标注添加到地图中
	map.centerAndZoom(point, 20);
	var opts = {
	  width : 200,     // 信息窗口宽度
	  height: 100,     // 信息窗口高度
	  title : "晏钧设计" , // 信息窗口标题
	  enableMessage:true,//设置允许信息窗发送短息
	  message:"河北省石家庄市广安大街16号美东国际C座2708-晏钧设计"
	}
	var infoWindow = new BMap.InfoWindow("地址：河北省石家庄市广安大街16号美东国际C座2708", opts);  // 创建信息窗口对象 
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});
	
	//var local = new BMap.LocalSearch(map, {
	//renderOptions:{map: map, autoViewport:true}});
	//local.searchNearby("美东国际", "美东国际C座");
</script>
    
<?php $this->load->view('common/common_footer'); ?> 