<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
                   	后台类别管理页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo ($type == 1)?  '大图' : '部门';?>类别管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo ($type == 1)?  '大图类别列表' : '部门类别列表';?></h5></div>
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/type/add?type='.$type);?>">添加类别</a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                      			  <?php foreach($types as $row) {?>
                                        	<li <?php switch(((int)$row['tid'])%4){
														case 0: echo "class= \"list-primary list-news \"";break;
														case 1: echo "class= \"list-danger list-news \"";break;
														case 2: echo "class= \"list-success list-news \"";break;
														case 3: echo "class= \"list-warning list-news \"";break;
														default:echo "class= \"list-primary list-news \"";break;
											  		 }?> >
                                            	<div class="task-title">
                                                	<span class="task-title-sp"><?php echo $row['name'];?></span>
                                                
                                                    <div class="pull-right hidden-phone">
                                                       <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/type/edit?type='.$type.'&tid='.$row['tid']);?>"'></button>
                                                        <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location=delcfm()? "<?php echo base_url('admin/type/delete?type='.$type.'&tid='.$row['tid']);?>" :""'></button>
                                                     </div>
                                                </div>
                                              </li>
                                  <?php }?>
                        		</ul>
                    		</div>
                  
                            <div class=" add-task-row page_html">
                                <p><?php echo "$link"; ?></p>
                            </div>
                    
                	   </div>
             	  </section>
             </div>
           </div>

	   </section>
    </section>
            
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    