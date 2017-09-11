<?php

	session_start();

	echo "<title> Alumni Submit Feedback </title>";
	echo "<body bgcolor='#4dff4d'>";
	echo "<CENTER>";
	echo "<font style='position:absolute;left:45.5%;top:20%;font-size:25px'>Thank you, </font><font style='position:absolute;left:41%;top:26%;font-size:35px;font-weight:bold;color:565c46'>".$_SESSION['name']."</font></br></br><font style='position:absolute;left:40%;top:34%;font-size:25px'> for your valuable feedback.</font>"; 
	echo "<a href='home.php'style='position:absolute;left:46%;top:44%;font-size:20px;text-decoration:none;color:blue'><strong>Go to Home</strong></a>";
	echo "</CENTER></body>";

?>