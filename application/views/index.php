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
        <div class="main_block1">
            <p class="main_block_p1">品牌策略</p>
            <p>Brand</p>
            <p>Strategy</p>
            
            <div class="main_block-yellow">
                <p>品牌策略</p>
            </div>
            
            <div class="main_block-detail">
                <a href="#">“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。</a>
            </div>
            
        </div>
        <div class="main_block1">
        	<p class="main_block_p1">品牌创建</p>
            <p>Brand</p>
            <p>Establish</p>
            
            <div class="main_block-yellow">
        		<p>品牌创建</p>
            </div>
            
            <div class="main_block-detail">
        		<a href="http://www.baidu.com">“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。</a>
            </div>
        </div>
        <div class="main_block1">
        	<p class="main_block_p1">品牌升级</p>
            <p>Brand</p>
            <p>Update</p>
            
            <div class="main_block-yellow">
        		<p>品牌升级</p>
            </div>
            
            <div class="main_block-detail">
        		<a href="http://www.baidu.com">“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。</a>
            </div>
        </div>
        <div class="main_block1">
        	<p class="main_block_p1">品牌咨询</p>
            <p>Brand</p>
            <p>Consultation</p>
            
            <div class="main_block-yellow">
        		<p>品牌咨询</p>
            </div>
            
            <div class="main_block-detail">
        		<a href="http://www.baidu.com">“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。</a>
            </div>
        </div>
        <div class="main_block1" style="margin-right:0px;">
        	<p class="main_block_p1">品牌实现</p>
            <p>Brand</p>
            <p>Realization</p>
            
            <div class="main_block-yellow">
        		<p>品牌实现</p>
            </div>
            
            <div class="main_block-detail">
        		<a href="http://www.baidu.com">“0”起步创建品牌，从无到有贴身式为您提供品牌理念；品牌命名；品牌口号语；品牌形象；品牌传播等专业服务。</a>
            </div>
        </div>
        <!--<div class="cl"></div>-->
    </div>
    
    <div class="main_work">
    	<div class="main_work_title">
        	Work
        </div>
    <?php foreach($cases as $case): ?>
        <div class="main_work_pic">
        	<img src="<?php echo base_url($case['images']); ?>" width=588 height=385/>
            <div class="main_pic_mask"></div>
            <div class="main_work_detail">
            	<p>Client / <?php echo $case['name'];?> </p>
                <p>Project / <?php echo $case['project'];?> </p>
                <p>Time /  <?php echo date('Y.m.d',$case['date']); ?> </p>
                <div class="share_work">
                <img src="<?php echo base_url('static/image/pic1.png'); ?>"/>
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
    <?php endforeach; ?>
    </div>
    <div class="main_news">
    	<div class="main_news_title">
        	News
        </div>
        <?php foreach($news as $news): ?>
    	<div class="main_news_list">
            <div class="main_news_list_word"><?php echo $news['title']; ?></div>
            <div class="news_list_img">
                <img src="<?php echo base_url($news['images']);?>" width=200 height=190/><br />
				<div class="main_news_mask"></div>
                <div class="share share1">
                    <img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/><br />
					<div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $news['title']; ?>', /*分享标题(可选)*/
                                    summary:'', /*分享摘要(可选)*/
                                    pics:"<?php echo base_url($news['images']); ?>", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $news['title']; ?>" pic="<?php echo base_url($news['images']); ?>" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
     <div class="main_page">
    	<?php echo $page_html;?>
    </div>
<?php $this->load->view('common/common_footer'); ?>    