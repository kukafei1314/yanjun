<?php $this->load->view('common/common_header'); ?>

	<div id="newsecond">
        <div class="pic_div">
        	<div id="pic">
                <ul>
                    <li><img src="<?php echo base_url('static/image/news_image.png');?>" width=986 height=432/></li>
                    <li><img src="<?php echo base_url('static/image/news_image.png');?>" width=986 height=432/></li>
                </ul>
            </div>
            <div id="tip">
                <a class="pic_left" onclick="change(1)"></a>
                <a class="pic_right" onclick="change(0)"></a>
            </div>
        </div>
        <div id="news_middle">
        <div class="news_left">
        <?php foreach($result as $row) {?>
        	<div class="news_title"><?php echo $row['title'];?></div>
            <div class="news_content">
            	<?php echo $row['content'];?>
            </div>
        <?php }?>
        </div>
        <div class="news_right">
        	<div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"<?php echo base_url('static/image/news_list.png');?>", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="<?php echo base_url('static/image/news_list.png');?>"></wb:share-button>
                        </div>
                        <div class="cl"></div>
                    </div>
                </div>
                <div class="cl"></div>
            </div>
            <div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div>
            <div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div><div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div><div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div><div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                         <div class="cl"></div>
                    </div>
                </div>
                <div class="cl"></div>
            </div>
            <div class="news_list">
				<div class="news_list_word">
                	澳大利亚大事来中国啦啦啦啦啦啦阿里啦啦啦啦啦啦啦啦啦啦了
                </div>
                <div class="news_list_img">
                	<img src="<?php echo base_url('static/image/news_list.png');?>" width=200 height=190/>
                </div>
                <a class="fade" href="http://www.baidu.com"></a>
                <div class="share">
                	<img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width=22 height=22/>
                    <div class="share_1">
                        <div class="qq_share">
                            <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $title;?>', /*分享标题(可选)*/
                                    summary:'hahahahah', /*分享摘要(可选)*/
                                    pics:"http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg", /*分享图片(可选)*/
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
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" title="<?php echo $title;?>" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" width="63" height="26"></wb:share-button>
                        </div>
                    </div>
                </div>
                <div class="cl"></div>
            </div>
        </div>
        <div class="cl"></div>
        </div>
    </div>
    
<?php $this->load->view('common/common_footer'); ?> 