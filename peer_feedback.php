<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');
	mysql_select_db('feedback');
	
	if(isset($_POST['peer_feedback']))
	{
		if(!empty($_POST['name']) && !empty($_POST['dsgn']) && !empty($_POST['vst_prps']))
		{
			$name=$_POST['name'];
			$_SESSION['name']=$name;
			$dsgn=$_POST['dsgn'];
			$vst_prps=$_POST['vst_prps'];

			if(!empty($_POST['peer_opt1']) && !empty($_POST['peer_opt2']) && !empty($_POST['peer_opt3']) && !empty($_POST['peer_opt4']) && !empty($_POST['peer_opt5']) && !empty($_POST['peer_opt6']) && !empty($_POST['peer_opt7']) && !empty($_POST['peer_opt8']) && !empty($_POST['comment']))
			{
				$peer_opt1=$_POST['peer_opt1'];
				$peer_opt2=$_POST['peer_opt2'];
				$peer_opt3=$_POST['peer_opt3'];
				$peer_opt4=$_POST['peer_opt4'];
				$peer_opt5=$_POST['peer_opt5'];
				$peer_opt6=$_POST['peer_opt6'];
				$peer_opt7=$_POST['peer_opt7'];
				$peer_opt8=$_POST['peer_opt8'];
				$comment=$_POST['comment'];
			}
						
			$con="insert into peer_feedback values('$name','$dsgn','$vst_prps','$peer_opt1','$peer_opt2','$peer_opt3','$peer_opt4','$peer_opt5','$peer_opt6','$peer_opt7','$peer_opt8','$comment','$actual_time')"; 
			$var=mysql_query($con);

			header('location:peer_submit_feedback.php');
			
		}		
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}
?>
<html>
	<head>
		<title>Peer Feedback</title>
	</head>
	<body bgcolor="orange">
		<h1 style="position:absolute;left:40.8%;top:1%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Peer Feedback</h1>
		<CENTER>
            <form method="POST">
			<table style="position:absolute;left:20%;top:12%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="800px">
				<tr>
					<td align="middle"><b>Name* </b></td>
					<td align="middle"><input type="text" name="name" size="50px" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Designation* </b></td>
					<td align="middle"><input type="text" name="dsgn" size="50px" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
				<td align="middle"><b> Visit Purpose* </b></td>
					<td align="middle"><input type="text" name="vst_prps" size="50px" style="border:1px solid #116e11;border-radius:3px"/></td>	
				</tr>
			</table></br>

			<table style="position:absolute;left:20%;top:28%;border:3px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="3px" cellpadding="3px" width="800px">
            	<tr>
					<td align="middle"><b>DOES THE UNIVERSITY CHARGED ANY EXTRA FEES AS PER GOVT. RATE?</b></td>
					<td align="middle"><input type="radio" name="peer_opt1" value="yes">YES
									   <input type="radio" name="peer_opt1" value="no">NO
					</td>
				</tr>
	            <tr>
					<td align="middle"><b>IN YOUR OPINION IS THERE NEED ANY CHANGE IN CURRICULUM AND SYLLABUS?</b></td>
					<td align="middle"><input type="radio" name="peer_opt2" value="yes">YES
									   <input type="radio" name="peer_opt2" value="no">NO
					</td>
				</tr> 
	            <tr>
					<td align="middle"><b>ARE YOU SATISFIED WITH THE QUALITY OF TEACHING OFFERED BY THE DEPARTMENT?</b></td>
					<td align="middle"><input type="radio" name="peer_opt3" value="yes">YES
									   <input type="radio" name="peer_opt3" value="no">NO
					</td>
				</tr>
				<tr>					
					<td align="middle"><b>DO YOU AGREE, FUNDAMENTAL ENGINEERING KNOWLEDGE GAINED WHILE AT CSE HAS HELPED STUDENTS TO BECOME SUCCESSFUL IN CAREER/ PROFESSION?</b></td>
					<td align="middle"><input type="radio" name="peer_opt4" value="yes">YES
									   <input type="radio" name="peer_opt4" value="no">NO
					</td>
				</tr>		
            	<tr>
					<td align="middle"><b>DO YOU AGREE, THE MASTERS PREPARATION AT CSE COMPARED TO OTHER ENGINEERING COLLEGE IS BETTER?</b></td>
					<td align="middle"><input type="radio" name="peer_opt5" value="yes">YES
									   <input type="radio" name="peer_opt5" value="no">NO
					</td>
				</tr>	
            	<tr>
					<td align="middle"><b>IS THERE SATISFACTORY STUDY METIRIAL AVAILABLE IN DEPARTMENT?</b></td>
					<td align="middle"><input type="radio" name="peer_opt6" value="yes">YES
									   <input type="radio" name="peer_opt6" value="no">NO
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>WILL YOU RECOMMEND YOUR RELATIVE/FRIENDS TO ENROLL HERE?</b></td>
					<td align="middle"><input type="radio" name="peer_opt7" value="yes">YES
									   <input type="radio" name="peer_opt7" value="no">NO
					</td>
				</tr>
            	<tr>
					<td align="middle"><b>IS THIS DEPARTMENTAL EDUCATIONAL ATMOSPHEAR IS PERFECT FOR STUDY?</b></td>
					<td align="middle"><input type="radio" name="peer_opt8" value="yes">YES
									   <input type="radio" name="peer_opt8" value="no">NO
					</td>
				</tr>
				<tr>
					<td align="middle"><b>PLEASE GIVE YOUR VALUABLE COMMENTS/SUGGESTIONS</b></td>
					<td>
						<textarea rows="3" cols="40" name="comment" style="border:1px solid #116e11;border-radius:3px"></textarea>
					</td>					
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="peer_feedback" value="Feedback" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/></td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:47.5%;top:123%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px"/>
			</form>
			<div style="position:absolute;left:30%;top:130%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>	