<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!-- **********************************************************************************************************************************************************
                   	后台类别管理页面
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?php echo ($type == 1)?  '大图' : '部门';?>类别管理</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb">
                          <a  href="<?php echo base_url('admin/type/add?type='.$type);?>">
                          	<button type="button" class="btn btn-theme">添加类别</button>
                          </a>
                      </h4>
                      <div>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr class="title_3">
                                <td width="15%">id号</td>
                                <?php if ($type != '1'):?>
                                <td width="30%">类别名称</td>
                                <td width="40%">简介</td>
                                <?php else:?>
                                <td width="70%">类别名称</td>
                                <?php endif;?>
                                <td>操作</td>
                            </tr>
                            <?php foreach ($types as $row): ?>
                            <tr>
                                <td><?php echo $row['tid']?></td>
                                <td><?php echo $row['name']?></td>
                                <?php if ($type != '1'):?>
                                <td><?php echo $row['content']?></td>
                                <?php endif;?>
                                <td><a href="<?php echo base_url('admin/type/edit?type='.$type.'&tid='.$row['tid']);?>">编辑</a> <!-- | <a  onclick="return del_alert()" href="#">删除</a> --></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section> <!--/wrapper -->
      </section>

      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    