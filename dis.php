<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$cand=$_POST['cand'];
	$query="delete from cr where id='$cand'";
	if(mysqli_query($dbh,$query))
		header('location:admincand.php');
?>
