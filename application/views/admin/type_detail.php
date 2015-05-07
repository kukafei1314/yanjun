<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目管理页面
*********************************************************************************************************************************************************** -->
<!--main content start-->
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>部门类别</h3>
            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 部门详情</h5></div>
                            <?php if (!empty($name)):?>
                            <a href="<?php echo base_url('admin/type?type='.$type.'&p='.$p);?>">
                            <?php else:?>
                            <a href="<?php echo base_url('admin/type?type='.$type);?>">
                            <?php endif;?>
	                        	<button class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                        	<div class="gd_title">
                            	<?php $row = $text[0];
									echo $row['name'];?>
                            </div>
                        </div>
                        <div class="panel-body" style="margin:0 5%; padding-top:0px; padding-bottom:25px">
                            <div class="gd_content">
                            	部门邮箱：<?php echo $row['e_mail'];?><br /><br />
								<div class="pull_left">部门简介：</div>
                                <div style="padding-left:70px"><?php echo $row['content'];?></div>
                            </div>
                        </div>
                    
                      </section>
                   </div>
            </div>
        </section>
   </section>
   
<?php echo $this->load->view('admin/common/admin_footer'); ?>