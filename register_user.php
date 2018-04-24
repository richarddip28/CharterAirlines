<!DOCTYPE HTML>
<html>
<head>
	<title>Charter | Flight Reservation Points System</title>
</head>

<body>
<?php
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$postal = $_POST['postal'];
	$phone = $_POST['phone'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	    
 	$dbc=mysqli_connect('localhost','testuser','password','charter') or die ("Could not Connect! \n");

	$hashpass=hash('sha256',$password);

	$sql="INSERT INTO customer VALUES (NULL,'$fname','$lname','$postal','$phone', 10000, '$username','$hashpass');";
	
	
	$result=mysqli_query($dbc,$sql) or die ("Error Querying Database");

	mysqli_close();
	

	echo "<script type='text/javascript'>alert('Registration Successful!');</script>";
    	header("Location: login.php");
    	exit;
	
?>
</body>
</html>
