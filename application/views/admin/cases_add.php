<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      		后台添加和编辑案例页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>案例管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i>&nbsp;&nbsp;<?php echo empty($name)? '添加案例':'编辑案例';?></h5></div>
	                        <?php if (!empty($name)):?>
	                        <a href="<?php echo base_url('admin/cases?p='.$p);?>">
	                        <?php else:?>
	                        <a href="<?php echo base_url('admin/cases');?>">
	                        <?php endif;?>
	                        	<button type="submit" class="btn btn-theme03 back_botton pull-right">返回</button>
	                        </a>
                            <div class="cl"></div>
	                 	</div>
                        <div class="panel-body">
                  <!--      	<form class="form-horizontal style-form" method="post" action="<?php //echo base_url('admin/cases/edit?id=' . $id.'&p='.$p);?>" enctype="multipart/form-data">  -->
                        	<form class="form-horizontal style-form" method="post" action= "<?php echo base_url($form_url); ?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例名称</label>
                                      <div class="col-sm-10">
                                          <input type="text" id='name' name="name" class="form-control" value="<?php echo $name;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  
	                              <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例项目</label>
                                      <div class="col-sm-10">
                                          <input type="text" id='project' name="project" class="form-control" value="<?php echo $project;?>">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">完成时间</label>
                                      <div class="col-sm-10">
                                          <input class="Wdate" name="date" placeholder="选择日期" value="<?php echo $date; ?>" onClick="WdatePicker()">
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">案例Logo</label>
									<div class="col-sm-10">
										<p class="give_notice">jpg图片规格：192*192！</p>
										<?php if(!empty($logo)) :?>
											<img src="<?php echo base_url($logo);?>" width="80" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="logopic" />
									</div>
									<div class="cl"></div>
                                  </div>
								  
								  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">案例海报</label>
									<div class="col-sm-10">
										<p class="give_notice">jpg图片规格：588*385！</p>
										<?php if(!empty($images)) :?>
											<img src="<?php echo base_url($images);?>" width="80" style="margin-top:10px;"/>
										<?php endif;?>
										<input type="file" name="pic" />
									</div>
									<div class="cl"></div>
                                  </div>
								  
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label" style="padding-top: 25px;">案例简介</label>
                                      <div class="col-sm-10">
                                      	  <p class="give_notice">简介内容不超过120个字！</p>
                                          <textarea oninput="if(value.length>120) value=value.substr(0,120)" id="ue_abstract" name="ue_abstract" rows='5' cols='100'><?php echo $abstract;?></textarea>
                                          
                                      </div>
                                      <div class="cl"></div>
                                  </div>
								  
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">案例内容</label>
                                      <div class="col-sm-10">
                                          <script  id="ue_content" name="ue_content" type="text/plain"><?php echo $content;?></script>
                                      </div>
                                      <div class="cl"></div>
                                  </div>
                                 
                                  <div class=" add-task-row page_html">
                                     <button onclick="return is_empty()" type="submit" class="btn btn-theme03 news_botton">提交</button>
                                     <?php if (empty($name)):?>
                                     <button type="reset" class="btn btn-theme03 news_botton" onclick='window.location.reload();'>重置</button>
                                     <?php else:?>
                                     <button type="reset" class="btn btn-theme03 news_botton" onclick='location="<?php echo base_url('admin/cases/edit_v?id='.$id.'&p='.$p);?>"'>重置</button>
                                  	 <?php endif;?>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
				  <script type="text/javascript">
				  function is_empty(){
					var tit_name = document.getElementById('name').value;
					if(tit_name ==""){
						alert("名称不能为空！");
						return false;
					}
					var tit_project = document.getElementById('project').value;
					if(tit_project ==""){
						alert("项目不能为空！");
						return false;
					}
					var tit_ue_abstract = document.getElementById('ue_abstract').value;
					var tit_ue_abstract_length = document.getElementById('ue_abstract').value.length;
					if(tit_ue_abstract ==""){
						alert("简介不能为空！");
						return false;
					}else if(tit_ue_abstract_length > 150){
						alert("简介不能超过150字符！");
						return false;
					}						
				 }
			    </script>
              </div><!-- /row -->
		</section> <!--/wrapper -->
      </section>
        <script type="text/javascript">
            var ue = UE.getEditor('ue_content');
        </script>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    