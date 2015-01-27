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
        
    </div>
    <div class="join_mid">
    <div class="join_left">
    	<div class="left_top">
        	<div class="left_top_title"><?php echo $topic['type']; ?></div>
            <div class="left_top_content"><?php echo $topic['content'] ?></div>
        </div>
        <div class="left_middle">
        	<div class="middle_title"><?php echo $depart['name']; ?></div>
            <div class="middle_intro">
            	<?php echo $depart['content']; ?>
            </div>
			
			
			<?php foreach ($employ as $employ): ?>
            <div class="people_intro">
            	<div class="intro_pic">
                	<img src="<?php echo base_url($employ['pic']);?>" width=240 height=240/>
                </div>
                <div class="intro_content">
                	<div class="intro_logo">
                    	<img src="<?php echo base_url($employ['signature']);?>"/>
                    </div>
                    <div class="intro_word"><?php echo $employ['motto']; ?>
                    </div>
                </div>
                
            </div>
            <?php endforeach;?> 
				
        </div>
    </div>
    <div class="join_right">
    	<div class="right_top">
        	<div class="right_top_title">招聘职位</div>
            <div class="right_top_content">人力资源<br/> HR E-mail：<?php echo $depart['e_mail']; ?></div>
        </div>
		
		
		<?php foreach ($job as $job): ?>
        <div class="right_middle" onclick="hideup(this)">
        	<div class="right_middle_title"><?php echo $job['job_name']; ?></div>
            <div class="right_middle_content">
            	<?php echo $job['content']; ?>
            </div> 
        </div>
		 <?php endforeach;?> 
		
		
		
        
       </div>
       
      </div>
    </div>
    <div class="main_page">
    	more
    </div>

<?php $this->load->view('common/common_footer');?>