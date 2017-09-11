<?php

	session_start();

	if(isset($_POST['login']))
	{
		if(!empty($_POST['username']) && $_POST['username']=='admin')
		{
			if(!empty($_POST['password']) && $_POST['password']=='admin123')
			{
				$admin='admin';
				$_SESSION['admin']=$admin;
				header('location:database.php');
			}
			else
			{
				echo "<font style='position:absolute;top:48%;left:44%;font-size:22px'><strong>Invalid Password</strong></font>";
			}
		}
		else
		{
			echo "<font style='position:absolute;top:48%;left:44%;font-size:22px'><strong>Invalid Username</strong></font>";
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

?>


<html>
	<head>
		<title>Home</title>
	</head>

	<body bgcolor="orange">
		<CENTER>
			<h1 style="position:absolute;left:43.5%;top:1%;color:#116e11;text-shadow: 0.5px 0.5px #000000">Admin Login</h1>
			<form method="POST">
			<table style="position:absolute;left:39%;top:30%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr>
					<td align="middle"><b>Username </b></td>
					<td align="middle"><input type="password" name="username" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Password </b></td>
					<td align="middle"><input type="password" name="password" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="login" value="Login" style="position:absolute;left:28%;top:72%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
					<td align="middle"><input type="submit" name="reset" value="Reset" style="position:absolute;left:53%;top:72%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table>
			<input type="submit" name="home" value="Home" style="position:absolute;left:48%;top:54%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
			</form>
			<div style="position:absolute;left:28%;top:94%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>