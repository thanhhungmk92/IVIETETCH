<!DOCTYPE html>
<html lang="en">
<head>
  <title>List users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Car</h2>
  <label>
   <a href='?action=add_new_record'> Home </a></label>
  <br>  <br>
  <table class="table table-bordered table-striped ">
    <thead>
      <tr>
        <th>NO.</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Daily Rate</th>
        <th>View Details</th>        
      </tr>
    </thead>
    <tbody id="myTable">
      <?php 
        $car = CarDB::get_car();
        foreach($car as $c){
      ?>
      <tr>
        <td><?php echo $c->getcar_reg_no(); ?></td>
        <td><?php echo $c->getcategory(); ?></td>
         <td><?php echo $c->getbrand(); ?></td>
        <td><?php echo $c->getdaily_rate(); ?></td>
        <td><a href="?key=<?php echo $c->getcar_reg_no();?>&action=view_details">View Details</a></td>   
   
      </tr>
      <?php }?>           
    </tbody>
  </table> 
</div>



</body>
</html>