<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashpass=hash('sha256',$password);
	
	$mysqli = new mysqli("localhost", "testuser", "password", "charter");
	
	$sql="SELECT username from customer where username='$username' AND password='$hashpass';";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$usercount=mysqli_num_rows($result);

	
	$sql="SELECT * from customer where username='$username' AND password='$hashpass';";
	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
	$row = $result->fetch_assoc();
	$cid = $row['cid'];

	$_SESSION['cid']=$cid;
	
	if($usercount==1){
		$_SESSION['loggedin'] = true;
    		$_SESSION['username'] = $username;
		 echo "<script type='text/javascript'>alert('Login Successful!');</script>";
		 header("Location: homepage2.php");
	}
	else{
	 	echo "<script type='text/javascript'>
        	alert('Wrong username or password Please try again');
      		location = 'login.php';</script>";
	}
	mysqli_close();

?>
