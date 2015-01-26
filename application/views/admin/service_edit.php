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
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                        	<form class="form-horizontal style-form" method="post" action="<?php echo base_url($form_url);?>" enctype="multipart/form-data">							
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">公司/机构</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="company" class="form-control" value="<?php echo $company;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">电话</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">姓名/职务</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="client_name" class="form-control" value="<?php echo $client_name;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">邮箱</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">工作地址</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="address" class="form-control" value="<?php echo $address;?>">
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
                                     <button type="submit" class="btn btn-theme03 news_botton">提交</button>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
       <script type="text/javascript">
            var ue = UE.getEditor('ue_content');
        </script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    