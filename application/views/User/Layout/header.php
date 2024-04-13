<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title> LoanPro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Home Loan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('Asset/User/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url('Asset/User/css/style.css')?>" rel='stylesheet' type='text/css' />
  <!-- pop up box -->
  <link href="<?php echo base_url('Asset/User/css/popuo-box.css')?>" rel="stylesheet" type="text/css" media="all" />
  <!-- font-awesome icons -->
  <link href="<?php echo base_url('Asset/User/css/fontawesome-all.min.css')?>" rel="stylesheet">
  <!-- //Custom Theme files -->
  <!-- online fonts -->
  <!-- titles -->
  <link href="<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet')?>">
  <!-- body -->
  <link href="<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Poppins:400,500,600,700,800')?>" rel="stylesheet">
</head>

<body>
  
  <!-- header -->
  <header>
  <div class="top">
      <div class="container">
        <div class="t-op row">
          <div class="col-sm-6 top-middle">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
          <div class="col-sm-6 top-left">
            <ul>
              <li><i class="fas fa-phone"></i> +021 365 777</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1>
          <a class="navbar-brand text-capitalize">
            LoanPro
          </a>
        </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center  ml-lg-auto">
            <li class="nav-item active  mr-3">
              <a class="nav-link" href="<?php echo base_url('index.php/User_controller/loan')?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item  mr-3">
              <a class="nav-link" href="<?php echo base_url('index.php/User_controller/loan_status')?>">Loan Status</a>
            </li>
            <li class="nav-item  mr-3">
              <a class="nav-link" href="<?php echo base_url('index.php/User_controller/document_status')?>">Document Status</a>
            </li>
            <li class="nav-item  mr-3">
              <a class="nav-link" href="<?php echo base_url('index.php/User_controller/My_Profile')?>">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/User_controller/Logout')?>">Logout</a>
            </li>
           
            
          </ul>
        </div>
      </nav>
    </div>
  </header>