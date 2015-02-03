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
        	<h3><i class="fa fa-angle-right"></i>编辑投资合作伙伴</h3>
            <div class="row mt">
          		<div class="col-lg-12">
                 <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> <?php echo '添加类别';?></h5></div>
                        <a href="<?php echo base_url('admin/general/partners');?>">
                            <button class="btn btn-theme03 back_botton pull-right">返回</button>
                        </a>
                        <div class="cl"></div>
                    </div>
                    <div class="form-panel">
                      <form class="form-horizontal style-form" action="<?php echo base_url('admin/general/p_edit?&id='.$id); ?>" method="post">
                       
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">投资合作伙伴名称</label>
                          <div class="col-sm-10">
                              <input name="title" type="text" id="tp_titile" class="form-control" value="<?php echo $row['type'];?>" >
                          </div>
                        </div>
                                                      
                       <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">投资合作伙伴链接</label>
                          <div class="col-sm-10">
                              <p class="give_notice">链接要合法</p>
                              <textarea oninput="if(value.length>120) value=value.substr(0,50)" id="tp_content" name="content" rows='3' cols='130'><?php echo $row['content'];?></textarea>
                              
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
			alert("伙伴名称不能为空！");
			return false;
		}
		
		var tit_ue_abstract = document.getElementById('tp_content').value;
			var tit_ue_abstract_length = document.getElementById('tp_content').value.length;
			if(tit_ue_abstract ==""){
				alert("链接不能为空！");
				return false;
			}else if(tit_ue_abstract_length > 500){
				alert("链接不能超过500字符！");
				return false;
			}										
	 }
    </script>
<?php echo $this->load->view('admin/common/admin_footer'); ?>