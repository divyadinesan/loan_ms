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
            <th> Loan Category Name</th>
            <th>Loan Interest</th>
             <th>Loan Limit</th>
              <th>Loan Tenure</th>
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
             <td><?php echo $row->lc_category_name?></td>
               <td><?php echo $row->lc_interest?></td>
                 <td><?php echo $row->lc_limit?></td>
                   <td><?php echo $row->lc_tenure?></td>
              
                <td>
                <a href="<?php echo base_url('index.php/Admin_controller/loan_cat_fetch/'.$row->lc_category_id)?>"><button style="background-color: green;color: white;border-radius: 10px;width: 80px;height: 30px">Edit</button></a>
              </td>
                <td>
                  <a href="<?php echo base_url('index.php/Admin_controller/loan_cat_delete/'.$row->lc_category_id)?>"><button style="background-color: red;color: white;border-radius: 10px;width: 80px;height: 30px">Delete</button></a>
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
