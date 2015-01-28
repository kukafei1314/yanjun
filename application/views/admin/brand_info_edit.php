<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑案例页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>首页品牌介绍</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i>&nbsp;&nbsp;<?php echo $brand['name'];?></h5></div>
	                        <a href="<?php echo base_url('admin/index/brand_info');?>">
	                        	<button type="submit" class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                  <!--      	<form class="form-horizontal style-form" method="post" action="<?php //echo base_url('admin/cases/edit?id=' . $id.'&p='.$p);?>" enctype="multipart/form-data">  -->
                        	<form class="form-horizontal style-form" method="post" action= "<?php echo base_url($form_url); ?>" enctype="multipart/form-data">
								  <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">背景图片</label>
									<div class="col-sm-10">
										<p class="give_notice">jpg图片规格：192*192！</p>
										<?php if(!empty($brand['pic'])) :?>
											<img src="<?php echo base_url($brand['pic']);?>" width="200" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="pic" />
									</div>
									<div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">案例简介</label>
                                      <div class="col-sm-10">
                                      	  <p class="give_notice">简介内容不超过120个字！</p>
                                          <textarea oninput="if(value.length>120) value=value.substr(0,120)" id="ue_abstract" name="ue_abstract" rows='5' cols='100'><?php echo $brand['content'];?></textarea>
                                          
                                      </div>
                                      <div class="cl"></div>
                                  </div> 
                                  <div class=" add-task-row page_html">
                                     <button onclick="return is_empty()" type="submit" class="btn btn-theme03 news_botton">提交</button>
                                     <button type="reset" class="btn btn-theme03 news_botton" onclick='location="<?php echo base_url('admin/index/brand_info_edit_v?bid='.$brand['bid']);?>"'>重置</button>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
				  <script type="text/javascript">
				
			    </script>
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    