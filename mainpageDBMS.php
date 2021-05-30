<?php
			session_start();
			include_once 'connection.php';
?>

<html>

<head>

	<title> CRICADVISORS - Main Page </title>
	<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="mainpagecssDBMS.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
	<link href= 'https://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet'> 
	
	<style>
		
		.temp
		{
			font-size : 50px;
			color : darkgray;
			font-family: Chelsea Market;
			text-shadow: 2px 2px 2px #000000;
		}
		
		.but
		{
			width : 80%;
			height : 10%;
			font-family : Nunito;
			font-size : 30px;
			border-radius: 30px;
			border: 1px gray solid;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
		}
	</style>
	
</head>

<body style="background-image:url('BlackBG-2.jpg');">
<div style="overflow-x: hidden;">
<br><br>
<div id="image">  <img src="CricAdvisors Font.png" height="35%" width="65%" style="transform:translateX(3%);">  </div>
 
 <form action="logout.php" method="POST">
	<input type="submit" style="transform:translate(1300%,165%);background-color:lightgray;" value="LOG OUT"> </input>
</form>

<form action="stats.php" method="POST">
	<input type="submit" value="MY STATS" style="transform:translate(150%,25%);background-color:lightgray;">
</form>
<br>

<center>
	<h1 class="temp" style="transform : translateY(-100%);letter-space : 4px;">WELCOME</h1>
	
<div>
	<div class="batcontainer">
	<center> <div style="font-size:35px;font-weight:30px;font-stretch:10px;text-shadow: 2px 2px 2px #000000;">BATTING STATS
	<img src="Bat.png" height="10%" width="8%" id = "bat"> </div> <br> </center>
	
	
    <label for="runs">RUNS SCORED</label>
	&ensp;&emsp;&emsp;&emsp;
	<label for="nout">NOT OUT (Y/N) </label>
	&ensp;&emsp;&emsp;&emsp;&ensp;
	<label for="balls">BALLS FACED</label>
	&nbsp;&ensp;&emsp;&emsp;
	<label for="dballs">DOT BALLS FACED</label>
	&emsp;&emsp;&emsp;
	<label for="fours">4s HIT</label>
	&emsp;&emsp;&emsp;&emsp;
	<label for="sixes">6s HIT</label>
	
    <br><br>
	
	<form action="bat_records.php" method="POST">
	&ensp; 
	<input type="number" min="0" id="runs" name="runs" placeholder="RUNS" required>  
	&emsp;&emsp;&ensp;&emsp;&ensp;&emsp;
	<input type="text" name="nout" placeholder="Y" style="width: 8%; padding: 12px; border: 1px solid #ccc;
	border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; 	background-color: gray;" required>
	&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="balls" name="balls" placeholder="BALLS" required>
	&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="dballs" name="dballs" placeholder="DOT BALLS" required>
	&ensp;&ensp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="fours" name="fours" placeholder="4s" required>
	&ensp;&ensp;&emsp;&emsp;
	<input type="number" min="0" id="sixes" name="sixes" placeholder="6s" required>
	</div>
	<br><br>
	<center> <input type="submit" style="background-color:lightgray;" value="INSERT DATA"> </center>
	</form>
	
	
	<br><br>

	<div class="bowlcontainer">
	<center> <div style="font-size:35px;font-weight:30px;font-stretch:10px;text-shadow: 2px 2px 2px #000000;">BOWLING STATS
	<img src="Ball.png" height="10%" width="6%" id = "bat" style="transform:translate(-5%,25%);"> </div> <br> </center>
	
	&ensp;&emsp;
    <label for="bowled"> OVERS BOWLED &emsp;&emsp;&emsp; </label>
    <label for="wickets">WICKETS TAKEN &emsp;&emsp;&nbsp;</label> 
	<label for="runs1">RUNS CONCEDED</label>
	&emsp;&emsp;
	<label for="eballs">EXTRAS BOWLED</label>
	&nbsp;&ensp;&emsp;
	<label for="dballs1">DOTS BOWLED</label>
	&emsp;&ensp;&ensp;
	<label for="fours1">4s CONCEDED</label>
	&emsp;&ensp;&ensp;
	<label for="sixes1">6s CONCEDED</label>
    <br><br>
	
	<form action="bowl_records.php" method="POST">
	&emsp;&emsp;
	<input type="number" id="bowled" min="1" name="bowled" placeholder="OVERS" style="width:7%;" required> 
	&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
	<input type="number" min="0" max="10" id="wickets" name="wickets" placeholder="WICKETS" style="width:7%;"required>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="runs1" name="runs1" placeholder="RUNS" style="width:7%;" required>
	&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="eballs" name="eballs" placeholder="EXTRAS" style="width:7%;" required>
	&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;
	<input type="number" min="0" id="dballs1" name="dballs1" placeholder="DOT BALLS" style="width:7%;" required>
	&ensp;&ensp;&emsp;&emsp;&ensp;
	<input type="number" min="0" id="fours1" name="fours1" placeholder="4s" style="width:7%;" required>
	&ensp;&ensp;&ensp;&emsp;&emsp;
	<input type="number" min="0" id="sixes1" name="sixes1" placeholder="6s" style="width:7%;" required>
	</div>
	<br><br>
	</center>
	<center> <input type="submit" style="background-color:lightgray;" value="INSERT DATA"> </center>
	
	<br><br><br>
  </form>
  
	<br>
<div>
	<center>
	<form action="batalgo.php">
    <input type="submit" class="but" value = "WANT BATTING TIPS?" style="background-color:lightgray;width:80%;"/>
	</form>
	<br><br>
	<form action="bowlalgo.php">
    <input type="submit" class="but" value = "WANT BOWLING TIPS?" style="background-color:lightgray;width:80%;" />
	</form>
	</center>
</div>
	<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			$z = $_SESSION['userid'];
			$query1="SELECT * FROM signup WHERE PLAYER_ID=$z";
			$result1=mysqli_query($con,$query1);
			$row=mysqli_fetch_assoc($result1);
			
			$name = $row['PNAME'];
			echo "<center> <div class='temp' style='transform : translateY(-2400%);font-size:35px;'> $name </div> </center>";
			if(strpos($fullUrl,"info=bat") == true)
			{
				echo "<p style='color:lightgreen;transform:translate(35%,-3990%);font-weight:bold;font-family:Nunito;text-shadow:1px 1px 1px #000000;font-size:20px;'> 
						YOUR BATTING RECORD HAS BEEN INSERTED. </p>";
				exit();
			}
			else if(strpos($fullUrl,"info=bowl") == true)
			{
				echo "<p style='color:lightgreen;transform:translate(35%,-2715%);font-weight:bold;font-family:Nunito;text-shadow:1px 1px 1px #000000;font-size:20px;'> 
						YOUR BOWLING RECORD HAS BEEN INSERTED. </p>";
				exit();
			}
	?>

</div>		

</body>
</html>