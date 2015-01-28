<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑新闻页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>业务通道管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 编辑业务通道</h5></div>
							<a href="<?php echo base_url('admin/servicechannel?p='.$p);?>">
	                        	<button type="submit" class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                        	<form class="form-horizontal style-form" method="post" action="<?php echo base_url($form_url);?>" enctype="multipart/form-data">							
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">公司/机构</label>
                                      <div class="col-sm-10">
                                          <input id="company0" type="text" name="company" class="form-control" value="<?php echo $company;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">电话</label>
                                      <div class="col-sm-10">
                                          <input id="phone0" type="text" name="phone" class="form-control" value="<?php echo $phone;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">姓名/职务</label>
                                      <div class="col-sm-10">
                                          <input id="client_name0" type="text" name="client_name" class="form-control" value="<?php echo $client_name;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">邮箱</label>
                                      <div class="col-sm-10">
                                          <input id="email0" type="email" name="email" class="form-control" value="<?php echo $email;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">工作地址</label>
                                      <div class="col-sm-10">
                                          <input id="address0" type="text" name="address" class="form-control" value="<?php echo $address;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>							  
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">留言</label>
                                      <div class="col-sm-10">
                                          <script id="ue_content" name="ue_content" type="text/plain"><?php echo $message;?></script>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                 
                                  <div class=" add-task-row page_html">
                                     <button onclick="return is_empty()" type="submit" class="btn btn-theme03 news_botton">提交</button>
									  <?php if (empty($name)):?>
                                     <button type="reset" class="btn btn-theme03 news_botton" onclick='window.location.reload();'>重置</button>
                                     <?php else:?>
                                     <button type="reset" class="btn btn-theme03 news_botton" onclick='location="<?php echo base_url('servicechannel/edit_v?id='.$id.'&p='.$p);?>"'>重置</button>
                                  	 <?php endif;?>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
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
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
       <script type="text/javascript">
            var ue = UE.getEditor('ue_content');
        </script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    