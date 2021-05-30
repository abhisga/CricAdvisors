<html>
<head>
<title> PLAYER STATS</title>
	<link rel="stylesheet" href="statscss.css">
	<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon"> 
	<link href= 'https://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet'> 
	
	<style>
		
		
		#image
		{
			position: relative;
			animation-name: img;
			animation-duration: 2s;
			animation-iteration-count: infinite;
		}
		@keyframes img
		{
			0%   {left:0px; top:0px;}
			50%  {left:35px; top:0px;}
			100% {left:0px; top:0px;}
		}
		.box
		{
			font-weight : bold;
			font-size : 30px;
			animation: fadeIn 3s;
			animation-iteration-count: infinite;
		}
		@keyframes fadeIn {
		  0% {opacity:0;}
		  100% {opacity:1;}
		}

		@-moz-keyframes fadeIn {
		  0% {opacity:0;}
		  100% {opacity:1;}
		}

		@-webkit-keyframes fadeIn {
		  0% {opacity:0;}
		  100% {opacity:1;}
		}
		
	</style>
	
</head>

<?php
	session_start();
	include_once('connection.php');
	$z=$_SESSION['userid'];
	$query1="SELECT * FROM BAT_RECORDS WHERE p_id=$z";
	$result1=mysqli_query($con,$query1);
	$row1=mysqli_fetch_assoc($result1);
	
	$z = $_SESSION['userid'];
	$query2="SELECT * FROM signup WHERE PLAYER_ID=$z";
	$result2=mysqli_query($con,$query2);
	$row=mysqli_fetch_assoc($result2);
	
	$name = $row['PNAME'];
	$role = $row['P_ROLE'];
	$bastyle = $row['BA_STYLE'];
	$bostyle = $row['BO_STYLE'];
	echo "<center> <div style='transform : translateY(50%);font-size:100px;color:WHITE;font-family:Chelsea Market;'> $name </div> </center>";
	echo "<center> <div class='box' style='transform : translateY(125%);font-size:65px;color:lightgray;font-family:Chelsea Market;'> 
	<div style='font-size : 40px;transform:translateY(-15%)'>ROLE </div> $role </div> </center>";
	echo "<center> <div class='box' style='transform : translate(-35%,140%);font-size:40px;color:lightgray;font-family:Chelsea Market;'> 
	<div style='font-size : 40px;transform:translateY(-15%)'>BATTING STYLE </div> $bastyle </div> </center>";
	echo "<center> <div class='box' style='transform : translate(35%,35%);font-size:40px;color:lightgray;font-family:Chelsea Market;'> 
	<div style='font-size : 40px;transform:translateY(-15%)'>BOWLING STYLE </div> $bostyle </div> </center>";
	$bat_inn=$row1['INNINGS'];
	$bat_runs=$row1['RUNS'];
	$bat_ducks=$row1['DUCKS'];
	$bat_nout=$row1['N_OUT'];
	$bat_balls=$row1['BALLS'];
	$bat_dots=$row1['DOTS'];
	$bat_fours=$row1['FOURS'];
	$bat_sixes=$row1['SIXES'];
	
	$query2="SELECT * FROM BOWL_RECORDS WHERE p_id=$z";
	$result2=mysqli_query($con,$query2);
	$row2=mysqli_fetch_assoc($result2);
	
	$bowl_inn=$row2['INNINGS'];
	$bowl_runs=$row2['RUNS'];
	$bowl_overs=$row2['OVERS'];
	$bowl_wickets=$row2['WICKETS'];
	$bowl_extras=$row2['EXTRAS'];
	$bowl_dots=$row2['DOTS'];
	$bowl_fours=$row2['FOURS'];
	$bowl_sixes=$row2['SIXES'];
?>
	
<body  style="background-image:url('BlackBG-2.jpg'); height:100%;overflow-y:hidden;overflow-x:hidden;">
	
	<div id="image">  <img src="CricAdvisors Font.png" height="35%" width="65%" style="transform:translate(25%,-10%);">  </div>
	<center>
	<form action="mainpageDBMS.php">
	<input type="submit" value="BACK TO PREVIOUS PAGE" style="background-color:black;color:lightgray;transform:translateY(-2000%);
	font-family:Verdana;font-size:16px;"> </input>
	</form>
	</center>
	<div class="nav" style="transform:translate(-50%,-15%);color:white">
		<ul>
			<li class="one">BATTING STATS
				<ul class="dropdown">
					<li>INNINGS : <?php echo $bat_inn ?></li>
					<li>RUNS : <?php echo $bat_runs ?></li>
					<li>DUCKS : <?php echo $bat_ducks ?></li>
					<li>NOT OUT : <?php echo $bat_nout ?></li>
					<li>BALLS : <?php echo $bat_balls ?></li>
					<li>DOTS : <?php echo $bat_dots ?></li>
					<li>FOURS : <?php echo $bat_fours ?></li>
					<li>SIXES : <?php echo $bat_sixes ?></li>
				</ul>
			</li>
			
			<li class="two">BOWLING STATS
				<ul class="dropdown">
					<li>INNINGS : <?php echo $bowl_inn ?></li>
					<li>RUNS : <?php echo $bowl_runs ?></li>
					<li>OVERS : <?php echo $bowl_overs ?></li>
					<li>WICKETS : <?php echo $bowl_wickets ?></li>
					<li>EXTRAS : <?php echo $bowl_extras ?></li>
					<li>DOTS : <?php echo $bowl_dots ?></li>
					<li>FOURS : <?php echo $bowl_fours ?></li>
					<li>SIXES : <?php echo $bowl_sixes ?></li>
				</ul>
			</li>
		</ul>
	</div>
	
	
</body>
</html>
