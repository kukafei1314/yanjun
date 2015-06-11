<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- 后台常规项目添加页面 -->
    <section id="main-content">
    	<section class="wrapper">
        	<h3><i class="fa fa-angle-right"></i>问题</h3>
            <div class="row mt">
          		<div class="col-lg-12">
                  <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> 编辑问题</h5></div>
                        <a href="<?php echo base_url('admin/join_us/question_join');?>">
                            <button class="btn btn-theme03 back_botton pull-right">返回</button>
                        </a>
                        <div class="cl"></div>
                    </div>
                    <div class="form-panel">
                      <form class="form-horizontal style-form" action="<?php echo base_url('admin/join_us/question_join_edit_v?id='.$id); ?>" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                              <input name="title" type="text" class="form-control" required="required" value="<?php echo $title;?>">
                            </div>
                        </div>
    
                       <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">内容</label>
                          <div class="col-sm-10">
                              <script id="ue_content" name="content" type="text/plain"><?php echo $content;?></script>
                          </div>
                      </div>
                                 
                      <div class=" add-task-row page_html">
                         <button type="submit" class="btn btn-theme03 news_botton" onclick="return is_empty()">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        var ue = UE.getEditor('ue_content');
    </script>
<?php echo $this->load->view('admin/common/admin_footer'); ?>