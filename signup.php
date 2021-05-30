<?php
		
		session_start();
		include_once 'connection.php';

		$qname = mysqli_real_escape_string($con,$_POST['name']);
		$qdob = mysqli_real_escape_string($con,$_POST['dob']);
		$qpnum = mysqli_real_escape_string($con,$_POST['pnum']);
		$qemail = mysqli_real_escape_string($con,$_POST['email']);
		$qpwd = mysqli_real_escape_string($con,$_POST['pwd']);
		$qcpwd = mysqli_real_escape_string($con,$_POST['cpwd']);
		$qrole = mysqli_real_escape_string($con,$_POST['role']);
		$qbatstyle = mysqli_real_escape_string($con,$_POST['batstyle']);
		$qbowlstyle = mysqli_real_escape_string($con,$_POST['bowlstyle']);
		
		if(strlen($qpnum)==10){
			
			$query0 = "SELECT * FROM SIGNUP WHERE EMAIL_ID = '$qemail'";
			$res = mysqli_query($con, $query0);
			if($res)
			{
				if(mysqli_num_rows($res)==1)
				{
					header("Location: signupDBMS.php?prob=exist");
					exit();
				}	
				else
				{
					if($qpwd == $qcpwd)
					{
						//$pwd = password_hash($qpwd,PASSWORD_DEFAULT);
						$query1 = "INSERT INTO SIGNUP (pname,dob,p_num,email_id,pwd,p_role,ba_style,bo_style) VALUES ('$qname', '$qdob', '$qpnum', '$qemail', '$qpwd', '$qrole', '$qbatstyle','$qbowlstyle')";
						$query2 = "INSERT INTO LOGIN (email_id,pwd) VALUES ('$qemail','$qpwd');";
						$query3 = "INSERT INTO BOWL_PAR (player_id) VALUES (NULL);";
						$query4 = "INSERT INTO BAT_PAR (player_id) VALUES (NULL);";
						$query5 = "INSERT INTO BAT_RECORDS (p_id) VALUES (NULL);";
						$query6 = "INSERT INTO BOWL_RECORDS (p_id) VALUES (NULL);";
						
						mysqli_query($con, $query1);
						mysqli_query($con, $query2);
						mysqli_query($con, $query3);
						mysqli_query($con, $query4);
						mysqli_query($con, $query5);
						mysqli_query($con, $query6);
						
						header("Location: loginDBMS.php?extra=new");
						exit();
					}
					else
					{
						header("Location: signupDBMS.php?prob=pwd");
						exit();
					}				
				}
				
			}
			else
			{
				echo "NOT CONN.";
			}
		}
		
		else
		{
			header("Location: signupDBMS.php?prob=numb");
			exit();
			
		}
		
?>