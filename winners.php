<html>
	<head>
		<?php
	session_start();
	$name=$_SESSION['username'];
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	$sec=$_SESSION['section'];
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$query2="select * from cr where section=$sec order by vote_count desc;";
	$result2=mysqli_query($dbh,$query2);	
?>
	<style>
		.table{
			float:center;
			margin-right:10px;
			text-align:center;
		}
		.tab{
			text-align:center;
			//float: left;
			margin-left:32%;
			width:33.5%;
		}
	</style>
	</head>
	<body>
	

		<center><h2>Welcome, <?php echo $name; ?></h2></center>
<div class="tab"><center><table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section <?php echo $sec; ?></th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row2=mysqli_fetch_array($result2)){ ?>
		<tr>
			<td><?php echo $row2['name']; ?></td>
			<td><?php echo $row2['vote_count']; ?></td>
		</tr>
			<?php } ?>
		</table> </center>
		<br>
		<?php
			$query4="select * from cr where section='$sec' order by vote_count desc";
			$result4=mysqli_query($dbh,$query4);
			$row4=mysqli_fetch_array($result4)
		?>
		<bold>WINNER IS: <?php echo $row4['name']; ?> </bold>
</div>
<center>
<form action="logout.php" method="post">
	<input style="margin-top:50px;" type="submit" value="Logout"/>
</form>
</center>

	</body>
</html>		
