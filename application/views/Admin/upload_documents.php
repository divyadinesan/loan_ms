<?php
$this->load->view('Admin/Layout/header');

?>

<div class="panel panel-default">
    <div class="panel-heading">
     User Documents
    </div>
    <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">SL.NO</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Loan_Purpose</th>
            <th>Monthly_Income</th>
            <th>Loan_Ammount</th>
            <th>Document Status</th>
            <th>Aadhar</th>
            <th>Salary_Slip</th>
            <th>Asset_Document</th>
            <th>Approve</th>
            <th>Reject</th>
          
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach ($documents as $ud) {
          	
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $ud->User_Name?></td>
            <td><?php echo $ud->User_Email?></td>
            <td><?php echo $ud->lc_category_name  ?></td>
            <td><?php echo $ud->monthly_income?></td>
            <td><?php echo $ud->loan_ammount?></td>
            <td><?php echo $ud->document_status?></td>
            <td><img src="<?php echo base_url('Asset/User/Aadhar/'.$ud->Aadhar)?>"></td>
            <td><object data="<?php echo base_url('Asset/User/Salary_slip/'.$ud->salary_slip)?>" width="300" height="300" type="application/pdf"> PDF Plugin Not Available </object></td>
             <td><object data="<?php echo base_url('Asset/User/asset_document/'.$ud->asset_document)?>" width="300" height="300" type="application/pdf"> PDF Plugin Not Available </object></td>
             <td><a href="<?php echo base_url('index.php/Admin_controller/user_document_approve/'.$ud->loan_id)?>"><button style="border-radius: 5px;background-color:green;color:white;">Approve</button></a></td>
              
              <td><a href="<?php echo base_url('index.php/Admin_controller/user_document_reject/'.$ud->loan_id)?>"><button style="border-radius: 5px;background-color:red;color:white;">Reject</button></a></td>

                 
                            
         </tr>
         <?php
         $i++;
     }
     ?>
         
        </tbody>
      </table>
    </div>
  </div>

<?php

$this->load->view('Admin/Layout/footer');
?>