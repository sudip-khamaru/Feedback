<?php

	session_start();

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('feedback');
								
	if(isset($_POST['forget']))
	{
		if(!empty($_POST['stn_crs']))
		{
			$stn_crs=$_POST['stn_crs'];
			if(!empty($_POST['stn_name']))
			{
				$stn_name=$_POST['stn_name'];
				$_SESSION['name']=$stn_name;
				if(!empty($_POST['stn_mail']))
				{
					$stn_mail=$_POST['stn_mail'];
					if(!empty($_POST['sec_ans']))
					{
						$sec_ans=$_POST['sec_ans'];
						if($sec_ans=='Audi' || $sec_ans=='audi' || $sec_ans=='AUDI')
						{
							$con="select new_course,student_name,email_id,unique_id from unique_id where new_course='$stn_crs' and student_name='$stn_name' and email_id='$stn_mail'"; 
							$var=mysql_query($con);

							if($row=mysql_fetch_array($var))
							{
								$re_id=$row[3];
								$_SESSION['reget_id']=$re_id;

								header('location:reget_id.php');
							}
							else
							{
								header('location:error.php');
							}
						}
						else
						{
							echo "<font style='position:absolute;top:40%;left:44%;font-size:22px'><strong>Wrong Answer.</strong></font>";
						}
					}
					else
					{
						echo "<font style='position:absolute;top:40%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
					}
				}
				else
				{
					echo "<font style='position:absolute;top:40%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
				}
			}
			else
			{
				echo "<font style='position:absolute;top:40%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
			}
		}
		else
		{
			echo "<font style='position:absolute;top:40%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

?>


<html>
	<head>
		<title>Forget Unique ID</title>
	</head>

	<body bgcolor="orange">
		<CENTER>
		<h1 style="position:absolute;left:41.5%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Forget Unique ID</h1>
			<form method="POST">
			<table style="position:absolute;left:36%;top:14%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="400px">
				<tr>
					<td align="middle"><b>Course </b></td>
					<td align="middle"><input type="radio" name="stn_crs" value="MCA"><strong>MCA</strong>
									   <input type="radio" name="stn_crs" value="M.TECH"><strong>M.TECH</strong>
					</td>
				</tr>
				<tr>
					<td align="middle"><b>Student Name </b></td>
					<td align="middle"><input type="text" name="stn_name" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Email id </b></td>
					<td align="middle"><input type="text" name="stn_mail" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Security Question </b></td>
					<td align="middle"><strong>Auditorium known as?</strong></td>
				</tr>
				<tr>
					<td align="middle"><b>Your Answer* </b></td>
					<td align="middle"><input type="password" name="sec_ans" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="forget" value="My Unique ID" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
						   &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Reset" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
					</td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:48%;top:48%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
			</form>
			<div style="position:absolute;left:28%;top:94%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>