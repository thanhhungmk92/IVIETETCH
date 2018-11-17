<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Add user</title>
    <!-- Bootstrap core CSS -->
    <link href="../Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Public/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="controller.php">
        <h2 class="form-signin-heading">ADD Rental Records</h2>
        
        <input type="text" name="rental_id"  class="form-control" placeholder="rental_id" required autofocus>
        <br>
         <select name="car_reg_no" class="form-control" >
          <?php
            $car = CarDB::get_car();
             foreach($car as $c ) : 
            ?>
                <option value="<?php echo $c->getcar_reg_no(); ?>">
                    <?php echo $c->getcar_reg_no(); ?>
                </option>
            <?php endforeach; ?>
            </select><br>
            <select name="customer_id" class="form-control" >
        <?php
            $customer = CustomerDB::get_customer();
             foreach($customer as $c ) : 
            ?>
                <option value="<?php echo $c->getcustomer_id(); ?>">
                    <?php echo $c->getcustomer_id(); ?>
                </option>
            <?php endforeach; ?>
            </select><br>
        <input type="text" name="name" class="form-control" placeholder="name" required>    
        <br>
        <input type="text" name="star_date" class="form-control" placeholder="star_date" required>   

        <br>
        <input type="text" name="end_date" class="form-control" placeholder="end_date" required> 
        <br>
        <input type="text" name="lastUpdate" class="form-control" placeholder="lastUpdated" required> 

         <br>
        <input type="hidden" name="action" value="add_Rental_records">

        <button class="btn btn-lg btn-primary btn-block btn-outline-danger" type="submit">Add </button>
        <br>
        
          <label>
         <a href="?action=show_car">Show Car</a>   
          </label>
      </form>

    </div> <!-- /container -->
  </body>
</html>