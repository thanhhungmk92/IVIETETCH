<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Public/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="User_controller.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">First Name</label>
        <input type="text" name="first_name" id="inputPassword" class="form-control" placeholder="First Name" required>
        <label for="inputPassword" class="sr-only">Last Name</label>
        <input type="text" name="last_name" id="inputPassword" class="form-control" placeholder="Last Name" required>
                
        <input type="hidden" name="action" value="register">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add User</button>
        <br>
        <label>
            
          </label>
      </form>

    </div> <!-- /container -->
  </body>
</html>