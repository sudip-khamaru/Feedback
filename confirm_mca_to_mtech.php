<?php

	session_start();

	echo "<title> Confirm Course Change </title>";
	echo "<body bgcolor='#4dff4d'>";
	echo "<CENTER>";
	echo "<font style='position:absolute;left:36%;top:20%;font-size:25px'>Welcome, </font><font style='position:absolute;left:44%;top:19%;font-size:35px;font-weight:bold;color:565c46'>".$_SESSION['name']."</font></br></br><font style='position:absolute;left:27%;top:30%;font-size:25px'>Your course is successfully changed from <b>MCA</b> to <b>M.TECH</b>.</font></br></br>"; 
	echo "<a href='home.php'style='position:absolute;left:44.5%;top:43%;font-size:20px;text-decoration:none;color:blue'><strong>Go to Home</strong></a>";
	echo "</CENTER></body>";

?>