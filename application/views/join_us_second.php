<?php $this->load->view('common/common_header');?>

<div id="news_middle">
	<div class="pic_div">
        <div id="pic">
            <ul>
                <li><img src="<?php echo base_url('static/image/join2_image.png');?>" width=986 height=432/></li>
                <li><img src="<?php echo base_url('static/image/join2_image.png');?>" width=986 height=432/></li>
            </ul>
        </div>
        <div id="tip">
            <a class="pic_left" onclick="change(1)"></a>
            <a class="pic_right" onclick="change(0)"></a>
        </div>
        <div class="img_dream">Dream</div>
        <div class="img_creat">梦想，创造现实</div>
        
    </div>
   <div id="j2_m">
       <div class="join2_middle">
            <a class="join2_middle_block">为什么选择 晏钧设计</a>
            <a class="join2_middle_block">如何与团队 一起工作</a>
            <a class="join2_middle_block1" style="margin-bottom:0;">实习计划</a>
       </div>
       <div class="join2_middle">
            <a class="join2_middle_block1">加入团队</a>
            <a class="join2_middle_block1">应聘帮助</a>
            <a class="join2_middle_email">请投简历<p class="email">HR E-mail：555@yanjun.net</p></a>
       </div>
       <div class="join2_right">
            <a class="join2_middle_right">设计部</a>
            <a class="join2_middle_right">动画部</a>
            <a class="join2_middle_right">事业部</a>
            <a class="join2_middle_right">人事部</a>
            <a class="join2_middle_right">财务行政部</a>
            <a class="join2_middle_right" style="margin-bottom:0;"></a>
       </div>
       
    </div>
   
</div>
<div class="main_page">
    more
</div>

<?php $this->load->view('common/common_footer');?>