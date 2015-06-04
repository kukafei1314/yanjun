<?php $this->load->view('common/common_header'); ?>

	<div class="main_big_pic">
        <div id="pic">
            <ul>
            <?php foreach($imgs as $img): ?>
                <li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div id="main_tip">
            <a class="arrow_left" onclick="change(1)"></a>
            <a class="arrow_right" onclick="change(0)"></a>
        </div>
    </div>
    <input id="pic_num" type="hidden" value="<?php echo $imgs_num;?>"/>
    <div class="pro_middle">
        <div class="pro_m1 float">常见问题</div>
        <div class="float" style="position: relative">
            <div class="pro_m2"></div>
            <div class="case_opacity"></div>
            <!--<div class="cl"></div>-->
        </div>
    </div>
    <div class="pro_text">
		<?php foreach ($pro as $pro): ?>
			<a name="<?php echo $pro['id']%5;?>"></a>
			<p><?php echo $pro['title'];?></p>
			<?php echo $pro['content'];?>
		<?php endforeach;?>
        
    </div>
    
    <div class="main_page">
    	<?php echo $page_html;?>
    </div>
    
<?php $this->load->view('common/common_footer');?>