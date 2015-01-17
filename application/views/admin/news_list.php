<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台新闻列表页面
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
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 新闻列表</h5></div>
                            <a class="btn btn-success btn-sm add_news" href="index.php?d=admin&c=news&m=add_v">添加新闻</a>
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
									<?php foreach ($news as $news): ?>
                                      <li <?php  $a=6;
										       switch(((int)$news['id'])%$a){
													case 1: echo "class= \"list-primary  \"";break;
													case 2: echo "class= \"list-danger \"";break;
													case 3: echo "class= \"list-success \"";break;
													case 4: echo "class= \"list-warning \"";break;
													case 5: echo "class= \"list-info \"";break;
													default:echo "class= \"list-primary \"";break;
											   }
										 ?>
										>
										  <div class="task-title">
                                              <span class="task-title-sp"><?php echo $news['title']; ?></span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button> <a href="<?php echo base_url('admin/news/edit_v?id='.$news['id']);?>"><input type="button"></input></a>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"  ?>"></button> <input type=button onclick="window.location.href('<?php echo base_url('admin/news/del?id='.$news['id']);?>')">
                                              </div>
                                          </div>
                                      </li>
									<?php endforeach;?>               
                                  </ul>
                              </div>
                              <div class=" add-task-row page_html">
                                  显示页码
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    