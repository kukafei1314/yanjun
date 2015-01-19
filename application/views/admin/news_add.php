<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑新闻页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>新闻管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 添加新闻</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                        	<form class="form-horizontal style-form" method="post" action="<?php echo base_url($form_url);?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">新闻标题</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="title" class="form-control" value="<?php echo $title;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">图片</label>
									<div class="col-sm-10">
										<?php if(!empty($images)) :?>
											<img src="<?php echo base_url($images);?>" width="80" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="pic" />
									</div>
									<div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">新闻内容</label>
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