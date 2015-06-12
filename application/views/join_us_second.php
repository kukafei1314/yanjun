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
        <input id="pic_num" type="hidden" value="<?php echo $imgs_num;?>"/>
        <div class="img_dream">Dream</div>
        <div class="img_creat">梦想，创造现实</div>
    </div>
   <div id="j2_m">
       <div class="join2_middle">
            <a href="<?php echo base_url('join_us/question_join?id=22');?>" class="join2_middle_block"><?php echo $questions[0]['title'];?></a>
            <a href="<?php echo base_url('join_us/question_join?id=23');?>" class="join2_middle_block1"><?php echo $questions[1]['title'];?></a>
            <a href="<?php echo base_url('join_us/question_join?id=25');?>" class="join2_middle_block1" style="margin-bottom:0;"><?php echo $questions[3]['title'];?></a>
       </div>
       <div class="join2_middle">
             <a href="<?php echo base_url('join_us/question_join?id=24');?>" class="join2_middle_block"><?php echo $questions[2]['title'];?></a> 
            <a href="<?php echo base_url('join_us/question_join?id=26');?>" class="join2_middle_block1"><?php echo $questions[4]['title'];?></a>
            <a href="<?php echo base_url('join_us/question_join?id=27');?>" class="join2_middle_email"><?php echo $questions[5]['title'];?><p class="email">HR E-mail：<?php echo $depart['e_mail']; ?></p></a>
       </div>
       <div class="join2_right">
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=14');?>">设计部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=15');?>">动画部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=16');?>">事业部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=17');?>">人事部</a>
            <a class="join2_middle_right" href="<?php echo base_url('join_us/department?did=18');?>">财务行政部</a>
            <a class="join2_middle_right" style="margin-bottom:0; height:116px;"></a>
       </div>
       
    </div>
   
</div>
<div class="main_page">
    more
</div>

<?php $this->load->view('common/common_footer');?>