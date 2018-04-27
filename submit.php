<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$cand=$_POST['candidate'];
	$query="select vote_count from cr where name='$cand';";
	$result=mysqli_query($dbh,$query);
	$row=mysqli_fetch_array($result);
	$count=$row['vote_count'];
	$count=$count+1;
	$query1="update cr set vote_count=$count where name='$cand';";
	mysqli_query($dbh,$query1);
	$username=$_SESSION['username'];
		$query2="update student set voted=1 where id='$username'";
		if(mysqli_query($dbh,$query2)){
			session_destroy();
			session_unset();
			header('location:home.php?err=3');
		}
?>
