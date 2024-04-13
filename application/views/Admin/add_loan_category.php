<?php
$this->load->view('Admin/Layout/header');

?>

<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Add Loan Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Admin_controller/loan_category_insert')?>">
                                   
                                <div class="form-group">
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
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Category Name</label>
                                    <input type="text" name="loan_category_name" class="form-control" id="exampleInputPassword1" required="">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Interest</label>
                                    <input type="text" name="interest" class="form-control" id="exampleInputPassword1" required="">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Limit</label>
                                    <input type="text" name="loan_limit" class="form-control" id="exampleInputPassword1" required="">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Tenure</label>
                                    <input type="text" name="tenure" class="form-control" id="exampleInputPassword1" required="">
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