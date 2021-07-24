<?php
    
  $con = mysqli_connect("localhost","root","","my_tt_db");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="container" id="table">
    <div class="table-responsive-sm">
    <table class="table table-dark table-striped table-hover rounded-3 text-center">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Country</th>
        <th>Message</th>
    </tr>
    </thead>
    <?php
 $db = "select * from data";
 $result = $con->query($db);
 while ($row = $result->fetch_assoc())
 {
?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['number'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['Message'];?></td>
    </tr>
    <?php } ?>
    </table>
    </div>
</div>
</body>
<script src="bootstrap-5.0.2-dist/js/jquery.min.js"></script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</html>
