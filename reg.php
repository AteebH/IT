<html>
	<head>
		<style>
			#reg{
				width:48%;
				margin:100px 0px 0px 230px;				
			}
		</style>
	</head>
<body>
<a style="right:0px;" href="home.php"> Login</a>
<div id="reg">
	<form id="reg" action="regdb.php" method="post" enctype="multipart/form-data">
		<fieldset><legend>Login</legend>
		<center><?php $succ=array(1=>"Registration Succesful",2=>"Please try again",3=>"Registration Has Ended",4=>"File too large. File must beless than 2 megabytes.",5=>"Invalid file type. Only PDF,JPG, GIF and PNG types are accepted.",6=>"");
			if(isset($_GET['succ'])){
			$error=$_GET['succ'];
			if($error==1)
				echo $succ[1];
			if($error==2)
				echo $succ[2];
			if($error==3)
				echo $succ[3];		
				}
		?></center>
			<label for id="name">Name</label>
			<input id="name" name="name" type="text" required/><br>
			<label for id="id">ID</label><br>
			<input id="id" name="id" type="text" required/>
			<label for id="sec">Section</label><br>
			<input id="sec" name="sec" type="number" required/><br>
			<label for id="cgpa">CGPA</label><br>
			<input id="cgpa" name="cgpa" type="number" step=".01" min="0" required/><br><br>
			<label for="manifest">Upload Manifest:(name should be ID number)</label>
			<input type="file" name="manifest" id="manifest"required/><br><br>
			<input id="submit" name="submit" value="Register" type="submit"/>
		</fieldset>
	</form>
</div>
</body>
</html>
