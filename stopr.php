<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	
	$query1="update election set reg=0 where vote=0";
	mysqli_query($dbh,$query1) or die("Nope1");
	$query2="update election set vote=1 where reg=0";
	if(mysqli_query($dbh,$query2))
		header('location:admin.php');	
?>
