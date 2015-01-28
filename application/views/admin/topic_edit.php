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
                 <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo '添加类别';?></h5></div>
                        <a href="<?php echo base_url('admin/general/topic');?>">
                            <button class="btn btn-theme03 back_botton pull-right">返回</button>
                        </a>
                        <div class="cl"></div>
                    </div>
                    <div class="form-panel">
                      <form class="form-horizontal style-form" action="<?php echo base_url('admin/general/t_edit?&id='.$id); ?>" method="post">
                       
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">标语类型</label>
                          <div class="col-sm-10">
                              <input name="title" type="text" id="tp_titile" class="form-control" value="<?php echo $row['type'];?>" >
                          </div>
                        </div>
                                                      
                       <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">标语内容</label>
                          <div class="col-sm-10">
                              <p class="give_notice">内容不超过50个字！</p>
                              <textarea oninput="if(value.length>120) value=value.substr(0,50)" id="tp_content" name="content" rows='5' cols='130'><?php echo $row['content'];?></textarea>
                              
                          </div>
                          <div class="cl"></div>
                      </div>
                                 
                      <div class=" add-task-row page_html">
                         <button type="submit" class="btn btn-theme03 news_botton">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <button type="reset" class="btn btn-theme03 news_botton">重置</button>
                      </div>
                  </form>
                </div>
               </section>
          	</div>
          </div>
    
    	</section>
    </section>
    
	<script type="text/javascript">
      function is_empty(){
		var tit = document.getElementById('tp_title').value;
		if(tit ==""){
			alert("类型不能为空！");
			return false;
		}
		
		var tit_ue_abstract = document.getElementById('tp_content').value;
			var tit_ue_abstract_length = document.getElementById('tp_content').value.length;
			if(tit_ue_abstract ==""){
				alert("内容不能为空！");
				return false;
			}else if(tit_ue_abstract_length > 50){
				alert("内容不能超过50字符！");
				return false;
			}										
	 }
    </script>
<?php echo $this->load->view('admin/common/admin_footer'); ?>