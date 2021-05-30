<?php
	
	session_start();
	include_once 'connection.php';
	
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	
	if(!empty($email) && !empty($pass))
	{
		$query1="SELECT * FROM login WHERE EMAIL_ID='$email' && PWD='$pass'";
		$query2="SELECT ID FROM login WHERE EMAIL_ID='$email' && PWD='$pass'";
	}
	else
	{
		header("Location: loginDBMS.php?extra=empty");
		exit();
	}
	
	$result=mysqli_query($con, $query1);

	if(!$result)
	{
		exit();
	}
	if(mysqli_num_rows($result)==1)
	{
		$result1 = mysqli_query($con, $query2);
		if($result1)
		{
			$temp = mysqli_fetch_array($result1);
		}
		$_SESSION['userid'] = $temp[0];
		header("Location: mainpageDBMS.php");
	}
	else
	{
		header("Location: loginDBMS.php?extra=failed");
		exit();
	}
	
?>