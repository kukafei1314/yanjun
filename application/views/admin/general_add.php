<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目添加页面
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
        	<h3><i class="fa fa-angle-right"></i><?php echo '添加'.$g_t;?></h3>
            <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" action="<?php echo base_url('admin/general/g_add?type='.$type); ?>" method="post">
                       <?php
                            switch($type) {
                                case 1: ?>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">服务范围</label>
                                      <div class="col-sm-10">
                                          <input name="title" type="text" class="form-control">
                                      </div>
                                  	</div>
                              <?php break;?>
                         
                          <?php case 2;
						  		case 3;
                                case 4:?>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">标题</label>
                                      <div class="col-sm-10">
                                          <input name="title" type="text" class="form-control">
                                      </div>
                                  	</div>
                             <?php break;
                            
                            }?>
                            
                       <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">内容</label>
                          <div class="col-sm-10">
                              <script id="ue_content" name="content" type="text/plain"></script>
                          </div>
                      </div>
                                 
                      <div class=" add-task-row page_html">
                         <button type="submit" class="btn btn-theme03 news_botton">提交</button>
                      </div>
                  </form>
                </div>
			  </div>
            </div>
    
    	</section>
    </section>
    
    
<?php echo $this->load->view('admin/common/admin_footer'); ?>