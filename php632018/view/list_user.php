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
  <h2>Filterable Table</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <form method="post" action="user_controller.php">
    <input class="form-control" id="myInput" type="text" placeholder="Search.." name="search_value">
    <input type="hidden" name="action" value ="search_user">
   <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
  </form>
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Edit</th>
        <th>Delete</th>        
      </tr>
    </thead>
    <tbody id="myTable">
      <?php 
        $users = get_users();
        foreach($users as $u => $v){
      ?>
      <tr>
        <td><?php echo $v['IDuser']; ?></td>
        <td><?php echo $v['email']; ?></td>
         <td><?php echo $v['password']; ?></td>
        <td><?php echo $v['first_name']; ?></td>
        <td><?php echo $v['last_name']; ?></td>
        <td><a href="?key=<?php echo $v['IDuser'];?>&action=edit_user">Edit</a></td>  
        <td><a href="?key=<?php echo  $v['IDuser'];?>&action=delete">Delete</a></td>      
      </tr>
      <?php }?>           
    </tbody>
  </table> 
</div>



</body>
</html>