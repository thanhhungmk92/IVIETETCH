<?php

  require_once('../model/user_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>List view</title>
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
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <a href="?action=form_add_user">Add user</a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>BookID</th>
        <th>Name</th>
        <th>Authur</th>
        <th>Year</th>
        <th>Production</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
      $users = $_SESSION['user'];
      foreach($users as $u=>$v) {
      ?> 
      <tr>
        <td><?php echo $v['bookID'];?></td>
        <td><?php echo $v['name'];?></td>
        <td><?php echo $v['authur'];?></td>
        <td><?php echo $v['publishingyear'];?></td>
        <td><?php echo $v['production'];?></td>
        <td><a href="?key=<?php echo $u;?>&action=form_update_user">Edit</td>
        <td><a href="?key=<?php echo $u;?>&action=delete_user">Delete</td>
           
      </tr>
      <?php }?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>



</body>
</html>
