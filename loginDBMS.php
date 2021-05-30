<html>
<!--IMPORTANT FILE-->
<head>
<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
<title>LOG IN </title>
	<link rel="stylesheet" type="text/css" href="logincssDBMS.css">
<body style="overflow-x:hidden;overflow-y:hidden;">
	<br><br>
	<div id="image">  <img src="CricAdvisors Font.png" height="23%" width="43%">  </div>	
	
	<div class="loginbox">
	<center>
		<h1>LOGIN HERE</h1>
		<form action="login.php" method="post">
				<p style="transform:translateY(-5%;);">EMAIL</p>
				<input type="text" name="email" placeholder="Enter email address" style="font-size:12px;">
				<p> PASSWORD </p>
				<input type="password" name="pass" placeholder="Enter password" style="font-size:12px;">
				<button class="submit" type="submit"> SUBMIT </button>
				<br><br><br>
				<a href="signupDBMS.php"> SIGN UP </a> <br>
	</center>			
		</form>
	</div>
	
	<img src="Callout.png" style="transform:translate(85%,-140%);" height="40%">
	<img src="Virat.png" style="transform:translate(-60%,20%);" height="73%">
	<?php
			
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if(strpos($fullUrl,"extra=empty") == true)
			{
				echo "<p class='error1'> YOU HAVEN'T ENTERED ALL THE FIELDS! </p>";
				echo "<p class='callout1'> C'MON MAN,<br>FILL IN ALL <br>THE DETAILS </p>";
				exit();
			}
			else if(strpos($fullUrl,"extra=failed") == true)
			{
				echo "<p class='error2'> YOU'VE ENTERED AN INVALID EMAIL-ID / PASSWORD! </p>";
				echo "<p class='callout2'> YO MATE,<br>DON'T REMEMBER <br>THE PASSWORD?! </p>";
				exit();
			}
			else if(strpos($fullUrl,"extra=new") == true)
			{
				echo "<div style='color : white; transform : translate(20.5%,-645%); font : Nunito;	font-size : 27px; font-weight : bold;'> 
				LOGGING IN FOR<br>THE FIRST<br>TIME, HUH?!</div>";
				exit();
			}
	?>	
	<div style="color : white;font : Nunito;font-size : 44px;font-weight : bold;transform:translate(23%,-585%);"> &nbsp; HEY <br> THERE! </div>
</body>
</head>
</html>