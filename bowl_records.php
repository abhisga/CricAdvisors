<?php
	
		session_start();
		include_once 'connection.php';
		
		$qbowl = mysqli_real_escape_string($con,$_POST['bowled']);
		$qruns1 = mysqli_real_escape_string($con,$_POST['runs1']);
		$qwicks = mysqli_real_escape_string($con,$_POST['wickets']);
		$qeballs = mysqli_real_escape_string($con,$_POST['eballs']);
		$qdballs1 = mysqli_real_escape_string($con,$_POST['dballs1']);
		$qfours1 = mysqli_real_escape_string($con,$_POST['fours1']);
		$qsixes1 = mysqli_real_escape_string($con,$_POST['sixes1']);
		
		$y = intval($_SESSION['userid']);
		//echo $y;
		$query1 = " update bowl_records set OVERS = OVERS+$qbowl where P_ID=$y ";
		$query2 = " update bowl_records set WICKETS = WICKETS+$qwicks where P_ID=$y ";
		$query3 = " update bowl_records set EXTRAS = EXTRAS+$qeballs where P_ID=$y ";
		$query4 = " update bowl_records set DOTS = DOTS+$qdballs1 where P_ID=$y ";
		$query5 = " update bowl_records set FOURS = FOURS+$qfours1 where P_ID=$y ";
		$query6 = " update bowl_records set SIXES = SIXES+$qsixes1 where P_ID=$y ";	
		$query7 = " update bowl_records set RUNS = RUNS+$qruns1 where P_ID=$y ";	
		$query8 = " update bowl_records set INNINGS = INNINGS+1 where P_ID=$y ";
		
		mysqli_query($con, $query1);
		mysqli_query($con, $query2);
		mysqli_query($con, $query3);
		mysqli_query($con, $query4);
		mysqli_query($con, $query5);
		mysqli_query($con, $query6);
		mysqli_query($con, $query7);
		mysqli_query($con, $query8);
		
		$parquery="SELECT * FROM bowl_records where P_ID=$y";
		$result=mysqli_query($con,$parquery);
		$row=mysqli_fetch_assoc($result);
		$inn=$row['INNINGS'];
		$overs=$row['OVERS'];
		$wickets=$row['WICKETS'];
		$extras=$row['EXTRAS'];
		$dots=$row['DOTS'];
		$four=$row['FOURS'];
		$six=$row['SIXES'];
		$runs=$row['RUNS'];
		
		if($wickets > 0)
		{
			$avg=floatval($runs/$wickets);
			$sr=floatval(($overs*6)/$wickets);
		}
		$dp=floatval(($dots/($overs*6))*100);
		$bp=floatval(((($four*4)+($six*6))/$runs)*100);
		$er=floatval(6*$runs/($overs*6));
		$dkp=floatval(100*$extras/($overs*6));
		
		$par_ins_query1="update bowl_par set AVG = $avg where PLAYER_ID=$y";
		$par_ins_query2="update bowl_par set SR = $sr where PLAYER_ID=$y";
		$par_ins_query3="update bowl_par set DBPER = $dp where PLAYER_ID=$y";
		$par_ins_query4="update bowl_par set BDPER = $bp where PLAYER_ID=$y";
		$par_ins_query5="update bowl_par set ER = $er where PLAYER_ID=$y";
		$par_ins_query6="update bowl_par set EXTPER = $dkp where PLAYER_ID=$y";
		
		$result1=mysqli_query($con,$par_ins_query1);
		$result2=mysqli_query($con,$par_ins_query2);
		$result3=mysqli_query($con,$par_ins_query3);
		$result4=mysqli_query($con,$par_ins_query4);
		$result5=mysqli_query($con,$par_ins_query5);
		$result6=mysqli_query($con,$par_ins_query6);
		
		header("Location:mainpageDBMS.php?info=bowl");
			
?>