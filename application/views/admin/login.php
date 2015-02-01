<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>晏钧设计后台管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('static/admin/assets/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('static/admin/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('static/admin/assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('static/admin/assets/css/style-responsive.css');?>" rel="stylesheet">
    
    <!-- 自己的CSS -->
    <link href="<?php echo base_url('static/admin/css/admin.css');?>" rel="stylesheet">
    
    
    <script src="<?php echo base_url('static/admin/js/jquery-1.7.2.min.js');?>"></script>
    <!-- 自己的js -->
    <script src="<?php echo base_url('static/admin/js/login.js');?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <!-- <form class="form-login" action=" " method=post> -->
		      <div class="form-login">
		        <h2 class="form-login-heading">晏钧设计后台管理系统</h2>
		        <div class="login-wrap">
                	<div class="login_error"><?php echo isset($error) ? $error : ''; ?></div>
		            <input type="text" id="login_name" name="username" class="form-control" placeholder="用户名" autofocus>
		            <br>
		            <input type="password" id="login_pass" name="password" class="form-control" placeholder="密码">
                    <br>
		            <input type="text" id="login_num" name="check_num" class="form-control password_input" placeholder="验证码" >
                    <!--<img class="captcha" src="<?php //echo base_url('/admin/login/captcha'); ?>" />-->
                    <div id="check_num" onClick="get_check_num()"></div>
                    <div class="cl"></div>
                    <div id="error" style="display:none;"></div>
		            <label class="checkbox">
		               <!-- <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> 忘记密码？</a>		
		                </span>-->
		            </label> 
		            <button style="margin-bottom: 20px;" class="btn btn-theme btn-block" onclick="check_login_right()" type="submit"><i class="fa fa-lock"></i>登录</button>
		           <!-- <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="<?php echo base_url('admin/register');?>">
		                    Create an account
		                </a>
		            </div>-->
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
				</div>
		      <!-- </form>	 -->  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('static/admin/assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('static/admin/assets/js/bootstrap.min.js');?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('static/admin/assets/js/jquery.backstretch.min.js');?>"></script>
    <script>
        $.backstretch("<?php echo base_url('static/admin/assets/img/login-bg.jpg');?>", {speed: 500});
    </script>


  </body>
</html>
