
<?php
	session_start();
	require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style1.css"><!--we will create a seperate style for the pages than
 we have for the forms--> 
</head>
<body>

<div class="topnav">
  <a href="#contact">Contact Us</a>
  <a href="cancellation.php">Cancel Appoinment</a>
  <a class="active" href="appointment.php">Make Appoinment</a>
  <a href="login.php">Login</a>
  <a href="#about">About Me</a>
  <a href="home.php">Home</a>
</div>

<div class="main-block">
</div>
	<div id="main-border">
	<center><h2>Book Appointment</h2></center>
			
		<form action="appointment.php" method="post">
		
			<div class="main-form">
				<input type="text" placeholder="Enter name" name="name" required>	
				<input type="text" placeholder="Enter email" name="email" required>
				<span style="font-size:15px;">Timeslot :</span>
				<input style="width:350px;" type="datetime-local" name="timeslot" required>
				<!--<span style="font-size:16px;">Timeslot :</span>
				<select name="timeslot">
					<option value="morning">9:00-11:00am</option>
					<option value="afternoon">12:00-3:30pm</option>
					<option value="evening">4:00-7:00pm</option>
				</select><br>-->
				<input type="password" placeholder="Enter Password" name="password" required>
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
				<input type="number" placeholder="Enter credit card number" name="creditcard" required>
			    <span style="font-size:16px;">Massage name :</span>
				<select name="massage">
					<option value="deeptissue">Deep Tissue Massage</option>
					<option value="sports">Sports Massage</option>
					<option value="therapeutic">Therapeutic Massage</option>
					<option value="relaxation">Relaxation</option>
				</select><br>
				<input type="text" placeholder="Enter Therapist name" name="therapistid" required>
				<input type="text" placeholder="Reason for appointment" name="reason" required>
				<button class="booking_button" name="booking" type="submit">Make Appointment</button>
				<p>
					<!--changes to Sign In page-->
					Want to cancel an Appointment? <a href="cancelbooking.php">Cancel Here</a>
				</p>
				<p>
					<!--changes to Sign In page-->
					<a href="home.php"><button type="button" class="back_btn"><< Back to Home</button></a>
				</p>
			</div>
		</form>
		
		<?php
			if(isset($_POST['booking']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$timeslot=$_POST['timeslot'];
				
				echo "<script>console.log('$timeslot')</script>";
				
				//$date = date_format('Y-m-d H:i:s',$timeslot);
				//echo "<script>console.log('$date')</script>";
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$creditcard=$_POST['creditcard'];
				$massage=$_POST['massage'];
				$therapistid=$_POST['therapistid'];
				$reason=$_POST['reason'];
				if($password==$cpassword)
				{
					$query="insert into appointments values ('','$name','$email', '$password','$creditcard','$reason','', '$timeslot','$massage')";
				//echo $query;
				echo "<script>console.log('$query')</script>";

				$query_run = mysqli_query($db,$query);
				if($query_run)
				{
					echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
					$_SESSION['name'] = $name;
					$_SESSION['success'] = "Your appointment has been made";
					header( "Location: customerinfo.php");				}
				else
				{
					echo '<script type="text/javascript">alert("Booking Unsuccessful due to server error. Please try later")</script>';
				}
				
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
			}
		
		?>
		
	</div>

</body>
</html>
