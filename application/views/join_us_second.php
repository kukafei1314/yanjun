<?php $this->load->view('common/common_header');?>

<div id="news_middle">
	<div class="pic_div">
        <div id="pic">
            <ul>
            <?php foreach($imgs as $img): ?>
                <li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            <?php endforeach; ?>
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
            <a href="<?php echo base_url('service');?>" class="join2_middle_block1">理想与信念</a>
            <a href="<?php echo base_url('service');?>" class="join2_middle_block">实习计划 <p class="email"> 111@yanjun.net</p></a>
            <a href="<?php echo base_url('service');?>" class="join2_middle_block1" style="margin-bottom:0;">实习计划</a>
       </div>
       <div class="join2_middle">
            <a href="<?php echo base_url('service');?>" class="join2_middle_block">我们的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br> 理想与信念</a>
            <a href="<?php echo base_url('service');?>" class="join2_middle_block">我们的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br> 理想与信念</a>
            <a href="<?php echo base_url('service');?>" class="join2_middle_email">请投简历<p class="email">HR E-mail：<?php echo $depart['e_mail']; ?></p></a>
       </div>
       <div class="join2_right">
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=14');?>">设计部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=15');?>">动画部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=16');?>">事业部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=17');?>">人事部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=18');?>">财务行政部</a>
            <a class="join2_middle_right" style="margin-bottom:0;"></a>
       </div>
       
    </div>
   
</div>
<div class="main_page">
    more
</div>

<?php $this->load->view('common/common_footer');?>