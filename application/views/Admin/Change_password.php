<?php
$this->load->view('Admin/Layout/header');

?>

<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            CHANGE PASSWORD
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="<?php echo base_url('index.php/Admin_controller/update_password')?>">
                                    <?php
                                    foreach($admin as $row)

                                    ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" readonly class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $row->Admin_Email?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row->Admin_Password?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="text" name="new_Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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