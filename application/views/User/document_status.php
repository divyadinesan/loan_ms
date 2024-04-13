<?php 
$this->load->view('User/Layout/header');
?>
<style type="text/css">
	td{
		padding: 15px;
	}
</style>
<section class="services py-5">
	
		<div class="container py-md-4 mt-md-3"> 
			<h2 class="heading-agileinfo">Document Status</h2>
			<span class="w3-line black"></span>
			
			<div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
				<?php
				foreach($ds as $fetch)
				{
				?>
				<div class="col-md-4 w3layouts_news_left_grid1">
					<div class="new_top">
						<table border="1px">
						<tr>
									
						<td><h5 class="mb-3 mt-3">Name :</td><td><?php echo $fetch->User_Name?> </h5></td></tr>
						<tr><td><h5 class="mb-3 mt-3">Monthly_income:</td><td><?php echo $fetch->monthly_income?></h5></td></tr>
						<tr><td><h5 class="mb-3 mt-3">Loan_amount:</td><td><?php echo $fetch->loan_ammount?></h5></td></tr>
						<tr><td><h5 class="mb-3 mt-3">Document_Status:</td><td><?php echo $fetch->document_status?></h5></td></tr>
						
						<br>
						</tr></table>
				
					</div>
				</div>
				<?php
			}
			?>
			 	
	</div>
	 
</div>
</section>



<?php 
$this->load->view('User/Layout/footer');
?>