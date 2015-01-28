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
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/join_us/add_employee');?>">添加员工</a>
                            <div class="cl"></div>
	                 	</div>
                      <div class="panel-body">
                        <?php //foreach ($departments as $department):?>
                        <!--<div class="department_name"><?php //echo $department['name']?></div> -->
                          <div class="task-content">
                             <ul id="sortable" class="task-list">
                                <li>
                                    <?php foreach($employees as $employee):?>
                                        <?php //if($employee['did'] == $department['tid']):?>
                                           <div class="employee_title">
                                              <div class=" pull_left employee_pic">
	                                              <?php if(!empty($employee['pic'])) :?>
												  	  <img src="<?php echo base_url($employee['pic']);?>" width="80" height="80"/>
												  <?php else:?>
												  	  <img src=" " width="80" height="80"/>
											      <?php endif;?>
                                              </div>
                                              <div class="pull_left employee_name">
                                              	  姓名：<?php echo $employee['employee_name']; ?>
                                              </div>
                                              <div class="pull_left employee_id">
                                              	  工号：<?php echo $employee['employee_id']; ?>
                                              </div>
                                              <div class="pull_left employee_motto" style = 'width:20%;'>
                                              	  座右铭：<?php echo $employee['motto']; ?>
                                              </div>
                                              <div class="pull_left employee_motto" style = 'width:10%;'>
                                              	  所属部门：<?php echo $employee['position']; ?>
                                              </div>
                                              <div class="pull-right employee_tool">
                                              	  <a href="<?php echo base_url('admin/join_us/employee_detail').'?id='.$employee['id'];?>" title="详情">
                                                        <button class="btn btn-success btn-xs fa fa-book"></button>
                                                  </a>
                                                  <a href="<?php echo base_url('admin/join_us/edit_employee').'?id='.$employee['id'];?>" title="编辑">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a onclick="return del_alert()" href="<?php echo base_url('admin/join_us/delete_employee').'?id='.$employee['id'];?>" title="删除">   
                                                  		<button class="btn btn-danger btn-xs fa fa-trash-o"></button> 
                                                  </a>
                                              </div>
                                              <div class="cl"></div>
                                          </div>
                                        <?php //endif;?>
                                    <?php endforeach;?>
                                </li>								             
                              </ul>
                          </div>
                          <?php// endforeach;?>
                      </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
 	  
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    