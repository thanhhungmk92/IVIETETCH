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
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
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
        <td><a href="?key=<?php echo $u;?>&action=edit">Edit</a></td>  
        <td><a href="?key=<?php echo $u;?>&action=delete">Delete</a></td>      
      </tr>
      <?php }?>           
    </tbody>
  </table> 
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