<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');	// Database Connection //
								
	if(isset($_POST['uid_gen']))
	{
		if(!empty($_POST['stn_crs']))
		{
			$stn_crs=$_POST['stn_crs'];
			$stn_crs1=$_POST['stn_crs'];
			if(!empty($_POST['stn_name']))
			{
				$stn_name=$_POST['stn_name'];
				$_SESSION['name']=$stn_name;
				if(!empty($_POST['ptn_name']))
				{
					$ptn_name=$_POST['ptn_name'];
					if(!empty($_POST['stn_roll']))
					{
						$stn_roll=$_POST['stn_roll'];
						if(!empty($_POST['stn_cnt']))
						{
							$stn_cnt=$_POST['stn_cnt'];
							if(!empty($_POST['stn_mail']))
							{
								$stn_mail=$_POST['stn_mail'];
								if(!empty($_POST['sec_ans']))
								{	
									$sec_ans=$_POST['sec_ans'];

									if($sec_ans=='Audi' || $sec_ans=='audi' || $sec_ans=='AUDI')
									{					
										if($_POST['stn_crs']=='M.TECH')
										{
											$con="select course,student_name,email_id from unique_id where student_name='$stn_name' and email_id='$stn_mail'";
											$var=mysql_query($con);

											if($row=mysql_fetch_array($var))
											{
												$p=$row[0];

												if($p=='MCA')
												{
													$name=$row[1];
													$_SESSION['name']=$name;

													header('location:mca_to_mtech.php');
												}
												else
												{
													echo "<font style='position:absolute;top:65%;left:40%;font-size:22px'>Hi, <strong>".$row[1]."</strong>.</font></br>";
													echo "<font style='position:absolute;top:70%;left:39%;font-size:22px'>You already have your Unique ID.</font>";
												}
											}
											else
											{
												function unique_id($size) 
												{
													$key1='CSE';
													$length=$size-5;
													$key2='';
													$key3=range(0,9);

													if($_POST['stn_crs']=='MCA')
													{
														$key4='MCA';
													}
													else
													{
														$key4='MTECH';	
													}

													for($i=0;$i<$length;$i++) 
													{
														$key2.=$key3[array_rand($key3)];
													}
													return $key1.$key2.$key4;
												}
												$un_id=unique_id(10);
												$_SESSION['uni_id']=$un_id;

												$con2="insert into unique_id values('$stn_crs','$stn_crs','$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail','$un_id','$actual_time')";
												$var2=mysql_query($con2);

												if($stn_crs=='MCA')
												{
													$con3="insert into mca values('$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail')";
													$var3=mysql_query($con3);
												}
												else
												{
													$con3="insert into mtech values('$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail')";
													$var3=mysql_query($con3);
												}

												header('location:get_id.php');
											}
										}
										else
										{
											$con1="select course,student_name,email_id from unique_id where course='$stn_crs' and student_name='$stn_name' and email_id='$stn_mail'";
											$var1=mysql_query($con1);
											
											if($row1=mysql_fetch_array($var1))
											{
												echo "<font style='position:absolute;top:65%;left:40%;font-size:22px'>Hi, <strong>".$row1[1]."</strong>.</font></br>";
												echo "<font style='position:absolute;top:70%;left:39%;font-size:22px'>You already have your Unique ID.</font>";
											}
											else
											{
												function unique_id($size) 
												{
													$key1='CSE';
													$length=$size-5;
													$key2='';
													$key3=range(0,9);

													if($_POST['stn_crs']=='MCA')
													{
														$key4='MCA';
													}
													else
													{
														$key4='MTECH';	
													}

													for($i=0;$i<$length;$i++) 
													{
														$key2.=$key3[array_rand($key3)];
													}
													return $key1.$key2.$key4;
												}
												$un_id=unique_id(10);
												$_SESSION['uni_id']=$un_id;

												$con2="insert into unique_id values('$stn_crs','$stn_crs','$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail','$un_id','$actual_time')";
												$var2=mysql_query($con2);
												
												if($stn_crs=='MCA')
												{
													$con3="insert into mca values('$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail')";
													$var3=mysql_query($con3);
												}
												else
												{
													$con3="insert into mtech values('$stn_name','$ptn_name','$stn_roll','$stn_cnt','$stn_mail')";
													$var3=mysql_query($con3);
												}

												header('location:get_id.php');
											}
										}
									}
									else
									{
										echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Wrong Answer.</strong></font>";
									}
								}
								else
								{
									echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
								}
							}
							else
							{
								echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
							}
						}
						else
						{
							echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
						}
					}
					else
					{
						echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
					}
				}
				else
				{
					echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
				}
			}
			else
			{
				echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
			}
		}
		else
		{
			echo "<font style='position:absolute;top:53%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

?>


<html>
	<head>
		<title>Unique ID Registration</title>
	</head>

	<body bgcolor="orange">
        <CENTER>
        	<h1 style="position:absolute;left:38.8%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000;">Unique ID Registration</h1>
            <form method="POST">
			<table style="position:absolute;left:36%;top:14%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="400px">
				<tr>
					<td align="middle"><b>Course </b></td>
					<td align="middle"><input type="radio" name="stn_crs" value="MCA"><strong>MCA</strong>
									   <input type="radio" name="stn_crs" value="M.TECH"><strong>M.TECH</strong>
					</td>
				</tr>
				<tr>
					<td align="middle"><b>Student Name </b></td>
					<td align="middle"><input type="text" name="stn_name" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Parent Name </b></td>
					<td align="middle"><input type="text" name="ptn_name" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Roll No. </b></td>
					<td align="middle"><input type="text" name="stn_roll" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Contact No. </b></td>
					<td align="middle"><input type="text" name="stn_cnt" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Email id </b></td>
					<td align="middle"><input type="text" name="stn_mail" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Security Question </b></td>
					<td align="middle"><strong>Auditorium known as?</strong></td>
				</tr>
				<tr>
					<td align="middle"><b>Your Answer* </b></td>
					<td align="middle"><input type="password" name="sec_ans" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="uid_gen" value="Unique ID Generator" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
						   &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset" value="Reset" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
					</td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:48%;top:60%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
			</form>
			<div style="position:absolute;left:28%;top:94%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>