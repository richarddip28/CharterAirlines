<?php
	$mysqli = new mysqli("localhost", "testuser", "password", "charter");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	$sql="SELECT * from flight;";

	$result=mysqli_query($mysqli,$sql) or die ("Error Querying Database");
		
	echo "<table>";
	echo "<tr> <th> Destination </th> <th> Date </th> <th> Time </th> <th> Points </th> </tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr> <td>".$row['destination']."</td>   <td>".$row['date']."</td> <td>".$row['time']."</td> <td>".$row['cost']."</td>     <td>  <button type='submit' name ='fid' value = '".$row['fid']."'> Select </button> </td> </tr>";
	}
	echo "</table>";
?>
