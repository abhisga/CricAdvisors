<html>

<head>
	<title> CRICADVISORS - Batting Tips </title>
	<link rel = "icon" href =  "http://pngimg.com/uploads/cricket/cricket_PNG91.png" type = "image/x-icon"> 
	<link rel="stylesheet"  type="text/css" href="battipsDBMS.css">
	<link href= 'https://fonts.googleapis.com/css?family=Lobster|Great+Vibes|Satisfy|Inconsolata|Open+Sans' rel='stylesheet'>  
	<link href= 'https://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet'> 
	<style>
	
	.box1
	{
		color: #1affb2;
		transform:translate(1%,-250%);
		font-family: Chelsea Market;
		text-shadow:2px 2px 5px #000000;
		font-size:42px;
		letter-spacing : 2px;
		animation : colchg 3s;
		animation-iteration-count : infinite;
	}
	
	.box1bowl
	{
		color: #1affb2;
		transform:translate(1%,-175%);
		font-family: Chelsea Market;
		text-shadow:2px 2px 5px #000000;
		font-size:42px;
		letter-spacing : 2px;
		animation : colchg 3s;
		animation-iteration-count : infinite;
	}
	
	@keyframes colchg
	{
		0% {color : #1affb2; opacity:0%;}
		100% {color : white; opacity:100%;}
	}
	.box2
	{
		color: #1affb2;
		font-family: Chelsea Market;
		text-shadow:2px 2px 5px #000000;
		font-size:28px;
		letter-spacing : 2px;
		animation : colchg 3s;
		animation-iteration-count : infinite;
	}
	
	.box
	{
		background-color: #1affb2;
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
	<div id="image" style="overflow-x : hidden;">  <img src="CricAdvisors Font.png" height="35%" width="65%">  </div>
	<div> <img src="BattingTips.png" height="41%" width="34%" style="transform : translateY(-10%);"> </div>
    <br>	
	
	<form action="mainpageDBMS.php">
	<input type="submit" value="BACK TO PREVIOUS PAGE" style="background-color:black;color:#1affb2;transform:translate(-3%,-175%);
	font-family:Verdana;font-size:20px;"> </input>
	</form>
	<br><br>
	<div class="box" style="transform:translate(-150%,10%);"> <p style="transform:translateY(-50%);"> AVERAGE </p> </div>
	<div class="box" style="transform:translate(0%,-90%);"> <p style="transform:translateY(-50%);"> STRIKE RATE </p> </div>
	<div class="box" style="transform:translate(150%,-190%);"> <p style="transform:translateY(-35%);"> BOUNDARY PERCENT </p> </div>
	<div class="box" style="transform:translate(-60%,-150%);"> <p style="transform:translateY(-35%);"> DOT BALL PERCENT </p> </div>
	<div class="box" style="transform:translate(60%,-250%);font-size:25px;"> <p style="transform:translateY(-20%);"> BOUNDARY PER INNINGS </p> </div>
		
	<?php
			session_start();
			include_once 'connection.php';
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			$z=$_SESSION['userid'];
			$query1="SELECT * FROM bat_par WHERE PLAYER_ID=$z";
			$result1=mysqli_query($con,$query1);
			$row=mysqli_fetch_assoc($result1);
			
			$avg=($row['AVG']==0)?"-":$row['AVG'];
			$sr=($row['SR']==0)?"-":$row['SR'];
			if($avg=="-" && $sr=="-")
			{
				$dp='-';
				$bp='-';
				$bpi='-';				
			}
			else
			{
				$dp=$row['DBPER'];
				$bp=$row['BDPER'];
				$bpi=$row['BPI'];
			}
			
			echo "<div style='color:black;transform:translate(-30.5%,-1070%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $avg</div>";
			echo "<div style='color:black;transform:translate(0%,-1170%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $sr</div>";
			echo "<div style='color:black;transform:translate(30.5%,-1275%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $bp</div>";
			echo "<div style='color:black;transform:translate(-12.5%,-1035%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $dp</div>";
			echo "<div style='color:black;transform:translate(12.5%,-1135%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:45px;'>  $bpi</div>";
			echo "<div style='color:white;transform:translate(0%,-550%);font-weight:bold;font-family:Lobster;text-shadow:1px 1px 1px #000000;font-size:60px;letter-spacing:2px;'>  HERE ARE SOME TIPS - </div>";
			if(strpos($fullUrl,"pos=openA") == true)	//OPENER WITH GOOD STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						ALWAYS REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-80%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-80%);'> <br><br><br>
						YOU'RE NOT BAGGING MORE DUCKS, ARE YOU? <br>
						WELL, YOU GOT TO MAKE THIS AS A HABIT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openB") == true)	//OPENER WITH GOOD STRIKE RATE, MORE DOT BALL %, LESS DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						ALWAYS REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						TRY TO ROTATE STRIKE AND GET TO THE OTHER END!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT BAGGING MORE DUCKS, ARE YOU? <br>
						WELL, YOU GOT TO MAKE THIS AS A HABIT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openC") == true)	//OPENER WITH LOW STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOU CAN INDEED WORK ON IMPROVING YOUR STRIKE RATE.<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT BAGGING MORE DUCKS, ARE YOU? <br>
						WELL, YOU GOT TO MAKE THIS AS A HABIT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openD") == true)	//OPENER WITH GOOD STRIKE RATE, LESS DOT BALL %, MORE DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						TRY TO CONCENTRATE BETTER, GET YOUR HEAD STILL AND GET THAT FIRST RUN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openE") == true)	//OPENER WITH LOW STRIKE RATE, MORE DOT BALL %, LESS DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOU CAN INDEED WORK ON IMPROVING YOUR STRIKE RATE.<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						TRY TO ROTATE STRIKE AND GET TO THE OTHER END!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT BAGGING MORE DUCKS, ARE YOU? <br>
						WELL, YOU GOT TO MAKE THIS AS A HABIT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openF") == true)	//OPENER WITH GOOD STRIKE RATE, MORE DOT BALL %, MORE DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						TRY TO ROTATE STRIKE AND GET TO THE OTHER END!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						TRY TO CONCENTRATE BETTER, GET YOUR HEAD STILL AND GET THAT FIRST RUN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openG") == true)	//OPENER WITH LOW STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOU CAN INDEED WORK ON IMPROVING YOUR STRIKE RATE.<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT BAGGING MORE DUCKS, ARE YOU? <br>
						WELL, YOU GOT TO MAKE THIS AS A HABIT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openH") == true)	//OPENER WITH LOW STRIKE RATE, MORE DOT BALL %, MORE DUCK %, GREAT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOU CAN INDEED WORK ON IMPROVING YOUR STRIKE RATE.<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						TRY TO ROTATE STRIKE AND GET TO THE OTHER END!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						TRY TO CONCENTRATE BETTER, GET YOUR HEAD STILL AND GET THAT FIRST RUN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openI") == true)	//MISSING CASE
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 1,2,3 OR 4!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						SEEMS AS THOUGH YOU'RE KILLING THE BOWLERS BY HITTING EVERY BALL HARD!<br>
						ALWAYS REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WITH YOUR MARVELLOUS STRIKE RATE, YOU CAN PLAY A FEW DOT BALLS!<br> 
						BUT MAKE SURE THAT YOU DON'T PLAY TOO MANY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						MAKE SURE THAT YOU DON'T BAG MORE DUCKS WHILE TRYING TO SMASH THE BOWLERS!<br>
						TRY TO CONCENTRATE BETTER, GET YOUR HEAD STILL AND GET THAT FIRST RUN.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlA") == true)	// BOWLING OPENER WITH GOOD SR, LOW DOT BALL%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOUR BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlB") == true)	//BOWLING OPENER WITH THE GOOD SR, HIGH DOT BALL%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						YOU NEED TO PLAY WAY LESSER DOTS IF YOU'RE GOING TO OPEN THE INNINGS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlC") == true)	//BOWLING OPENER WITH THE LOW SR, LOW DOT BALL%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU SHOULD BE LOOKING TO IMPROVE YOUR STRIKE RATE!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT KEEP IN MIND THAT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlD") == true)	//BOWLING OPENER WITH THE GOOD SR, LOW DOT BALL%, HIGH DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlE") == true)	//BOWLING OPENER WITH THE LOW SR, HIGH DOT BALL%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU SHOULD BE LOOKING TO IMPROVE YOUR STRIKE RATE!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						YOU NEED TO PLAY WAY LESSER DOTS IF YOU'RE GOING TO OPEN THE INNINGS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlF") == true)	//BOWLING OPENER WITH THE GOOD SR, HIGH DOT BALL%, HIGH DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						YOU NEED TO PLAY WAY LESSER DOTS IF YOU'RE GOING TO OPEN THE INNINGS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlG") == true)	//BOWLING OPENER WITH THE LOW SR, LOW DOT BALL%, HIGH DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU SHOULD BE LOOKING TO IMPROVE YOUR STRIKE RATE!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE DOING A SPLENDID JOB BY NOT PLAYING TOO MANY DOT BALLS!<br> 
						KEEP DOING THIS AND PILE UP MORE RUNS BUDDY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlH") == true)	//BOWLING OPENER WITH THE LOW SR, HIGH DOT BALL%, HIGH DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOU'RE BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU SHOULD BE LOOKING TO IMPROVE YOUR STRIKE RATE!<br>
						REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						HMMMMM, WE CERTAINLY THINK THAT YOU'RE PLAYING MORE DOT BALLS THAN EXPECTED!<br> 
						YOU NEED TO PLAY WAY LESSER DOTS IF YOU'RE GOING TO OPEN THE INNINGS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=openbowlI") == true)	// BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER<=30
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - TOP ORDER BATSMAN. <br>
						BEING A BOWLER, YOUR BATTING SEEMS TO BE EXCELLENT!<br>
						EXPECTING YOU TO BECOME A HANDY OPENER.</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS SOLID. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						SCORE MORE AT THE TOP OF THE ORDER AND MAKE YOUR TEAM WIN! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						SEEMS AS THOUGH YOU'RE KILLING THE BOWLERS BY HITTING EVERY BALL HARD!<br>
						ALWAYS REMEMBER, IT'S YOUR DUTY AS AN OPENER TO GIVE YOUR TEAM A FLYING START!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WITH YOUR MARVELLOUS STRIKE RATE, YOU CAN PLAY A FEW DOT BALLS!<br> 
						BUT MAKE SURE THAT YOU DON'T PLAY TOO MANY!</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						IT'S OKAY TO SCORE DUCKS WHEN YOU'RE PLAYING AS A PURE BOWLER! <br>
						BUT YOU CAN'T GET AWAY LIKE THIS WHEN YOU'RE PLAYING AS AN OPENER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishA") == true)	//BATTING FINISHER WITH LOW DUCK PERCENT, LESS DOT BALL PERCENT, GREAT SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - LOWER MIDDLE ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT PLAYING TOO MANY DOT BALLS, ARE YOU?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOU'RE DOING A FINE JOB BY NOT SCORING DUCKS TOO OFTEN!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishB") == true)	//BATTING FINISHER WITH DECENT DUCK PERCENT, LESS DOT BALL PERCENT, GREAT SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT PLAYING TOO MANY DOT BALLS, ARE YOU?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishC") == true)	//BATTING FINISHER WITH LOW DUCK PERCENT, HIGH DOT BALL PERCENT, GREAT SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WELL IT'S NOT COOL FOR A FINISHER TO PLAY TOO MANY DOT BALLS, ISN'T IT?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS<br>
						DOT BALLS TO KEEP UP WITH THE REQUIRED RUN RATE. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOU'RE DOING A FINE JOB BY NOT SCORING DUCKS TOO OFTEN!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishD") == true)	//BATTING FINISHER WITH DECENT DUCK PERCENT, HIGH DOT BALL PERCENT, GREAT SR
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!</div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-125%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WELL IT'S NOT COOL FOR A FINISHER TO PLAY TOO MANY DOT BALLS, ISN'T IT?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS<br>
						DOT BALLS TO KEEP UP WITH THE REQUIRED RUN RATE. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishbowlA") == true)	// BOWLING FINISHER WITH GREAT SR, LESS DOT%, LESS DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!
						AND THIS IS GREAT FOR A BOWLER! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT PLAYING TOO MANY DOT BALLS, ARE YOU?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOU'RE DOING A FINE JOB BY NOT SCORING DUCKS TOO OFTEN!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishbowlB") == true)	//BOWLING FINISHER WITH GREAT SR, LESS DOT%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!
						AND THIS IS GREAT FOR A BOWLER! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOU'RE NOT PLAYING TOO MANY DOT BALLS, ARE YOU?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishbowlC") == true)	//BOWLING FINISHER WITH GREAT SR, MORE DOT%, LESS DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!
						AND THIS IS GREAT FOR A BOWLER! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WELL IT'S NOT COOL FOR A FINISHER TO PLAY TOO MANY DOT BALLS, ISN'T IT?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOU'RE DOING A FINE JOB BY NOT SCORING DUCKS TOO OFTEN!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=finishbowlD") == true)	//BOWLING FINISHER WITH GREAT SR, MORE DOT%, DECENT DUCKPER
			{
				echo "<div class='box1bowl'> 
						YOUR IDEAL BATTING ROLE - FINISHER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 5, 6 OR 7!
						AND THIS IS GREAT FOR A BOWLER! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS GOOD. BUT THAT ISN'T THE MOST IMPORTANT THING RIGHT? <br> 
						YOU MUST BE RESPONSIBLE ENOUGH TO STAY TILL THE END AND WIN IT FOR YOUR TEAM! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						LOOKS LIKE YOU'RE STRIKING THE BALL PRETTY WELL!<br>
						OBVIOUSLY, YOU KNOW HOW IMPORTANT STRIKE RATE IS FOR A FINISHER! <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						WELL IT'S NOT COOL FOR A FINISHER TO PLAY TOO MANY DOT BALLS, ISN'T IT?<br> 
						AS WE THINK THAT YOU CAN BECOME A GOOD FINISHER, YOU SHOULD LOOK TO PLAY LESS DOT <br>
						BALLS TO KEEP UP WITH THE REQUIRED RUN RATE</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						LOOKS LIKE YOU'RE NOT AFFECTING THE SCORERS BY GETTING MORE DUCKS!<br>
						AS A FINISHER, YOU MUST BE A MORE RELIABLE BATSMAN AND AVOID SCORING DUCKS.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitA") == true)	//BATTING HITTER WITH GREAT STRIKE RATE, HIGH BOUNDARY PERCENT, DECENT AVG. 
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - ATTACKING BATTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						TO BE HONEST, YOUR BATTING AVERAGE ISN'T GREAT. BUT IT'S NOT BAD EITHER! <br> 
						EVERY BATTER IN THE TEAM HAS A DIFFERENT ROLE. SO NO WORRIES ON THE 'NOT SO GREAT AVERAGE'! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT ISN'T SURPRISING THAT YOU HAVE A GREAT STRIKE RATE!<br>
						THAT IS THE REASON WHY WE'VE SUGGESTED YOU TO BE THAT ATTACKING BATTER EVERY TEAM WANTS. <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						BUT IT'S FINE IF YOU PLAY SOME. YOU MUST KNOW THAT YOU HAVE THE ABILITY <br>
						TO MAKE UP FOR THOSE DOTS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOUR BOUNDARY SCORING ABILITY IS BRILLIANT! THAT'S WHAT YOUR TEAM WANTS FROM YOU!<br>
						IT'S HIGHLY IMPORTANT THAT YOU WORK ON THIS ABILITY EVEN MORE JUST TO GET EVEN BETTER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitB") == true)	//BATTING HITTER WITH DECENT STRIKE RATE, HIGH BOUNDARY PERCENT, DECENT AVG.  
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - ATTACKING BATTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						TO BE HONEST, YOUR BATTING AVERAGE ISN'T GREAT. BUT IT'S NOT BAD EITHER! <br> 
						EVERY BATTER IN THE TEAM HAS A DIFFERENT ROLE. SO NO WORRIES ON THE 'NOT SO GREAT AVERAGE'! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						DON'T YOU THINK THAT YOUR STRIKE RATE IS A TAD LOW FOR AN ATTACKING BATTER?<br>
						WE SUGGEST YOU TO WORK ON IT SO THAT YOUR ROLE IN THE TEAM BECOMES MORE PROMINENT!  <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						MAYBE YOUR STRIKE RATE IS A BIT LOW BECAUSE YOU PLAY MORE DOTS! <br> 
						WELL, IT'S HIGH TIME YOU WORK ON REDUCING IT SO THAT YOU DON'T <br>
						PUT MORE PRESSURE ON YOURSELF.</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOUR BOUNDARY SCORING ABILITY IS BRILLIANT! THAT'S WHAT YOUR TEAM WANTS FROM YOU!<br>
						IT'S HIGHLY IMPORTANT THAT YOU WORK ON THIS ABILITY EVEN <br> MORE JUST TO GET EVEN BETTER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitC") == true)	//BATTING HITTER WITH GREAT STRIKE RATE, LESS BOUNDARY PERCENT, DECENT AVG. 
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - ATTACKING BATTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						TO BE HONEST, YOUR BATTING AVERAGE ISN'T GREAT. BUT IT'S NOT BAD EITHER! <br> 
						EVERY BATTER IN THE TEAM HAS A DIFFERENT ROLE. SO NO WORRIES ON THE 'NOT SO GREAT AVERAGE'! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT ISN'T SURPRISING THAT YOU HAVE A GREAT STRIKE RATE!<br>
						THAT IS THE REASON WHY WE'VE SUGGESTED YOU TO BE THAT ATTACKING BATTER EVERY TEAM WANTS. <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						BUT IT'S FINE IF YOU PLAY SOME. YOU MUST KNOW THAT YOU HAVE THE ABILITY <br>
						TO MAKE UP FOR THOSE DOTS! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						AS AN ATTACKING BATTER, YOU NEED TO FIND A WAY TO SCORE BOUNDARIES.<br>
						WE KIND OF THINK THAT YOU AIN'T DOING IT TO THE RIGHT LEVEL, SO FOCUS ON GETTING IT RIGHT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitD") == true)	//BATTING HITTER WITH LESS STRIKE RATE, LESS BOUNDARY PERCENT, DECENT AVG. 
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - ATTACKING BATTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						TO BE HONEST, YOUR BATTING AVERAGE ISN'T GREAT. BUT IT'S NOT BAD EITHER! <br> 
						EVERY BATTER IN THE TEAM HAS A DIFFERENT ROLE. SO NO WORRIES ON THE 'NOT SO GREAT AVERAGE'! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						DON'T YOU THINK THAT YOUR STRIKE RATE IS A TAD LOW FOR AN ATTACKING BATTER?<br>
						WE SUGGEST YOU TO WORK ON IT SO THAT YOUR ROLE IN THE TEAM BECOMES MORE PROMINENT!  <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						MAYBE YOUR STRIKE RATE IS A BIT LOW BECAUSE YOU PLAY MORE DOTS! <br> 
						WELL, IT'S HIGH TIME YOU WORK ON REDUCING IT SO THAT YOU DON'T <br>
						PUT MORE PRESSURE ON YOURSELF.</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						AS AN ATTACKING BATTER, YOU NEED TO FIND A WAY TO SCORE BOUNDARIES.<br>
						WE KIND OF THINK THAT YOU AIN'T DOING IT TO THE RIGHT LEVEL, SO FOCUS ON GETTING IT RIGHT.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitbA") == true)	//BOWLING HITTER WITH STRIKE RATE >140, HIGH BOUNDARY PERCENT, DECENT AVG. 
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - PINCH HITTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS PRETTY DECENT FOR A BOWLER! <br> 
						BUT AS FAR AS YOU WIN GAMES FOR YOUR TEAM, THAT DOESN'T MATTER MUCH. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT ISN'T SURPRISING THAT YOU HAVE A GREAT STRIKE RATE!<br>
						THAT IS THE REASON WHY WE'VE SUGGESTED YOU TO BE A PINCH HITTER. <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						YOUR JOB IS JUST TO WATCH THE BALL AND HIT, DON'T EVEN THINK ABOUT DEFENDING! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOUR BOUNDARY SCORING ABILITY IS BRILLIANT! THAT'S WHAT YOUR TEAM WANTS FROM YOU!<br>
						IT'S HIGHLY IMPORTANT THAT YOU WORK ON THIS ABILITY EVEN MORE JUST TO GET EVEN BETTER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitbB") == true)	//BOWLING HITTER WITH STRIKE RATE <140, HIGH BOUNDARY PERCENT, DECENT AVG. 
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - PINCH HITTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS PRETTY DECENT FOR A BOWLER! <br> 
						BUT AS FAR AS YOU WIN GAMES FOR YOUR TEAM, THAT DOESN'T MATTER MUCH. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						DON'T YOU THINK THAT YOUR STRIKE RATE IS A TAD LOW FOR A PINCH HITTER?<br>
						WE SUGGEST YOU TO WORK ON IT SO THAT YOU CONTRIBUTE WITH THE BAT TOO!  <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						PERHAPS YOU'RE PLAYING MORE DOTS THAN EXPECTED AND THIS MIGHT AFFECT YOUR STRIKE RATE TOO! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						YOUR BOUNDARY SCORING ABILITY IS BRILLIANT! THAT'S WHAT YOUR TEAM WANTS FROM YOU!<br>
						IT'S HIGHLY IMPORTANT THAT YOU WORK ON THIS ABILITY EVEN MORE JUST TO GET EVEN BETTER.</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitbC") == true)	//BOWLING HITTER WITH STRIKE RATE >140, LESS BOUNDARY PERCENT, DECENT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - PINCH HITTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS PRETTY DECENT FOR A BOWLER! <br> 
						BUT AS FAR AS YOU WIN GAMES FOR YOUR TEAM, THAT DOESN'T MATTER MUCH. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT ISN'T SURPRISING THAT YOU HAVE A GREAT STRIKE RATE!<br>
						THAT IS THE REASON WHY WE'VE SUGGESTED YOU TO BE A PINCH HITTER. <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						YOUR JOB IS JUST TO WATCH THE BALL AND HIT, DON'T EVEN THINK ABOUT DEFENDING! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						AS A PINCH HITTER, YOU MUST TRY TO SCORE BOUNDARIES AS MUCH AS YOU CAN.<br>
						YOUR STRIKE RATE LOOKS GREAT. BUT STILL YOUR ROLE IS SMASH BOWLERS AND HELP YOUR TEAM WIN!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=hitbD") == true)	//BOWLING HITTER WITH STRIKE RATE <140, LESS BOUNDARY PERCENT, DECENT AVG.
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - PINCH HITTER. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 4, 5, 6 OR 7! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE LOOKS PRETTY DECENT FOR A BOWLER! <br> 
						BUT AS FAR AS YOU WIN GAMES FOR YOUR TEAM, THAT DOESN'T MATTER MUCH. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						DON'T YOU THINK THAT YOUR STRIKE RATE IS A TAD LOW FOR A PINCH HITTER?<br>
						WE SUGGEST YOU TO WORK ON IT SO THAT YOU CONTRIBUTE WITH THE BAT TOO!  <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						AS A HITTER YOU SHOULDN'T EVEN THINK ABOUT DOT BALLS, RIGHT? <br> 
						PERHAPS YOU'RE PLAYING MORE DOTS THAN EXPECTED AND THIS MIGHT AFFECT YOUR STRIKE RATE TOO! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						AS A PINCH HITTER, YOU MUST TRY TO SCORE BOUNDARIES AS MUCH AS YOU CAN.<br>
						YOUR STRIKE RATE LOOKS GREAT. BUT STILL YOUR ROLE IS SMASH BOWLERS AND HELP YOUR TEAM WIN!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=battail") == true)	//BATTER + TAILENDER
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - LOWER ORDER BATSMAN. <br>
						SURPRISED? WELL, WE WILL TELL YOU WHY. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE SEEMS TO BE LOW FOR A BATTER! <br> 
						DON'T LOSE HOPE, WE ARE HERE TO HELP YOU WITH YOUR BATTING! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT'S TIME FOR YOU TO HEAD BACK TO THE NETS!<br>
						WE SUGGEST YOU TO WORK ON THE BASICS SO THAT YOU CAN FIX YOUR FLAWS!  <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						ALONG WITH NET SESSIONS, TRY TO HAVE MORE MATCH-TIME TOO! <br> 
						EXPERIENCE IS THE BEST TEACHER, SO MORE MATCH TIME IMPLIES MORE LEARNING! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						ABOVE ALL, KEEP BELIEVING IN YOURSELF AND DON'T LOSE PATIENCE. <br>
						YOU'RE JUST GOING THROUGH A LEAN PATCH, YOU'LL SURELY MAKE A COMEBACK!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
			else if(strpos($fullUrl,"pos=tail") == true)	//TAILENDER
			{
				echo "<div class='box1'> 
						YOUR IDEAL BATTING ROLE - LOWER ORDER BATSMAN. <br>
						YOU'RE BEST SUITED IN PLAYING AT POSITIONS 8, 9, 10 OR 11! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						YOUR BATTING AVERAGE ISN'T OVERWHELMING! BUT HEY, EVERY RUN COUNTS! <br> 
						YOUR ROLE IS CONTRIBUTE AS MUCH AS YOU CAN WITH THE BAT! </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						STRIKE RATE IS NOT THE THING THAT YOU NEED TO FOCUS ON.<br>
						HOWEVER, A HEALTHY STRIKE FOR A LOWER ORDER BATTER IS ALWAYS GOOD. <br>
						</div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br><br>
						IT'S IMPORTANT THAT YOU DON'T PLAY TOO MANY DOT BALLS! <br> 
						IN THE LIMITED TIME YOU'LL BAT FOR, LOOK TO SCORE RUNS EVERY BALL. </div>";
				echo "<div class='box2' style='transform:translate(1%,-100%);'> <br><br>
						TRY TO WORK ON YOUR BOUNDARY-HITTING CAPABILITY. <br>
						THIS MIGHT HELP YOU IN BECOMING A HERO NOT JUST WITH THE BALL,BUT WITH THE BAT TOO!</div>";
				echo "<div style='overflow-x : hidden;margin-bottom:-250%;'>  <img src='bottom-borderA.png' height='30%' width='100%'>  </div>";
		
				exit();
			}
	?>
</body>

</html>