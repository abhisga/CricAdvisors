<html>

<head>
	<title> CRICADVISORS - Bowling Tips </title>
	<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon"> 
	<link rel="stylesheet"  type="text/css" href="battipsDBMS.css">
	<link href= 'https://fonts.googleapis.com/css?family=Lobster|Great+Vibes|Satisfy|Inconsolata|Open+Sans' rel='stylesheet'>  
	<link href= 'https://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet'> 
	<style>
	
	.box1
	{
		color: #71dbf0;
		transform:translate(1%,-325%);
		font-family: Chelsea Market;
		text-shadow:2px 2px 5px #000000;
		font-size:42px;
		letter-spacing : 2px;
		animation : colchg 3s;
		animation-iteration-count : infinite;
	}
	
	@keyframes colchg
	{
		0% {color : #71dbf0; opacity:0%;}
		100% {color : white; opacity:100%;}
	}
	.box2
	{
		color: #71dbf0;
		font-family: Chelsea Market;
		text-shadow:2px 2px 5px #000000;
		font-size:28px;
		letter-spacing : 2px;
		animation : colchg 3s;
		animation-iteration-count : infinite;
	}
	
	.box
	{
		background-color: #71dbf0;
		width: 20%;
		box-shadow: 2px 2px 20px 2px black;
		border-radius : 10px;
		height : 18%;
		border: 3px solid black;
		padding: 0px;
		margin: 0px;
		font-family : Inconsolata;
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
	
	html, body{
		margin: 0;
	}
	
	</style>
	
</head>

<body style="background-image:url('BlackBG-2.jpg');overflow-x : hidden;padding:0px;">
	<br><br><br>
	
	<center>
	<div id="image" style="overflow-x : hidden;">  <img src="CricAdvisors Font.png" height="30%" width="55%">  </div>
	<div> <img src="BowlingTips.png" height="41%" width="34%" style="transform : translateY(5%);"> </div>
    <br>	
	
	<form action="mainpageDBMS.php">
	<input type="submit" value="BACK TO PREVIOUS PAGE" style="background-color:black;color:#71dbf0;transform:translate(-3%,-175%);
	font-family:Verdana;font-size:16px;"> </input>
	</form>
	
	<div class="box" style="transform:translate(-150%,10%);"> <p style="transform:translateY(-50%);"> AVERAGE </p> </div>
	<div class="box" style="transform:translate(0%,-90%);"> <p style="transform:translateY(-50%);"> STRIKE RATE </p> </div>
	<div class="box" style="transform:translate(150%,-190%);"> <p style="transform:translateY(-35%);"> BOUNDARY PERCENT </p> </div>
	<div class="box" style="transform:translate(-150%,-150%);"> <p style="transform:translateY(-35%);"> DOT BALL PERCENT </p> </div>
	<div class="box" style="transform:translate(0%,-250%);font-size:25px;"> <p style="transform:translateY(-15%);"> ECONOMICAL RATE </p> </div>
	<div class="box" style="transform:translate(150%,-350%);"> <p style="transform:translateY(-35%);"> EXTRAS PERCENT </p> </div>
	
	<!-- TIP BOXES
	<div class="box1" style="transform:translate(0%,-240%);height:15%;margin:-20px;padding:0px;"> </div>
	<div class="box1" style="transform:translate(0%,-200%);height:15%;margin:-20px;padding:0px;">  </div>
	<div class="box1" style="transform:translate(0%,-160%);height:15%;margin:-20px;padding:0px;"> </div>
	<div class="box1" style="transform:translate(0%,-120%);height:15%;margin:-20px;padding:0px;">   </div>
	</center> -->
	
	<?php
			
			session_start();
			include_once 'connection.php';
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			$z=$_SESSION['userid'];
			$query1="SELECT * FROM bowl_par WHERE PLAYER_ID=$z";
			$result1=mysqli_query($con,$query1);
			$row=mysqli_fetch_assoc($result1);
			
			$avg=($row['AVG']==0)?"-":$row['AVG'];
			$sr=($row['SR']==0)?"-":$row['SR'];
			$dp=$row['DBPER'];
			$bp=$row['BDPER'];
			$bpi=$row['ER'];
			$dkp=$row['EXTPER'];
			
			if($avg=='-' && $sr=='-')
				$bpi = "-";
			
			echo "<div style='color:black;transform:translate(-30.5%,-1295%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $avg</div>";
			echo "<div style='color:black;transform:translate(0%,-1395%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $sr</div>";
			echo "<div style='color:black;transform:translate(30.5%,-1495%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $bp</div>";
			echo "<div style='color:black;transform:translate(-30.5%,-1265%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $dp</div>";
			echo "<div style='color:black;transform:translate(0%,-1360%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $bpi</div>";
			echo "<div style='color:black;transform:translate(30.5%,-1460%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $dkp</div>";
			echo "<div style='color:white;transform:translate(0%,-800%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:60px;letter-spacing:2px;'>  HERE ARE SOME TIPS - </div>";
			
			if(strpos($fullUrl,"pos=bowldeathA") == true)	//PERFECT DEATH BOWLER --> HIGH DOT BALL%, LOW BOUNDARY%, LOW AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-275%);'> <br>
						HEY, YOUR BOWLING AVERAGE SEEMS TO BE EXCELLENT BUDDY!<br>
						WITH THIS, YOU CAN CHANGE THE COMPLEXION OF THE GAME SINGLE-HANDEDLY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD TO SEE YOUR DOT BALL PERCENTAGE, MATE. TELLS US HOW GOOD YOU ARE!<br> 
						WISH YOU KEEP BOWLING MORE AND MORE DOT BALLS TO PUT THE BATTER UNDER PRESSURE!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						THIS TALKS VOLUMES ABOUT HOW YOU'RE TORTURING THE BATTERS! xD</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathB") == true)	//DEATH BOWLER WITH HIGH DOT BALL%, HIGH BOUNDARY%, LOW AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-275%);'> <br>
						HEY, YOUR BOWLING AVERAGE SEEMS TO BE EXCELLENT BUDDY!<br>
						WITH THIS, YOU CAN CHANGE THE COMPLEXION OF THE GAME SINGLE-HANDEDLY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD TO SEE YOUR DOT BALL PERCENTAGE, MATE. TELLS US HOW GOOD YOU ARE!<br> 
						WISH YOU KEEP BOWLING MORE AND MORE DOT BALLS TO PUT THE BATTER UNDER PRESSURE!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						PERHAPS YOU'RE CONCEDING MORE BOUNDARIES THAN EXPECTED. <br>
						REMEMBER, IT IS YOUR DUTY AS A DEATH BOWLER TO NOT LET THE BATTERS <br>
						HIT BOUNDARIES OFF YOUR BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathC") == true)	//DEATH BOWLER WITH HIGH DOT BALL%, LOW BOUNDARY%, HIGH AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				// -200% for three lines!
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						YOU MAY BE A BIT WORRIED OF YOUR BOWLING AVERAGE, ARE YOU?<br>
						DON'T WORRY ABOUT IT, KEEP BOWLING IN GOOD AREAS AND <br>
						YOUR AVERAGE WILL DEFINITELY IMPROVE! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD TO SEE YOUR DOT BALL PERCENTAGE, MATE. TELLS US HOW GOOD YOU ARE!<br> 
						WISH YOU KEEP BOWLING MORE AND MORE DOT BALLS TO PUT THE BATTER UNDER PRESSURE!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						THIS TALKS VOLUMES ABOUT HOW YOU'RE TORTURING THE BATTERS! xD</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathD") == true)	//DEATH BOWLER WITH LESS DOT BALL%, LOW BOUNDARY%, LOW AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-275%);'> <br>
						HEY, YOUR BOWLING AVERAGE SEEMS TO BE EXCELLENT BUDDY!<br>
						WITH THIS, YOU CAN CHANGE THE COMPLEXION OF THE GAME SINGLE-HANDEDLY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						JUST NOTICED THAT YOUR DOT BALL PERCENTAGE IS A BIT LOW.<br> 
						AS A DEATH BOWLER, YOU MUST MAKE IT A HABIT TO BOWL MORE DOT BALLS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						THIS TALKS VOLUMES ABOUT HOW YOU'RE TORTURING THE BATTERS! xD</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathE") == true)	//DEATH BOWLER WITH LESS DOT BALL%, LOW BOUNDARY%, HIGH AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOU MAY BE A BIT WORRIED OF YOUR BOWLING AVERAGE, ARE YOU?<br>
						DON'T WORRY ABOUT IT, KEEP BOWLING IN GOOD AREAS AND <br>
						YOUR AVERAGE WILL DEFINITELY IMPROVE! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						JUST NOTICED THAT YOUR DOT BALL PERCENTAGE IS A BIT LOW.<br> 
						AS A DEATH BOWLER, YOU MUST MAKE IT A HABIT TO BOWL MORE DOT BALLS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						THIS TALKS VOLUMES ABOUT HOW YOU'RE TORTURING THE BATTERS! xD</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathF") == true)	//DEATH BOWLER WITH LESS DOT BALL%, HIGH BOUNDARY%, LESS AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-275%);'> <br>
						HEY, YOUR BOWLING AVERAGE SEEMS TO BE EXCELLENT BUDDY!<br>
						WITH THIS, YOU CAN CHANGE THE COMPLEXION OF THE GAME SINGLE-HANDEDLY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						JUST NOTICED THAT YOUR DOT BALL PERCENTAGE IS A BIT LOW.<br> 
						AS A DEATH BOWLER, YOU MUST MAKE IT A HABIT TO BOWL MORE DOT BALLS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						PERHAPS YOU'RE CONCEDING MORE BOUNDARIES THAN EXPECTED. <br>
						REMEMBER, IT IS YOUR DUTY AS A DEATH BOWLER TO NOT LET THE BATTERS <br>
						HIT BOUNDARIES OFF YOUR BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathG") == true)	//DEATH BOWLER WITH HIGH DOT BALL%, HIGH BOUNDARY%, HIGH AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOU MAY BE A BIT WORRIED OF YOUR BOWLING AVERAGE, ARE YOU?<br>
						DON'T WORRY ABOUT IT, KEEP BOWLING IN GOOD AREAS AND <br>
						YOUR AVERAGE WILL DEFINITELY IMPROVE! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD TO SEE YOUR DOT BALL PERCENTAGE, MATE. TELLS US HOW GOOD YOU ARE!<br> 
						WISH YOU KEEP BOWLING MORE AND MORE DOT BALLS TO PUT THE BATTER UNDER PRESSURE!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						PERHAPS YOU'RE CONCEDING MORE BOUNDARIES THAN EXPECTED. <br>
						REMEMBER, IT IS YOUR DUTY AS A DEATH BOWLER TO NOT LET THE BATTERS <br>
						HIT BOUNDARIES OFF YOUR BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowldeathH") == true)	//DEATH BOWLER WITH LESS DOT BALL%, HIGH BOUNDARY%, HIGH AVERAGE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - DEATH BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE DEATH! </div>";
				echo "<div class='box2' style='transform:translate(1%,-400%);'> <br>
						YOUR ECONOMICAL RATE LOOKS DAMN GOOD! KEEP IMPROVING. <br> 
						YOUR TOP PRIORITY IS TO MAINTAIN THIS AND PICK UP THOSE IMPORTANT WICKETS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOU MAY BE A BIT WORRIED OF YOUR BOWLING AVERAGE, ARE YOU?<br>
						DON'T WORRY ABOUT IT, KEEP BOWLING IN GOOD AREAS AND <br>
						YOUR AVERAGE WILL DEFINITELY IMPROVE! </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						JUST NOTICED THAT YOUR DOT BALL PERCENTAGE IS A BIT LOW.<br> 
						AS A DEATH BOWLER, YOU MUST MAKE IT A HABIT TO BOWL MORE DOT BALLS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						PERHAPS YOU'RE CONCEDING MORE BOUNDARIES THAN EXPECTED. <br>
						REMEMBER, IT IS YOUR DUTY AS A DEATH BOWLER TO NOT LET THE BATTERS <br>
						HIT BOUNDARIES OFF YOUR BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenA") == true)	//PERFECT OPENING BOWLER --> GOOD ECONOMY, LOW AVERAGE, LOW BOUNDARY%, LOW SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 80% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						STUNNING AVERAGE FOR AN OPENING BOWLER, SOUNDS NORMAL RIGHT?<br>
						YOU SEEM TO BE BE TAKING WICKETS WHILE NOT LEAKING TOO <br>
						MANY RUNS, CONTINUE DOING THIS. </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU SURELY NEED TO BE APPLAUDED FOR BEING A GENUINE WICKET TAKER.<br> 
						YOUR STRIKE RATE TELLS US HOW YOU TRASH THE OPPOSITION'S BATTING ORDER!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						WELL, THAT SOUNDS UNREAL FOR AN OPENING BOWLER!! GOOD JOB MAN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenB") == true)	//OPENING BOWLER WITH GOOD ECONOMY, DECENT AVG, LESS BOUNDARY%, GOOD SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 60% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOUR AVERAGE SEEMS TO BE SLIGHTLY ON THE HIGHER SIDE.<br>
						GOING FOR WICKETS IS FINE. BUT AVOID TRYING TOO MUCH AND <br>
						TRY TO FOCUS ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD WORK ON MAINTAINING A GOOD STRIKE RATE PAL!<br> 
						YOU CAN VERY WELL IMPROVE THIS IF YOU START TO BUILD MORE PRESSURE<br>
						ON THE OPPOSITION BATTERS BY BOWLING MORE DOTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						WELL, THAT SOUNDS UNREAL FOR AN OPENING BOWLER!! GOOD JOB MAN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenC") == true)	//OPENING BOWLER WITH GOOD ECONOMY, HIGH AVG, LESS BOUNDARY%,GOOD SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-275%);'> <br>
						BEING ECONOMICAL IS FINE, BUT DON'T COMPROMISE ON WICKETS.<br>
						AS AN OPENING BOWLER, YOU JOB IS TO PICK EARLY WICKETS, DON'T FORGET THAT!</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD WORK ON MAINTAINING A GOOD STRIKE RATE PAL!<br> 
						YOU CAN VERY WELL IMPROVE THIS IF YOU START TO BUILD MORE PRESSURE<br>
						ON THE OPPOSITION BATTERS BY BOWLING MORE DOTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						WELL, THAT SOUNDS UNREAL FOR AN OPENING BOWLER!! GOOD JOB MAN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenD") == true)	//OPENING BOWLER WITH GOOD ECONOMY, LOW AVG, DECENT BOUNDARY%, GOOD SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						STUNNING AVERAGE FOR AN OPENING BOWLER, SOUNDS NORMAL RIGHT?<br>
						YOU SEEM TO BE BE TAKING WICKETS WHILE NOT LEAKING TOO <br>
						MANY RUNS, CONTINUE DOING THIS. </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						GOOD WORK ON MAINTAINING A GOOD STRIKE RATE PAL!<br> 
						YOU CAN VERY WELL IMPROVE THIS IF YOU START TO BUILD MORE PRESSURE<br>
						ON THE OPPOSITION BATTERS BY BOWLING MORE DOTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WE UNDERSTAND THAT IT'S HARD FOR OPENING BOWLERS TO NOT CONCEDE BOUNDARIES! <br>
						BUT THIS MIGHT BE BAD FOR YOUR TEAM AS THE OPPOSITION WILL START<br>
						DRAWING THE GAME TOWARDS THEM WITH THIS EARLY FLOURISH.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenE") == true)	//OPENING BOWLER WITH GOOD ECONOMY, LOW AVERAGE, LESS BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 60% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						STUNNING AVERAGE FOR AN OPENING BOWLER, SOUNDS NORMAL RIGHT?<br>
						YOU SEEM TO BE BE TAKING WICKETS WHILE NOT LEAKING TOO <br>
						MANY RUNS, CONTINUE DOING THIS. </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						HMMMM, YOU DON'T SEEM TO PICK WICKETS OFTEN AS GREAT OPENING BOWLERS DO!<br> 
						PERHAPS THE BATTERS ARE TOO CAREFUL WHILE BATTING AGAINST YOU,<br>
						BUT NEVER GIVE UP ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						WELL, THAT SOUNDS UNREAL FOR AN OPENING BOWLER!! GOOD JOB MAN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenF") == true)	//OPEN BOWLER WITH GOOD ECONOMY, DECENT AVERAGE, HIGH BOUNDARY%, LESS SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						YOUR AVERAGE SEEMS TO BE SLIGHTLY ON THE HIGHER SIDE.<br>
						GOING FOR WICKETS IS FINE. BUT AVOID TRYING TOO MUCH AND <br>
						TRY TO FOCUS ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU SURELY NEED TO BE APPLAUDED FOR BEING A GENUINE WICKET TAKER.<br> 
						YOUR STRIKE RATE TELLS US HOW YOU TRASH THE OPPOSITION'S BATTING ORDER!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						BUT IF YOU CAN REDUCE THE BOUNDARIES YOU CONCEDE, IT WILL BE GREAT!<br>
						BECAUSE WITH THESE RUNS, THE MOMENTUM SHIFTS TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenG") == true)	//OPEN BOWLER WITH GOOD ECONOMY, DECENT AVERAGE, LESS BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						YOUR AVERAGE SEEMS TO BE SLIGHTLY ON THE HIGHER SIDE.<br>
						GOING FOR WICKETS IS FINE. BUT AVOID TRYING TOO MUCH AND <br>
						TRY TO FOCUS ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						HMMMM, YOU DON'T SEEM TO PICK WICKETS OFTEN AS GREAT OPENING BOWLERS DO!<br> 
						PERHAPS THE BATTERS ARE TOO CAREFUL WHILE BATTING AGAINST YOU,<br>
						BUT NEVER GIVE UP ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						YOU AREN'T GIVING AWAY TOO MANY BOUNDARIES, ARE YOU? <br>
						WELL, THAT SOUNDS UNREAL FOR AN OPENING BOWLER!! GOOD JOB MAN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenH") == true)	//OPEN BOWLER WITH GOOD ECONOMY, LESS AVG, HIGH BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 50% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU MIGHT GO FOR RUNS WHILE TRYING TO GO FOR WICKETS, BUT MAKE <br>
						SURE YOU DON'T CONCEDE TOO MANY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						STUNNING AVERAGE FOR AN OPENING BOWLER, SOUNDS NORMAL RIGHT?<br>
						YOU SEEM TO BE BE TAKING WICKETS WHILE NOT LEAKING TOO <br>
						MANY RUNS, CONTINUE DOING THIS. </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						HMMMM, YOU DON'T SEEM TO PICK WICKETS OFTEN AS GREAT OPENING BOWLERS DO!<br> 
						PERHAPS THE BATTERS ARE TOO CAREFUL WHILE BATTING AGAINST YOU,<br>
						BUT NEVER GIVE UP ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						BUT IF YOU CAN REDUCE THE BOUNDARIES YOU CONCEDE, IT WILL BE GREAT!<br>
						BECAUSE WITH THESE RUNS, THE MOMENTUM SHIFTS TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlopenI") == true)	//OPEN BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, DECENT BOUNDARY%, DECENT SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - OPENING BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 40% OF YOUR OVERS IN THE POWERPLAY! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE DOESN'T LOOK GOOD! <br> 
						YOU'RE GOING FOR MORE RUNS WHILE TRYING TO GET WICKETS. PERHAPS YOU <br>
						NEED TO JUST FOCUS ON BOWLING GOOD BALLS NOW AND NOT TAKING WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						YOUR AVERAGE SEEMS TO BE SLIGHTLY ON THE HIGHER SIDE.<br>
						GOING FOR WICKETS IS FINE. BUT AVOID TRYING TOO MUCH AND <br>
						TRY TO FOCUS ON BOWLING IN GOOD AREAS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						HMMMM, YOU DON'T SEEM TO PICK WICKETS OFTEN AS GREAT OPENING BOWLERS DO!<br> 
						TRY TO COME UP WITH MORE VARIATIONS IN THE POWERPLAY<br>
						SO THAT YOU MAKE THINGS HARD FOR THE OPPOSITION BATTERS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						BUDDY, YOU'RE CONCEDING WAY TOO MANY BOUNDARIES. <br>
						THIS IS CLEARLY ONE OF THE REASONS FOR YOUR NOT-SO-GOOD ECO. RATE!<br>
						MAYBE YOU NEED TO ADOPT A LITTLE LESS ATTACKING MINDSET. </div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidA") == true)	//MIDDLE BOWLER WITH GOOD ECONOMY, LOW AVERAGE, HIGH BOUNDARY%, GOOD SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 75% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU HAVE THE POWER TO CHANGE THE STATE OF THE GAME, NO MATTER <br>
						HOW THE START IS. BUT TRY TO GET MORE DISMISSALS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE BE TAKING WICKETS WHILE NOT LEAKING TOO <br>
						MANY RUNS, CONTINUE DOING THIS. </div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						NICE TO SEE THAT YOU'RE PICKING UP WICKETS REGULARLY!<br> 
						IF YOU CAN WORK ON IMPROVING YOUR STRIKE RATE, YOU CAN BE<br>
						THAT PARTNERSHIP BREAKER EVERY TEAM WANTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						BUT IF YOU CAN REDUCE THE BOUNDARIES YOU CONCEDE, IT WILL BE GREAT!<br>
						BECAUSE WITH THESE RUNS, THE MOMENTUM SHIFTS TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidB") == true)	//MIDDLE BOWLER WITH GOOD ECONOMY, HIGH AVERAGE, HIGH BOUNDARY%, LESS SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 75% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU HAVE THE POWER TO CHANGE THE STATE OF THE GAME, NO MATTER <br>
						HOW THE START IS. BUT TRY TO GET MORE DISMISSALS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						NOT A GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						NICE TO SEE THAT YOU'RE PICKING UP WICKETS REGULARLY!<br> 
						IF YOU CAN WORK ON IMPROVING YOUR STRIKE RATE, YOU CAN BE<br>
						THAT PARTNERSHIP BREAKER EVERY TEAM WANTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						BUT IF YOU CAN REDUCE THE BOUNDARIES YOU CONCEDE, IT WILL BE GREAT!<br>
						BECAUSE WITH THESE RUNS, THE MOMENTUM SHIFTS TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidC") == true)	// MID BOWLER WITH GOOD ECONOMY, HIGH AVG, LESS BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 75% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU HAVE THE POWER TO CHANGE THE STATE OF THE GAME, NO MATTER <br>
						HOW THE START IS. BUT TRY TO GET MORE DISMISSALS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						NOT A GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU'RE NOT PICKING UP WICKETS THAT REGULARLY, THAT'S QUITE A CONCERN!<br> 
						IF YOU CAN WORK ON IMPROVING YOUR STRIKE RATE, YOU CAN BE<br>
						THAT PARTNERSHIP BREAKER EVERY TEAM WANTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						THIS CAN OWE TO YOUR TENDENCY OF NOT CONCEDING TOO MANY BOUNDARIES!<br>
						MAKE THIS A HABIT, IT'LL DO WONDERS FOR YOU.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidD") == true)	//MID BOWLER WITH GOOD ECONOMY, DECENT AVG, HIGH BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 80% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU HAVE THE POWER TO CHANGE THE STATE OF THE GAME, NO MATTER <br>
						HOW THE START IS. BUT TRY TO GET MORE DISMISSALS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br> 
						NOT A GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU'RE NOT PICKING UP WICKETS THAT REGULARLY, THAT'S QUITE A CONCERN!<br> 
						IF YOU CAN WORK ON IMPROVING YOUR STRIKE RATE, YOU CAN BE<br>
						THAT PARTNERSHIP BREAKER EVERY TEAM WANTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						THIS CAN OWE TO YOUR TENDENCY OF NOT CONCEDING TOO MANY BOUNDARIES!<br>
						MAKE THIS A HABIT, IT'LL DO WONDERS FOR YOU.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidE") == true)	// MID BOWLER WITH GOOD ECONOMY, HIGH AVG, HIGH BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 80% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOUR ECONOMICAL RATE LOOKS GOOD! KEEP IMPROVING. <br> 
						YOU HAVE THE POWER TO CHANGE THE STATE OF THE GAME, NO MATTER <br>
						HOW THE START IS. BUT TRY TO GET MORE DISMISSALS!</div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						NOT A GOOD AVERAGE FOR SOMEONE BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						IT'S HIGH TIME THAT YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU'RE NOT PICKING UP WICKETS THAT REGULARLY, THAT'S QUITE A CONCERN!<br> 
						IF YOU CAN WORK ON IMPROVING YOUR STRIKE RATE, YOU CAN BE<br>
						THAT PARTNERSHIP BREAKER EVERY TEAM WANTS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						NICE JOB ON MAINTAINING A GOOD ECONOMICAL RATE PAL! <br>
						THIS CAN OWE TO YOUR TENDENCY OF NOT CONCEDING TOO MANY BOUNDARIES!<br>
						MAKE THIS A HABIT, IT'LL DO WONDERS FOR YOU.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			// REF POINT!!!
			else if(strpos($fullUrl,"pos=bowlmidF") == true)	//MID BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, DECENT BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 90% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						NOT A GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU'RE NOT PICKING UP WICKETS AS EXPECTED, THAT'S QUITE A CONCERN!<br> 
						WICKETS IS KEY, MY FRIEND. TRY TO STUFF YOURSELF WITH LOTS OF VARIATIONS<br>
						SO THAT YOU START PICKING MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						YOU SHOULD REDUCE THE BOUNDARIES YOU CONCEDE, SO THAT THE MOMENTUM DOESN'T<br>
						SHIFT TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidG") == true)	//MID BOWLER WITH DECENT TO BAD ECONOMY, HIGH AVG, HIGH BOUNDARY%, LESS SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 90% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						NOT A GOOD AVERAGE FOR SOMEONE BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						IT'S HIGH TIME THAT YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						NICE TO SEE THAT YOU'RE PICKING UP WICKETS REGULARLY!<br> 
						HAVING SAID THAT, WE WANT YOU TO WORK ON IMPROVING YOUR<br>
						ABILITY NOT TO LEAK TOO MANY RUNS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						YOU SHOULD REDUCE THE BOUNDARIES YOU CONCEDE, SO THAT THE MOMENTUM DOESN'T<br>
						SHIFT TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidH") == true)	//MID BOWLER WITH DECENT TO BAD ECONOMY, HIGH AVG, DECENT BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 90% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						NOT A GOOD AVERAGE FOR SOMEONE BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						IT'S HIGH TIME THAT YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU'RE NOT PICKING UP WICKETS AS EXPECTED, THAT'S QUITE A CONCERN!<br> 
						WICKETS IS KEY, MY FRIEND. TRY TO STUFF YOURSELF WITH LOTS OF VARIATIONS<br>
						SO THAT YOU START PICKING MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						YOU SHOULD REDUCE THE BOUNDARIES YOU CONCEDE, SO THAT THE MOMENTUM DOESN'T<br>
						SHIFT TO THE OPPOSITION.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=bowlmidI") == true)	//MID BOWLER WITH DECENT TO BAD ECONOMY, LESS AVG, HIGH BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						MAKE SURE YOU BOWL AT LEAST 90% OF YOUR OVERS IN THE MIDDLE OVERS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						NOT A GREAT AVERAGE FOR A BOWLER BOWLING IN MID OVERS!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU MUST START TO PICK UP WICKETS MORE REGULARLY TO HAVE A<br> 
						BETTER STRIKE RATE! WE WANT YOU TO WORK ON IMPROVING YOUR<br>
						ABILITY NOT TO LEAK TOO MANY RUNS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						BUT THE GOOD THING IS YOU'RE NOT CONCEDING MORE BOUNDARIES!<br>
						BUT STILL, YOU GOT TO FIND A WAY TO STOP GIVING AWAY TOO MANY RUNS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=not_a_bowlA") == true)	//CORRECTIONS WITH DECENT TO BAD ECONOMY AND VERY HIGH BOUNDARY%
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						EXPECTING YOU TO IMPROVE A LOT SO THAT YOU CAN START PERFORMING WELL! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOUR BOWLING AVERAGE SEEMS TO BE DECENT. BUT IS THAT ENOUGH?!<br>
						YOU SEEM TO BE LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOUR STRIKE RATE SEEMS TO BE FINE JUST LIKE YOUR AVERAGE!<br> 
						HAVING SAID THAT, WE BADLY HOPE THAT YOU WORK ON IMPROVING YOUR<br>
						ABILITY NOT TO LEAK TOO MANY RUNS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						THIS IS BECAUSE OF YOUR VERY HIGH BOUNDARY PERCENTAGE.<br>
						YOU SOMEHOW GOT TO FIND A WAY TO STOP BOWLING LOOSE BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=not_a_bowlB") == true)	//NOT A BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, HIGH BOUNDARY%, HIGH SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						EXPECTING YOU TO IMPROVE A LOT SO THAT YOU CAN START PERFORMING WELL! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						YOU SHOULD SERIOUSLY LOOK TO IMPROVE YOUR ECONOMICAL RATE. <br> 
						TRY TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BECOME THAT GUY WHO WINS GAMES SINGLE-HANDEDLY FOR HIS TEAM. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOUR BOWLING AVERAGE SEEMS TO BE DECENT. BUT IS THAT ENOUGH?!<br>
						YOU HAVE BEEN LEAKING TOO MANY RUNS OR NOT TAKING WICKETS REGULARLY.<br>
						YOU SHOULD BOWL TO YOUR FIELDSET TO STOP RUN FLOW OR GET MORE WICKETS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						YOU MUST START TO PICK UP WICKETS MORE REGULARLY TO HAVE A<br> 
						BETTER STRIKE RATE! WE WANT YOU TO WORK ON IMPROVING YOUR<br>
						ABILITY NOT TO LEAK MORE RUNS AND JUST FOCUS ON THE BASICS.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						THIS IS BECAUSE OF YOUR VERY HIGH BOUNDARY PERCENTAGE.<br>
						YOU SOMEHOW GOT TO FIND A WAY TO STOP BOWLING LOOSE BALLS!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=not_a_bowlC") == true)	//VERY HIGH ECONOMY
			{
				echo "<div class='box1'> 
						YOUR IDEAL BOWLING ROLE - MIDDLE OVERS BOWLER. <br>
						EXPECTING YOU TO IMPROVE A LOT SO THAT YOU CAN START PERFORMING WELL! </div>";
				echo "<div class='box2' style='transform:translate(1%,-300%);'> <br>
						HMMMM, WE SEE THAT YOU'RE GIVING AWAY TOO MANY RUNS. <br> 
						LOOK TO BOWL TO YOUR STRENGTHS, DO MORE HOMEWORK AND BOUNCE BACK <br>
						STRONGER! BEING AWARE OF THE GROUND CONDITIONS WILL HELP YOU BIG TIME. </div>";
				echo "<div class='box2' style='transform:translate(1%,-200%);'> <br>
						YOUR BOWLING AVERAGE CAN BE IMPROVED DRASTICALLY IF YOU WORK ON<br>
						STOP LEAKING TOO MANY RUNS. YOU MAY HAVE THE KNACK OF PICKING CRUCIAL<br>
						WICKETS, BUT YOU'LL BECOME MORE RELIABLE IF YOU'RE ECONOMICAL.</div>";
				echo "<div class='box2' style='transform:translate(1%,-120%);'> <br><br><br>
						WE SUGGEST YOU NOT TO BOWL IN MATCHES FOR A BRIEF SUCCESSION NOW.<br> 
						HEAD BACK TO THE NETS, SHARPEN YOUR BASICS AND DEVELOP SOME VARIATIONS!<br>
						YOU'LL SURELY BECOME A BETTER BOWLER THAN YOUR PRESENT SELF.</div>";
				echo "<div class='box2' style='transform:translate(1%,-65%);'> <br><br>
						WELL, YOUR ECO. RATE SAYS THAT YOU'RE NOT BOWLING THOSE 'TIGHT LINES'! <br>
						TRY TO RESTRICT THE BATTERS FROM HITTING MORE BOUNDARIES!<br>
						IF YOU START DOING THIS, YOU WILL AUTOMATICALLY SEE BETTER RESULTS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-border.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
	?>
</body>

</html>