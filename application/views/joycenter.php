<?php $this->load->view('common/common_header');?>
<div id = "joycenterContainer">
	<div class="pic_div">
        <div id="pic">
            <ul>
                <li><img src="<?php echo base_url('static/image/joycentertop.png');?>" width=986 height=432/></li>
                <li><img src="<?php echo base_url('static/image/joycentertop.png');?>" width=986 height=432/></li>
            </ul>
        </div>
        <div id="joycenter">
            <a class="pic_left" onclick="change(1)"></a>
            <a class="pic_right" onclick="change(0)"></a>
        </div>
        <div class="cl"></div>
    </div>	
	<div class="joyLeft">
		<div class="leftTop">
			<div class="leftTopTitle">分享中心</div>
            <div class="leftTopContent">梦想与忠诚，团结与自由， <br/>恰当的诠释了晏钧团队的风格和状态。</div>
		</div>
        <div class="leftMiddleContent">
		<?php foreach($result as $row) {?>
        	<div class="middleTitle"><?php echo $row['title'];?></div>
            <div class="middleIntro">
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
<div class="centerFoot">
    	more
</div>

<?php $this->load->view('common/common_footer');?>

