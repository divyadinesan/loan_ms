<?php
$this->load->view('Admin/Layout/header');

?>

<div class="panel panel-default">
    <div class="panel-heading">
    User Request
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
            <th data-breakpoints="xs">ID</th>
            <th> Name</th>
            <th>Email</th>
            <th data-breakpoints="xs">Phone_number</th>
            <th data-breakpoints="xs">Address</th>
            <th data-breakpoints="xs">  Age</th>
           
           <th>Monthly_income</th>
           <th>Loan_amount</th>
           <th>Purpose</th>
        <!--    <th>tenure</th> -->
           <th>Loan_status</th>
          
          </tr>
        </thead>
        <tbody>
        	<?php
          $i=1;
          foreach($user_request as $row)
          {
          ?>
         
          <tr data-expanded="true">
           <td><?php echo $i?></td>
           <td><?php echo $row->Name?></td>
           <td><?php echo $row->Email?></td>
           <td><?php echo $row->Phone_number?></td>
           <td><?php echo $row->Address?></td>
           <td><?php echo $row->Age?></td>
         
           <td><?php echo $row->Monthly_income?></td>
           <td><?php echo $row->Loan_amount?></td>
           <td><?php echo $row->lc_category_name?></td>
          <!--  <td><?php echo $row->tenure?></td> -->
           <td><?php echo $row->Loan_status?></td>
                 
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