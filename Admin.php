<?php
$db = mysqli_connect("localhost", "root", "", "my_tt_db");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/TT_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/8936e4ca13.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="#Admin" class="navbar-brand"><img src="assets/img/TT_logo.png" alt="" id="logo"
                    class="d-inline-block align-text-center"></a>
            <a class="navbar-brand align-text-center" href="#" id="admin">
                Admin
            </a>
            </ul>
			<div>
        <button id="addData" type="button" class="btn btn-warning btn-lg"
            data-bs-toggle="modal" data-bs-target="#exampleModalCenter" title="Add data"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg mb-1"
                viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
            </svg>
        </button>
    </div>
        </div>
    </nav>

    <br>

    <br>


    <div id="tabh"></div><br>
    <div class="container">
        <button id="reff" type="button" class="w-50 btn btn-warning btn-lg d-grid mx-auto">Refresh</button>
    </div>
    </div><br>
    <section id="footer" class="bg-light">

        <a href=""><img src="assets/img/instagram.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="assets/img/whatsapp.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="assets/img/facebook.png" alt="insta-img" class="social-media"></a>
        <a href=""><img src="assets/img/twitter.png" alt="insta-img" class="social-media"></a>

        <p class="footer-txt">
            © Copyright 2021 Mahesh Value Products
        </p>
    </section>
    <script src="bootstrap-5.0.2-dist/js/jquery.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>
    <script src="script.js"></script>
    <script>
    $(document).ready(function() {
        load();
    });
    $("#reff").click(function() {
        load();
    });

    function load() {
        $("#tabh").load("table.php");

    }
    </script>
</body>



</html>