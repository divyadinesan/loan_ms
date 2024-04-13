<?php
$this->load->view('Admin/Layout/header');

?>

<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Update Loan Category
                        </header>
                         <?php
                               foreach ($loan_cat as $cat) 
                               ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Admin_controller/loan_cat_update/'.$cat->lc_category_id)?>">
                                   
                              <!--   <div class="form-group">
                                    <label for="exampleInputEmail1">choose Loan Name</label>
                                    <select class="form-control" id="exampleInputPassword1" name="loan_id">
                                        <?php
                                        foreach ($loan as $ln) {
                                            ?>
                                           <option value="<?php echo $ln->loan_id?>"><?php echo $ln->loan_name?></option>
                                           <?php
                                        }
                                        ?>
                                        
                                    </select>
                                </div> -->
                              
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Category Name</label>
                                    <input type="text" name="loan_category_name" class="form-control" id="exampleInputPassword1" required="" value="<?php echo $cat->lc_category_name?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Interest</label>
                                    <input type="text" name="interest" class="form-control" id="exampleInputPassword1" required="" value="<?php echo $cat->lc_interest?>">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Limit</label><br>
                                    <textarea id="w3review" name="loan_limit" rows="7" cols="88"><?php echo $cat->lc_limit?></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Tenure</label><br>
                                    <textarea id="w3review" name="tenure" rows="7" cols="88"><?php echo $cat->lc_tenure?></textarea>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

<?php

$this->load->view('Admin/Layout/footer');
?>