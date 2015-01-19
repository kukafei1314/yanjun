<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>晏钧设计后台管理系统</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('static/admin/assets/css/bootstrap.css');?>" rel="stylesheet" />
    <!--external css-->
    <link href="<?php echo base_url('static/admin/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/assets/css/zabuto_calendar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/assets/js/gritter/css/jquery.gritter.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/assets/lineicons/style.css');?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('static/admin/assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('static/admin/assets/css/style-responsive.css');?>" rel="stylesheet">
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('static/admin/assets/css/to-do.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/assets/js/bootstrap-datepicker/css/datepicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/assets/js/bootstrap-daterangepicker/daterangepicker.css');?>" />
    
    <script src="<?php echo base_url('static/admin/assets/js/chart-master/Chart.js');?>"></script>
    <script src="<?php echo base_url('static/admin/js/jquery-1.7.2.min.js');?>"></script>
    <!-- My CSS -->
    <link href="<?php echo base_url('static/admin/css/admin.css');?>" rel="stylesheet">
    <!-- My JS -->
    <script src="<?php echo base_url('static/admin/js/my.js');?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>晏钧设计后套管理系统</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('admin/index/logout'); ?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
      左侧导航栏      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?php echo base_url('/admin/login');?>"><img src="<?php echo base_url('static/admin/assets/img/ui-sam.jpg');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $username;?></h5>
              	  	
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>大图管理</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu dcjq-parent-li">
                      <a href="<?php echo base_url('admin/cases');?>">
                          <i class="fa fa-heart"></i>
                          <span>案例管理</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu dcjq-parent-li">
                      <a  href="<?php echo base_url('admin/news');?>">
                          <i class="fa fa-book"></i>
                          <span>新闻管理</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu  dcjq-parent-li">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>常规项目管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('admin/general?type=1');?>">服务</a></li>
                          <li><a  href="<?php echo base_url('admin/general?type=2');?>">我们</a></li>
                          <li><a  href="<?php echo base_url('admin/general?type=3');?>">分享中心</a></li>
                          <li><a  href="<?php echo base_url('admin/general?type=4');?>">常见问题</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu dcjq-parent-li">
                      <a href="index.html">
                          <i class="fa fa-hdd-o"></i>
                          <span>业务通道管理</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu  dcjq-parent-li">
                      <a href="javascript:;" >
                          <i class="fa fa-comment"></i>
                          <span>加入我们</span>
                      </a>
                      <ul class="sub">
                          <!-- <li><a  href="general.html">部门介绍</a></li> -->
                          <li><a  href="buttons.html">员工介绍</a></li>
                          <li><a  href="buttons.html">招聘职位</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu  dcjq-parent-li">
                      <a href="javascript:;" >
                          <i class="fa fa-bars"></i>
                          <span>类别管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('admin/type?type=1');?>">大图类别管理</a></li>
                          <li><a  href="<?php echo base_url('admin/type?type=2');?>">部门类别管理</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->