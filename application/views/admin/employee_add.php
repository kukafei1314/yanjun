<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑员工风采
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>员工管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 添加员工</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                        	<form class="form-horizontal style-form" method="post" action="<?php echo base_url($form_url);?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">员工姓名</label>
                                      <div class="col-sm-5">
                                          <input type="text" name="employee_name" class="form-control" value="">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">员工工号</label>
                                      <div class="col-sm-5">
                                           <input type="text" name="employee_id" class="form-control" value="">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">员工部门</label>
                                      <div class="col-sm-5">
                                           <select name= "employee_department">
                                               <?php foreach ($departments as $department):?>
                                                    <option value = "<?php echo $department['tid'];?>"><?php echo $department['name'];?></option>
                                               <?php endforeach;?>
                                           </select>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">员工照片</label>
                                      <div class="col-sm-10">
                                           <input type="file" name="pic" />
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <<label class="col-sm-2 col-sm-2 control-label">员工签名</label>
                                      <div class="col-sm-10">
                                           <input type="file" name="sign" />
                                      </div>
                                      <div class="cl"></div>
                                  </div>                                
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">座右铭</label>
                                      <div class="col-sm-10">
                                          <script id="ue_content" name="ue_content" type="text/plain"></script>
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

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    