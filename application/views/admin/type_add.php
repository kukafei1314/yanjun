<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      后台主要内容页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo ($type == 1)?  '大图' : '部门';?>类别管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="<?php echo base_url($form_url); ?>" method="post">
							 <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label"><?php echo ($type == 1)? '类别名称' : '部门名称';?></label>
                                  <div class="col-sm-10">
                                      <input name="name" type="text" class="form-control" value="<?php echo $name;?>">
                                  </div>
                            </div>							
							<?php if ($type != 1):?>
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">部门介绍</label>
                              <div class="col-sm-10">
                                  <script id="ue_content" name="content" type="text/plain"><?php echo $content;?></script>
                              </div>
                            </div>
							<?php endif;?>
                            <div class=" add-task-row page_html">
                            	<button type="submit" class="btn btn-theme03 news_botton">提交</button>
                            </div>
                 	 </form>
 
                   </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    