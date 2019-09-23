<?php
	session_start();
	require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
	font-size: 120%;
	background-image: url("sports-massage.jpg");
	background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
  }


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
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

.table{
  border-radius : 10px;
	background-color: white;
	border: 3px solid #133783;
	width: 376px;
	margin: 0 auto;
}
.content {
  width: 80%;
  margin: 0px auto;
  text-align: center;
  font-size: 40px;
  padding: 20px;
  border: 3px solid blue;
  border-top: none;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="contact.php">Contact Us</a>
  <a href="about.php">About Me</a>
  <a href="cancellation.php">Cancel Appoinment</a>
  <a href="appointment.php">Make Appoinment</a>
  <a href="login.php">Sign In</a>
  <a href="home.php">Home</a>
</div>
<div>
<h1>Welcome to Sports Massage Hamilton<h1>
</div>
<div>
<!-- notification message -->
    <h3>
    Your appointment has been cancelled!!!
    </h3>
    <h3>Email us: ann@hotmail.co.nz<br> nam@gmail.com</h3>

</div>
</body>
</html>
