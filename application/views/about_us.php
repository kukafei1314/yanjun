<?php $this->load->view('common/common_header'); ?>

	<div id="newsecond">
        <div class="pic_div">
        	<div id="pic">
                <ul>
                <?php foreach($imgs as $img): ?>
                	<li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            	<?php endforeach; ?>
                </ul>
            </div>
            <div id="tip">
                <a class="pic_left1" onclick="change(1)"></a>
                <a class="pic_right1" onclick="change(0)"></a>
            </div>
        </div>
        <div id="news_middle">
            <div class="us_left">
            <?php foreach($result as $row) {?>
                <div class="us_title"><?php echo $row['title'];?></div>
                <div class="us_content">
                    <?php echo $row['content'];?>
                </div>
            <?php }?>
            </div>
            <div class="news_right">
                <?php foreach ($news as $new):?>
                <div class="news_list">
                    <div class="news_list_word">
                        <?php echo $new['title'];?>
                    </div>
                    <div class="news_list_img">
                        <img src="<?php echo base_url($new['images']);?>" width=200 height=190/>
                    	<div class="fade" onclick='location="<?php echo base_url('about_us/to_news?&p='.$this->input->get('p').'&id='.$new['id']);?>"'></div>
                    </div><br />
                    <div class="share">
                            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'text':'<?php echo $new['title'];?>','url':'http://yj.te168.cn/news','pic':'<?php echo base_url($new['images']);?>'}">
                            <span class="bds_more share_1" style="background: url(<?php echo base_url('static/image/pic1.png'); ?>) no-repeat 0 5px!important;"></span>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
                            <script type="text/javascript" id="bdshell_js"></script>
                            <script type="text/javascript">
                                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
                            </script>
                    </div> 
                </div>
            <?php endforeach;?>
        </div>
        <div class="cl"></div>
  </div>
</div>
<div class="main_page">
	<?php echo $page_html;?>
</div>
<?php $this->load->view('common/common_footer'); ?> 