<?php 
$this->load->view('User/Layout/header');
?>
<style type="text/css">
	td{
		padding: 10px;
	}
</style>
<section class="services py-5">
	
		<div class="container py-md-4 mt-md-3"> 
			<h2 class="heading-agileinfo">Loan Status</h2>
			<span class="w3-line black"></span>
			
			<div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
				<?php
	foreach($loan as $ln)
	{
	?>
				<div class="col-md-4 w3layouts_news_left_grid1">
					<div class="new_top">
						<table border="1px">
						<tr>		

						<td><h5 class="mb-3 mt-3">Name : </td><td><?php echo $ln->Name?></h5>
						</td></tr>


						<tr><td>
						<h5 class="mb-3 mt-3">Purpose: </td><td><?php echo $ln->lc_category_name?></h5></td></tr>
						<tr><td>
						<h5 class="mb-3 mt-3">Monthly_income: </td><td><?php echo $ln->Monthly_income?></h5></td></tr>
						<tr><td>
						<h5 class="mb-3 mt-3">	Loan_amount: </td><td><?php echo $ln->Loan_amount?></h5>
						</td></tr>
						<tr><td>
						<h5 class="mb-3 mt-3" >tenure: </td><td ><?php echo $ln->lc_tenure?></h5></td></tr>
						<tr><td>
						<h5 class="mb-3 mt-3">Interest: </td><td ><?php echo $ln->lc_interest?></h5></td></tr>
						<tr><td>
						<h5 class="mb-3 mt-3">Loan_status: </td><td><?php echo $ln->Loan_status?></h5></td></tr>
						<br>
						<?php
						if($ln->Loan_status=='Pending' or $ln->Loan_status=='Rejected')
						{
						?>
						<tr ><td colspan="2">
                  <a href="<?php echo base_url('index.php/User_controller/cancel_loan/'.$ln->loan_id)?>">
                  	
					<button class="btn btn-danger btn-lg" style="border-radius:10px; width: 280px;">Cancel</button>
					</a>
					</td></tr>
					<?php
				}
				elseif($ln->Loan_status=='Approved' and $ln->document_status=='Pending')
				{
				?>
				<tr ><td colspan="2">
				<a href="<?php echo base_url('index.php/User_controller/upload_documents/'.$ln->loan_id)?>">

					<button class="btn btn-success btn-xs" style="border-radius:10px; width: 280px;">Upload Documents</button>
					</a>
					</td></tr>
				<?php
				}
				?>
					</div>
					</table>
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