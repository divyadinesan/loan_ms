<?php 
$this->load->view('User/Layout/header');
?>


  <section class="services py-5">
        <div class="container py-md-4 mt-md-3"> 
            <h2 class="heading-agileinfo">Loan Products We Offer <span>Speed Up the Loan Process</span></h2>
            <span class="w3-line black"></span>
            <div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
<?php
foreach ($loan_cat as $ln) {
    
?>      <div class="col-md-4 w3layouts_news_left_grid1">
                    <div class="new_top">
                             
                        <h5 class="mb-3 mt-3"><?php echo $ln->lc_category_name?></h5>
                         <h5 style="font-family: Times New Roman, Times, serif"><p style="color: red;fo">Interest :</p><?php echo $ln->lc_interest?></h5><br>
                         <h5 style="font-family: Times New Roman, Times, serif"><p style="color: red;fo">Loan Limit:</p><?php echo $ln->lc_limit?></h5><br>
                         <h5 style="font-family: Times New Roman, Times, serif"><p style="color: red;fo">Tenure :</p><?php echo $ln->lc_tenure?></h5><br>
                        <a href="<?php echo base_url('index.php/user_controller/user_home/'.$ln->lc_category_id)?>"><button style="background-color: green;color: white">Apply Now</button></a>
                       
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