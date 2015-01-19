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
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/news/add_v');?>">添加案例</a>
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
									<?php foreach ($news as $news): //这里开始循环输出?>   
                                      <li <?php
										       switch(((int)$news['id'])%4){
													case 0: echo "class= \"list-primary list-news \"";break;
													case 1: echo "class= \"list-danger list-news \"";break;
													case 2: echo "class= \"list-success list-news \"";break;
													case 3: echo "class= \"list-warning list-news \"";break;
													default:echo "class= \"list-primary list-news \"";break;//这里是增加list头上的彩条
											   }
										 ?>
										>
										  <div class="task-title">
                                              <div class="task-title-sp pull_left list_title">
                                              	<?php echo //$news['title'];//案例标题 ?>		
                                              </div>
                                              <div class=" pull_left list_title">
	                                              <?php if(!empty($news['images'])) //案例图片:?>
												  	  <img src="<?php echo base_url($news['images']);?>" width="80" height="48"/>
												  <?php else:?>
												  	  <img src=" " width="80" height="48"/>
											      <?php endif;?>
                                              </div>
                                              <div class="task-title-sp pull_left list_time">
                                              	  发布时间：&nbsp;<?php echo date('Y-m-d',$news['date']); ?>
                                              </div>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <a href="<?php //echo base_url('admin/news/edit_v?id='.$news['id'].'&p='.$p);?>">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a href="<?php //echo base_url('admin/news/del?id='.$news['id'].'&p='.$p);?>">   
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

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    