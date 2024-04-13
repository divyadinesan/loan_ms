<?php 
$this->load->view('User/Layout/header');
?>


    <section class="contact py-5">
        <div class="container py-md-4 mt-md-3">
            <h2 class="heading-agileinfo">Upload Documents</h2>
            <span class="w3-line black"></span>
            <div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
                
                
                <div class="contact_grid_right mt-5">
                    <?php
                    
                      foreach($users as $user)
                      
                      ?>
                   
                    <form action="<?php echo base_url('index.php/user_controller/upload_documents_insert')?>" method="post" enctype="multipart/form-data">
                        <div class="contact_left_grid">
                            <label>Name</label>
                            <input type="text" name="name"  required="" value="<?php echo $user->User_Name?>">
                             <input type="hidden" name="user_id"  required="" value="<?php echo $user->User_id ?>">
                            <label>Email</label>
                            <input type="email" name="email" required="" value="<?php echo $user->User_Email?>">
                            <label>Phone</label>
                            <input type="text" name="phone"  required="" value="<?php echo $user->User_Phone_number?>">
                            
                            <label>Address</label>
                            <input type="text" name="address"  required="" value="<?php echo $user->User_Address?>"><br>
                            <?php
                            foreach ($loan as $value) 
                                ?>
                            <label>Monthly Income</label>
                            <input type="text" name="monthly_income"  required="" value="<?php echo $value->Monthly_income?>">
                            <label>Loan Amount</label>
                            <input type="text" name="loan_amount"  required="" value="<?php echo $value->Loan_amount?>">
                            <input type="hidden" name="loan_id"  required="" value="<?php echo $value->loan_id?>">
                            <label>Purpose</label>
                            <input type="text" name="purpose"  required="" value="<?php echo $value->lc_category_name?>">
                            <label>Aadhar</label><br>
                            <input type="file" name="aadhar"  required=""><br><br>
                            <label>Salary_Slip</label><br>
                            <input type="file" name="salary_slip"  required="" ><br><br>
                            <label>Asset_Document</label><br>
                            <input type="file" name="asset_document"  required="" ><br><br>
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