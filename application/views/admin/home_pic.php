<?php echo $this->load->view('admin/common/admin_header'); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>大图管理</h3>	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5>
                            	<i class="fa fa-tasks">&nbsp;大图管理</i>
                            </h5></div>
                            <a class="btn btn-success btn-sm add_news" onclick="up_img('','','')">添加图片</a>
                            <div class="cl"></div>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                              <?php foreach ($home_pic as $pic): ?>
                                  <ul id="sortable" class="task-list">
                                      <li <?php
										       switch(((int)$pic['0']['id'])%4){
													case 0: echo "class= \"list-primary \"";break;
													case 1: echo "class= \"list-danger \"";break;
													case 2: echo "class= \"list-success \"";break;
													case 3: echo "class= \"list-warning \"";break;
													default:echo "class= \"list-primary \"";break;
											   }
										 ?>>
                                          <div class="task-title-sp pull_left list_order">
                                          	<?php echo $pic['0']['type']; ?>
                                          </div>
										  <div class="task-title">
                                          	  
											  <?php foreach ($pic as $single_pic): ?>
                                              <div class="pull_left list_img">
	                                              <?php if(!empty($single_pic['path'])) :?>
												  	  <img src="<?php echo base_url($single_pic['path']);?>" width="100%" height=100/>
                                                      <a class="mask_img" onclick="up_img(<?php echo $single_pic['order'];?>,<?php echo $single_pic['id'];?>,<?php echo $single_pic['tid'];?>)"><span class="glyphicon
glyphicon-pencil"></span></a>
														<a class="mask_img_del" onclick="return del_alert();" href="<?php echo base_url('admin/home_pic/del_pic?pid='.$single_pic['id']);?>"><span class="fa fa-trash-o"></span></a>
											      <?php endif;?>
                                              </div>
											  <?php endforeach; ?> 
                                              <div class="cl"></div>
                                          </div>
                                      </li>
                                 <?php endforeach;?>     
                                  </ul>
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
              <form action="<?php echo base_url('admin/home_pic/updatePic');?>" method="post" enctype="multipart/form-data">
                  <div id="img_up" style="display:none;">
                    <div class="pic_div">						
                        <span class="up_word">排序</span>
                        <span class="up_input"><input id="order" name="order" type="text" value="" size="5" class="form-control"/></span>
                        <div class="cl"></div>
                    </div>
                    <div class="pic_div">
                        <span class="up_word">更改图片</span>
                        <span class="up_input"><input id="pic1" name="pic" type="file" value="" size="5" /></span>
                        <div class="cl"></div>
                        <p style="padding:5px 0 0 170px;">建议图片上传比例：986px*410px</p>
                    </div>
                    <input type="hidden" id="pid" name="pid" value="" />
                    <div class="pic_div">
                        <span class="up_word">图片类别</span>
                        <span class="up_input">
                        	<select id="type_select" name="type">
                            	<?php foreach($types as $type):?>
                                	<option value="<?php echo $type['tid'];?>" ><?php echo $type['name'];?></option>
                                <?php endforeach;?>
                            </select>
                        </span>
                        <div class="cl"></div>
                    </div>
                    <div class="button_img">
                        <button onclick="return is_empty()" type="submit" class="btn btn-success">提交</button>
                        <button onclick="return close_button()" class="btn btn-danger">关闭</button>
                    </div>
                 </div>
             </form>
              <div class="cl"></div>
		</section> <!--/wrapper -->
      </section>
      <!--main content end-->
 <?php echo $this->load->view('admin/common/admin_footer'); ?>    