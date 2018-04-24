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
   <script src="./js/main.js"></script>
   <script>
   /*var images={'../images/airport1.jpg','../images/airport2.jpg','../images/airport3.jpg'};
   var setbg=0;
   var i=0;
	$(function(){
		$('body background:images[i]').hide();
		setInterval(function(){
		while(i<3){
		$('body background:images[i]').fadeOut()
         .next('images[i]').fadeIn()
         .end().appendTo('body');}, 
		5000);
		i++;
		}
		if(i=3){ i=0; }
	});*/
	var imgs=['../images/airport1.jpg','../images/airport2.jpg','../images/airport3.jpg'];
	var i=0;
	var bg=document.getElementById('bgtest');
	alert(document.body.style.backgroundImage = "url('imgs[1]')");
	function cyclePictures() {
		while(1){
			document.body.style.backgroundImage = "url(imgs[i])";
			sleep(5000);
			i++;
			if(i==3) { 
				i=0; 
			}
		}
	}
	cyclePictures();
	</script>
   
   <title>Charter | Flight Reservation Points System</title>
</head>
<body onload="alertPts()">
<?php 

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    		echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    		echo "<script type='text/javascript'> 
		alert('Please log in first to see this page.');
      		location = 'login.php';</script>";
}
?>
	
   <!-- navbar -->
   <nav>
      <div class="main-nav">
         <a class="nav-link nav-brand" href="homepage2.php">Charter</a>
         <a class="nav-link nav-item" href="login.php">Login</a>
         <a class="nav-link nav-item" href="register.php">Register</a>
      </div>
   </nav>
   
	<div class="fadein" id="bgtest" >
			<!--<img src="./images/airport1.jpg" height="512" style="width:100%">
			<img src="./images/airport2.jpg" height="512" style="width:100%">
			<img src="./images/airport3.jpg" height="512" style="width:100%">-->
	</div>
	<br>

   <section>
		<form action="" class="homepage-section">
		<center><label for="" class="form-lbl"> Welcome to Charter!</label> <!-- Product Info -->
		 <p> Charter is a flight reservation service that uses a points system to reward customers with free flights. </p></center>
         <a href="profile.php" class="btn-submit" id="profile-btn">Profile</a> <!-- Richard: edit href to profile-->
		 <a href="flight_board.php" class="btn-submit" id="flight-btn">Flights</a>
		</form>
		
   </section>

   <hr class="hr-primary">

   <!-- footer -->
   <footer class="main-nav">
      <span class="nav-link">&COPY; Charter Inc.</span>
      <a href="profile.php" class="nav-link">Profile</a>
      <a href="flight_board.php" class="nav-link">Flight Board</a>
      <a href="about.html" class="nav-link">About Us</a> 
      <a href="feedback.html" class="nav-link">Feedback</a>
      <a href="https://github.com/ericzlmd/ProjectOne" class="nav-link">Github</a>
   </footer>

</body>
	<script>
		function alertPts() {
			var alerted = localStorage.getItem('alerted') || '';
    			if (alerted != 'yes') {
     			alert("Welcome! Congratulations, you have been awarded with 10,000pts!");
     			localStorage.setItem('alerted','yes');
    			}
		}
	</script>
</html>
