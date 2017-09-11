<?php

	include 'time.php';

	session_start();

	$conn=mysql_connect('localhost','root','');	// Database Connection //
	mysql_select_db('feedback');	// Database Connection //
								
	if(isset($_POST['uid_gen1']))
	{
		if(!empty($_POST['almn_crs']))
		{
			$almn_crs=$_POST['almn_crs'];
			
			if(!empty($_POST['almn_name']))
			{
				$almn_name=$_POST['almn_name'];
				$_SESSION['name']=$almn_name;
			
				if(!empty($_POST['ptn_name']))
				{
					$ptn_name=$_POST['ptn_name'];
			
					if(!empty($_POST['almn_cnt']))
					{
						$almn_cnt=$_POST['almn_cnt'];
			
						if(!empty($_POST['almn_mail']))
						{
							$almn_mail=$_POST['almn_mail'];

							if(!empty($_POST['almn_pass1']))
							{
								$almn_pass1=$_POST['almn_pass1'];

								if(!empty($_POST['almn_job1']))
								{
									$almn_job1=$_POST['almn_job1'];

									if(!empty($_POST['almn_desig1']))
									{
										$almn_desig1=$_POST['almn_desig1'];
								
										if(!empty($_POST['sec_ans1']))
										{	
											$sec_ans1=$_POST['sec_ans1'];

											if($sec_ans1=='Audi' || $sec_ans1=='audi' || $sec_ans1=='AUDI')
											{
												$con1="select new_course,student_name,email_id from unique_id where student_name='$almn_name' and email_id='$almn_mail'";
												$var1=mysql_query($con1);
									
												if($row1=mysql_fetch_array($var1))
												{
													echo "<font style='position:absolute;top:79.5%;left:40%;font-size:22px'>Hi, <strong></strong>.</font></br>";
													echo "<font style='position:absolute;top:84.5%;left:32%;font-size:22px'>You already have your Unique ID when you are in <b>".$row1[0]."</b>.</br>So, please using <b>Registration Process - II</b> with that Unique ID.</br>If you forget your Unique ID then go to <b>Home->Unique ID Registration->Forget Unique ID</b></font>";
												}
												else
												{

													$con2="select course,student_name,email_id from alumni_unique_id where course='$almn_crs' and student_name='$almn_name' and email_id='$almn_mail'";
													$var2=mysql_query($con2);
										
													if($row2=mysql_fetch_array($var2))
													{
														echo "<font style='position:absolute;top:79.5%;left:40%;font-size:22px'>Hi, <strong>".$row2[1]."</strong>.</font></br>";
														echo "<font style='position:absolute;top:84.5%;left:39%;font-size:22px'>You already have your Unique ID.</font>";
													}
													else
													{
														function unique_id($size) 
														{
															$key1='CSE';
															$length=$size-5;
															$key2='';
															$key3=range(0,9);
															$key4='ALM';

															for($i=0;$i<$length;$i++) 
															{
																$key2.=$key3[array_rand($key3)];
															}
															return $key1.$key2.$key4;
														}
														$un_id=unique_id(10);
														$_SESSION['uni_id']=$un_id;

														$con2="insert into alumni_unique_id values('$almn_crs','$almn_name','$ptn_name','$almn_cnt','$almn_mail','$almn_pass1','$almn_job1','$almn_desig1','$un_id','$actual_time')";
														$var2=mysql_query($con2);

														if($almn_crs1=='MCA')
														{
															$con3="insert into alumni_mca values('$almn_name','$ptn_name','$almn_cnt','$almn_mail','$almn_pass1','$almn_job1','$almn_desig1')";
															$var3=mysql_query($con3);
														}
														else
														{
															$con3="insert into alumni_mtech values('$almn_name','$ptn_name','$almn_cnt','$almn_mail','$almn_pass1','$almn_job1','$almn_desig1')";
															$var3=mysql_query($con3);
														}

														header('location:get_id.php');
													}
												}
											}
											else
											{
												echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Wrong Answer.</strong></font>";
											}
										}
										else
										{
											echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
										}
									}
									else
									{
										echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
									}
								}
								else
								{
									echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
								}
							}
							else
							{
								echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
							}
						}
						else
						{
							echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
						}
					}
					else
					{
						echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
					}
				}
				else
				{
					echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
				}
			}
			else
			{
				echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
			}
		}
		else
		{
			echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
		}
	}

	if(isset($_POST['uid_gen2']))
	{
		if(!empty($_POST['alrd_id']))
		{
			$alrd_id=$_POST['alrd_id'];
			
			if(!empty($_POST['almn_pass2']))
			{
				$almn_pass2=$_POST['almn_pass2'];

				if(!empty($_POST['almn_job2']))
				{
					$almn_job2=$_POST['almn_job2'];
			
					if(!empty($_POST['almn_desig2']))
					{
						$almn_desig2=$_POST['almn_desig2'];

						if(!empty($_POST['sec_ans2']))
						{	
							$sec_ans2=$_POST['sec_ans2'];

							if($sec_ans2=='Audi' || $sec_ans2=='audi' || $sec_ans2=='AUDI')
							{
								$con4="select new_course,student_name,parent_name,contact_no,email_id,unique_id from unique_id where unique_id='$alrd_id'";
								$var4=mysql_query($con4);
									
								if($row3=mysql_fetch_array($var4))
								{
									$almn_crs2=$row3[0];
									$almn_name2=$row3[1];
									$ptn_name2=$row3[2];
									$_SESSION['name']=$almn_name2;
									$almn_cnt2=$row3[3];
									$almn_mail2=$row3[4];

									$con5="select course,student_name,email_id from alumni_unique_id where course='$almn_crs2' and student_name='$almn_name2' and email_id='$almn_mail2'";
									$var5=mysql_query($con5);
									
									if($row4=mysql_fetch_array($var5))
									{
										echo "<font style='position:absolute;top:79.5%;left:40%;font-size:22px'>Hi, <strong>".$row4[1]."</strong>.</font></br>";
										echo "<font style='position:absolute;top:84.5%;left:39%;font-size:22px'>You already have your Unique ID.</font>";
									}
									else
									{
										function unique_id($size) 
										{
											$key1='CSE';
											$length=$size-5;
											$key2='';
											$key3=range(0,9);
											$key4='ALM';
											
											for($i=0;$i<$length;$i++) 
											{
												$key2.=$key3[array_rand($key3)];
											}
											return $key1.$key2.$key4;
										}					
										$un_id2=unique_id(10);
										$_SESSION['uni_id']=$un_id2;

										$con6="insert into alumni_unique_id values('$almn_crs2','$almn_name2','$ptn_name2','$almn_cnt2','$almn_mail2','$almn_pass2','$almn_job2','$almn_desig2','$un_id2','$actual_time')";
										$var6=mysql_query($con6);

										if($almn_crs2=='MCA')
										{
											$con4="insert into alumni_mca values('$almn_name2','$ptn_name2','$almn_cnt2','$almn_mail2','$almn_pass2','$almn_job2','$almn_desig2')";
											$var4=mysql_query($con4);
										}
										else
										{
											$con4="insert into alumni_mtech values('$almn_name2','$ptn_name2','$almn_cnt2','$almn_mail2','$almn_pass2','$almn_job2','$almn_desig2')";
											$var4=mysql_query($con4);
										}

										header('location:get_id.php');
									}
								}
								else
								{
									echo "<font style='position:absolute;top:69%;left:35%;font-size:22px'><strong>Unique Id doesn't exists or wrong Unique ID.</strong></font>";
								}
							}	
							else
							{
								echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Wrong Answer.</strong></font>";
							}
						}
						else
						{
							echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
						}
					}
					else
					{
						echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
					}
				}
				else
				{
					echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
				}
			}
			else
			{
				echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
			}
		}
		else
		{
			echo "<font style='position:absolute;top:69%;left:44%;font-size:22px'><strong>Something Wrong.</strong></font>";
		}
	}

	if(isset($_POST['home']))
	{
		header('location:home.php');
	}

