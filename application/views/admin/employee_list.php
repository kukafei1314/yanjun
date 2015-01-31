<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台新闻列表页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>员工介绍</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 员工列表</h5></div>
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/join_us/add_employee?p='.$p);?>">添加员工</a>
                            <div class="cl"></div>
	                 	</div>
                      <div class="panel-body">
                        <?php //foreach ($departments as $department):?>
                        <!--<div class="department_name"><?php //echo $department['name']?></div> -->
                          <div class="task-content">
                             <ul id="sortable" class="task-list">
							 	<li>
									<div class="task-title">
                                    	<div class="task-title-sp pull_left list_title" style="width:15%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
											<b>照片</b>	
                                        </div>
                                        <div class="task-title-sp pull_left list_title" style="width:15%; overflow:hidden;text-overflow:ellipsis; white-space:nowrap; line-height:48px;">
											<b>姓名</b>
                                        </div>
									    <div class=" pull_left list_title" style="width:15%; line-height:48px;">
											<b>工号</b>
                                        </div>
                                        <div class=" pull_left list_title" style="width:20%; line-height:48px;">
											<b>座右铭</b>
                                        </div>
                                        <div class="task-title-sp pull_left list_time" style="width:10%;line-height:48px;">
											<b>所属部门</b>
                                        </div>
                                        <div class="pull-right hidden-phone" style="line-height:48px; margin-right:4%;">
											<b>操作</b>
                                        </div>
                                        <div class="cl"></div>
                                	</div>
                                </li>
                                <?php foreach($employees as $employee):?>
                                <li>
                                    
                                           <div class="employee_title">
                                              <div class=" pull_left employee_pic">
	                                              <?php if(!empty($employee['pic'])) :?>
												  	  <img src="<?php echo base_url($employee['pic']);?>" width="80" height="80"/>
												  <?php else:?>
												  	  <img src=" " width="80" height="80"/>
											      <?php endif;?>
                                              </div>
                                              <div class="pull_left employee_name">
                                              	  <?php echo $employee['employee_name']; ?>
                                              </div>
                                              <div class="pull_left employee_id">
                                              	  <?php echo $employee['employee_id']; ?>
                                              </div>
                                              <div class="pull_left employee_motto" style = 'width:20%;'>
                                              	  <?php echo $employee['motto']; ?>
                                              </div>
                                              <div class="pull_left employee_motto" style = 'width:10%;'>
                                              	  <?php echo $employee['position']; ?>
                                              </div>
                                              <div class="pull-right employee_tool">
                                              	  <a href="<?php echo base_url('admin/join_us/employee_detail?id='.$employee['id'].'$p='.$p);?>" title="详情">
                                                        <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  </a>
                                                  <a href="<?php echo base_url('admin/join_us/edit_employee?id='.$employee['id'].'&p='.$p);?>" title="编辑">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a onclick="return del_alert()" href="<?php echo base_url('admin/join_us/delete_employee?id='.$employee['id'].'&p='.$p);?>" title="删除">   
                                                  		<button class="btn btn-danger btn-xs fa fa-trash-o"></button> 
                                                  </a>
                                              </div>
                                              <div class="cl"></div>
                                          </div>
                                        <?php //endif;?>
                                    
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