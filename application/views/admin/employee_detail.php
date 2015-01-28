<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑新闻页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>员工介绍</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 员工详细资料</h5></div>
	                        <a href="<?php echo base_url('admin/join_us/employee?p='.$p);?>">
	                        	<button class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">                        								 
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">姓名</label>
                                      <div class="col-sm-10">
                                          <?php echo $job['employee_name'];?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">工号</label>
                                      <div class="col-sm-10">
                                          <?php echo $employee['employee_id'];?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">部门</label>
                                      <div class="col-sm-10">
                                         <?php echo $department; ?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>	
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">照片</label>
                                      <div class="col-sm-10">
                                          <?php if(!empty($employee['pic'])) :?>
											<img src="<?php echo base_url($employee['pic']);?>" width="192" height="192" style="margin-top:10px;"/>
										  <?php endif;?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">签名照</label>
                                      <div class="col-sm-10">
                                         <?php if(!empty($employee['signature'])) :?>
										  	  <img src="<?php echo base_url($employee['signature']);?>" width="588" height="385"/>
										  <?php else:?>
										  	  <img src=" " width="588" height="385"/>
									      <?php endif;?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>						  
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">座右铭</label>
                                      <div class="col-sm-10">
                                          <?php echo $employee['motto'];?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>   