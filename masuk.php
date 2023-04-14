<!DOCTYPE html>
<?php
// Memasukkan session.php untuk memeriksa login
require_once 'login.php';
?>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">

    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light flex-md-column">
        <div class="container-fluid">
            <div class="navbar-brand"><img src="image/logo.png" alt=""></div>
    </nav>
<div class="container">
    <h2 style="padding-top: 58px">Login</h2>
<form action="auth.php" method="post">
  <div class="container">
    <label for="uname" style="padding-right: 132px"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <div class="container"></div>
    <label for="psw" style="padding-right: 132px"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>
  </div>
</form>
</body>
</html>
