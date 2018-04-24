<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- JQuery -->
	<script src="./js/jquery.js"></script>
	<!-- Google Fonts Open Sans & Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<!-- Main CSS | style.css -->
	<link rel="stylesheet" href="./css/style.css">
	<!-- Main JS | main.js -->
	<script src="./js/flight_confirmation.js"></script>
	<title>Charter | Flight Reservation Points System</title>
</head>

<body>
	
	<!-- navbar -->
   <nav>
      <div class="main-nav">
         <a class="nav-link nav-brand" href="homepage2.php">Charter</a>
         <a class="nav-link nav-item" href="login.php">Login</a>
         <a class="nav-link nav-item" href="register.php">Register</a>
      </div>
   </nav>
   
   <section class="main">
      <section class="flight-section">
         <p><strong><u>Booking Confirmation</u></strong></p>
         <p id="destination">Destination: Hong Kong, China</p>
         <p id="date">Depart Date: 02/28/2018</p>
         <p id="time">Depart Time: 12:00</p>
         <p id="points">Points: 2000 pts</p>
      </section>
   </section>

   <hr class="hr-primary">

   <footer class="main-nav">
      <span class="nav-link">&COPY; Charter Inc.</span>
      <a href="profile.php" class="nav-link">Profile</a>
      <a href="flight_board.php" class="nav-link">Flight Board</a>
      <a href="about.html" class="nav-link">About Us</a>
      <a href="feedback.html" class="nav-link">Feedback</a>
      <a href="https://github.com/ericzlmd/ProjectOne" class="nav-link">Github</a>
   </footer>

<?php 

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    		echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    		echo "<script type='text/javascript'> 
		alert('Please log in first to see this page.');
      		location = 'login.php';</script>";
}
?>

   <?php
	session_start();
	$cid=$_SESSION['cid'];
	$fid=$_GET['fid'];
	$bookDate=date("d-M-Y");

	$mysqli = new mysqli("localhost", "testuser", "password", "charter");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	$sql="INSERT INTO booking values (null,$cid,$fid,'$bookDate');";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");

	$sql="SELECT * FROM flight where fid=$fid";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$row = $result->fetch_assoc();
	
	$dest = $row['destination'];
	$time = $row['time'];
	$date = $row['date'];
	$flightcost = (int)$row['cost'];
	
	
	$sql="SELECT * FROM customer where cid=$cid";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$row = $result->fetch_assoc();
	$cxpoints = (int)$row['points'];

	$sql="UPDATE customer SET points = ($cxpoints - $flightcost) WHERE cid = $cid";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	

	 mysqli_close();
?>

<script>

	var dest = document.getElementById("destination");
		dest.innerHTML= "Destination: " + "<?php echo "$dest";?>";
	var time = document.getElementById("time");
		time.innerHTML= "Time: " + "<?php echo "$time";?>";
	var date = document.getElementById("date");
		date.innerHTML= "Date: " + "<?php echo "$date";?>";
	var cost = document.getElementById("points");
		cost.innerHTML= "Cost: " + "<?php echo "$flightcost";?>" + " points";

</script>



</body>
</html>
