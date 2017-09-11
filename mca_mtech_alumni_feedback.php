
<?php

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');
	
	$con="select * from alumni_feedback";
	$var=mysql_query($con);
	
	echo '<title>Parents Feedback</title>';
	echo '<a href="database.php" style="position:absolute;left:80%;top:5%;font-size:20px;text-decoration:none;color:blue;font-weight:bold">Back to Database Lists >></a>';
	
	if($var>0)
	{
		echo '<body bgcolor="orange">';
		echo '<CENTER>';
		echo '<h1 style="position:absolute;left:40.5%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">Alumni\'s Feedback</h1>';
		echo '<table style="position:absolute;left:10%;top:14%;border:2px solid #565c56" bgcolor="#d7ee91" border="2px" cellspacing="0px" cellpadding="3px" width="auto">';
			echo '<tr><td align="center"><b>'."Course".'</b></td>';
			echo '<td align="center"><b>'."Student Name".'</b></td>';
			echo '<td align="center"><b>'."opt1".'</b></td>';
			echo '<td align="center"><b>'."opt2".'</b></td>';
			echo '<td align="center"><b>'."opt3".'</b></td>';
			echo '<td align="center"><b>'."cmnt1".'</b></td>';
			echo '<td align="center"><b>'."opt4".'</b></td>';
			echo '<td align="center"><b>'."cmnt2".'</b></td>';
			echo '<td align="center"><b>'."opt5".'</b></td>';
			echo '<td align="center"><b>'."cmnt3".'</b></td>';
			echo '<td align="center"><b>'."opt6".'</b></td>';
			echo '<td align="center"><b>'."cmnt4".'</b></td>';
			echo '<td align="center"><b>'."opt7".'</b></td>';
			echo '<td align="center"><b>'."cmnt5".'</b></td>';
			echo '<td align="center"><b>'."opt8".'</b></td>';
			echo '<td align="center"><b>'."cmnt6".'</b></td></tr>';
	
			while($row=mysql_fetch_array($var))
			{
				echo '<tr><td align="center"><i>'.$row[0].'</i></td>';
				echo '<td align="center"><i>'.$row[1].'</i></td>';
				echo '<td align="center"><i>'.$row[2].'</i></td>';
				echo '<td align="center"><i>'.$row[3].'</i></td>';
				echo '<td align="center"><i>'.$row[4].'</i></td>';
				echo '<td align="center"><i>'.$row[5].'</i></td>';
				echo '<td align="center"><i>'.$row[6].'</i></td>';
				echo '<td align="center"><i>'.$row[7].'</i></td>';
				echo '<td align="center"><i>'.$row[8].'</i></td>';
				echo '<td align="center"><i>'.$row[9].'</i></td>';
				echo '<td align="center"><i>'.$row[10].'</i></td>';
				echo '<td align="center"><i>'.$row[11].'</i></td>';
				echo '<td align="center"><i>'.$row[12].'</i></td>';
				echo '<td align="center"><i>'.$row[13].'</i></td>';
				echo '<td align="center"><i>'.$row[14].'</i></td>';
				echo '<td align="center"><i>'.$row[15].'</i></td></tr>';
			}
			echo '</table></CENTER></body>';
	}
	else
	{
		echo "No records found.";
	}

?>