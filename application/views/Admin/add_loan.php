<?php
$this->load->view('Admin/Layout/header');

?>

<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Add Loan
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Admin_controller/loan_insert')?>">
                                   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loan Name</label>
                                    <input type="text" name="loan_name"  class="form-control" id="exampleInputEmail1" required="">
                                </div>
                               

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Image</label>
                                    <input type="file" name="loan_image" class="form-control" id="exampleInputPassword1" required="">
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