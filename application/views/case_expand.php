<?php $this->load->view('common/common_header'); ?>
 
    <div class="div_1">
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hr float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <!--<div class="clc"></div>-->
    </div>
    <div>
        <div class="case_left float">
            <div>
                <div class="case_t float">
                    <div class="text_title"><?php echo $case['name'];?></div>
                    <div class="text_st"><span class= "text_st_project"><?php echo $case['project'];?>/</span> <span class = "text_st_date"><?php echo $case['date'];?></span></div>
                    <div class="text"></div>
                </div>
                <div class="t_con float">
                    <li><a href="#">Top↑</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="<?php echo base_url('service');?>">Sevice</a></li>
                    <li><a href="<?php echo base_url('service');?>">About Us</a></li>
                </div>
                <div class="clc"></div>
            </div>

				<div class="case_img"><?php echo $case['content'];?></div>

        </div>
        <div class="case_right float">
			<?php foreach( $cases as $item): ?>
			<!--<a href="<?php// echo base_url('cases_expand?id='.$item['id']);?>"> -->
			<a class="case_left_expand" onclick="get_single_cases(<?php echo $item['id'];?>)">
			
			
			<div class="div_opa">
                <img src="<?php echo $item['logo'];?>" width='100%' height='100%'/><br/>
				<div class="case_opacity"></div>
                <div class="share share1">
                    <img class="pic1" src="<?php echo base_url('static/image/pic1.png');?>" width='22' height='22'/>
                    <div class="share_1">
                        <div class="qq_share">
                        <script type="text/javascript">
                                (function(){
                                    var p = {
                                    url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                                    desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                                    title:'<?php echo $item['name'];?>', /*分享标题(可选)*/
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
									//s.push(i + '=' + p[i]||'');
                                    }
                                    document.write(['<a class="qcShareQQDiv" href="http://connect.qq.com/widget/shareqq/index.html?',s.join('&'),'" 	target="_blank">分享到QQ</a>'].join(''));
                })();
                            </script>
                        </div>
                        <div class="weibo_share">
                            <wb:share-button appkey="4BD8Tl" addition="simple" type="button" size="big" width="63" height="26" pic="http://picapi.ooopic.com/00/87/68/91b1OOOPIC4e.jpg" title="<?php echo $item['name'];?>"></wb:share-button>
                        </div>
                    </div>
                </div>
               
            </div>
			</a>
			<?php endforeach?>

        <!--<div class="clc"></div>-->
	</div>
    <div class="main_page">
    	<?php echo $page_html;?>
    </div>
   
<?php $this->load->view('common/common_footer'); ?>