<!DOCTYPE HTML>
<html>
<head>
	<title>Charter | Flight Reservation Points System</title>
</head>

<body>
	

	<?php
	session_start();
	//$cid=$_GET['cid'];
	$cid=1;
	$_SESSION['cid']=$cid;

	$mysqli = new mysqli("localhost", "testuser", "password", "charter");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$sql="DELETE FROM booking WHERE cid='$cid';";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$sql="DELETE FROM customer WHERE cid='$cid';";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$sql="COMMIT;";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");

	echo "<script type='text/javascript'>alert('Account Deleted.\nGoing to Index Page.');</script>";
	header ("Location: index.html");
?>

</body>
</html>
