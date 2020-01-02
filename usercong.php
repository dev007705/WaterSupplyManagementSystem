<?php
session_start();
$quantity = $_POST['quantity'];
$payment = $_POST['payment'];
$watertype = $_POST['watertype'];
$transaction = $_POST['transaction'];
$username=$_SESSION['login_user'];
if (!empty($quantity)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "water";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT quantity From user Where quantity = ? Limit 1";
     $INSERT = "INSERT Into user (username,quantity,payment,watertype,transaction) values(?,?,?,?,?)";
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("ssss", $quantity,$payment,$watertype,$transaction);
     $stmt->execute();
     $stmt->bind_result($quantity);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss",$username, $quantity, $payment,$watertype,$transaction);
      $stmt->execute();
      $_SESSION['login_user'] = $username;
      echo "<script> window.location.assign('index.php');</script>";
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>