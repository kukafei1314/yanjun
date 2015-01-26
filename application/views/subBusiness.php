<?php $this->load->view('common/common_header'); ?>

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
                <div class="sr float">
                	<input onclick="return is_empty()" name="sub" type="submit" value="提交">
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
	<script type="text/javascript">
				  function is_empty(){
					var company = document.getElementById('company0').value;
					var phone = document.getElementById('phone0').value;
					var client_name = document.getElementById('client_name0').value;
					var email = document.getElementById('email0').value;
					var address = document.getElementById('address0').value;
					if(company ==""){
						alert("公司/机构不能为空！");
						return false;
					}else if(phone ==""){
						alert("电话不能为空！");
						return false;
					}else if(client_name ==""){
						alert("姓名/职务不能为空！");
						return false;
					}else if(email ==""){
						alert("邮箱不能为空！");
						return false;
					}else if(address ==""){
						alert("工作地址不能为空！");
						return false;
					}else {
						return ture;
					}					
				 }
			      </script>

<?php $this->load->view('common/common_footer');?>