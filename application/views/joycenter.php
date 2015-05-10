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
		<div class="leftTop">
        	<?php $topic = $res_topic[1];?>
            <div class="leftTopTitle"><?php echo $topic['type'];?></div>
            <div class="leftTopContent"><?php echo $topic['content'];?></div>
		</div>
       
        <div class="share_left">
        <?php foreach($result as $row) {?>
        	<div class="share_title"><?php echo $row['title'];?></div>
            <div class="share_content">
            	<?php echo $row['content'];?>
            </div>
        <?php }?>
        </div>
	</div>
	<div class="joyRight">
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
		<div class="rightDiv">
			<div class="rightDivTitle">图片</br>常用工具文字</div>
		</div>
	</div>
    <div class="cl"></div>
</div>
<div class="main_page">
    <?php echo $page_html;?>
</div>

<?php $this->load->view('common/common_footer');?>

