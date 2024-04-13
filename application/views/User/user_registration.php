<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <br><br><br><br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
              Register Here
            </h1>
           <br><br>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="<?php echo base_url('index.php/user_controller/register_insert')?>" method="post" name="login">
                 <label style="padding-left: 10px;">Name</label>
                  <div class="form-group">
                     <input type="name" name="name"  class="form-control my-input" id="name"  required>
                  </div>
                <label style="padding-left: 10px;">Email</label>
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" required pattern=".+@gmail\.com"/>
                  </div>
                   <label style="padding-left: 10px;">Phone</label>
                  <div class="form-group">
                     <input type="phone" name="phone"  class="form-control my-input" id="phone"  required pattern="\d{10}">
                  </div>
                   <label style="padding-left: 10px;">Address</label>
                  <div class="form-group">
                     <input type="address" name="address"  class="form-control my-input" id="address"  required>
                  </div>
                  <label style="padding-left: 10px;">Password</label>
                   <div class="form-group">
                     <input type="password" name="password"  class="form-control my-input" id="password" required >
                  </div>
                
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm" style="background-color: lightgreen">Submit</button>
                  </div>
                
               </form>
               <br><br>
               <a href="<?php echo base_url('index.php/user_controller/login')?>"><h6>Already Registered..! Login Now</h6></a>
            </div>
             <div align="center">
         <a href="<?php echo base_url('index.php/User_controller/index')?>">
      <img src="<?php echo base_url('Asset/User/images/home.png')?>" style="height: 50px;width: 50px;">
      </a>
      </div>
         </div>

      </div>
   </div>
   <br><br>
   <br><br>
   <br><br>
</body>
</body>
</html>