<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cricadvisor";

//Create new connection
if(!$con = mysqli_connect($servername, $username, $password, $dbname)){
    die("Connection failed:" . $con->connect_error);
}

/*else
{
	echo "CONNECTED".'<br>';
}

	$sql = "SELECT * FROM SIGNUP;";
	$result = mysqli_query($con,$sql);	
	$resultCheck = mysqli_num_rows($result);
		
	if($resultCheck > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['PNAME'].'<br>';
		}
	}*/

?>