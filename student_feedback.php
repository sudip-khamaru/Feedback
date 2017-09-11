<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('feedback');
								
	if(isset($_POST['stn_feedback']))
	{
		if(!empty($_POST['stn_crs']))
		{
			$stn_crs=$_POST['stn_crs'];
			
			if(!empty($_POST['stn_opt1']) && !empty($_POST['stn_opt2']) && !empty($_POST['stn_opt3']) && !empty($_POST['stn_opt4']) && !empty($_POST['stn_opt5']) && !empty($_POST['stn_opt6']) && !empty($_POST['stn_opt7']) && !empty($_POST['stn_opt8']) && !empty($_POST['stn_id']))
			{
				$stn_opt1=$_POST['stn_opt1'];
				$stn_opt2=$_POST['stn_opt2'];
				$stn_opt3=$_POST['stn_opt3'];
				$stn_opt4=$_POST['stn_opt4'];
				$stn_opt5=$_POST['stn_opt5'];
				$stn_opt6=$_POST['stn_opt6'];
				$stn_opt7=$_POST['stn_opt7'];
				$stn_opt8=$_POST['stn_opt8'];
				$stn_id=$_POST['stn_id'];
			}
				
			$con1="select student_name,roll_no,unique_id from unique_id where unique_id='$stn_id'"; 
			$var1=mysql_query($con1);
			
			if($var1>0)
			{
				if($row=mysql_fetch_array($var1))
				{
					$stn_name=$row[0];
					$stn_roll=$row[1];
					$_SESSION['name']=$stn_name;
						
					$con2="insert into student_feedback values('$stn_name','$stn_crs','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
					$var2=mysql_query($con2);

					if($stn_crs=='MCA Part-I,1st Sem.')
					{
						$con3="insert into mca_part1_1st_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					elseif($stn_crs=='MCA Part-I,2nd Sem.')
					{
						$con3="insert into mca_part1_2nd_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					if($stn_crs=='MCA Part-II,1st Sem.')
					{
						$con3="insert into mca_part2_1st_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					elseif($stn_crs=='MCA Part-II,2nd Sem.')
					{
						$con3="insert into mca_part2_2nd_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					if($stn_crs=='MCA Part-III,1st Sem.')
					{
						$con3="insert into mca_part3_1st_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					elseif($stn_crs=='MCA Part-III,2nd Sem.')
					{
						$con3="insert into mca_part3_2nd_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					if($stn_crs=='M.TECH Part-I,1st Sem.')
					{
						$con3="insert into mtech_part1_1st_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					elseif($stn_crs=='M.TECH Part-I,2nd Sem.')
					{
						$con3="insert into mtech_part1_2nd_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					if($stn_crs=='M.TECH Part-II,1st Sem.')
					{
						$con3="insert into mtech_part2_1st_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					else
					{
						$con3="insert into mtech_part2_2nd_sem values('$stn_name','$stn_roll','$stn_opt1','$stn_opt2','$stn_opt3','$stn_opt4','$stn_opt5','$stn_opt6','$stn_opt7','$stn_opt8','$actual_time')"; 
						$var3=mysql_query($con3);
					}
					
					header('location:student_submit_feedback.php');
				}
				else
				{
					header('location:error.php');
				}
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
		<title>Student Feedback</title>

	</head>
	<body bgcolor="orange">
		<CENTER>
		<h1 style="position:absolute;left:40.8%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Student Feedback</h1>
            <form method="POST">
			<table style="position:absolute;left:30%;top:12%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="550px">
				<tr>
					<td align="middle"><b>MCA PART-I </b></td>
					<td><input type="radio" name="stn_crs" value="MCA Part-I,1st Sem.">1st Sem.
						<input type="radio" name="stn_crs" value="MCA Part-I,2nd Sem.">2nd Sem.</td>
				
					<td align="middle"><b>MCA PART-II </b></td>
					<td><input type="radio" name="stn_crs" value="MCA Part-II,1st Sem.">1st Sem.
						<input type="radio" name="stn_crs" value="MCA Part-II,2nd Sem.">2nd Sem.</td>
				
					<td align="middle"><b>MCA PART-III </b></td>
					<td><input type="radio" name="stn_crs" value="MCA Part-III,1st Sem.">1st Sem.
						<input type="radio" name="stn_crs" value="MCA Part-III,2nd Sem..">2nd Sem.</td>
				</tr>
			</table></br>

			<table style="position:absolute;left:35.5%;top:22%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="400px">
				<tr>
					<td align="middle"><b>M.TECH PART-I </b></td>
					<td><input type="radio" name="stn_crs" value="M.TECH Part-I,1st Sem.">1st Sem.
						<input type="radio" name="stn_crs" value="M.TECH Part-I,2nd Sem.">2nd Sem.</td>
				
					<td align="middle"><b>M.TECH PART-II </b></td>
					<td><input type="radio" name="stn_crs" value="M.TECH Part-II,1st Sem.">1st Sem.
						<input type="radio" name="stn_crs" value="M.TECH Part-II,2nd Sem.">2nd Sem.</td>
				</tr>
			</table></br></br>

			<table style="position:absolute;left:21%;top:32%;border:3px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="3px" cellpadding="3px" width="800px">
            	<tr>
					<td align="middle"><b>THIS COURSE ARE HOW MUCH VALUABLE FOR YOU?</b></td>
					<td><input type="radio" name="stn_opt1" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt1" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt1" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt1" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
	            <tr>
					<td align="middle"><b>HOW IS THE NATURE OF THE COURSE?</b></td>
					<td><input type="radio" name="stn_opt2" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt2" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt2" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt2" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
	            <tr>
					<td align="middle"><b>IS THE SYLLABUS FULL COVERED?</b></td>
					<td><input type="radio" name="stn_opt3" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt3" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt3" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt3" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
				<tr>					
					<td align="middle"><b>HOW TEACHER ARE HELPS YOU?</b></td>
					<td><input type="radio" name="stn_opt4" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt4" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt4" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt4" value="good"/>NOT SATISFACTORY
					</td>
				</tr>		
            	<tr>
					<td align="middle"><b>YOUR INTEREST ABOUT SUBJECTS?</b></td>
					<td><input type="radio" name="stn_opt5" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt5" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt5" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt5" value="good"/>NOT SATISFACTORY
					</td>
				</tr>	
            	<tr>
					<td align="middle"><b>HOW HELPED IN STUDY MATERIALS?</b></td>
					<td><input type="radio" name="stn_opt6" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt6" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt6" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt6" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>INTERACTION WITH TEACHER AND YOU?</b></td>
					<td><input type="radio" name="stn_opt7" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt7" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt7" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt7" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>HOW HELPED TO YOUR LABORATORY PERFORMANCE?</b></td>
					<td><input type="radio" name="stn_opt8" value="very good"/>VERY GOOD
						<input type="radio" name="stn_opt8" value="good"/>GOOD</br>
						<input type="radio" name="stn_opt8" value="very good"/>SATISFACTORY
						<input type="radio" name="stn_opt8" value="good"/>NOT SATISFACTORY
					</td>
				</tr>
				<tr>
					<td align="middle"><b>Your Unique ID* </b></td>
					<td><input type="password" name="stn_id" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="stn_feedback" value="Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/></td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:48.5%;top:108%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/>
			</form>
			<div style="position:absolute;left:28%;top:120%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>	