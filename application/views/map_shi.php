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
    	<img src="<?php echo base_url('static/image/map_title1.png');?>"/>
    </div>
    <div class="map">
    	<div class="allmap" id="map_shi"></div>
    </div>
    
<?php $this->load->view('common/common_footer'); ?> 