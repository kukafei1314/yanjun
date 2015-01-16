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
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/news/news_add');?>">添加新闻</a>
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <div class="task-title">
                                              <span class="task-title-sp">国际财经头条：美国宣布放宽对古巴贸易和旅游限制</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <div class="task-title">
                                              <span class="task-title-sp">雷军回应吐槽和炮轰：小米不够有钱不能任性</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <div class="task-title">
                                              <span class="task-title-sp">雷军回应吐槽和炮轰：小米不够有钱不能任性</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <div class="task-title">
                                              <span class="task-title-sp">国际财经头条：美国宣布放宽对古巴贸易和旅游限制</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <div class="task-title">
                                              <span class="task-title-sp">国际财经头条：美国宣布放宽对古巴贸易和旅游限制</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

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