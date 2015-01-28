<?php $this->load->view('common/common_header'); ?>
    
    <div class="div_1">
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hf float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <div class="div_h float">
            <div class="div_hr float">品牌战略顾问<br />品牌文化与核心价值创建<br />品牌形象与产品定位<br />品牌管理咨询</div>
            <a class="a_link" href="<?php echo base_url('servicechannel');?>">品牌策略<br />Brand<br />Strategy</a>
        </div>
        <!--<div class="clc"></div>-->
    </div>
    <div class="div_2">
		<?php foreach ($cases as $case): ?>
        <div class="c_img float">
            <a href='<?php echo base_url('cases_expand?id='.$case['id']);?>'><img src="<?php echo $case['logo'];?>" width="100%" height="100%" /></a><div class="slide">
            	<p>Client / <?php echo $case['name'];?> </p>
                <p>Project / <?php echo $case['project'];?> </p>
                <p>Time / <?php echo date('Y.m.d',$case['date']);?> </p>
            </div>
        </div>
		<?php endforeach ?>
 

        
    </div>
    <div class="main_page">
    	more
    </div>
          
<?php $this->load->view('common/common_footer'); ?>