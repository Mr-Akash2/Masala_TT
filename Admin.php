<?php
    $db = mysqli_connect("localhost","root","","my_tt_db");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="TT_logo.png" type="image/x-icon"> 
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a href="#Admin" class="navbar-brand"><img src="TT_logo.png" alt="" id="logo" class="d-inline-block align-text-center"></a>
    <a class="navbar-brand align-text-center" href="#" id="admin"> 
      Admin 
    </a>
    </ul>
  </div>
</nav>
<br>

    <div id="tab"></div>
    <div class="container">
    <button id="reff" type="button" class="w-50 btn btn-warning btn-lg d-grid mx-auto">Refresh</button>
    </div>
</div><br>
<section id="footer" class="bg-light">

<a href=""><img src="instagram.png" alt="insta-img" class="social-media"></a>
<a href=""><img src="whatsapp.png" alt="insta-img" class="social-media"></a>
<a href=""><img src="facebook.png" alt="insta-img" class="social-media"></a>
<a href=""><img src="twitter.png" alt="insta-img" class="social-media"></a>

<p class="footer-txt">
    © Copyright 2021 Mahesh Value Products
</p>
</section>
</body>
<script src="bootstrap-5.0.2-dist/js/jquery.min.js"></script>
<script src="scriptjs.js"></script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</html>
