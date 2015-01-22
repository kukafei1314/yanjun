<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台新闻列表页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>招聘职位</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 职位列表</h5></div>
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/join_us/add_job');?>">添加职位</a>
                            <div class="cl"></div>
	                 	</div>
                      <div class="panel-body">
                        <?php foreach ($departments as $department):?>
                        <div class="department_name"><?php echo $department['name']?></div>
                          <div class="task-content">
                             <ul id="sortable" class="task-list">
                                <li>
                                    <?php foreach($jobs as $job):?>
                                        <?php if($job['did'] == $department['tid']):?>
                                           <div class="job_title">
                                              <div class="pull_left job_name">
                                              	  职位名称：<?php echo $job['job_name'];?>
                                              </div>
                                              <div class="pull_left job_content">
                                              	  职位描述：<?php echo $job['content'];?>
                                              </div>
                                              <div class="pull_left job_addtime">
                                              	  添加时间：<?php echo date("Y-m-d",$job['add_time']);?>
                                              </div>
                                              <div class="pull-right job_tool">
                                                  <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  <a href="<?php echo base_url('admin/join_us/edit_job').'?id='.$job['id'];?>">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a href="<?php echo base_url('admin/join_us/delete_job').'?id='.$job['id'];?>">   
                                                  		<button class="btn btn-danger btn-xs fa fa-trash-o"></button> 
                                                  </a>
                                              </div>
                                              <div class="cl"></div>
                                          </div>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </li>								             
                              </ul>
                          </div>
                          <?php endforeach;?>
                      </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    