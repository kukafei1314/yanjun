<?php echo $this->load->view('admin/common/admin_header'); ?>
<!-- **********************************************************************************************************************************************************
            后台常规项目管理页面
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
        	<h3><i class="fa fa-angle-right"></i><?php echo $g_t;?></h3> 
            
            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb">
                          <a  href="<?php echo base_url('admin/general/add_v?type='.$type);?>">
                          	<button type="button" class="btn btn-theme">添加内容</button>
                          </a>
                      </h4>
                      <div>
                      	<?php switch($type) {
								case 1: ?><table style="border-collapse:collapse" width='100%'>
						  					    <tr class="g_title_t">
													<td width="15%">服务范围</td>
													<td width="70%">内容</td>
													<td align="center" width="15%">操作</td>
												</tr>
                                                <?php foreach($font as $row) {?>
                                                <tr>
													<td class="g_td"><?php echo $row['service_area'];?></td>
													<td class="g_td"><?php echo $row['content'];?></td>
													<td class="g_td" align="center">
                                                    	<div class="hidden-phone">
                                                            <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location="<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>"'></button>
                                              			</div>
                                                    </td>
												</tr>
                                                <?php }?>
								  			</table>
                                            <?php break;?>
                                            
                           <?php case 2: ?><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                <tr class="g_title_t">
                                                  <td width="80%">内容</td>
                                                  <td align="center" width="20%">操作</td>
											    </tr>
                                                <?php foreach($font as $row) {?>
                                                <tr>
													<td class="g_td"><?php echo $row['content'];?></td>
													<td class="g_td" align="center">
                                                    	<div class="hidden-phone">
                                                            <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location="<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>"'></button>
                                              			</div>
                                                    </td>
												</tr>
                                                <?php }?>
								  			</table>
                                            <?php break;?>
                                            
                          <?php case 3: ?><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                <tr class="g_title_t">
                                                	<td width="20%">标题</td>
                                                	<td width="70%">内容</td>
                                                	<td align="center" width="10%">操作</td>
											    </tr>
                                                <?php foreach($font as $row) {?>
                                                <tr>
													<td class="g_td"><?php echo $row['title'];?></td>
                                                    <td class="g_td"><?php echo $row['content'];?></td>
													<td class="g_td" align="center">
                                                    	<div class="hidden-phone">
                                                            <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location="<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>"'></button>
                                              			</div>
                                                    </td>
												</tr>
                                                <?php }?>
								  			</table>
                                            <?php break;?>
                                            
                         <?php case 4: ?><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                <tr class="g_title_t">
                                                	<td width="20%">标题</td>
                                                	<td width="70%">内容</td>
                                                	<td align="center" width="10%">操作</td>
											    </tr>
                                                <?php foreach($font as $row) {?>
                                                <tr>
													<td class="g_td"><?php echo $row['title'];?></td>
                                                    <td class="g_td"><?php echo $row['content'];?></td>
													<td class="g_td" align="center">
                                                    	<div class="hidden-phone">
                                                            <button class="btn btn-success btn-xs fa fa-book" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-primary btn-xs fa fa-pencil" onclick='location="<?php echo base_url('admin/general/edit?type='.$type.'&id='.$row['id']);?>"'></button>
                                                            <button class="btn btn-danger btn-xs fa fa-trash-o" onclick='location="<?php echo base_url('admin/general/delete?type='.$type.'&id='.$row['id']);?>"'></button>
                                              			</div>
                                                    </td>
												</tr>
                                                <?php }?>
								  		 </table>
						<?php }?>
                      </div>
                  
                    <div class = "g_page">
                        <p><?php echo "$link"; ?></p>
                    </div>
                    
                  </div>
               </div>
            </div>

		</section>
    </section>
    
<?php echo $this->load->view('admin/common/admin_footer'); ?>