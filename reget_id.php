<?php

	session_start();

	echo "<title> Get Unique ID </title>";
	echo "<body bgcolor='#4dff4d'>";
	echo "<CENTER>";
	echo "<font style='position:absolute;left:38%;top:20%;font-size:25px'>Hi, </font><font style='position:absolute;left:41%;top:19%;font-size:35px;font-weight:bold;color:565c46'>".$_SESSION['name']."</font></br></br><font style='position:absolute;left:34%;top:30%;font-size:25px'>Your Unique ID: </font><font style='position:absolute;left:47%;top:29%;font-size:35px;font-weight:bold;color:565c46'>".$_SESSION['reget_id']."</font></br></br><font style='position:absolute;left:31.2%;top:40%;font-size:20px;font-weight:bold'>** Please remember your Unique ID and keep it secret. **</font></br></br>"; 
	echo "<a href='home.php'style='position:absolute;left:44.5%;top:50%;font-size:20px;text-decoration:none;color:blue'><strong>Go to Home</strong></a>";
	echo "</CENTER></body>";


?>