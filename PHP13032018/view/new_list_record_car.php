<!DOCTYPE html>
<html lang="en">
<head>
  <title>List users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Records</h2>
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Rental ID</th>
        <th>Car Reg No</th>
        <th>Customer ID</th>
       
        <th>Start_date</th>
        <th>End_date</th>
        <th>LastUpdated</th>        
      </tr>
    </thead>
    <tbody id="myTable">
      <?php 
      //$IDcar=Filter_input(INPUT_GET,'key');
        $records = Rental_recordsDB::get_Rental_records();
        foreach($records as $r){
      ?>
      <tr>
        <td><?php echo $r->getrental_id(); ?></td>
        <td><?php echo $r->getcar_reg_no(); ?></td>
         <td><?php echo $r->getcustomer_id(); ?></td>
        
        <td><?php echo $r->getstart_date(); ?></td>
        <td><?php echo $r->getend_date(); ?></td>
        <td><?php echo $r->getlastUpdate(); ?></td>   
      </tr>
      <?php }?>           
    </tbody>
  </table> 
  <br>
      <form class="form-signin" method="post" action="controller.php">
         <label>
         <a href="?action=add_new_record">Add new record</a>   
          </label>
    </form>

</div>



</body>
</html>