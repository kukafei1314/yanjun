<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            添加职位
*********************************************************************************************************************************************************** -->
<!--main content start-->
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>编辑职位</h3>
            <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" action="<?php echo base_url($form_url);?>" method="post">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">职位名称</label>
                      <div class="col-sm-5">
                          <input name="job_name" type="text" class="form-control" value="<?php echo isset($job)?$job['job_name']:'';?>">
                      </div>
                  	</div>
                  	<div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">所在部门</label>
                          <div class="col-sm-5">
                               <select name= "did">
                                   <?php foreach ($departments as $department):?>
                                        <option value = "<?php echo $department['tid'];?>" <?php if($job['did'] == $department['tid']) {echo "selected";}?>><?php echo $department['name'];?></option>
                                   <?php endforeach;?>
                               </select>
                          </div>
                          <div class="cl"></div> 
                    </div>                          
                   <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">职位描述</label>
                      <div class="col-sm-10">
                          <script id="ue_content" name="ue_content" type="text/plain"><?php echo $job['content'];?></script>
                      </div>
                   </div>          
                  <div class=" add-task-row page_html">
                     <button type="submit" class="btn btn-theme03 news_botton">提交</button>
                     <button type="reset" class="btn btn-theme03 news_botton" onclick='window.location.reload();'>重置</button>
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