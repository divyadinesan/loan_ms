
<!DOCTYPE HTML>
<html lang="zxx">
	
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('Asset/User/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('Asset/User/css/style.css')?>" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="<?php echo base_url('Asset/User/css/fontawesome-all.min.css" rel="stylesheet')?>">
	<!-- //Custom Theme files -->
	<!-- online fonts -->
	<!-- titles -->
	<link href="<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900')?>" rel="stylesheet">
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
						
					</div>
					<div class="col-sm-6 top-left">
						<ul>
							<li><i class="fas fa-phone"></i> +91 9876543215</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a class="navbar-brand text-capitalize" href="index.html">
							Loan Management System
					</a>
				</h1>
				

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="<?php echo base_url('index.php/User_controller/index')?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url('index.php/User_controller/about')?>">About</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" href="<?php echo base_url('index.php/User_controller/services')?>">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('index.php/User_controller/contact')?>">contact</a>
						</li>
						<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								SignIn
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('index.php/Admin_controller/login')?>">Admin</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/User_controller/login')?>">Customer</a>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- about -->
	<section class="welcome py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Contact Us </h2>
			<span class="w3-line black"></span>
			<div class="row about-tp mt-md-5 pt-5">
				<div class="col-lg-6 welcome-left">
				
							<h4 class="hd">Address :</h4>
							<h4>No.27 - 5549436 street lorem, Newyork City, USA</h4>

						
						
							<h4 class="hd">Phone:+ 1 (234) 567 8901</h4>
							<h4 class="hd">Email:
								<a href="mailto:info@example.com">info@example.com</a>
							</h4>
							<h4 class="hd">Fax: 1(234) 567 8901</h4>
						
				</div>
				<div class="col-lg-6 welcome-right">
					<div class="welcome-right-top">
						<img src="<?php echo base_url('Asset/User/images/g1.jpg')?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

	

				
	<!-- //about-team -->

<!--footer-->

	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				
			</div>
			<div class="copyrightbottom">
				<p>@2023 Loan Management System|
					<a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Home Loan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <div class="agileits-w3layouts-info">
			<img src="<?php echo base_url('Asset/User/images/g6.jpg')?>" class="img-fluid" alt="" />
			<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
<!-- js-->
	<script src="<?php echo base_url('Asset/User/js/jquery-2.2.3.min.js')?>"></script>
<!-- js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('Asset/User/js/bootstrap.js')?> ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>