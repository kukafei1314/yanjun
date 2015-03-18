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
 
    <div class="main_block">
    <?php foreach($brand as $brand) :?>
    	<?php if($brand['bid']==5):?>
        <div class="main_block1" style="margin-right:0px;">
		<?php else:?>
        <div class="main_block1">
		<?php endif;?>
            <p class="main_block_p1"><?php echo $brand['name'];?></p>
            <p>Brand</p>
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
    <a href="<?php echo base_url('cases_expand?id='.$case['id'].'&p='.$p);?>">
        <div class="main_work_pic">
        	<img src="<?php echo base_url($case['images']); ?>" width=588 height=385/>
            <div class="main_pic_mask"></div>
            <div class="main_work_detail">
            	<p>Client / <?php echo $case['name'];?> </p>
                <p>Project / <?php echo $case['project'];?> </p>
                <p>Time /  <?php echo $case['date']; ?> </p>
                <div class="share_work">
                <img style="margin-left:30px" src="<?php echo base_url('static/image/pic1.png'); ?>"/>
                <div class="share_2">
                    <div class="qq_share">
                        <script type="text/javascript">
                            (function(){
                                var p = {
                                url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                title:'<?php echo $case['name'];?>', /*分享标题(可选)*/
                                summary:'', /*分享摘要(可选)*/
                                pics:"<?php echo base_url($case['images']); ?>", /*分享图片(可选)*/
                                flash: '', /*视频地址(可选)*/
                                site:'', /*分享来源(可选) 如：QQ分享*/
                                style:'102',
                                width:63,
                                height:24
                                };
                                var s = [];
                                for(var i in p){
                                s.push(i + '=' + encodeURIComponent(p[i]||''));
                                }
                                document.write(['<a class="qcShareQQDiv" href="http://connect.qq.com/widget/shareqq/index.html?',s.join('&'),'" 	target="_blank">分享到QQ</a>'].join(''));
            })();
                            </script>
						</div>
						<div class="weibo_share">
							<wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $case['name'];?>" pic="<?php echo base_url($case['images']); ?>" width="63" height="26"></wb:share-button>
						</div>
					</div>
				</div>
                
            </div>
        </div>
    </a>
    <?php endforeach; ?>
    </div>
    <div class="main_news">
    	<div class="main_news_title">
        	News
        </div>
        <?php foreach($news as $new): ?>
    	 <div class="news_list">
                    <div class="news_list_word2">
                        <?php echo $new['title'];?>
                    </div>
                    <div class="news_list_img">
                        <img src="<?php echo base_url($new['images']);?>" width=200 height=190/>
                    	<div class="fade" onclick='location="<?php echo base_url('about_us/to_news?id='.$new['id']);?>"'></div>
                    </div><br />
                    <div class="share">
                        <img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                        <div class="share_1">
                            <div class="qq_share">
                                <script type="text/javascript">
                                    (function(){
                                        var p = {
                                        url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                        desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                        title:"<?php echo $new['title'];?>", /*分享标题(可选)*/
                                        summary:"<?php echo mb_substr( strip_tags($new['content']),0,100,'utf-8');?>", /*分享摘要(可选)*/
                                        pics:"<?php echo base_url($new['images']);?>", /*分享图片(可选)*/
                                        site:'', /*分享来源(可选) 如：QQ分享*/
                                        style:'102',
                                        width:63,
                                        height:24
                                        };
                                        var s = [];
                                        for(var i in p){
                                        s.push(i + '=' + encodeURIComponent(p[i]||''));
                                        }
                                        document.write(['<a class="qcShareQQDiv" href="http://connect.qq.com/widget/shareqq/index.html?',s.join('&'),'" 	target="_blank">分享到QQ</a>'].join(''));
                    })();
                                </script>
                            </div>
                            <div class="weibo_share">
                                <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $new['title'];?>" pic="<?php echo base_url($new['images']);?>"></wb:share-button>
                            </div>
                            <div class="cl"></div>
                        </div>
                    </div> 
                </div>
        <?php endforeach; ?>
    </div>
    
     <div class="main_page">
    	<?php echo $page_html;?>
    </div>
<?php $this->load->view('common/common_footer'); ?>    