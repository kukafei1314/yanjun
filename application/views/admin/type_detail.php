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
                            <a class="btn btn-success btn-sm add_news" href="<?php echo $_SERVER['HTTP_REFERER'];?>">返回</a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body" style="margin:0 20%; padding-bottom:0px">
                        	<div class="gd_title">
                            	<?php $row = $text[0];
									echo $row['name'];?>
                            </div>
                        </div>
                        <hr style="border:#63F solid thin" width="70%" size="1" />
                        <div class="panel-body" style="margin:0 20%; padding-top:0px; padding-bottom:25px">
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