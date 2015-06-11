<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目管理页面
*********************************************************************************************************************************************************** -->
<!--main content start-->
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>问题列表</h3>
            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i>问题列表</h5></div>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                      	
							 <?php foreach($question as $row) :?>
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
                                            <a class="btn btn-primary btn-xs fa fa-pencil" href='<?php echo base_url('admin/join_us/question_join_edit?id='.$row['id']);?>' title="编辑"></a>
                                         </div>
                                    </div>
                                  </li>  
                        <?php endforeach;?>
                        </ul>
                    </div>   
                 </div>
               </section>
             </div>
           </div>

	   </section>
    </section>
    
<?php echo $this->load->view('admin/common/admin_footer'); ?>
                                            