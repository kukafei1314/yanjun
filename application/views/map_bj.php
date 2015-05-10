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
    <input id="pic_num" type="hidden" value="<?php echo $imgs_num;?>"/>
    <div class="map_title">
    	北&nbsp;京
    </div>
    <div class="map">
    	<div class="allmap" id="map_bj"></div>
    </div>
<script type="text/javascript">
	// 百度地图API功能
	var map1 = new BMap.Map("map_bj");    // 创建Map实例
	map1.centerAndZoom(new BMap.Point(116.466448,39.911301), 10);  // 初始化地图,设置中心点坐标和地图级别
	map1.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map1.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	var bottom_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	map1.addControl(bottom_left_control);        
	map1.addControl(top_left_navigation); 
	
	var point = new BMap.Point(116.466448,39.911294);
	var marker = new BMap.Marker(point);  // 创建标注
	map1.addOverlay(marker);              // 将标注添加到地图中
	map1.centerAndZoom(point, 20);
	var opts = {
	  width : 200,     // 信息窗口宽度
	  height: 100,     // 信息窗口高度
	  title : "晏钧设计" , // 信息窗口标题
	  enableMessage:true,//设置允许信息窗发送短息
	  message:"北京市朝阳区东三环中39号建外SOHO2号楼0501-晏钧设计"
	}
	var infoWindow = new BMap.InfoWindow("地址:北京市朝阳区东三环中39号建外SOHO2号楼0501", opts);  // 创建信息窗口对象 
	marker.addEventListener("click", function(){          
		map1.openInfoWindow(infoWindow,point); //开启信息窗口
	});
	
	//var local1 = new BMap.LocalSearch(map1, {
    //renderOptions:{map: map1, autoViewport:true}});
   // local1.searchNearby("建外SOHO", "建外SOHO东区2号楼");
</script> 

    
<?php $this->load->view('common/common_footer'); ?> 