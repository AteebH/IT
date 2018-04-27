<html>
	<head>
		<style>
			#login{
				width:50%;
				margin:210px 0px 0px 230px;				
			}
		</style>
	</head>
<body>
<a style="right:0px;" href="reg.php"> Register</a>
<div id="login">
	<form id="login" action="login.php" method="post">
		<fieldset><legend>Login</legend>
		<center><?php $err=array(1=>"Wrong Username and password",2=>"You have already voted",3=>"Thank you for voting",4=>"Wait for Registration to finish");
			if(isset($_GET['err'])){
			$error=$_GET['err'];
			if($error==1)
				echo $err[1];
			if($error==2)
				echo $err[2];
			if($error==3)
				echo $err[3];
			if($error==4)
				echo $err[4];		
				}
		?></center>
			<label for id="username">Username</label>
			<input id="Username" name="username" type="text" required/>
			<label for id="password">Password</label>
			<input id="password" name="password" type="password" required/>
			<input id="submit" name="submit" value="Login" type="submit"/>
		</fieldset>
	</form>
</div>
</body>
</html>
