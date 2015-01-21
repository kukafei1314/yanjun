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
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 查看业务通道详情</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">                        								 
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">公司/机构</label>
                                      <div class="col-sm-10">
                                          <?php echo $company;?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">电话</label>
                                      <div class="col-sm-10">
                                          <?php echo $phone;?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">姓名/职务</label>
                                      <div class="col-sm-10">
                                          <?php echo $client_name;?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">邮箱</label>
                                      <div class="col-sm-10">
                                         <?php echo $email;?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">工作地址</label>
                                      <div class="col-sm-10">
                                         <?php echo $address;?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>							  
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">留言</label>
                                      <div class="col-sm-10">
                                          <?php echo $message;?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                 
                                 
                              </form>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    