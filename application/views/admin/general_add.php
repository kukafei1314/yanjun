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
            <div style="padding-right:10px"><a class="btn btn-primary btn-sm add_news" href="<?php echo $_SERVER['HTTP_REFERER'];?>">返回</a></div>
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
                                          <input name="title" type="text" id="g_title" class="form-control">
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
                         <button type="submit" class="btn btn-theme03 news_botton" onclick="return is_empty()">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <button type="reset" class="btn btn-theme03 news_botton">重置</button>
                      </div>
                  </form>
                </div>
			  </div>
            </div>
    
    	</section>
    </section>
    <script type="text/javascript">
	  function is_empty(){
		var tit = document.getElementById('g_title').value;
		if(tit ==""){
			alert("标题不能为空！");
			return false;
		}			
	 }
	</script>

    
	<script type="text/javascript">
        var ue = UE.getEditor('ue_content');
    </script>
<?php echo $this->load->view('admin/common/admin_footer'); ?>