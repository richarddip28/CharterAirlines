<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="./js/jquery.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
   <link rel="stylesheet" href="./css/style.css">

   <title>Charter | Flight Reservation Points System</title>
</head>

<body>

   <nav>
      <div class="main-nav">
         <a class="nav-link nav-brand" href="homepage2.php">Charter</a>
         <a class="nav-link nav-item" href="login.php">Login</a>
         <a class="nav-link nav-item" href="register.php">Register</a>
      </div>
   </nav>

<section class="main">

<?php
	
	$cid=$_SESSION['cid'];

	?>

	<form action ="account_del.php" method = "post">
	<?php include_once "getprofile.php"; ?>

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

	

</body>
</html>
