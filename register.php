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
   <!-- main.js | enable on TEST branch -->
   <script src="./js/register.js"></script>
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

   <section>
         <form name = "myForm" action="register_user.php" onsubmit="return validateForm()" class="login-form" method="POST">
         <label for="firstname" class="form-lbl">First Name:</label>
         <input type="text" name="firstname" class="form-item" id="firstname" placeholder="John">

         <label for="lastname" class="form-lbl">Last Name:</label>
         <input type="text" name="lastname" class="form-item" id="lastname" placeholder="Smith">

	 <label for="postal" class="form-lbl">Postal Code:</label>
         <input type="text" name="postal" class="form-item" id="postal" placeholder="postal code">

	 <label for="phone" class="form-lbl">Phone Number:</label>
         <input type="text" name="phone" class="form-item" id="phone" placeholder="phone">

	 <label for="username" class="form-lbl">Username:</label>
         <input type="text" name="username" class="form-item" id="username" placeholder="username">

         <label for="password" class="form-lbl">Enter Password:</label>
         <input type="password" name="password" class="form-item" id="password">

	 <label for="password2" class="form-lbl">Confirm Password:</label>
         <input type="password" name="password2" class="form-item" id="confirm password">

	 <input type="submit" id="submit" value="Register" name="submit" />
      </form>
   </section>

   <hr class="hr-primary">

   <footer class="main-nav">
      <span class="nav-link">&COPY; Charter Inc.</span>
      <a href="about.html" class="nav-link">About Us</a>
      <a href="feedback.html" class="nav-link">Feedback</a>
      <a href="https://github.com/ericzlmd/ProjectOne" class="nav-link">Github</a>
   </footer>
	
</body>
</html>
