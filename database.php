<?php

	session_start();

	if(isset($_POST['show']))
	{
		if(!empty($_POST['mca']))
		{
			header('location:mca_student_information.php');
		}
		elseif(!empty($_POST['mtech']))
		{
			header('location:mtech_student_information.php');
		}
		elseif(!empty($_POST['mca_mtech']))
		{
			header('location:mca_mtech_student_information.php');
		}
		elseif(!empty($_POST['mca11']))
		{
			header('location:mca11_students_feedback.php');
		}
		elseif(!empty($_POST['mca12']))
		{
			header('location:mca12_students_feedback.php');
		}
		elseif(!empty($_POST['mca21']))
		{
			header('location:mca21_students_feedback.php');
		}
		elseif(!empty($_POST['mca22']))
		{
			header('location:mca22_students_feedback.php');
		}
		elseif(!empty($_POST['mca31']))
		{
			header('location:mca31_students_feedback.php');
		}
		elseif(!empty($_POST['mca32']))
		{
			header('location:mca32_students_feedback.php');
		}
		elseif(!empty($_POST['mtech11']))
		{
			header('location:mtech11_students_feedback.php');
		}
		elseif(!empty($_POST['mtech12']))
		{
			header('location:mtech12_students_feedback.php');
		}
		elseif(!empty($_POST['mtech21']))
		{
			header('location:mtech21_students_feedback.php');
		}
		elseif(!empty($_POST['mtech22']))
		{
			header('location:mtech22_students_feedback.php');
		}
		elseif(!empty($_POST['student_feedback']))
		{
			header('location:mca_mtech_students_feedback.php');
		}
		elseif(!empty($_POST['parent_feedback']))
		{
			header('location:mca_mtech_parents_feedback.php');
		}
		elseif(!empty($_POST['alumni_feedback']))
		{
			header('location:mca_mtech_alumni_feedback.php');
		}
		elseif(!empty($_POST['peer_feedback']))
		{
			header('location:peers_feedback.php');
		}
		elseif(!empty($_POST['mca_alumni']))
		{
			header('location:mca_alumni_information.php');
		}
		elseif(!empty($_POST['mtech_alumni']))
		{
			header('location:mtech_alumni_information.php');
		}
		elseif(!empty($_POST['all_alumni']))
		{
			header('location:mca_mtech_alumni_information.php');
		}
		else
		{
			echo "<font style='position:absolute;top:76%;left:45.5%;font-size:22px'><strong>Invalid Choice</strong></font>";
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

	echo "<div style='position:absolute;left:0%;top:0%;border:1px solid black;background-color:#d7ee91;height:4%;width:99.9%'>
			<font style='position:absolute;left:80%;top:0%' size=3px color='#116e11'><i>Username: </i><b>".$_SESSION['admin']."</b></font></br>
		  	<a href=logout.php style='position:absolute;left:95%;top:5%;text-decoration:none;font-size:15px;color:#116e11'><b>logout</b></a>
		  </div>";

?>


<html>
	<head>
		<title>Database</title>

	</head>
	<body bgcolor="orange">
		<CENTER>
		<h1 style="position:absolute;left:46%;top:5%;color:#116e11;text-shadow: 0.5px 0.5px #000000">Database</h1>
            <form method="POST">
			<table style="position:absolute;left:3%;top:24%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" height="150px" width="160px">
				<tr style="position:absolute;left:0%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">
					<td align="middle"><b>Student's Informations</b></td>
				</tr>
				<tr style="position:absolute;left:10%;top:40%">
					<td><input type="radio" name="mca">MCA</br>
						<input type="radio" name="mtech">M.TECH</br>
						<input type="radio" name="mca_mtech">All</br>
					</td>
				</tr>
			</table>
			
			<table style="position:absolute;left:20%;top:24%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" height="190px" width="220px">
				<tr style="position:absolute;left:25%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">
					<td align="middle"><b>MCA Feedback</b></td>
				</tr>
				<tr style="position:absolute;left:10%;top:18%"">
					<td><input type="radio" name="mca11">Part - I, 1st Sem.</br>
						<input type="radio" name="mca12">Part - I, 2nd Sem.</br>
						<input type="radio" name="mca21">Part - II, 1st Sem.</br>
						<input type="radio" name="mca22">Part - II, 2nd Sem.</br>
						<input type="radio" name="mca31">Part - III, 1st Sem.</br>
						<input type="radio" name="mca32">Part - III, 2nd Sem.</br>
					</td>
				</tr>
			</table>
			
			<table style="position:absolute;left:41%;top:24%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" height="150px" width="220px">
				<tr style="position:absolute;left:18%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">
					<td align="middle"><b>M.TECH Feedback</b></td>
				</tr>
				<tr style="position:absolute;left:10%;top:24%"">
					<td><input type="radio" name="mtech11">Part - I, 1st Sem.</br>
						<input type="radio" name="mtech12">Part - I, 2nd Sem.</br>
						<input type="radio" name="mtech21">Part - II, 1st Sem.</br>
						<input type="radio" name="mtech22">Part - II, 2nd Sem.</br>
					</td>
				</tr>
			</table>
			
			<table style="position:absolute;left:62%;top:24%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" height="150px" width="200px">
				<tr style="position:absolute;left:25%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">
					<td align="middle"><b>All Feedback</b></td>
				</tr>
				<tr style="position:absolute;left:10%;top:26%"">
					<td><input type="radio" name="student_feedback">Student</br>
						<input type="radio" name="parent_feedback">Parent</br>
						<input type="radio" name="alumni_feedback">Alumni</br>
						<input type="radio" name="peer_feedback">Peer</br>
					</td>
				</tr>
			</table>
			
			<table style="position:absolute;left:82%;top:24%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" height="130px" width="200px">
				<tr style="position:absolute;left:10%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">
					<td align="middle"><b>Alumni's Informations</b></td>
				</tr>
				<tr style="position:absolute;left:10%;top:28%"">
					<td><input type="radio" name="mca_alumni">MCA</br>
						<input type="radio" name="mtech_alumni">M.TECH</br>
						<input type="radio" name="all_alumni">All</br>
				</tr>
			</table>
			
			<input type="submit" name="show" value="Show" style="position:absolute;left:46%;top:70%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:51%;top:70%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/>
			</form>
			<div style="position:absolute;left:28%;top:93%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>	