<?php $this->load->view('common/common_header');?>
<div id = "joycenterContainer">
	<div class="pic_div">
        <div id="pic">
            <ul>
            <?php foreach($imgs as $img): ?>
                <li><img src="<?php echo base_url($img['path']);?>" width=986 height=410/></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div id="joycenter">
            <a class="pic_left1" onclick="change(1)"></a>
            <a class="pic_right1" onclick="change(0)"></a>
        </div> 
    </div>	
    <input id="pic_num" type="hidden" value="<?php echo $imgs_num;?>"/>
	<div class="joyLeft">
        <div class="share_left">
        	<div id="joy_title" class="share_title"><?php echo $question['title'];?></div>
            <div id="joy_content" class="share_content">
            	<?php echo $question['content'];?>
            </div>
        </div>
	</div>
	<div class="joyRight">
	<?php foreach($list as $row) {?>
		<a class="rightDiv" href="<?php echo base_url('join_us/question_join?id='.$row['id']);?>">
			<div class="rightDivTitle"><?php echo $row['title'];?></div>
		</a>
	<?php }?>
	</div>
    <div class="cl"></div>
</div>

<?php $this->load->view('common/common_footer');?>

