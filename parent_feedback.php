<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('feedback');
								
	if(isset($_POST['ptn_feedback']))
	{
		if(!empty($_POST['ptn_name']) && !empty($_POST['stn_name']) && !empty($_POST['stn_crs']))
		{
			$ptn_name=$_POST['ptn_name'];
			$stn_name=$_POST['stn_name'];
			$stn_crs=$_POST['stn_crs'];

			if(!empty($_POST['ptn_opt1']) && !empty($_POST['ptn_opt2']) && !empty($_POST['ptn_opt3']) && !empty($_POST['ptn_opt4']) && !empty($_POST['ptn_opt5']) && !empty($_POST['ptn_opt6']) && !empty($_POST['ptn_opt7']) && !empty($_POST['ptn_opt8']) && !empty($_POST['comment']))
			{
				$ptn_opt1=$_POST['ptn_opt1'];
				$ptn_opt2=$_POST['ptn_opt2'];
				$ptn_opt3=$_POST['ptn_opt3'];
				$ptn_opt4=$_POST['ptn_opt4'];
				$ptn_opt5=$_POST['ptn_opt5'];
				$ptn_opt6=$_POST['ptn_opt6'];
				$ptn_opt7=$_POST['ptn_opt7'];
				$ptn_opt8=$_POST['ptn_opt8'];
				$comment=$_POST['comment'];
			}
				
			$con1="select parent_name,student_name,course from unique_id where parent_name='$ptn_name' and student_name='$stn_name' and course='$stn_crs'";
			$var1=mysql_query($con1);
			
			if($var1>0)
			{
				if($row=mysql_fetch_array($var1))
				{
					$ptr_name=$row[0];
					$stu_name=$row[1];
					$stu_crs=$row[2];
					$_SESSION['ptn_name']=$ptr_name;

					$con2="insert into parent_feedback values('$ptr_name','$stu_name','$stu_crs','$ptn_opt1','$ptn_opt2','$ptn_opt3','$ptn_opt4','$ptn_opt5','$ptn_opt6','$ptn_opt7','$ptn_opt8','$comment','$actual_time')"; 
					$var2=mysql_query($con2);

					header('location:parent_submit_feedback.php');
				}
				else
				{
					header('location:error2.php');
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
		<title>Parent Feedback</title>
	</head>
	<body bgcolor="orange">
		<h1 style="position:absolute;left:40.8%;top:3%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Parent Feedback</h1>
		<CENTER>
            <form method="POST">
			<table style="position:absolute;left:20%;top:12%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="800px">
				<tr>
					<td align="middle"><b>Parent's Name* </b></td>
					<td align="middle"><input type="text" name="ptn_name" size="50px" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Son/Daughter's Name* </b></td>
					<td align="middle"><input type="text" name="stn_name" size="50px" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Course* </b></td>
					<td align="middle"><input type="radio" name="stn_crs" value="MCA"/><strong>MCA</strong>
									   <input type="radio" name="stn_crs" value="M.TECH"/><strong>M.TECH</strong>
					</td>
				</tr>
			</table></br>

			<table style="position:absolute;left:20%;top:28%;border:3px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="3px" cellpadding="3px" width="800px">
            	<tr>
					<td align="middle"><b>DOES THE UNIVERSITY CHARGED ANY EXTRA FEES AS PER GOVT. RATE?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt1" value="yes">YES
									   <input type="radio" name="ptn_opt1" value="no">NO
					</td>
				</tr>
	            <tr>
					<td align="middle"><b>DOES YOUR DEPARTMENT REGULARLY INFORMS YOU ABOUT HIS/HER PERFORMANCE?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt2" value="yes">YES
									   <input type="radio" name="ptn_opt2" value="no">NO
					</td>
				</tr> 
	            <tr>
					<td align="middle"><b>ARE YOU SATISFIED WITH THE QUALITY OF TEACHING OFFERED BY THE DEPARTMENT?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt3" value="yes">YES
									   <input type="radio" name="ptn_opt3" value="no">NO
					</td>
				</tr>
				<tr>					
					<td align="middle"><b>ARE THE HEADS APPRAISE YOU ABOUT YOUR SON/DAUGHTER?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt4" value="yes">YES
									   <input type="radio" name="ptn_opt4" value="no">NO
					</td>
				</tr>		
            	<tr>
					<td align="middle"><b>ARE YOU SATISFIED ABOUT THE EXAMINATION SYSTEM ADOPTED IN THE DEPARTMENT?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt5" value="yes">YES
									   <input type="radio" name="ptn_opt5" value="no">NO
					</td>
				</tr>	
            	<tr>
					<td align="middle"><b>ARE YOU SATISFIED ABOUT YOUR CHILD'S STUDY?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt6" value="yes">YES
									   <input type="radio" name="ptn_opt6" value="no">NO
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>ARE YOU FEEL SECURE TO SEND YOUR SON/DAUGHTER IN OUR DEPARTMENT?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt7" value="yes">YES
									   <input type="radio" name="ptn_opt7" value="no">NO
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>HOW YOU FEEL ABOUT DEPARTMENT EDUCATIONAL ATMOSPHEAR?</b></td>
					<td align="middle"><input type="radio" name="ptn_opt8" value="yes">YES
									   <input type="radio" name="ptn_opt8" value="no">NO
					</td>
				</tr>
				<tr>
					<td align="middle"><b>PLEASE GIVE YOUR VALUABLE COMMENTS/SUGGESTIONS</b></td>
					<td>
						<textarea rows="3" cols="40" name="comment" style="border:1px solid #116e11;border-radius:3px"></textarea>
					</td>					
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="ptn_feedback" value="Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/></td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:47.5%;top:107%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/>
			</form>
			<div style="position:absolute;left:28%;top:119%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>	