<?php
 $this->load->view('Admin/Layout/header');   
?>

 <div class="panel panel-default">
    <div class="panel-heading">
    Manage Loan
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
            <th> Loan Name</th>
            <th>Loan Image</th>
            <th>Edit</th>
            <th>Delete</th>
          
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          foreach($loan as $row)
          {
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
             <td><?php echo $row->loan_name?></td>
              <td><img src="<?php echo base_url('Asset/Admin/loan_image/'.$row->loan_image)?>" style="height: 50px;width: 50px"></td>
               <td>
                <a href="<?php echo base_url('index.php/Admin_controller/loan_fetch/'.$row->loan_id)?>"><button style="background-color: green;color: white;border-radius: 10px;width: 80px;height: 30px">Edit</button></a>
              </td>
                <td>
                  <a href="<?php echo base_url('index.php/Admin_controller/loan_delete/'.$row->loan_id)?>"><button style="background-color: red;color: white;border-radius: 10px;width: 80px;height: 30px">Delete</button></a>
                </td>
                 
                            
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
