<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>LoanPro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/bootstrap.min.css')?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('Asset/Admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Asset/Admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Asset/Admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Asset/Admin/css/style-responsive.css')?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url('Asset/Admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/font.css')?>" type="text/css"/>
<link href="<?php echo base_url('Asset/Admin/css/font-awesome.css')?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/morris.css')?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url('Asset/Admin/css/monthly.css')?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url('Asset/Admin/js/jquery2.0.3.min.js')?>"></script>
<script src="<?php echo base_url('Asset/Admin/js/raphael-min.js')?>"></script>
<script src="<?php echo base_url('Asset/Admin/js/morris.js')?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a  class="logo">
     Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
               <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Loan</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo base_url('index.php/Admin_controller/add_loan')?>">Add Loan</a></li>
                       
						<li><a href="<?php echo base_url('index.php/Admin_controller/manage_loan')?>">Manage Loan</a></li>
                        
                    </ul>
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Loan Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('index.php/Admin_controller/add_loan_category')?>">Add Loan category</a></li>
                       
                        <li><a href="<?php echo base_url('index.php/Admin_controller/manage_loan_category')?>">Manage Loan category</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo base_url('index.php/Admin_controller/Verify_User_Request')?>">Verify User Request</a></li>
                        <li><a href="<?php echo base_url('index.php/Admin_controller/User_Request')?>">User Request</a></li>
						<li><a href="<?php echo base_url('index.php/Admin_controller/upload_documents')?>">User Documentation</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Admin_controller/User_Details')?>">
                        <i class="fa fa-bullhorn"></i>
                        <span>User Details </span>
                    </a>
                </li>
               
                
                
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-glass"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('index.php/Admin_Controller/Change_password')?>">Change Password</a></li>
						<li><a href="<?php echo base_url('index.php/Admin_Controller/Logout')?>">Logout</a></li>
                    
                    </ul>
                </li>
               
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">