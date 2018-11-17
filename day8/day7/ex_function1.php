<?php
    //define function Greatest common divisor

  function Greatestcommondiv($a, $b){
      while ($a!=$b){
         if ($a>$b){
          $a=$a-$b;
        }
        else{
          $b=$b-$a;
        }
        return $a;
      }
  }

    $x=filter_input(INPUT_POST, "number_a");
    $y=filter_input(INPUT_POST,"number_b");
    $GCD="";
    
    $GCD="Greatest common divisor: ".Greatestcommondiv($x,$y);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Greatest common divisor</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="ex_function1.php" method="POST">
        <h2 class="form-signin-heading">greatest common divisor</h2>
        <label for="inputEmail" class="sr-only">Enter a number (A)</label>
        <input name ="number_a" type="text" id="inputEmail" class="form-control" placeholder="Enter a number" required autofocus>
        <label for="inputPassword" class="sr-only">Enter a number (B)</label>
        <input name ="number_b" type="text" id="inputPassword" class="form-control" placeholder="Enter a number" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Calculate</button>
        <br>       
        <label ><?php echo $GCD;?></label>
      </form>
      
    </div> <!-- /container -->
  </body>
</html>