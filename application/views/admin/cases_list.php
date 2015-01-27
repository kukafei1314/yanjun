<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台新闻列表页面
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
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 案例列表</h5></div>
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/cases/add_v');?>">添加案例</a>
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
								  

								     <li>
										  <div class="task-title">
                                              <div class="task-title-sp pull_left list_title" style="width:10%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
													<b>名称</b>	
                                              </div>
                                              <div class="task-title-sp pull_left list_title" style="width:10%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; margin-left:5%; line-height:48px;">
													<b>项目</b>
                                              </div>
											  <div class=" pull_left list_title" style="width:15%; margin-left:5%; line-height:48px;">
													<b>小图</b>
                                              </div>
                                              <div class=" pull_left list_title" style="width:15%; margin-left:5%; line-height:48px;">
													<b>大图</b>
                                              </div>
                                              <div class="task-title-sp pull_left list_time" style="line-height:48px; margin-left:5%;">
													<b>日期</b>
                                              </div>
                                              <div class="pull-right hidden-phone" style="line-height:48px; margin-right:4%;">
													<b>操作</b>
                                              </div>
                                              <div class="cl"></div>
                                          </div>
                                      </li>
								  
									<?php foreach ($cases as $cases): ?>
                                      <li <?php
										       switch(((int)$cases['id'])%4){
													case 0: echo "class= \"list-primary list-cases \"";break;
													case 1: echo "class= \"list-danger list-cases \"";break;
													case 2: echo "class= \"list-success list-cases \"";break;
													case 3: echo "class= \"list-warning list-cases \"";break;
													default:echo "class= \"list-primary list-cases \"";break;
											   }
										 ?>
										>
										  <div class="task-title">
                                              <div class="task-title-sp pull_left list_title" style="width:10%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
                                              	<?php
														if(!empty($cases['name'])){
															echo $cases['name'];
														}else{
															echo '空';
														} ?>
                                              </div>
                                              <div class="task-title-sp pull_left list_title" style="width:10%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; margin-left:5%; line-height:48px;">
                                              	<?php 
														if(!empty($cases['project'])){
															echo $cases['project'];
														}else{
															echo '空';
														} ?>
                                              </div>
											  <div class=" pull_left list_title" style="width:15%; margin-left:5%;">
	                                              <?php if(!empty($cases['logo'])) :?>
												  	  <img src="<?php echo base_url($cases['logo']);?>" width="80" height="48"/>
												  <?php else:?>
												  	  <img src=" " width="80" height="48"/>
											      <?php endif;?>
                                              </div>
                                              <div class=" pull_left list_title" style="width:15%; margin-left:5%;">
	                                              <?php if(!empty($cases['images'])) :?>
												  	  <img src="<?php echo base_url($cases['images']);?>" width="80" height="48"/>
												  <?php else:?>
												  	  <img src=" " width="80" height="48"/>
											      <?php endif;?>
                                              </div>
                                              <div class="task-title-sp pull_left list_time" style="line-height:48px; margin-left:5%;" >
                                              	  <?php echo date('Y-m-d',$cases['date']); ?>
                                              </div>
                                              <div class="pull-right hidden-phone" style="margin-top:16px;">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <a href="<?php echo base_url('admin/cases/edit_v?id='.$cases['id'].'&p='.$p);?>" title="编辑">
													<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a onclick="return del_alert()" href="<?php echo base_url('admin/cases/del?id='.$cases['id'].'&p='.$p);?>" title="删除">   
													<button class="btn btn-danger btn-xs fa fa-trash-o"></button> 
                                                  </a>
                                              </div>
                                              <div class="cl"></div>
                                          </div>
                                      </li>
									<?php endforeach;?>               
                                  </ul>
                              </div>
                              <div class=" add-task-row page_html">
                                  <?php echo $page_html;?>
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
	  <script type="text/javascript">
		function del_alert(){
			return confirm('删除操作不可恢复，确定删除么？');
		}
	  </script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    