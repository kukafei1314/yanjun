<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      后台主要内容页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo ($type == 1)?  '大图' : '部门';?>类别管理</h3>
          	<div style="padding-right:10px"><a class="btn btn-primary btn-sm add_news" href="<?php echo $_SERVER['HTTP_REFERER'];?>">返回</a></div>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="<?php echo base_url($form_url); ?>" method="post">
							 <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label"><?php echo ($type == 1)? '类别名称' : '部门名称';?></label>
                                  <div class="col-sm-10">
                                      <input name="name" type="text" id="t_txt" class="form-control" value="<?php echo $name;?>">
                                  </div>
                            </div>							
							<?php if ($type != 1):?>
                            <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                                  <div class="col-sm-10">
                                      <input name="e_mail" type="email" id="t_mail" class="form-control" value="<?php echo $e_mail;?>">
                                  </div>
                            </div>	
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">部门介绍</label>
                              <div class="col-sm-10">
                                  <script id="ue_content" name="content" type="text/plain"><?php echo $content;?></script>
                              </div>
                            </div>
							<?php endif;?>
                            <div class=" add-task-row page_html">
                            	<button type="submit" class="btn btn-theme03 news_botton" onclick="return is_empty()">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset" class="btn btn-theme03 news_botton">重置</button>
                            </div>
                 	 </form>
 
                   </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
       <script type="text/javascript">
            var ue = UE.getEditor('ue_content');
        </script>


	<script type="text/javascript">
	  function is_empty(){
		var tit = document.getElementById('t_txt').value;
		if(tit ==""){
			alert("名称不能为空！");
			return false;
		}				
	 }
	</script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    