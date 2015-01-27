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
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 查看新闻详情</h5></div>
	                        <a href="<?php echo base_url('admin/cases?p='.$p);?>">
	                        	<button type="submit" class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">                        								 
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                          <?php echo $news['name'];?>"
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                         <?php echo date('Y-m-d',$news['date']); ?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>	
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">大图</label>
                                      <div class="col-sm-10">
                                          <?php if(!empty($news['logo'])) :?>
											<img src="<?php echo base_url($news['logo']);?>" width="200" height="190" style="margin-top:10px;"/>
										  <?php endif;?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例海报</label>
                                      <div class="col-sm-10">
                                         <?php if(!empty($cases['images'])) :?>
										  	  <img src="<?php echo base_url($cases['images']);?>" width="588" height="385"/>
										  <?php else:?>
										  	  <img src=" " width="80" height="48"/>
									      <?php endif;?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>						  
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例简介</label>
                                      <div class="col-sm-10">
                                          <?php echo $cases['abstract'];?>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例内容</label>
                                      <div class="col-sm-10">
                                          <?php echo $cases['content'];?>
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