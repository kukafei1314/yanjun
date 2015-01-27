<?php $this->load->view('common/common_header'); ?>
<script src="<?php echo base_url('static/js/service.js');?>"></script>
	<div class="main_big_pic">
        <div id="pic">
            <ul>
                <li><img src="<?php echo base_url('static/image/join_image.png');?>" width=986 height=430/></li>
                <li><img src="<?php echo base_url('static/image/news_image.png');?>" width=986 height=430/></li>
                <div class="cl"></div>
            </ul>
        </div>
        <div id="main_tip">
            <a class="arrow_left" onclick="change(1)"></a>
            <a class="arrow_right" onclick="change(0)"></a>
        </div>
    </div>
    <div class="b_middle">
        <div class="b_form float">
            <form action="<?php echo 'servicechannel/add';?>" method="post">
                <div class="line">
                	<div class="float">
                        <p><label>公司/机构</label></p>
                        <input id="company0" name="company" type="text" size="38" class="input_s">
                        &nbsp;&nbsp;
                    </div>
                    <div class="float">
                        <p><label>电话</label></p>
                        <input id="phone0" name="phone" type="text" size="38" class="input_s">
                    </div>
                </div>
                <div class="line">
                	<div class="float">
                        <p><label>姓名/职务</label></p>
                        <input id="client_name0" name="client_name" type="text" size="38" class="input_s">
                        &nbsp;&nbsp;
                    </div>
                    <div class="float">
                        <p><label>邮箱</label></p>
                        <input id="email0" name="email" type="email" size="38" class="input_s">
                    </div>
                </div>
                <div class="line">
                    <p><label>工作地址</label></p>
                    <input id="address0" name="address" type="text" size="80" class="input_l">
                </div>
                <p><label>留言</label></p>
                <textarea class="t_area" name="message" cols="68" rows="5"></textarea>

				<div class="line">
				<div class="float">
                    <p><label>验证码</label></p>
                    <input type="text" id="checkin" name="check_num" class="input_s" placeholder="" >
				</div>
                <div class="float" style ="position:relative;left:20px;top:24px; background-color: green;" id="check_num" onClick="get_check_num()"></div>	
                </div>
				
                <div class="sr float">
                	<input onclick="return is_empty_right()" name="sub" type="submit" value="提交">
                </div>
                <div class="sr float">
                	<input name="reset" type="reset" value="重填">
                </div>
                <div class="cl"></div>    
            </form>   
        </div>
        
        <div class="m_text float" onclick="unhide(this)">
        	<p>常见问题</p>
            <div class="text_li">
			    <?php foreach ($pro as $pro): ?>
					<a href="servicechannel/businesspro#<?php echo $pro['id'];?>"><?php echo $pro['title'];?></a><br />
                <?php endforeach;?> 
        	</div>
        </div> 
              
        <div class="cl"></div>
    </div>
	
<?php $this->load->view('common/common_footer');?>