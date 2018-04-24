<?php
	$mysqli = new mysqli("localhost", "testuser", "password", "charter");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	$sql="SELECT * from customer where cid=$cid;";

	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
		
	echo "<table>";
	echo "<tr> <th> First Name </th> <th> Last Name </th> <th> Postal Code </th> <th> Phone </th> <th> Points Remaining </th> <th> Username </th> </tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr> <td>".$row['fname']."</td>   <td>".$row['lname']."</td> <td>".$row['postal']."</td> <td>".$row['phone']."</td> <td>".$row['points']."</td> <td>".$row['username']."</td>     <td>  <button type='submit' name ='fid' value = '".$row['fid']."'> Delete Account </button> </td> </tr>";
	}
	echo "</table>";
?>
