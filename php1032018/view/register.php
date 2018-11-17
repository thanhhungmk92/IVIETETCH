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

      <form class="form-signin" method="post" action="user_controller.php">
        <h2 class="form-signin-heading">ADD USER</h2>
        
        <input type="text" name="email"  class="form-control" placeholder="Email" required autofocus>
        <br>
        
         <input type="password" name="password"  class="form-control" placeholder="Password" required>
        <br>
        <input type="text" name="first_name"  class="form-control" placeholder="First name" required autofocus>

        <br>
        <input type="text" name="last_name" class="form-control" placeholder="Last name" required>        
         <br>
        <input type="hidden" name="action" value="Register">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Add User</button>
        <br>
        <label>
         <a href="?action=show_list_user">Show list user</a>   
          </label>
      </form>

    </div> <!-- /container -->
  </body>
</html>