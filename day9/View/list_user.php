<?php
  global $users;
  require_once('../Model/user_db.php');
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
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
      foreach($users as $u=>$v) {

      ?>
      <tr>
        <td><?php echo $v['user_name'];?></td>
        <td><?php echo $v['password'];?></td>
        <td><?php echo $v['firstname'];?></td>
        <td><?php echo $v['lastname'];?></td>
        <td><a href="?key=<?php echo $u;?>$action=edit">Edit</td>
        <td><a href="?key=<?php echo $u;?>$action=delete">Delete</td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
