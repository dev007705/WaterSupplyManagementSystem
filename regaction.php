<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address=$_POST['address'];
if (!empty($username) || !empty($password) || !empty($email) || !empty($phone) || !empty($address)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "water";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From reg Where email = ? Limit 1";
     $INSERT = "INSERT Into reg (username, password, email, phone, address) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssis", $username, $password, $email, $phone, $address);
      $stmt->execute();
      $_SESSION['logged']=true; 
      $_SESSION['login_user'] = $username;
      echo "<script> window.location.assign('user.php');</script>";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>