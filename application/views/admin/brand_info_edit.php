<?php echo $this->load->view('admin/common/admin_header'); ?>
<!--   标语管理页面 -->
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>首页品牌介绍</h3>
            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 品牌介绍列表</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                  	<li>
										  <div class="task-title">
                                              <div class="task-title-sp pull_left" style="width:20%; line-height:48px;">
													<b>类别</b>	
                                              </div>
                                               <div class="task-title-sp pull_left" style="width:30%; line-height:48px;">
													<b>背景图片</b>
                                              </div>
                                              <div class="task-title-sp pull_left" style="width:30%;  line-height:48px;">
													<b>内容</b>
                                              </div>
                                              
                                     	  </div>
                                    </li>
                      	<?php foreach($brand as $row) {?>
                                <li <?php switch(((int)$row['bid'])%4){
                                            case 0: echo "class= \"list-primary list-news \"";break;
                                            case 1: echo "class= \"list-danger list-news \"";break;
                                            case 2: echo "class= \"list-success list-news \"";break;
                                            case 3: echo "class= \"list-warning list-news \"";break;
                                            default:echo "class= \"list-primary list-news \"";break;
                                         }?> style="height:auto; line-height:20px">
                                    <div class="task-title">
                                        <div class="task-title-sp pull_left" style="width:20%; height:auto; padding-top:20px"><?php echo $row['name'];?></div>
                                    	<div class="task-title-sp pull_left" style="width:30%; height:auto; padding-top:10px">
											<img src="<?php echo base_url($row['pic']);?>" width="60%"/>
                                        </div>
                                        <div class="task-title-sp pull_left" style="width:30%; height:auto; padding-top:10px"><?php echo $row['content'];?></div>
                                        <div class="pull-right hidden-phone" style="padding-top:20px">
                                            <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/t_edit?&id='.$row['id']);?>"'></button>
                                            
                                        </div>
                                    </div>
                                  </li>
                          <?php }?>
                             
                        </ul>
                    </div>
                                                        
                 </div>
               </section>
             </div>
           </div>

	   </section>
    </section>
    
<?php echo $this->load->view('admin/common/admin_footer'); ?>