?>


<html>
	<head>
		<title>Alumni Registration</title>
	</head>

	<body bgcolor="orange">
        <CENTER>
        <h1 style="position:absolute;left:38.8%;top:0%;color:#116e11;text-shadow: 0.5px 0.5px #000000">Unique ID Registration</h1>
            <form method="POST">
            <font style="position:absolute;left:21%;top:12%;color:#116e11;text-shadow: 0.5px 0.5px #000000;font-size:30px">Registration Process - I</font>
			<table style="position:absolute;left:15%;top:22%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="450px">
				<tr>
					<td align="middle"><b>Course </b></td>
					<td align="middle"><input type="radio" name="almn_crs" value="MCA"><strong>MCA</strong>
									   <input type="radio" name="almn_crs" value="M.TECH"><strong>M.TECH</strong>
					</td>
				</tr>
				<tr>
					<td align="middle"><b>Student Name </b></td>
					<td align="middle"><input type="text" name="almn_name" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Parent Name </b></td>
					<td align="middle"><input type="text" name="ptn_name" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Contact No. </b></td>
					<td align="middle"><input type="text" name="almn_cnt" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Email id </b></td>
					<td align="middle"><input type="text" name="almn_mail" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Year of Passing </b></td>
					<td align="middle"><input type="text" name="almn_pass1" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Doing Job in (Company/Office) </b></td>
					<td align="middle"><input type="text" name="almn_job1" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>As a (Designation)</b></td>
					<td align="middle"><input type="text" name="almn_desig1" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Security Question </b></td>
					<td align="middle"><strong>Auditorium known as? </strong></td>
				</tr>
				<tr>
					<td align="middle"><b>Your Answer* </b></td>
					<td align="middle"><input type="password" name="sec_ans1" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="uid_gen1" value="Unique ID Generator" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
						   &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset1" value="Reset" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
					</td>
				</tr>
			</table></br>
			</form>

			<form method="POST">
			<font style="position:absolute;left:61%;top:12%;color:#116e11;text-shadow: 0.5px 0.5px #000000;font-size:30px">Registration Process - II</font>
			<table style="position:absolute;left:55%;top:29%;border:2px solid #565c56;border-radius:20px" bgcolor="#d7ee91" cellspacing="0px" cellpadding="3px" width="450px">
				<tr>
					<td align="middle"><b>Unique ID* </b></td>
					<td align="middle"><input type="text" name="alrd_id" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Year of Passing </b></td>
					<td align="middle"><input type="text" name="almn_pass2" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Doing Job in (Company/Office) </b></td>
					<td align="middle"><input type="text" name="almn_job2" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>As a (Designation)</b></td>
					<td align="middle"><input type="text" name="almn_desig2" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td align="middle"><b>Security Question </b></td>
					<td align="middle"><strong>Auditorium known as? </strong></td>
				</tr>
				<tr>
					<td align="middle"><b>Your Answer* </b></td>
					<td align="middle"><input type="password" name="sec_ans2" style="border:1px solid #116e11;border-radius:3px"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="uid_gen2" value="Unique ID Generator" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
						   &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reset2" value="Reset" style="background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
					</td>
				</tr>
			</table></br>
			<input type="submit" name="home" value="Home" style="position:absolute;left:48%;top:75%;background-color:#eeee91;border:2px solid #116e11;border-radius:30px;font-weight:bold"/>
			</form>
			<div style="position:absolute;left:28%;top:102%;color:#116e11;text-shadow: 0.4px 0.4px #000000">
				<b>copyrights - 2016 @ Department of Computer Science & Engineering, University of Kalyani.</b></br>
				   Designed & Develope by - Tamalika Naguri & Pritam Roy Chowdhury.
			</div>
		</CENTER>
	</body>
</html>