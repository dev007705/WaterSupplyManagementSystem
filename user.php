
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	  <style type="text/css">
	 
   .topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.middle img{
	width: 100%;
	margin-top: 0px;
	left: 0;
	right: 0;
}
.card{
	margin-left: 120px;
	margin-right: 120px;
	margin-top: 40px;
}
.heading{
	text-align: center;
}
.l{
  font-size: 30px;
  padding: 5px;
}
.use{
  font-size: 20px;
  color: white;
}
footer{
      border-top: 1px solid #0278BA;
      padding: 10px 0;
      width: 100%;
      text-align: center;
      margin: 30px 0 0;
      background-color: #ddd;
}
.navbar li:hover{
        background-color: silver;
    }  
ul li ul.dropdown{
        background: #f2f2f2;
        color: black;
        display: none;
        padding: 0px;
        position: absolute;
        z-index: 999;
       
    }
ul li:hover ul.dropdown{
        display: block; 
}
ul li ul.dropdown li{
        display: block;
}
</style>
      
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1159B7;">
        <img src="logo.jfif" height="80px" width="120px" alt="Logo not found" style="border-radius: 20px; margin-left: 20px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand"style="font-size:32px; color: white; href="#">Water Supply</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                    <li class="nav-item ">
                        <a class="nav-link ml-2 active"style="font-size:22px; color: white;" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                        <li><a class="nav-link ml-2"style="font-size:22px; color: white;" href="#">Login</a>
                            <ul class="dropdown" style="list-style-type: none;">
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="login.php">As User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white; " href="admin.php">As Admin</a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="contactus.php">Contact Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="login-panel" style="color: white;">
                    <li>

  <div class="use">
    <?php
session_start(); 
if($_SESSION['login_user']!="admin"){
?>
 
<li class='active' style='float:right;'>
  <?php 
  if(isset($_SESSION['login_user'])){
  if($_SESSION['logged']==true)
    { 
      echo $_SESSION['login_user'];
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="reg.html"><span>Login/Register</span></a></li>';
    }
}
  ?>
</div></ul>
            </div>
        </div>
    </nav>
    <br><h2 style="text-align: center; font-style: italic;">Place Your Order</h2>

<div style="width: 150px; font-size: 20px; padding: 2px; margin-left: 20px; background-color: #1159B7; text-decoration: none;">
  <a href="https://retail.onlinesbi.com/retail/login.htm" style="color: white;">Online Payment</a>
</div>	
<h6 style="text-align: center;color: red; font-style: italic;">* Online payment user first payment then place order</h6>
<form action="usercong.php" method="POST">
 
 <br><br><div class="card" style="width: 500px; margin: auto; padding: 10px;">

 <h4> Quantity </h4>
 <input type="text" name="quantity" class="form-control" placeholder="quantity in Litre"><br>
 <h4> Payment method </h4>
 <input type="radio" name="payment" value="COD" checked style="margin-top: 5px;">Cash on Delivery<br>
  <input type="radio" name="payment" value="net">Online Pay<br><br>
  <h6>Transaction id (only for online payment user) </h6>
  <input type="text" name="transaction"><br>
  <h4>Type of water</h4>
  <input type="radio" name="watertype" value="drinking" checked style="margin-top: 5px;">Normal Water<br>
  <input type="radio" name="watertype" value="normal">Drinking Water<br>

 <button class="btn btn-success" type="submit" name="done" style="background-color: #1159B7;"> Submit </button><br>

 </div>
 </form>

<?php
}else{
  echo "You are admin";
}
?>
<br>
<div class="container" style="margin-right: 5px;">
      <h4>Previous order</h4>
        <div class="col-lg-12">
          <table class="table table-striped table-hover table-bordered">
          <tr>
            <th>Quantity</th>
            <th>Payemnt</th>
            <th>WaterType</th>
            <th>Transaction</th>
            <th>Delete</th>
          </tr>
          <?PHP

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'water');

  $set=$_SESSION['login_user'];
  $query = " SELECT `id`, `username`, `quantity`,`payment`,`watertype`,`transaction` FROM `user` where username='$set' ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);

  if($num > 0){
    while($user = mysqli_fetch_array($queryfire)){
      ?>
          <tr>
            <td><?php echo $user['quantity']; ?></td>
            <td><?php echo $user['payment']; ?></td>
            <td><?php echo $user['watertype']; ?></td>
            <td><?php echo $user['transaction']; ?></td> 
            <td> <button class="btn-danger btn"> <a href="q1delete.php?id=<?php echo $user['id']; ?>" class="text-white"> Cancel Order </a>  </button> </td>
          </tr>
          <?php
             }
          }
          ?>
        </table>
        </div>
    
</div>
<br>

<footer  style="background-color: #1159B7;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copy-right-bottom" style="color: white;">
                    <span style="color: red;">"Site best viewed at 1024x768 resolution in I.E. 10 or above, Google Chrome 40 or above, Firefox 37 or above, Safari 8 or above."
          </span>
          <ul class="f-menu" style="list-style-type:none">
            <li><a href="termsncon.php">Terms & Conditions</a></li>
            <p class="copy-right-union">Copyright &copy; All rights reserved</p>
          </ul>
          
        </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>