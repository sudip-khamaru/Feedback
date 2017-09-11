
<?php

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');
	
	$con="select * from alumni_unique_id";
	$var=mysql_query($con);
	
	echo '<title>MCA & M.TECH Alumni Informations</title>';
	echo '<a href="database.php" style="position:absolute;left:80%;top:5%;font-size:20px;text-decoration:none;color:blue;font-weight:bold">Back to Database Lists >></a>';
	
	if($var>0)
	{
		echo '<body bgcolor="orange">';
		echo '<CENTER>';
		echo '<h1 style="position:absolute;left:30%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">MCA & M.TECH Alumni Informations</h1>';
		echo '<table style="position:absolute;left:16%;top:14%;border:2px solid #565c56" bgcolor="#d7ee91" border="2px" cellspacing="0px" cellpadding="3px" width="auto">';
			echo '<tr><td align="center"><b>'."Course".'</b></td>';
			echo '<td align="center"><b>'."Student Name".'</b></td>';
			echo '<td align="center"><b>'."Parent Name".'</b></td>';
			echo '<td align="center"><b>'."Contact No.".'</b></td>';
			echo '<td align="center"><b>'."Email id".'</b></td>';
			echo '<td align="center"><b>'."Year of Passing".'</b></td>';
			echo '<td align="center"><b>'."Company/Office".'</b></td>';
			echo '<td align="center"><b>'."Designation".'</b></td></tr>';
	
			while($row=mysql_fetch_array($var))
			{
				echo '<tr><td align="center"><i>'.$row[0].'</i></td>';
				echo '<td align="center"><i>'.$row[1].'</i></td>';
				echo '<td align="center"><i>'.$row[2].'</i></td>';
				echo '<td align="center"><i>'.$row[3].'</i></td>';
				echo '<td align="center"><i>'.$row[4].'</i></td>';
				echo '<td align="center"><i>'.$row[5].'</i></td>';
				echo '<td align="center"><i>'.$row[6].'</i></td>';
				echo '<td align="center"><i>'.$row[7].'</i></td></tr>';
			}
			echo '</table></CENTER></body>';
	}
	else
	{
		echo "No records found.";
	}

?>