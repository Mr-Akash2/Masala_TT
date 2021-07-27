<?php
 $con =  mysqli_connect('localhost', 'root', '', 'my_tt_db');
 $sql ="delete from data where id=".$_POST['id'];
 $con->query($sql);
?>