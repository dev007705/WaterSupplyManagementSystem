<?php
include('config.php'); 
if(isset($_SESSION['login_user'])){
header("location: user.php");
}
?>
<!DOCTYPE html >
<html>
<head>
<title>User login</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">

span {
color:red
}
h2
{
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}
hr
{
border:0;
border-bottom:1px solid;
margin:10px -40px;
margin-bottom:30px
}
#login
{
margin-bottom: 20px;
margin: auto;
margin-top: 20px;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:white;
}
body{
    background-color: #b6e6ff;
}
input[type=text],input[type=password]
{
width:96.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:20px;
}
input[type=submit]
{
width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
}

#logout
{
float:right;
padding:5px;
border:dashed 1px gray
}
a
{
text-decoration:none;
color:#6495ed
}
i
{
color:#6495ed
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
                <ul class="nav navbar-nav navbar-right" id="login-panel">
                    <li>
</div></ul>
            </div>
        </div>
    </nav>
<div id="login">
<h2>User Login</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<a href="reg.php">If not register then register from here</a>
<span><?php echo $error; ?></span>
</form>
</div>
<footer  style="background-color: #1159B7;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copy-right-bottom">
                    <span>"Site best viewed at 1024x768 resolution in I.E. 10 or above, Google Chrome 40 or above, Firefox 37 or above, Safari 8 or above."
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