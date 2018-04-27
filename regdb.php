<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$name=$_POST['name'];
	$id=$_POST['id'];
	$sec=$_POST['sec'];
	$cgpa=$_POST['cgpa'];	
	$file=$_POST['manifest'];
	$query="insert into cr(id,name,section,cgpa,files) values('$id','$name',$sec,$cgpa,'$file')";
	$query2="select * from election";
	$result2=mysqli_query($dbh,$query2);
	$row=mysqli_fetch_array($result);
	if($row['reg']==0)
		header('location:reg.php?succ=3');
	else{
		if(($_FILES['manifest']['size'] >=$maxsize) || ($_FILES['manifest']['size'] == 0))
			header('location:reg.php?succ=4');
		elseif(!in_array($_FILES['manifest']['type'],$acceptable)) && (!empty($_FILES['manifest']['type'])))
			header('location:reg.php?succ=5');
		elseif(move_manifest($_FILES['manifest']['tmpname'], "/var/www/html/2015cse077/git/IT/upload/". $_FILES['manifest']['name']))
			if(mysqli_query($dbh,$query))
				header('location:reg.php?succ=1');
			else
				header('location:reg.php?succ=2');	
		}
?>
