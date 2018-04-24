

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
   <script src="./js/login.js"></script>
   <title>Charter | Flight Reservation Points System</title>
</head>
<body>
   <!-- navbar -->
   <nav>
      <div class="main-nav">
         <a class="nav-link nav-brand" href="index.php">Charter</a>
         <a class="nav-link nav-item" href="login.php">Login</a>
         <a class="nav-link nav-item" href="register.php">Register</a>
      </div>
   </nav>

   <section class="main">
	 <form name = "myForm" action="login_user.php" onsubmit="return validateLogin()" class="login-form" method="POST">
         <label for="username" class="form-lbl">Username:</label>
         <input type="username" name="username" class="form-item" id="username" placeholder="Enter Username">

         <label for="password" class="form-lbl">Password:</label>
         <input type="password" name="password" class="form-item" id="password">

	 <input type="submit" id="submit" value="Login" name="submit" />
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
