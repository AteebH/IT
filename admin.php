<html>
	<head>
		<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="2015cse077";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$query="select count(id) from cr";
	$query1="select * from cr where section=1 order by vote_count desc;";
	$result1=mysqli_query($dbh,$query1);
	$query2="select * from cr where section=2 order by vote_count desc;";
	$result2=mysqli_query($dbh,$query2);	
	$query3="select * from cr where section=3 order by vote_count desc;";
	$result3=mysqli_query($dbh,$query3);	
?>
	<style>
		.table{
			float:left;
			margin-right:10px;
		}
		.tab{
			//float: left;
			margin-left:32%;
			width:100%;
		}
	</style>
	</head>
	<body>
	

		<center><h2>Welcome, Admin</h2></center>
<div class="tab"><table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section 1</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row1=mysqli_fetch_array($result1)){ ?>
		<tr>
			<td><?php echo $row1['name']; ?></td>
			<td><?php echo $row1['vote_count']; ?></td>
		<?php } ?>
		</tr>
		</table>


		<table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section 2</th>
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
		</table>
		<table border=1px rules="all">
		<tr>
				<th colspan="2">Section 3</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row3=mysqli_fetch_array($result3)){ ?>
		<tr>
			<td><?php echo $row3['name']; ?></td>
			<td><?php echo $row3['vote_count']; ?></td>
		</tr>
			<?php } ?>
		</table>
		
</div>
<center>
<?php if(!isset($_GET['succ'])){ ?>
<form action="stopv.php" method="post">
	<input style="margin-top:50px;" type="submit" value="Stop Voting"/>
</form>
<?php } ?>
<form action="logout.php" method="post">
	<input style="margin-top:50px;" type="submit" value="Logout"/>
</form>
</center>

	</body>
</html>		
