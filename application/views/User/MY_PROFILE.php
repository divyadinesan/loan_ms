<?php 
$this->load->view('User/Layout/header');
?>


    <section class="contact py-5">
        <div class="container py-md-4 mt-md-3">
            <h2 class="heading-agileinfo">MY PROFILE</h2>
            <span class="w3-line black"></span>
            <div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
                
                
                <div class="contact_grid_right mt-5">
                    <?php
                    foreach ($user as $usr) 
                       
                    ?>
                    <form action="<?php echo base_url('index.php/User_controller/update_password')?>" method="post">
                        <div class="contact_left_grid">
                            <label>Name</label>
                            <input type="text" name="name"  required="" value="<?php echo $usr->User_Name?>">
                            <label>Email</label>
                            <input type="email" name="email" required="" value="<?php echo $usr->User_Email?>"readonly>
                            <label>Phone</label>
                            <input type="text" pattern="\d{10}" name="phone"  required="" value="<?php echo $usr->User_Phone_number?>">
                            
                            <label>Address</label>
                            <input type="text" name="address"  required="" value="<?php echo $usr->User_Address?>">
                            <label>Password</label>
                            <input type="text" name="password"  required="" value="<?php echo $usr->User_Password?>">
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