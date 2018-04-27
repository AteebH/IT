<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	
	$query2="update election set vote=0 where reg=0";
	if(mysqli_query($dbh,$query2))
		header('location:admin.php?succ=1.php');	
?>
