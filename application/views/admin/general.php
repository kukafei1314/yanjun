<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目管理页面
*********************************************************************************************************************************************************** -->
<!--main content start-->
	<?php 
		switch($type) {
						case 1: $g_t = '服务';
								break;
						case 2: $g_t = '我们';
								break; 
						case 3: $g_t = '分享中心';
								break;
						case 4: $g_t = '常见问题';
					};
	?>
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i><?php echo $g_t;?></h3>
            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo $g_t.'列表';?></h5></div>
                            <a class="btn btn-success btn-sm add_news" href="<?php echo base_url('admin/general/add_v?type='.$type);?>">添加内容</a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                      	<?php switch($type) {
								case 1: foreach($font as $row) {?>
                                        	<li <?php switch(((int)$row['id'])%4){
														case 0: echo "class= \"list-primary list-news \"";break;
														case 1: echo "class= \"list-danger list-news \"";break;
														case 2: echo "class= \"list-success list-news \"";break;
														case 3: echo "class= \"list-warning list-news \"";break;
														default:echo "class= \"list-primary list-news \"";break;
											  		 }?> >
                                            	<div class="task-title">
                                                	<span class="task-title-sp"><?php echo $row['service_area'];?></span>
                                                
                                                    <div class="pull-right hidden-phone">
                                                        <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/detail?type='.$type.'&id='.$row['id']);?>"'></button>
                                                        <div class="fa g_hid">详情</div>
                                                        <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                        <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location=delcfm()? "<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>" :""'></button>
                                                     </div>
                                                </div>
                                              </li>
                                      <?php }?>
                                      <?php break;?>
                                      
                         <?php case 2;
							   case 3;
							   case 4: foreach($font as $row) {?>
                                        	<li <?php switch(((int)$row['id'])%4){
														case 0: echo "class= \"list-primary list-news \"";break;
														case 1: echo "class= \"list-danger list-news \"";break;
														case 2: echo "class= \"list-success list-news \"";break;
														case 3: echo "class= \"list-warning list-news \"";break;
														default:echo "class= \"list-primary list-news \"";break;
											  		 }?> >
                                            	<div class="task-title">
                                                	<span class="task-title-sp"><?php echo $row['title'];?></span>
                                                
                                                    <div class="pull-right hidden-phone">
                                                        <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/detail?type='.$type.'&id='.$row['id']);?>"'></button>
                                                        <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                        <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location=delcfm()? "<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>" :""'></button>
                                                     </div>
                                                </div>
                                              </li>
                                      <?php }?>
                                      <?php break;?>
                                      
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
    
<?php echo $this->load->view('admin/common/admin_footer'); ?>
                                            