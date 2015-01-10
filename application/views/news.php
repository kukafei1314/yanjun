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
        	<div class="news_title">设计的情怀——京、冀、豫三地设计师主题沙龙</div>
            <div class="news_content">
            雾霾，是雾和霾的组合词。雾霾常见于城市。中国不少地区将雾并入霾一起作为灾害性天气现象进行预警预报，统称为“雾霾天气”。
雾霾是特定气候条件与人类活动相互作用的结果。高密度人口的经济及社会活动必然会排放大量细颗粒物（PM 2.5），一旦排放超过大气循环能力和承载度，细颗粒物浓度将持续积聚，此时如果受静稳天气等影响，极易出现大范围的雾霾。[1] 
2013年，“雾霾”成为年度关键词。这一年的1月，4次雾霾过程笼罩30个省（区、市），在北京，仅有5天不是雾霾天。有报告显示，中国最大的500个城市中，只有不到1%的城市达到世界卫生组织推荐的空气质量标准，与此<p>同时，世界上污染最严重的10个城市有7个在中国。</p>
			<img src="<?php echo base_url('static/image/news_detail.png');?>" width=528 height=334/>
            <img src="<?php echo base_url('static/image/news_detail.png');?>" width=528 height=334/>
            <img src="<?php echo base_url('static/image/news_detail.png');?>" width=528 height=334/>
            </div>
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