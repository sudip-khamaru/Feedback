
<?php

	session_start();

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');
	
	$con="select * from mtech";
	$var=mysql_query($con);
	
	echo '<title>M.TECH Student Informations</title>';
	echo '<a href="database.php" style="position:absolute;left:87%;top:5%;font-size:15px;text-decoration:none;color:#116e11;font-weight:bold">Back to Database lists >></a>';
	
	if($var>0)
	{
		echo '<body bgcolor="orange">';
		echo '<CENTER>';
		echo '<h1 style="position:absolute;left:34.5%;top:5%;color:#116e11;text-shadow: 0.5px 0.5px #000000">M.TECH Student Informations</h1>';
		echo '<table style="position:absolute;left:29%;top:24%;border:2px solid #565c56" bgcolor="#d7ee91" border="2px" cellspacing="0px" cellpadding="3px" width="auto">';
			echo '<tr><td align="center"><b>'."Student Name".'</b></td>';
			echo '<td align="center"><b>'."Parent Name".'</b></td>';
			echo '<td align="center"><b>'."Roll No.".'</b></td>';
			echo '<td align="center"><b>'."Contact No.".'</b></td>';
			echo '<td align="center"><b>'."Email id".'</b></td></tr>';
	
			while($row=mysql_fetch_array($var))
			{
				echo '<tr><td align="center"><i>'.$row[0].'</i></td>';
				echo '<td align="center"><i>'.$row[1].'</i></td>';
				echo '<td align="center"><i>'.$row[2].'</i></td>';
				echo '<td align="center"><i>'.$row[3].'</i></td>';
				echo '<td align="center"><i>'.$row[4].'</i></td></tr>';
			}
			echo '</table></CENTER></body>';
	}
	else
	{
		echo "No records found.";
	}

	echo "<div style='position:absolute;left:0%;top:0%;border:1px solid black;background-color:#d7ee91;height:4%;width:99.9%'>
			<font style='position:absolute;left:80%;top:0%' size=3px color='#116e11'><i>Username: </i><b>".$_SESSION['admin']."</b></font></br>
		  	<a href=logout.php style='position:absolute;left:95%;top:5%;text-decoration:none;font-size:15px;color:#116e11'><b>logout</b></a>
		  </div>";

?>