<?php 
$this->load->view('User/Layout/header');
?>


  <section class="services py-5">
        <div class="container py-md-4 mt-md-3"> 
            <h2 class="heading-agileinfo">Loan Products We Offer <span>Speed Up the Loan Process</span></h2>
            <span class="w3-line black"></span>
            <div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
<?php
foreach ($loan as $ln) {
    
?>
                <div class="col-md-4 w3layouts_news_left_grid1">
                    <div class="new_top">
                        <img src="<?php echo base_url('Asset/Admin/loan_image/'.$ln->loan_image)?>" style="height: 80px;width: 60px">      
                        <h4 class="mb-3 mt-3"><?php echo $ln->loan_name?></h4>
                        <a href="<?php echo base_url('index.php/user_controller/loan_category/'.$ln->loan_id)?>"><button>More Information</button></a>
                       
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