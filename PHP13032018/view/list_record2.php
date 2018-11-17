<!DOCTYPE html>
<html lang="en">
<head>
  <title>List users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Public/css/css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="table-users">
   <div class="header">Data Car</div>
   <h4 align="center"><a href='?action=add_new_record'> Home </a></h4>
   
   <table cellspacing="0">
      <tr>
         <th>CardID</th>
         <th>Category</th>
         <th>Brand</th>
         <th>Daily Rate</th>
         <th> View Detail</th>
      </tr>
    
      <?php 
        $car = CarDB::get_car();
        foreach($car as $c){
      ?>
      <tr>
        <td><?php echo $c->getcar_reg_no(); ?></td>
        <td><?php echo $c->getcategory(); ?></td>
         <td><?php echo $c->getbrand(); ?></td>
        <td><?php echo $c->getdaily_rate(); ?></td>
        <td><label><a href="?key=<?php echo $c->getcar_reg_no();?>&action=view_details">View Details</label></h5></td>  
   
      </tr>
      <?php }?>           

  </table> 
</div>

</body>
</html>