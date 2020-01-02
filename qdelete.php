<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'water');
$id=$_GET['id'];
$q=" DELETE FROM `user` WHERE id=$id ";
mysqli_query($con,$q);
header('location:dashboard.php');