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
                          <div class="task-content">
                             <ul id="sortable" class="task-list">
                             	<li>
									<div class="task-title">
                                    	<div class="task-title-sp pull_left list_title" style="width:15%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
											<b>所属部门</b>	
                                        </div>
                                        <div class="task-title-sp pull_left list_title" style="width:15%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
											<b>职位名称</b>
                                        </div>
									    <div class=" pull_left list_title" style="width:35%; line-height:48px;">
											<b>职位描述</b>
                                        </div>
                                        <div class=" pull_left list_title" style="width:15%; line-height:48px;">
											<b>添加时间</b>
                                        </div>
                                        <div class="pull-right hidden-phone" style="line-height:48px; margin-right:4%;">
											<b>操作</b>
                                        </div>
                                        <div class="cl"></div>
                                	</div>
                                </li>
                                <?php foreach($jobs as $job):?>
                                <li>
                                    
                                           <div class="job_title">
                                              <div class="pull_left job_name">
                                              	  <?php echo $job['department'];?>
                                              </div>
                                              <div class="pull_left job_name">
                                              	  <?php echo $job['job_name'];?>
                                              </div>
                                              <div class="pull_left job_content">
                                              	  <?php echo $job['content'];?>
                                              </div>
                                              <div class="pull_left job_addtime">
                                              	  <?php echo date("Y-m-d",$job['add_time']);?>
                                              </div>
                                              <div class="pull-right job_tool">
                                              	  <a href="<?php echo base_url('admin/join_us/detail_job?id='.$job['id'].'&p='.$p);?>"  title="详情">
                                                  		<button class="btn btn-success btn-xs fa fa-book"></button>
                                                  </a>
                                                  <a href="<?php echo base_url('admin/join_us/edit_job?id='.$job['id'].'&p='.$p);?>"  title="编辑">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a onclick="return del_alert()" href="<?php echo base_url('admin/join_us/delete_job?id='.$job['id'].'&p='.$p);?>" title="删除">   
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