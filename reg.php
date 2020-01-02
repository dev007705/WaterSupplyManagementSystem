<!DOCTYPE html >
<html>
<head>
<title>Registration</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #b6e6ff;
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

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #1159B7;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
text-align: center;
}
</style>
      
</head>
<body style="background-color: #b6e6ff;">
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
    <form action="regaction.php" method="POST" style="">
  <div class="container" style="padding: 16px; background-color: white; width: 600px; margin-top: 20px;">
    <h1 style="text-align: center;">New User Register</h1>
    <p style="text-align: center;">Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="phone"><b>Phone No.</b></label><br>
    <input type="text" placeholder="Enter Phone" name="phone" required><br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address"name="address" required>
    <hr>

    <p>By creating an account you agree to our <a href="termsncon.php">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
 
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

 <footer>
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