<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      后台主要内容页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo $type_name;?>类别管理</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                	<section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo '添加类别';?></h5></div>
                            <a href="<?php echo base_url('admin/type?type='.$type);?>">
	                        	<button class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
                        </div>
                      <div class="form-panel">
                          <form class="form-horizontal style-form" action="<?php echo base_url($form_url); ?>" method="post">
                                 <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">名称</label>
                                      <div class="col-sm-10">
                                          <input name="name" type="text" id="t_txt" class="form-control" value="<?php echo $name;?>">
                                      </div>
                                </div>
                                 <?php if ($type == 3):?>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">英文名称</label>
                                      <div class="col-sm-10"> 
                                          <input name="en_name" value="<?php echo $en_name;?>"></textarea> 
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                               <?php endif;?>							
                                <?php if ($type == 2):?>
                                <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">招聘部门</label>
                                      <div class="col-sm-10">
                                          <input name="recruit_name" type="text"  class="form-control" value="<?php echo $recruit_name;?>">
                                      </div>
                                </div>	
                                <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">邮箱</label>
                                      <div class="col-sm-10">
                                          <input name="e_mail" type="email" id="t_mail" class="form-control" value="<?php echo $e_mail;?>">
                                      </div>
                                </div>	
                                <?php endif;?>
                                <?php if ($type != 1):?>
                                <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">简介</label>
                                      <div class="col-sm-10">
                                          <p class="give_notice">简介内容不超过120个字！</p>
                                          <textarea oninput="if(value.length>120) value=value.substr(0,120)" id="ue_abstract" name="content" rows='5' cols='130'><?php echo $content;?></textarea>
                                          
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                               <?php endif;?>
                              
                                <div class=" add-task-row page_html">
                                    <button type="submit" class="btn btn-theme03 news_botton" onclick="return is_empty()">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-theme03 news_botton">重置</button>
                                </div>
                         </form>
     
                       </div>
                     </section>
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
		
		var tit_ue_abstract = document.getElementById('ue_abstract').value;
			var tit_ue_abstract_length = document.getElementById('ue_abstract').value.length;
			if(tit_ue_abstract ==""){
				alert("简介不能为空！");
				return false;
			}else if(tit_ue_abstract_length > 120){
				alert("简介不能超过120字符！");
				return false;
			}										
	 }
	</script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    