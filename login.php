<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from student where id='$username';";
	$result=mysqli_query($dbh,$query) or die("Nope");
	$row=mysqli_fetch_array($result);
	$query1="select * from election";
	$result1=mysqli_query($dbh,$query1) or die("Nope");
	$row1=mysqli_fetch_array($result1);
	$_SESSION['section']=$row['section'];
	if($password==$row['password']&&$row['type']==1){
		if($row1['reg']==1)
			header('location:admincand.php');
		elseif($row1['reg']==0)
			header('location:admin.php');
	}
	elseif($password==$row['password']){
		if($row1['vote']==0&&$row1['reg']==0){
			$_SESSION['username']=$username;
			header('location:winners.php');
		}
		elseif($row1['vote']==0&&$row1['reg']==1)
			header('location:home.php?err=4');
		elseif($row1['vote']==1&&$row1['reg']==0){
			if($row['voted']==1);
				header('location:home.php?err=2');
			if($row['voted']==0){
				$_SESSION['username']=$username;
				header('location:Election.php');
		}
	}
	}
	else
		header('location:home.php?err=1');
		
?>
