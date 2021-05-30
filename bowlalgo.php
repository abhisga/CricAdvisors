<?php
	
	session_start();
	include_once 'connection.php';
	
	$z=$_SESSION['userid'];
	$query="SELECT * FROM signup WHERE PLAYER_ID=$z";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	$y=$row['P_ROLE'];
	
	$query1="SELECT * FROM bowl_par WHERE PLAYER_ID=$z";
	$result1=mysqli_query($con,$query1);
	$row=mysqli_fetch_assoc($result1);
	
	$query2="SELECT * FROM BOWL_RECORDS WHERE P_ID=$z";
	$result2=mysqli_query($con,$query2);
	$row1=mysqli_fetch_assoc($result2);
	$x=$row1['INNINGS'];

	$avg=$row['AVG'];
	$sr=$row['SR'];
	$dp=$row['DBPER'];
	$bp=$row['BDPER'];
	$er=$row['ER'];
	$ep=$row['EXTPER'];
	
if($x>5){
	if($er<=7)
	{
		if($dp>=50 && $bp<=30 && $avg<=30)
			header("Location: bowltipsDBMS.php?pos=bowldeathA"); //PERFECT DEATH BOWLER --> HIGH DOT BALL%, LOW BOUNDARY%, LOW AVERAGE
		
		elseif($dp>=50 && $bp>40 && $avg<=30)
			header("Location: bowltipsDBMS.php?pos=bowldeathB"); //DEATH BOWLER WITH HIGH DOT BALL%, HIGH BOUNDARY%, LOW AVERAGE
			
		elseif($dp>=50 && $bp<=40 && $avg>30)
			header("Location: bowltipsDBMS.php?pos=bowldeathC"); //DEATH BOWLER WITH HIGH DOT BALL%, LOW BOUNDARY%, HIGH AVERAGE
			
		elseif($dp<50 && $bp<=40 && $avg<=30)
			header("Location: bowltipsDBMS.php?pos=bowldeathD"); //DEATH BOWLER WITH LESS DOT BALL%, LOW BOUNDARY%, LOW AVERAGE
			
		elseif($dp<50 && $bp<=40 && $avg>30)
			header("Location: bowltipsDBMS.php?pos=bowldeathE"); //DEATH BOWLER WITH LESS DOT BALL%, LOW BOUNDARY%, HIGH AVERAGE
			
		elseif($dp<50 && $bp>40 && $avg<=30)	
			header("Location: bowltipsDBMS.php?pos=bowldeathF"); //DEATH BOWLER WITH LESS DOT BALL%, HIGH BOUNDARY%, LESS AVERAGE
		
		elseif($dp>=50 && $bp>40 && $avg>30)
			header("Location: bowltipsDBMS.php?pos=bowldeathG"); //DEATH BOWLER WITH HIGH DOT BALL%, HIGH BOUNDARY%, HIGH AVERAGE
			
		elseif($dp<50 && $bp>40 && $avg>30)
			header("Location: bowltipsDBMS.php?pos=bowldeathH"); //DEATH BOWLER WITH LESS DOT BALL%, HIGH BOUNDARY%, HIGH AVERAGE
	}
	
	
	elseif($er>7 && $er<8)
	{
		if($avg<=25 && $bp<=45 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlopenA"); //PERFECT OPENING BOWLER --> GOOD ECONOMY, LOW AVERAGE, LOW BOUNDARY%, LOW SR
		
		elseif($avg>25 && $avg<=30 && $bp<=45 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlopenB"); //OPENING BOWLER WITH GOOD ECONOMY, DECENT AVG, LESS BOUNDARY%, GOOD SR
			
		elseif($avg>30 && $bp<=45 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlopenC"); //OPENING BOWLER WITH GOOD ECONOMY, HIGH AVG, LESS BOUNDARY%,GOOD SR
			
		elseif($avg<=25 && $bp>45 && $bp<=55 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlopenD"); //OPENING BOWLER WITH GOOD ECONOMY, LOW AVG, DECENT BOUNDARY%, GOOD SR
			
		elseif($avg<=25 && $bp>55 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlmidA"); //MIDDLE BOWLER WITH GOOD ECONOMY, LOW AVERAGE, HIGH BOUNDARY%, GOOD SR
		
		elseif($avg<=25 && $bp<=45 && $sr>25)
			header("Location: bowltipsDBMS,php?pos=bowlopenE"); //OPEN BOWLER WITH GOOD ECONOMY, LOW AVERAGE, LESS BOUNDARY%, HIGH SR
			
		elseif($avg>25 && $avg<30 && $bp>45 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlopenF"); //OPEN BOWLER WITH GOOD ECONOMY, DECENT AVERAGE, HIGH BOUNDARY%, LESS SR
		
		elseif($avg>30 && $bp>45 && $sr<=25)
			header("Location: bowltipsDBMS.php?pos=bowlmidB"); //MIDDLE BOWLER WITH GOOD ECONOMY, HIGH AVERAGE, HIGH BOUNDARY%, LESS SR
	
		elseif($avg>25 && $avg<30 && $bp<=45 && $sr>25)
			header("Location: bowltipsDBMS.php?pos=bowlopenG"); //OPEN BOWLER WITH GOOD ECONOMY, DECENT AVERAGE, LESS BOUNDARY%, HIGH SR
			
		elseif($avg>30 && $bp<=45 && $sr>25)
			header("Location: bowltipsDBMS.php?pos=bowlmidC");// MID BOWLER WITH GOOD ECONOMY, HIGH AVG, LESS BOUNDARY%, HIGH SR
			
		elseif($avg<=25 && $bp>45 && $sr>25)
			header("Location: bowltipsDBMS.php?pos=bowlopenH"); //OPEN BOWLER WITH GOOD ECONOMY, LESS AVG, HIGH BOUNDARY%, HIGH SR
			
		elseif($avg>25 && $avg <=30 && $bp>45 && $sr>25)
			header("Location: bowltipsDBMS.php?pos=bowlmidD"); //MID BOWLER WITH GOOD ECONOMY, DECENT AVG, HIGH BOUNDARY%, HIGH SR
		
		elseif($avg>30 && $bp>45 && $sr>25)
			header("Location: bowltipsDBMS.php?pos=bowlmidE");// MID BOWLER WITH GOOD ECONOMY, HIGH AVG, HIGH BOUNDARY%, HIGH SR
	}
	
	
	
	elseif($er>=8 && $er<10)
	{
		if($avg<=30 && $bp<=40 && $sr<=30)
			header("Location: bowltipsDBMS.php?pos=bowlopenI"); //OPEN BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, DECENT BOUNDARY%, DECENT SR
		
		elseif($avg>30 && $bp<=40 && $sr<=30)
			header("Location: bowltipsDBMS.php?pos=bowlmidE"); //MIDDLE BOWLER WITH DECENT TO BAD ECONOMY, HIGH AVG, DECENT BOUNDARY%, LESS SR
			
		elseif($avg<=30 && $bp<=40 && $sr>30)
			header("Location:bowltipsDBMS.php?pos=bowlmidF"); //MID BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, DECENT BOUNDARY%, HIGH SR
			
		elseif($avg<=30 && $bp>40 && $bp<=55 && $sr<=30)
			header("Location: bowltipsDBMS.php?pos=bowlmidF"); //MIDDLE BOWLER WITH DECENT TO BAD ECONOMY, LESS AVG, HIGH BOUNDARY%,LESS SR
		
		elseif($bp>55)
			header("Location: bowltipsDBMS.php?pos=not_a_bowlA"); //CORRECTIONS WITH DECENT TO BAD ECONOMY AND VERY HIGH BOUNDARY%
		
		elseif($avg>30 && $bp>40 && $bp<=55 && $sr<=30)
			header("Location: bowltipsDBMS.php?pos=bowlmidG");	//MID BOWLER WITH DECENT TO BAD ECONOMY, HIGH AVG, HIGH BOUNDARY%, LESS SR
			
		elseif($avg>30 && $bp<=40 && $sr>30)
			header("Location: bowltipsDBMS.php?pos=bowlmidH"); //MID BOWLER WITH DECENT TO BAD ECONOMY, HIGH AVG, DECENT BOUNDARY%, HIGH SR
			
		elseif($avg<=30 && $bp>40 && $bp<=55 && $sr>30)
			header("Location: bowltipsDBMS.php?pos=bowlmidI"); //MID BOWLER WITH DECENT TO BAD ECONOMY, LESS AVG, HIGH BOUNDARY%, HIGH SR
			
		elseif($avg>30 && $bp>40 && $bp<55 && $sr>30)
			header("Location: bowltipsDBMS.php?pos=not_a_bowlB");	//NOT A BOWLER WITH DECENT TO BAD ECONOMY, DECENT AVG, HIGH BOUNDARY%, HIGH SR
			
	}
	
	elseif($er>=10)
		header("Location: bowltipsDBMS.php?pos=not_a_bowlC"); //VERY HIGH ECONOMY

}
else
{
	header("Location: bowltipsinfoDBMS.php");
}

?>