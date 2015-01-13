<?php $this->load->view('common/common_header'); ?>

	<div class="main_big_pic">
        <div id="pic">
            <ul>
                <li><img src="<?php echo base_url('static/image/join_image.png');?>" width=986 height=430/></li>
                <li><img src="<?php echo base_url('static/image/news_image.png');?>" width=986 height=430/></li>
                <div class="cl"></div>
            </ul>
        </div>
        <div id="main_tip">
            <a class="arrow_left" onclick="change(1)"></a>
            <a class="arrow_right" onclick="change(0)"></a>
        </div>
    </div>
    <div class="b_middle">
        <div class="b_form float">
            <form action="" method="post" name="note">
                <div class="line">
                	<div class="float">
                        <p><label>公司/机构</label></p>
                        <input name="company" type="text" size="38" class="input_s">
                        &nbsp;&nbsp;
                    </div>
                    <div class="float">
                        <p><label>电话</label></p>
                        <input name="company" type="text" size="38" class="input_s">
                    </div>
                </div>
                <div class="line">
                	<div class="float">
                        <p><label>姓名/职务</label></p>
                        <input name="company" type="text" size="38" class="input_s">
                        &nbsp;&nbsp;
                    </div>
                    <div class="float">
                        <p><label>邮箱</label></p>
                        <input name="company" type="text" size="38" class="input_s">
                    </div>
                </div>
                <div class="line">
                    <p><label>工作地址</label></p>
                    <input name="company" type="text" size="80" class="input_l">
                </div>
                <p><label>留言</label></p>
                <textarea class="t_area" name="words" cols="68" rows="5"></textarea>
                <div class="sr float">
                	<input name="sub" type="submit" value="提交">
                </div>
                <div class="sr float">
                	<input name="reset" type="reset" value="重填">
                </div>
                <div class="cl"></div>    
            </form>   
        </div>
        
        <div class="m_text float" onclick="unhide(this)">
        	<p>常见问题</p>
            <div class="text_li">
                <a href=""><li>品牌设计需要哪些资料？</li></a>
                <a href=""><li>每次提供几个设计稿供用户选择？</li></a>
                <a href=""><li>品牌设计需要多长时间？</li></a>
                <a href=""><li>所设计的稿件通过什么方式供用户查询？</li></a>
                <a href=""><li>品牌设计需要哪些资料？</li></a>
                <a href=""><li>每次提供几个设计稿供用户选择？</li></a>
                <a href=""><li>品牌设计需要多长时间？</li></a>
                <a href=""><li>所设计的稿件通过什么方式供用户查询？</li></a>
                <a href=""><li>品牌设计需要哪些资料？</li></a>
                <a href=""><li>每次提供几个设计稿供用户选择？</li></a>
                <a href=""><li>品牌设计需要多长时间？</li></a>
                <a href=""><li>所设计的稿件通过什么方式供用户查询？</li></a>
                <a href=""><li>品牌设计需要哪些资料？</li></a>
                <a href=""><li>每次提供几个设计稿供用户选择？</li></a>
                <a href=""><li>品牌设计需要多长时间？</li></a>
                <a href=""><li>所设计的稿件通过什么方式供用户查询？</li></a>
                <a href=""><li>品牌设计需要哪些资料？</li></a>
                <a href=""><li>每次提供几个设计稿供用户选择？</li></a>
                <a href=""><li>品牌设计需要多长时间？</li></a>
                <a href=""><li>所设计的稿件通过什么方式供用户查询？</li></a>
        	</div>
        </div> 
              
        <div class="cl"></div>
    </div>

<?php $this->load->view('common/common_footer');?>