<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑案例页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>案例管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 添加案例</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                  <!--      	<form class="form-horizontal style-form" method="post" action="<?php //echo base_url('admin/cases/edit?id=' . $id.'&p='.$p);?>" enctype="multipart/form-data">  -->
                        	<form class="form-horizontal style-form" method="post" action= "<?php echo base_url('admin/cases/edit?id='.$id.'&p='.$p); ?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例名称</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  
	                              <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例项目</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="project" class="form-control" value="<?php echo $project;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>								  
								  
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Logo</label>
									<div class="col-sm-10">
										<?php if(isset($logo)) :?>
											<img src="<?php echo base_url($logo);?>" width="80" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="logopic" />
									</div>
									<div class="cl"></div>
                                  </div>
								  
								  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">图片</label>
									<div class="col-sm-10">
										<?php if(isset($images)) :?>
											<img src="<?php echo base_url($images);?>" width="80" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="pic" />
									</div>
									<div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例内容</label>
                                      <div class="col-sm-10">
                                          <script id="ue_content" name="ue_content" type="text/plain"><?php echo $content;?></script>
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