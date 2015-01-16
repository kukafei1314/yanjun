<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
      后台主要内容页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo ($type == 1)?  '大图' : '部门';?>类别管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <div>
                        <?php echo form_open($form_url);?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">添加类别</td>
							</tr>
								<td>类别名称</td>
								<td><input size="30" type="text" name="name" value="<?php echo $name;?>" /></td>
							</tr>
							<?php if ($type != 1):?>
							</tr>
								<td>部门简介</td>
								<td><textarea rows="8" cols="50"  name="content" value="" ><?php echo $content;?></textarea></td>
							</tr>
							<?php endif;?>
						</table>
						<div class="button"><button type="submit">提交</button></div>
                    </div>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    