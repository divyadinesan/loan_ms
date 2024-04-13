<?php
 $this->load->view('Admin/Layout/header');   
?>

 <div class="panel panel-default">
    <div class="panel-heading">
     User Details
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
            <th>Phone number</th>
            <th>Address</th>
          
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($user_details as $row)
          {
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
             <td><?php echo $row->User_Name?></td>
              <td><?php echo $row->User_Email?></td>
               <td><?php echo $row->User_Phone_number ?></td>
                <td><?php echo $row->User_Address?></td>
                 
                            
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
