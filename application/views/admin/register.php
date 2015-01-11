<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('static/admin/assets/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('static/admin/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('static/admin/assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('static/admin/assets/css/style-responsive.css');?>" rel="stylesheet">
    
    <!-- 自己的CSS -->
    <link href="<?php echo base_url('static/admin/css/admin.css');?>" rel="stylesheet">
    
    <!-- 自己的js -->
    <script src="<?php echo base_url('static/admin/js/admin.js');?>"></script>

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
	  	
		      <form name="formUser" class="form-login register_form-login" action="<?php echo base_url('admin/register');?>" onsubmit="return register();" method=post>
		        <h2 class="form-login-heading">注册</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="用户名" id="username" name="username" onblur="chkUserName(this)" autofocus/>
                    <span id="username_notice" ></span>
		            <br>
                    <input type="text" name="email" class="form-control" placeholder="邮箱" id="email" onblur="checkEmail(this)">
                    <span id="email_notice"></span>
		            <br>
		            <input type="password" class="form-control" placeholder="密码" id="password" name="password" onBlur="check_password(this)">
                    <span id="password_notice"></span>
                    <br>
                    <input type="password" class="form-control" placeholder="确认密码" id="repassword" name="repassword" onBlur="check_conform_password(this)">
                    <span id="conform_password_notice"></span>
                    <br>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i>注册</button>		
		        </div>
		      </form>	  	
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
