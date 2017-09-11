<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('feedback');
	
	if(isset($_POST['almn_feedback']))
	{
		if(!empty($_POST['unique_id']))
		{
			$almn_id=$_POST['unique_id'];
			
			if(!empty($_POST['almn_opt1']) && !empty($_POST['almn_opt2']) && !empty($_POST['almn_opt3']) && !empty($_POST['comment1']) && !empty($_POST['almn_opt4']) && !empty($_POST['comment2']) && !empty($_POST['almn_opt5']) && !empty($_POST['comment3']) && !empty($_POST['almn_opt6']) && !empty($_POST['comment4']) && !empty($_POST['almn_opt7']) && !empty($_POST['comment5']) && !empty($_POST['almn_opt8']) && !empty($_POST['comment6']))
			{
				$almn_opt1=$_POST['almn_opt1'];
				$almn_opt2=$_POST['almn_opt2'];
				$almn_opt3=$_POST['almn_opt3'];
				$comment1=$_POST['comment1'];
				$almn_opt4=$_POST['almn_opt4'];
				$comment2=$_POST['comment2'];
				$almn_opt5=$_POST['almn_opt5'];
				$comment3=$_POST['comment3'];
				$almn_opt6=$_POST['almn_opt6'];
				$comment4=$_POST['comment4'];
				$almn_opt7=$_POST['almn_opt7'];
				$comment5=$_POST['comment5'];
				$almn_opt8=$_POST['almn_opt8'];
				$comment6=$_POST['comment6'];
			}
						
			$con1="select course,student_name,unique_id from alumni_unique_id where unique_id='$almn_id'"; 
			$var1=mysql_query($con1);
			
			if($var1>0)
			{
				if($row=mysql_fetch_array($var1))
				{
					$almn_crs=$row[0];
					$almn_name=$row[1];
					$_SESSION['name']=$almn_name;
						
					$con2="insert into alumni_feedback values('$almn_crs','$almn_name','$almn_opt1','$almn_opt2','$almn_opt3','$comment1','$almn_opt4','$comment2','$almn_opt5','$comment3','$almn_opt6','$comment4','$almn_opt7','$comment5','$almn_opt8','$comment6','$actual_time')"; 
					$var2=mysql_query($con2);

					header('location:alumni_submit_feedback.php');
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
		<title>Alumni Feedback</title>
	</head>
	<body bgcolor="orange">
		<h1 style="position:absolute;left:40.8%;top:3%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Alumni Feedback</h1>
		<CENTER>
			<form method="POST">
				<font style='position:absolute;left:40%;top:18%'>Your Unique ID*: </font> 
				<input type="password" name="unique_id" style="position:absolute;left:49%;top:18%;border:1px solid #116e11;border-radius:3px"/></td>
				<table style="position:absolute;left:20%;top:28%;border:3px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="3px" cellpadding="3px" width="800px">
	            	<tr>
						<td align="middle"><b>IN YOUR OPINION IS THERE NEED ANY CHANGE IN CURRICULUM AND SYLLABUS?</b></td>
						<td align="middle"><input type="radio" name="almn_opt1" value="yes">YES
										   <input type="radio" name="almn_opt1" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		            <tr>
						<td align="middle"><b>IN YOUR OPINION IS THERE NEED ANY IMPROVEMENT IN TEACHING AND LEARNING PROCESS?</b></td>
						<td align="middle"><input type="radio" name="almn_opt2" value="yes">YES
										   <input type="radio" name="almn_opt2" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
		            <tr>
						<td align="middle"><b>HAVE YOU PUBLISHED ANY RESEARCH / TECHNICAL PAPER AFTER MASTERS? (If yes, kindly furnish details here:)</b></td>
						<td align="middle"><input type="radio" name="almn_opt3" value="yes">YES
										   <input type="radio" name="almn_opt3" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
						<td>
							<textarea rows="3" cols="40" name="comment1" style="position:absolute;left:56.3%;top:25%;border:1px solid #116e11;border-radius:3px"></textarea>
						</td>
					</tr>
					<tr>					
						<td align="middle"><b>ARE YOU REFERRING ANY RESEARCH / TECHNICAL PAPERS IN YOUR PROFESSION? (If yes, kindly furnish details here:)</b></td>
						<td align="middle"><input type="radio" name="almn_opt4" value="yes">YES
										   <input type="radio" name="almn_opt4" value="no">NO
						</td>
					</tr>
					
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
						<td>
							<textarea rows="3" cols="40" name="comment2" style="position:absolute;left:56.3%;top:39%;border:1px solid #116e11;border-radius:3px"></textarea>
						</td>
					</tr>		
	            	<tr>
						<td align="middle"><b>ARE YOU INVOLVED IN ANY RESEARCH? (If yes, kindly furnish details here:)</b></td>
						<td align="middle"><input type="radio" name="almn_opt5" value="yes">YES
										   <input type="radio" name="almn_opt5" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
						<td>
							<textarea rows="3" cols="40" name="comment3" style="position:absolute;left:56.3%;top:51%;border:1px solid #116e11;border-radius:3px"></textarea>
						</td>
					</tr>	
	            	<tr>
						<td align="middle"><b>HAVE YOU ACQUIRED ANY ADDITIONAL EDUCATIONAL QUALIFICATION AFTER COMPLETING YOUR DEGREE HERE? (If yes, kindly furnish details here:)</b></td>
						<td align="middle"><input type="radio" name="almn_opt6" value="yes">YES
										   <input type="radio" name="almn_opt6" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
						<td>
							<textarea rows="3" cols="40" name="comment4" style="position:absolute;left:56.3%;top:62%;border:1px solid #116e11;border-radius:3px"></textarea>
						</td>
					</tr>
	            	<tr>
						<td align="middle"><b>HAVE YOU RECEIVED ANY AWARD / RECOGNITION IN YOUR PROFESSIONAL CAREER? (If yes, kindly furnish details here:)</b></td>
						<td align="middle"><input type="radio" name="almn_opt7" value="yes">YES
										   <input type="radio" name="almn_opt7" value="no">NO
						</td>
					</tr>
					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					<tr>
						<td>
							<textarea rows="3" cols="40" name="comment5" style="position:absolute;left:56.3%;top:75.5%;border:1px solid #116e11;border-radius:3px"></textarea>
						</td>
					</tr>
	            	<tr>
						<td align="middle"><b>WILL YOU RECOMMEND YOUR RELATIVE/FRIENDS TO ENROLL HERE?</b></td>
						<td align="middle"><input type="radio" name="almn_opt8" value="yes">YES
										   <input type="radio" name="almn_opt8" value="no">NO
						</td>
					</tr>
					<tr>
						<td align="middle"><b>PLEASE GIVE YOUR VALUABLE COMMENTS/SUGGESTIONS:</b></td>
						<td>
							<textarea rows="3" cols="40" name="comment6" style="border:1px solid #116e11;border-radius:4px"></textarea>
						</td>					
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="almn_feedback" value="Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/></td>
					</tr>
				</table></br>
				<input type="submit" name="home" value="Home" style="position:absolute;left:47.5%;top:184%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/>
			</form>
			<div style="position:absolute;left:28%;top:195%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>	