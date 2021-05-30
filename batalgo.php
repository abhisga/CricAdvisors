<?php
	session_start();
	include_once 'connection.php';
	
	$z=$_SESSION['userid'];
	
	$query0 = "SELECT * FROM signup WHERE PLAYER_ID=$z";
	$res = mysqli_query($con,$query0);
	$r = mysqli_fetch_assoc($res);
	$y = $r['P_ROLE'];
	
	
	$query1="SELECT * FROM bat_par WHERE PLAYER_ID=$z";
	$result1=mysqli_query($con,$query1);
	$row=mysqli_fetch_assoc($result1);
	
	$query2="SELECT * FROM BAT_RECORDS WHERE P_ID=$z";
	$result2=mysqli_query($con,$query2);
	$row1=mysqli_fetch_assoc($result2);
	$x=$row1['INNINGS'];
	
	$avg=$row['AVG'];
	$sr=$row['SR'];
	$dp=$row['DBPER'];
	$bp=$row['BDPER'];
	$bpi=$row['BPI'];
	$dkp=$row['DUCKPER'];
	
	echo $avg."<br>".$sr;
if($x>5){
	if($avg>=30)
	{
		if($y=="BOWLER")
		{
			if($sr>110 && $sr<140 && $dp<=45 && $dkp<=35)
			header("Location: battipsDBMS.php?pos=openbowlA");	// BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER<=30
		
			elseif($sr>110 && $sr<140 && $dp>45 && $dkp<=35)
				header("Location: battipsDBMS.php?pos=openbowlA");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER<=30
		
			elseif($sr<110 && $dp<=45 && $dkp<=35)
				header("Location: battipsDBMS.php?pos=openbowlA");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER<=30
		
			elseif($sr>110 && $sr<140 && $dp<=45 && $dkp>35)	
				header("Location: battipsDBMS.php?pos=openbowlB");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER>30
		
			elseif($sr<110 && $dp>45 && $dkp<=35)	
				header("Location: battipsDBMS.php?pos=openbowlB");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPE<=30
		
			elseif($sr>110 && $sr<140 && $dp>45 && $dkp>35)
				header("Location: battipsDBMS.php?pos=openbowlB");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPE>30
		
			elseif($sr<110 && $dp<=45 && $dkp>35)
				header("Location: battipsDBMS.php?pos=openbowlB");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER>30
		
			elseif($sr<110 && $dp>45 && $dkp>35)
				header("Location: battipsDBMS.php?pos=openbowlB");	//BOWLING OPENER WITH THE NECESSARY QUALIFICATIONS AND DUCKPER>30
		
			elseif($sr>140 && $dkp>20)
				header("Location: battipsDBMS.php?pos=openbowl");//BOWLING OPENER WITH NECESSARY QUALIFICATIONS AND WITH ST.RATE>140 AND DKP>20
		}
		
		
		elseif($y=="BATTER" or $y=="ALL ROUNDER")
		{
			if($sr>110 && $sr<140 && $dp<=45 && $dkp<=20)
				header("Location: battipsDBMS.php?pos=openA");	//BATTING OPENER WITH GOOD STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
		
			elseif($sr>110 && $sr<140 && $dp>45 && $dkp<=20)
				header("Location: battipsDBMS.php?pos=openB");	//BATTING OPENER WITH GOOD STRIKE RATE, MORE DOT BALL %, LESS DUCK %, GREAT AVG.
		
			elseif($sr<110 && $dp<=45 && $dkp<=20)
				header("Location: battipsDBMS.php?pos=openC");	// BATTING OPENER WITH LOW STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
		
			elseif($sr>110 && $sr<140 && $dp<=45 && $dkp>20)	
				header("Location: battipsDBMS.php?pos=openD");	//BATTING OPENER WITH GOOD STRIKE RATE, LESS DOT BALL %, MORE DUCK %, GREAT AVG.
		
			elseif($sr<110 && $dp>45 && $dkp<=20)	
				header("Location: battipsDBMS.php?pos=openE");	//BATTING OPENER WITH LOW STRIKE RATE, MORE DOT BALL %, LESS DUCK %, GREAT AVG.
		
			elseif($sr>110 && $sr<140 && $dp>45 && $dkp>20)
				header("Location: battipsDBMS.php?pos=openF");	//BATTING OPENER WITH GOOD STRIKE RATE, MORE DOT BALL %, MORE DUCK %, GREAT AVG.
		
			elseif($sr<110 && $dp<=45 && $dkp>20)
				header("Location: battipsDBMS.php?pos=openG");	//BATTING OPENER WITH LOW STRIKE RATE, LESS DOT BALL %, LESS DUCK %, GREAT AVG.
		
			elseif($sr<110 && $dp>45 && $dkp>20)
				header("Location: battipsDBMS.php?pos=openH"); //BATTING OPENER WITH LOW STRIKE RATE, MORE DOT BALL %, MORE DUCK %, GREAT AVG.
		
			elseif($sr>140 && $dkp>20)
				header("Location: battipsDBMS.php?pos=openI"); //MISSING CASE
		}
		
		
		//HIGH AVG. IS NOT AN INDICATION OF HIGH RUNS PER INNINGS FOR **FINISHERS**
		
		if($y=="BATTER" or $y=="ALL ROUNDER"){
		if($sr>=140 && $dp<40 && $dkp<10)
			header("Location: battipsDBMS.php?pos=finishA"); //BATTING FINISHER WITH LOW DUCK PERCENT, LESS DOT BALL PERCENT, GREAT SR
			
		elseif($sr>=140 && $dp<40 && $dkp>10 && $dkp<=20)
			header("Location: battipsDBMS.php?pos=finishB"); //BATTING FINISHER WITH DECENT DUCK PERCENT, LESS DOT BALL PERCENT, GREAT SR
		
		elseif($sr>=140 && $dp>40 && $dkp<10)
			header("Location: battipsDBMS.php?pos=finishC"); //BATTING FINISHER WITH LOW DUCK PERCENT, HIGH DOT BALL PERCENT, GREAT SR
		
		elseif($sr>=140 && $dp>40 && $dkp>10 && $dkp<=20)
			header("Location: battipsDBMS.php?pos=finishD"); //BATTING FINISHER WITH DECENT DUCK PERCENT, HIGH DOT BALL PERCENT, GREAT SR
		}
		
		
		//BOWLING FINISHER
		elseif($y=="BOWLER"){
			if($sr>=140 && $dp<40 && $dkp<10)
			header("Location: battipsDBMS.php?pos=finishbowlA"); // BOWLING FINISHER WITH ALL QUALIFICATIONS OF A FINISHER
			
		elseif($sr>=140 && $dp<40 && $dkp>10 && $dkp<20)
			header("Location: battipsDBMS.php?pos=finishbowlB"); //BOWLING FINISHER WITH ALL QUALIFICATIONS OF A FINISHER
		
		elseif($sr>=140 && $dp>40 && $dkp<10)
			header("Location: battipsDBMS.php?pos=finishbowlC"); //BOWLING FINISHER WITH ALL QUALIFICATIONS OF A FINISHER
		
		elseif($sr>=140 && $dp>40 && $dkp>10 && $dkp<20)
			header("Location: battipsDBMS.php?pos=finishbowlD"); //BOWLING FINISHER WITH ALL QUALIFICATIONS OF A FINISHER
			
		}
	}
	
	elseif($avg>=20 && $avg<30)
	{
		//BATTING HITTER
		if($y=="BATTER" or $y=="ALL ROUNDER"){
			if($sr>150 && $bp>50)
				header("Location: battipsDBMS.php?pos=hitA");	//BATTING HITTER WITH GREAT STRIKE RATE, HIGH BOUNDARY PERCENT, DECENT AVG. 
		
			elseif($sr<150 && $bp>50)
				header("Location: battipsDBMS.php?pos=hitB");	//BATTING HITTER WITH DECENT STRIKE RATE, HIGH BOUNDARY PERCENT, DECENT AVG.  
		
			elseif($sr>150 && $bp<50)
				header("Location: battipsDBMS.php?pos=hitC");	//BATTING HITTER WITH GREAT STRIKE RATE, LESS BOUNDARY PERCENT, DECENT AVG. 
		
			elseif($sr<150 && $bp<50)
				header("Location: battipsDBMS.php?pos=hitD");	//BATTING HITTER WITH LESS STRIKE RATE, LESS BOUNDARY PERCENT, DECENT AVG. 
		}
		
		
		//BOWLING HITTER
		elseif($y=="BOWLER"){
			if($sr>140 && $bp>50)
				header("Location: battipsDBMS.php?pos=hitbA");	//BOWLING HITTER WITH STRIKE RATE >140, HIGH BOUNDARY PERCENT, DECENT AVG. 
		
			elseif($sr<140 && $bp>50)
				header("Location: battipsDBMS.php?pos=hitbB");	//BOWLING HITTER WITH STRIKE RATE <140, HIGH BOUNDARY PERCENT, DECENT AVG. 
		
			elseif($sr>140 && $bp<50)
				header("Location: battipsDBMS.php?pos=hitbC");	//BOWLING HITTER WITH STRIKE RATE >140, LESS BOUNDARY PERCENT, DECENT AVG.
		
			elseif($sr<140 && $bp<50)
				header("Location: battipsDBMS.php?pos=hitbD");	//BOWLING HITTER WITH STRIKE RATE <140, LESS BOUNDARY PERCENT, DECENT AVG.
			
	}
	}
	
		elseif($avg<20)
		{
			if($y=="BATTER"){
				header("Location: battipsDBMS.php?pos=battail"); //BATTING TAILENDER 
			}
		
			else{
				header("Location: battipsDBMS.php?pos=tail");	//TAILENDER 
			}
			
		}
	}
	else
	{
		echo $x;
		header("Location: battipsinfoDBMS.php");
	}

?>
	