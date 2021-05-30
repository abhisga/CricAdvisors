<html>
<head>
<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon">
<title>SIGN UP FORM</title>
	<link rel="stylesheet" type="text/css" href="signupcssDBMS.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
</head>
<body style="background-image:url('BlackBG-2.jpg');height:100%;overflow-y:hidden;overflow-x:hidden;">

	<div>
	<br><br><br><br><br><br><br><br><br>
	<div style="background-color:#D3D3D3;width:40%;height:8%;transform:translate(130%,-340%);border-radius:20px;"> </div>
	
	<div style="background-image:url('Yuvi.png');overflow-y:hidden;overflow-x:hidden;" class="img2"> </div>
	<div class="signupbox" style="transform : translate(-135%,-50%);height:85%;overflow-y: hidden;overflow-x: hidden;">
	<br>
	<center><div id="image">  <img src="CricAdvisors Font.png" height="10%" width="50%">  </div></center>
	
	<h1>SIGN UP HERE</h1>
	<div style="overflow-y:hidden;overflow-x:hidden;">

	<form action="signup.php" method="POST">
	
	<p style="padding-left:70px;transform:translate(5%,13%);">NAME</p>
	<input type="text" name="name" placeholder="   Enter your name" style="transform:translate(10%,-10%);font-size:12px;" required>
	
	<p style="padding-left:75px;transform:translate(-5%,13%);">DOB (YYYY/MM/DD)</p>
	<input type="text" name="dob" placeholder="   Enter your DOB" style="transform:translate(10%,-10%);font-size:12px;">
	
	<p style="padding-left:30px;transform:translate(5%,13%);">PHONE NUMBER</p>
	<input type="text" name="pnum" placeholder="   Enter your Phone number" style="transform:translate(10%,-10%);font-size:12px;" required>
	
	<p style="padding-left:30px;transform:translate(5%,13%);">EMAIL ADDRESS</p>
	<input type="text" name="email" placeholder="   Enter your E-mail ID" style="transform:translate(10%,-10%);font-size:12px;" required>
	<br>
	
	<p style="padding-left:50px;transform:translate(5%,13%);">PASSWORD</p>
	<input type="password" name="pwd" placeholder="   Enter your password" style="transform:translate(10%,-10%);font-size:12px;" required>
	<br>
	
	<p style="padding-left:20px;transform:translate(5%,13%);">CONFIRM PASSWORD</p>
	<input type="password" name="cpwd" placeholder="   Enter the same password" style="transform:translate(10%,-10%);font-size:12px;" required>
	</div>
	
	<div class="two">
	<button type="submit" style="background-color:black;color:white;transform:translate(465%,-800%);border-radius:4px;height:5%;width:15%;"> SIGN UP </button>
	<p style="margin-left:350px;transform:translate(-14%,-1400%);"> PLAYER ROLE</p>
	<select name="role" placeholder=" ROLE" style="background-color:gray;margin-left:300px;transform:translate(47%,-2440%);font-size:12px;" required>
	<option value="BATTER">Batter</option>
	<option value="BOWLER">Bowler</option>
	<option value="ALL ROUNDER">All Rounder</option>
	</select>
	
	<p style="margin-left:350px;transform:translate(-14%,-1380%);"> BATTING STYLE</p>
	<select name="batstyle" placeholder="BAT STYLE" style="background-color:gray;margin-left:300px;transform:translate(100%,-2420%);font-size:12px;" required>
	<option value="RIGHT">Right</option>
	<option value="LEFT">Left</option>
	</select>
	
	<p style="margin-left:350px;transform:translate(-14%,-1360%);"> BOWLING STYLE</p>
	<select name="bowlstyle" placeholder="BOWL STYLE" style="background-color:gray;margin-left:300px;transform:translate(10%,-2400%);font-size:12px;" required>
	<option value="Right Arm Fast">Right Arm Fast</option>
	<option value="Right Arm Medium">Right Arm Medium</option>
	<option value="Right Arm Off Break">Right Arm Off Break</option>
	<option value="Right Arm Leg Break">Right Arm Leg Break</option>
	<option value="Left Arm Fast">Left Arm Fast</option>
	<option value="Left Arm Medium">Left Arm Medium</option>
	<option value="Slow Left Arm Orthodox">Slow Left Arm Orthodox</option>
	<option value="Left Arm Chinaman">Left Arm Chinaman</option>
	</select>

	
	</form>
	</div>
	</div>
	
	<?php
			session_start();
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if(strpos($fullUrl,"prob=exist") == true)
			{
				echo "<p style='color:red;transform : translate(50%,-1990%);font-size:35px;font-family:Century Gothic;font-weight:bold;'> &emsp;&emsp; EMAIL-ID ALREADY REGISTERED. </p>";
				exit();
			}
			else if(strpos($fullUrl,"prob=pwd") == true)
			{
				echo "<p style='color:red;transform : translate(49%,-1990%);font-size:35px;font-family:Century Gothic;font-weight:bold;'> &emsp;&emsp; PASSWORDS ARE MISMATCHING. </p>";
				exit();
			}
			else if(strpos($fullUrl,"prob=numb") == true)
			{
				echo "<p style='color:red;transform : translate(48%,-1990%);font-size:35px;font-family:Century Gothic;font-weight:bold;'> &emsp;&emsp; PLEASE ENTER A 10-DIGIT NUMBER. </p>";
				exit();
			}
	?>	
	<p style='color:green;transform : translate(49%,-2645%);font-size:26px;font-family:Century Gothic;font-weight:bold;'> &emsp;&emsp; YOU'RE GONNA BECOME A BETTER CRICKETER! </p>
</body>
</html>	