<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目管理页面
*********************************************************************************************************************************************************** -->
<!--main content start-->
	<?php 
		$row = $text[0];
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
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo $g_t.'详情';?></h5></div>
                            <?php if (!empty($row['title']) && !empty($row['service_area'])):?>
                            <a href="<?php echo base_url('admin/general?type='.$type.'&p='.$p);?>">
                            <?php else:?>
                            <a href="<?php echo base_url('admin/general?type='.$type);?>">
                            <?php endif;?>
	                        	<button class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body" style="margin:0 20%; padding-bottom:0px">
                        	<div class="gd_title">
                            	<?php if($type == 1) {
										echo $row['service_area'];
								      }else echo $row['title'];?>
                            </div>
                        </div>
                        <hr style="border:#63F solid thin" width="70%" size="1" />
                        <div class="panel-body" style="margin:0 20%; padding-top:0px; padding-bottom:25px">
                            <div class="gd_content">
                            	<?php echo $row['content'];?>
                            </div>
                        </div>
                    
                      </section>
                   </div>
            </div>
        </section>
   </section>
   
<?php echo $this->load->view('admin/common/admin_footer'); ?>