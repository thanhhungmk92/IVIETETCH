<?php
//Define array of users
  $users = array();
  $users['u1']=array('ID'=>'1','user_name'=>'tan@gmail.com','pass_word'=>'12345');
  $users['u2']=array('ID'=>'2','user_name'=>'admin@gmail.com','pass_word'=>'12345');
  $users['u3']=array('ID'=>'3','user_name'=>'user@gmail.com','pass_word'=>'12345');
  $users['u4']=array('ID'=>'4','user_name'=>'ha@gmail.com','pass_word'=>'12345');
  $users['u5']=array('ID'=>'5','user_name'=>'lan@gmail.com','pass_word'=>'12345');

  function check_user($users,$user_name,$pass){
    $check_value=FALSE;
    foreach($users as $u => $v){
      if($v['user_name']==$user_name && $v['pass_word']==$pass){
        $check_value=TRUE;
        break;
      }      
    }
    return $check_value;
  }
    $result_check="";
    $name='userid'; 
    $value=filter_input(INPUT_POST,'user');
    $pass=filter_input(INPUT_POST,'pass');

    $action=filter_input(INPUT_POST,'action');
    if (isset($action)){
      $remember=filter_input(INPUT_POST,'remember');
      if (!empty($remember)){
        if (isset($value)){
         setcookie($name,$value,time()+2*24*60*60); 
        }        
      }
      if (check_user($users,$value,$pass)){
        header("location:welcome.php");
      }
      else{
        $result_check ="Username or password not valid";
      }

    }
    if (isset($_COOKIE['userid'])){
      $user=$_COOKIE['userid'];
    }
    else{
      $user='';
    }
    
?>
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
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="ex_cookies_user.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="user" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?php echo $user;?>">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" value="remember-me"> Remember me
          </label>
        </div>
        <input type="hidden" name="action" value="login">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
        <label>
            <?php
              echo $result_check;
            ?>
          </label>
      </form>

    </div> <!-- /container -->
  </body>
</html>