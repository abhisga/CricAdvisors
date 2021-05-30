<?php
	
		session_start();
		include_once 'connection.php';
		
		$qpos = mysqli_real_escape_string($con,$_POST['played']);
		$qruns = mysqli_real_escape_string($con,$_POST['runs']);
		$qballs = mysqli_real_escape_string($con,$_POST['balls']);
		$qdballs = mysqli_real_escape_string($con,$_POST['dballs']);
		$qfours = mysqli_real_escape_string($con,$_POST['fours']);
		$qsixes = mysqli_real_escape_string($con,$_POST['sixes']);
		$qnout = mysqli_real_escape_string($con,$_POST['nout']);
		
		$y = intval($_SESSION['userid']);
		$query1 = " update bat_records set RUNS = RUNS+$qruns where P_ID=$y ";
		$query2 = " update bat_records set N_OUT = N_OUT+1 where P_ID=$y ";
		$query3 = " update bat_records set BALLS = BALLS+$qballs where P_ID=$y ";
		$query4 = " update bat_records set DOTS = DOTS+$qdballs where P_ID=$y ";
		$query5 = " update bat_records set FOURS = FOURS+$qfours where P_ID=$y ";
		$query6 = " update bat_records set SIXES = SIXES+$qsixes where P_ID=$y ";
		$query7 = " update bat_records set DUCKS = DUCKS+1 where P_ID=$y ";
		$query8 = " update bat_records set INNINGS = INNINGS+1 where P_ID=$y";
		
		mysqli_query($con, $query1);
		if($qnout == 'Y')
		{
			mysqli_query($con, $query2);
		}
		mysqli_query($con, $query3);
		mysqli_query($con, $query4);
		mysqli_query($con, $query5);
		mysqli_query($con, $query6);
		if($qruns == 0 && $qnout == 'N')
		{
			mysqli_query($con, $query7);
		}
		mysqli_query($con, $query8);
		
		$parquery="SELECT * FROM bat_records where P_ID=$y";
		$result=mysqli_query($con,$parquery);
		$row=mysqli_fetch_assoc($result);
		$runs=$row['RUNS'];
		$no=$row['N_OUT'];
		$balls=$row['BALLS'];
		$dots=$row['DOTS'];
		$four=$row['FOURS'];
		$six=$row['SIXES'];
		$duck=$row['DUCKS'];
		$inn=$row['INNINGS'];
		
		if($inn != $no)
			$avg=floatval($runs/($inn - $no));
		else
			$avg = 0;
		$sr=floatval(($runs/$balls)*100);
		$dp=floatval(($dots/$balls)*100);
		$bp=floatval(((($four*4)+($six*6))/$runs)*100);
		$bpi=floatval(($four+$six)/$inn);
		$dkp=floatval(100*($duck/$inn));
		
		$par_ins_query1="update bat_par set AVG = $avg where PLAYER_ID=$y";
		$par_ins_query2="update bat_par set SR = $sr where PLAYER_ID=$y";
		$par_ins_query3="update bat_par set DBPER = $dp where PLAYER_ID=$y";
		$par_ins_query4="update bat_par set BDPER = $bp where PLAYER_ID=$y";
		$par_ins_query5="update bat_par set BPI = $bpi where PLAYER_ID=$y";
		$par_ins_query6="update bat_par set DUCKPER = $dkp where PLAYER_ID=$y";
		
		$result1=mysqli_query($con,$par_ins_query1);
		$result2=mysqli_query($con,$par_ins_query2);
		$result3=mysqli_query($con,$par_ins_query3);
		$result4=mysqli_query($con,$par_ins_query4);
		$result5=mysqli_query($con,$par_ins_query5);
		$result6=mysqli_query($con,$par_ins_query6);
		
		if(!$result1)
		{
			echo "vahyjhsjs";
		}
		//echo $qnout;
		header("Location:mainpageDBMS.php?info=bat");
				
?>