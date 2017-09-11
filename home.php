<?php

	if(isset($_POST['un_reg']))
	{
		header('location:unique_id.php');
	}

	if(isset($_POST['forget_id']))
	{
		header('location:forget_id.php');
	}

	if(isset($_POST['stn_fed']))
	{
		header('location:student_feedback.php');
	}

	if(isset($_POST['ptn_fed']))
	{
		header('location:parent_feedback.php');
	}

	if(isset($_POST['peer_fed']))
	{
		header('location:peer_feedback.php');
	}

	if(isset($_POST['alumni_reg']))
	{
		header('location:alumni_unique_id.php');
	}

	if(isset($_POST['alumni_forget_id']))
	{
		header('location:alumni_forget_id.php');
	}

	if(isset($_POST['peer_fed']))
	{
		header('location:peer_feedback.php');
	}
	
	if(isset($_POST['alumni_fed']))
	{
		header('location:alumni_feedback.php');
	}

	if(isset($_POST['admin']))
	{
		header('location:admin_login.php');
	}

?>


<html>
	<head>
		<title>Home</title>
	</head>

	<body bgcolor="orange">
		<marquee style="color:#116e11;text-shadow: 0.5px 0.5px #000000;font-weight:bold">** Welcome to CSE - SPF for your valuable feedback **</marquee>
		<CENTER>
			<h1 style="position:absolute;left:30%;top:1%;color:#116e11;text-shadow: 0.5px 0.5px #000000">CSE - SPF (Student - Parent Feedback)</h1>
			<form method="POST">
			<table style="position:absolute;left:40%;top:14%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>UNIQUE ID REGISTRATION</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="un_reg" value="Unique ID Registration" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
				<tr>
					<td align="middle"><input type="submit" name="forget_id" value="Forget Unique ID" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:28.5%;top:32.5%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>STUDENT'S FEEDBACK</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="stn_fed" value="Student's Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:52%;top:32.5%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>PARENT'S FEEDBACK</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="ptn_fed" value="Parent's Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:40%;top:46%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>ALUMNI'S REGISTRATION</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="alumni_reg" value="Unique ID Registration" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
				<tr>
					<td align="middle"><input type="submit" name="alumni_forget_id" value="Forget Unique ID" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:28.5%;top:65.2%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>PEER'S FEEDBACK</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="peer_fed" value="Peer's Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:52%;top:65.2%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>ALUMNI'S FEEDBACK</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="alumni_fed" value="Alumni's Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:40%;top:78%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="300px">
				<tr><td align="middle"><b>ADMIN LOGIN</b></td></tr>
				<tr>
					<td align="middle"><input type="submit" name="admin" value="Admin Login" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/></td>
				</tr>
			</table>
			</form>
			<div style="position:absolute;left:28%;top:94%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>