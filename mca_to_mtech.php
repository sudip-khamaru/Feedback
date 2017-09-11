<?php

	session_start();

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');

	echo "<CENTER>";
	echo "<font style='position:absolute;left:36%;top:20%;font-size:25px'>Hi, </font><font style='position:absolute;left:39%;top:19%;font-size:35px;font-weight:bold;color:565c46'>".$_SESSION['name']."</font></br></br><font style='position:absolute;left:28.5%;top:30%;font-size:25px'>You already have your Unique ID when you are in <b>MCA</b>.</font></br><font style='position:absolute;left:19%;top:36%;font-size:25px'>So, please using that Unique ID below to change your course from <b>MCA</b> to <b>M.TECH</b>.</font></br><font style='position:absolute;left:15%;top:42%;font-size:25px'>If you forget your Unique ID then go to <b>Home->Unique ID Registration->Forget Unique ID</b></font>"; 
	echo "</CENTER></body>";

	if(isset($_POST['submit']))
	{
		if(!empty($_POST['mca_uid']))
		{
			$mca_uid=$_POST['mca_uid'];

			$con1="select course,unique_id from unique_id where unique_id='$mca_uid'";
			$var1=mysql_query($con1);

			if($row1=mysql_fetch_array($var1))
			{
				$pre_course=$row1[0];

				if($pre_course=='MCA')
				{
					$con2="update unique_id set new_course='M.TECH' where unique_id='$mca_uid'";
					$var2=mysql_query($con2);

					$con3="select student_name,parent_name,contact_no,email_id from unique_id where unique_id='$mca_uid'";
					$var3=mysql_query($con3);

					if($row2=mysql_fetch_array($var3))
					{
						$student_name=$row2[0];
						$parent_name=$row2[1];
						//$roll_no=$row2[3];
						$contact_no=$row2[2];
						$email_id=$row2[3];
					}

					$con4="insert into mtech value('$student_name','$parent_name','','$contact_no','$email_id')";
					$var4=mysql_query($con4);

					header('location:confirm_mca_to_mtech.php');
				}
			}	
			else
			{
				echo "Wrong Unique ID.";
			}
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

?>


<html>
	<head>
		<title>MCA to M.Tech</title>
	</head>

	<body bgcolor="orange">
        <CENTER>
        <h1 style="position:absolute;left:40%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">MCA to M.TECH</h1>
            <form method="POST">
			<table style="position:absolute;left:34.5%;top:50%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="400px">
				<tr>
					<td align="middle"><b>Your Unique ID </b></td>
					<td align="middle"><input type="password" name="mca_uid" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" onclick="alert('Are your sure that you want to change your course from MCA to M.TECH?')" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
						   &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Reset" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
					</td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:47%;top:68%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
			</form>
			<div style="position:absolute;left:28%;top:94%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>