<?php 
$this->load->view('User/Layout/header');
?>

<?php
foreach ($category as $cat) 
?>
	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Loan Application</h2>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
				
				
				<div class="contact_grid_right mt-5">
					
					<form action="<?php echo base_url('index.php/user_controller/loan_apply')?>" method="post">
						<?php
						foreach($user as $row)
						?>
						<div class="contact_left_grid">
							<input type="hidden" name="category_id" value="<?php echo $cat->lc_category_id?>">
							<label>Name</label>
							<input type="text" name="name" placeholder="Name" required="" value="<?php echo $row->User_Name?>">
							<label>Email</label>
							<input type="email" name="email" placeholder="Email" required="" value="<?php echo $row->User_Email?>" readonly>
							<label>Phone</label>
							<input type="text" name="phone" placeholder="Phone" required="" value="<?php echo $row->User_Phone_number?>" pattern="\d{10}">
							
                            <label>Address</label>
							<input type="text" name="address" placeholder="Address" required=""  value="<?php echo $row->User_Address?>">
							<label>Age*</label>
							<input type="text" name="age"required="" pattern="\d{2}">
				
                          <br><br>
                            <label>Monthly_income*</label>
							<input type="text" name="monthly_income"required="">

							<label>Enter Loan_amount*</label>
							<input type="text" name="loan_amount" required="">
							

							<br><br>
							
							
							<input type="submit" value="Submit">
							
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>






<?php 
$this->load->view('User/Layout/footer');
?>