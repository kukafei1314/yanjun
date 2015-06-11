<?php $this->load->view('common/common_header'); ?>
 
    <div class="div_1">
    <?php $i=0; foreach($types as $type):$i++;?>
        <div class="div_h float" <?php if($i==5):?>style="width:194px; margin-right:0;"<?php endif;?>>
        	<a href="<?php echo base_url('cases?tid='.$type['tid']);?>">
                <div class="div_hf float"><?php echo $type['content'];?></div>
                <a class="a_link">
                    <?php echo $type['name'];?><br /><?php echo $type['en_name'];?>
                </a>
            </a>
        </div>
	<?php endforeach;?>
    </div>
    <div>
        <div class="case_left float">
            <div>
                <div class="case_t float">
                    <div class="text_title"><?php echo $case['name'];?></div>
                    <div class="text_st"><span class= "text_st_project"><?php echo $case['project'];?>/</span> <span class = "text_st_date"><?php echo $case['date'];?></span></div>
                    <div class="text"><?php echo $case['abstract'];?></div>
                </div>
                <div class="t_con float">
                    <li><a href="#">Top↑</a></li>
                    <li><a href="<?php echo base_url('cases');?>">Work</a></li>
                    <li><a href="<?php echo base_url('service');?>">Sevice</a></li>
                    <li><a href="<?php echo base_url('about_us');?>">About Us</a></li>
                </div>
                
            </div>

				<div class="case_img"><?php echo $case['content'];?></div>

        </div>
        <div class="case_right float">
			<?php foreach( $cases as $item): ?>
			<a href="<?php echo base_url('cases_expand?id='.$item['id']);?>">
			<!--<a class="case_left_expand" onclick="get_single_cases(<?php echo $item['id'];?>)">-->
			
			<div class="div_opa">
                <img src="<?php echo $item['logo'];?>" width='100%' height='100%'/><br/>
				<div class="case_opacity"></div>
                <div class="share share1" style="position:absolute; left:165px">
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'text':'<?php echo $item['name'];?>','url':'http://yj.te168.cn/cases','pic':'<?php echo base_url($item['logo']);?>'}">
                            <span class="bds_more share_1" style="background: url(<?php echo base_url('static/image/pic1.png'); ?>) no-repeat 0 5px!important;"></span>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
						<script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
                        </script>
                </div>
               
            </div>
			</a>
			<?php endforeach?>

        <!--<div class="clc"></div>-->
	</div>
  </div>
<div class="main_page">
    <?php echo $page_html;?>
</div>
   
<?php $this->load->view('common/common_footer'); ?>