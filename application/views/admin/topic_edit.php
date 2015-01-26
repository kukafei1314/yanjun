<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            标语编辑页面
*********************************************************************************************************************************************************** -->

<!--main content start-->
	<?php 
		$row = $result[0];
	?>
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>编辑标语</h3>
            <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" action="<?php echo base_url('admin/general/t_edit?&id='.$id); ?>" method="post">
                       
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">标语类型</label>
                          <div class="col-sm-10">
                              <input name="title" type="text" class="form-control" value="<?php echo $row['type'];?>" >
                          </div>
                        </div>
                                                      
                       <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">标语内容</label>
                          <div class="col-sm-10">
                              <script id="ue_content" name="content" type="text/plain"><?php echo $row['content'];?></script>
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
    
	<script type="text/javascript">
        var ue = UE.getEditor('ue_content');
    </script>
<?php echo $this->load->view('admin/common/admin_footer'); ?>