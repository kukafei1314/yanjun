<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台新闻列表页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>业务通道管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 业务通道</h5></div>             
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
									<?php foreach ($servicechannel as $servicechannel): ?>
                                      <li <?php
										       switch(((int)$servicechannel['id'])%4){
													case 0: echo "class= \"list-primary list-news \"";break;
													case 1: echo "class= \"list-danger list-news \"";break;
													case 2: echo "class= \"list-success list-news \"";break;
													case 3: echo "class= \"list-warning list-news \"";break;
													default:echo "class= \"list-primary list-news \"";break;
											   }
										 ?>
										>
										  <div class="task-title">
										     
											  <div class="task-title-sp pull_left list_title">
                                              	<?php echo $servicechannel['company']; ?>
                                              </div>
											   <div class="task-title-sp pull_left list_title">
                                              	<?php echo $servicechannel['phone']; ?>
                                              </div>
											  <div class="task-title-sp pull_left list_title">
                                              	<?php echo $servicechannel['client_name']; ?>
                                              </div>
											  <div class="task-title-sp pull_left list_title">
                                              	<?php echo $servicechannel['email']; ?>
                                              </div>
											  <div class="task-title-sp pull_left list_title">
                                              	<?php echo $servicechannel['address']; ?>
                                              </div>
											  <div class="task-title-sp pull_left list_title">
											     <?php $str=substr($servicechannel['message'],0,9);
												        echo($str);?>
											  </div>
											  <div class="task-title-sp pull_left list_time">
                                              	  发布时间：&nbsp;<?php echo date('Y-m-d',$servicechannel['date']); ?>
                                              </div>
                                              <div class="pull-right hidden-phone">
											      <a href="<?php echo base_url('admin/servicechannel/service?id='.$servicechannel['id'].'&p='.$p);?>">
                                                        <button class="btn btn-success btn-xs fa fa-book"></button>
												  </a>
                                                  <a href="<?php echo base_url('admin/servicechannel/edit_v?id='.$servicechannel['id'].'&p='.$p);?>">
                                                  		<button class="btn btn-primary btn-xs fa fa-pencil"></button> 
                                                  </a>
                                                  <a href="<?php echo base_url('admin/servicechannel/del?id='.$servicechannel['id'].'&p='.$p);?>">   
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