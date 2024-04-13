<?php
$this->load->view('Admin/Layout/header');

?>
<?php
foreach ($loan as $ln) 
?>
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Update Loan
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Admin_controller/loan_update/'.$ln->loan_id)?>">
                                   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loan Name</label>
                                    <input type="text" name="loan_name"  class="form-control" id="exampleInputEmail1" required="" value="<?php echo $ln->loan_name?>">
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loan Image</label><br>
                                    <img src="<?php echo base_url('Asset/Admin/loan_image/'.$ln->loan_image)?>" style="height: 60px;width: 60px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Upload New Loan Image</label>
                                    <input type="file" name="loan_image" class="form-control" id="exampleInputPassword1" >
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