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
    <div class="div_2">
		<?php foreach ($cases as $case): ?>
        <?php $count++;if($count%5==0):?>
        <div class="c_img float" style="margin-right:0; width:194px;">
        <?php else:?>
        <div class="c_img float">
        <?php endif; ?>
            <a href='<?php echo base_url('cases_expand?id='.$case['id']);?>'>
            	<?php if(empty($case['logo'])): ?>
            	<img src="<?php echo base_url($case['logo']);?>" />
                <?php else:?>
                <img src="<?php echo base_url($case['logo']);?>" width="100%" height="100%" />
                <?php endif;?>
            </a>
			<div class="slide">
            	<p>Client / <?php echo $case['name'];?> </p>
                <p>Project / <?php echo $case['project'];?> </p>
                <p>Time / <?php echo $case['date'];?> </p>
            </div>
        </div>
		<?php endforeach ?> 
    </div>
    <div class="main_page">
    	<?php echo $page_html;?>
    </div>
          
<?php $this->load->view('common/common_footer'); ?>