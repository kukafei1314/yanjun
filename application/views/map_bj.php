<?php $this->load->view('common/common_header'); ?>

    <div class="pic_div">
        <div id="pic">
            <ul>
                <li><img src="<?php echo base_url('static/image/map_pic1.png');?>" width=986 height=432/></li>
                <li><img src="<?php echo base_url('static/image/news_image.png');?>" width=986 height=432/></li>
            </ul>
        </div>
        <div id="tip">
            <a class="pic_left" onclick="change(1)"></a>
            <a class="pic_right" onclick="change(0)"></a>
        </div>
    </div>
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
	var local1 = new BMap.LocalSearch(map1, {
    renderOptions:{map: map1, autoViewport:true}});
    local1.searchNearby("建外SOHO", "建外SOHO东区2号楼");
</script>
    
<?php $this->load->view('common/common_footer'); ?> 