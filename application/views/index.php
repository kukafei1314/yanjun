<?php $this->load->view('common/common_header'); ?>

    <div class="main_big_pic">
        <div id="pic">
            <ul>
            <?php foreach($imgs as $img): ?>
                <li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            <?php endforeach; ?>
                <div class="cl"></div>
            </ul>
        </div>
        <div id="main_tip">
            <a class="arrow_left" onclick="change(1)"></a>
            <a class="arrow_right" onclick="change(0)"></a>
        </div>
    </div>
 	<input id="pic_num" type="hidden" value="<?php echo $imgs_num;?>"/>
    <div class="main_block">
    <?php foreach($brand as $brand) :?>
    	<?php if($brand['bid']==5):?>
        <div class="main_block1" style="padding-right:1px; margin-right:0px">
		<?php else:?>
        <div class="main_block1">
		<?php endif;?>
            <p class="main_block_p1"><?php echo $brand['name'];?></p>
            <p><?php echo $brand['en_name'];?></p>
            
            <div class="main_block-yellow">
                <p><?php echo $brand['name'];?></p>
            </div>
           
            <div class="main_block-detail" style="background:url(<?php echo base_url($brand['pic']);?>);">
                <a href="#"><?php echo $brand['content'];?></a>
            </div>
        </div>
    <?php endforeach;?>

       
       
        <!--<div class="cl"></div>-->
    </div>
    
    <div class="main_work">
    	<div class="main_work_title">
        	Work
        </div>
    <?php foreach($cases as $case): ?>
        <div class="main_work_pic">
        	<img src="<?php echo base_url($case['images']); ?>" width=588 height=385/>
        	<a href="<?php echo base_url('cases_expand?id='.$case['id'].'&p='.$p);?>">
            	<div class="main_pic_mask"></div>
            </a>
            <div class="main_work_detail">
            	<p>Client / <?php echo $case['name'];?> </p>
                <p>Project / <?php echo $case['project'];?> </p>
                <p>Time /  <?php echo $case['date']; ?> </p>
                <div class="share_work">
                   	<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'text':'<?php echo $case['name'];?>','url':'http://yj.te168.cn/cases_expand?id=<?php echo $case['id'];?>','pic':'<?php echo base_url($case['images']);?>'}">
                         <span class="bds_more share_2" style="background: url(<?php echo base_url('static/image/pic1.png'); ?>) no-repeat 0 5px!important;"></span>
                    </div>
					<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
                    </script>	
				</div>  
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="main_news">
    	<div class="main_news_title">
        	News
        </div>
        <?php foreach($news as $new): 
		$id = $new['id'];?>
    	 <div class="news_list">
                    <div class="news_list_word2">
                        <?php echo $new['title'];?>
                    </div>
                    <div class="news_list_img" onclick='location="<?php echo base_url('about_us/to_news?id='.$new['id']);?>"'>
                        <img src="<?php echo base_url($new['images']);?>" width=200 height=190/>
                    	<div class="fade"></div>
                    </div><br />
                    <div class="share">
                            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'text':'<?php echo $new['title'];?>','url':'http://yj.te168.cn/news','pic':'<?php echo base_url($new['images']);?>'}">
                            <span class="bds_more share_1" style="background: url(<?php echo base_url('static/image/pic1.png'); ?>) no-repeat 0 5px!important;"></span>
                        <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                         document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
                            </script>
                        </div>
                    </div> 
                </div>
        <?php endforeach; ?>
    </div>
    
     <div class="main_page">
    	<?php echo $page_html;?>
    </div>
<?php $this->load->view('common/common_footer'); ?>    