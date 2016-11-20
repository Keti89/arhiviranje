<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Електронско архивирање</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/s3Slider.js" type="text/javascript"></script>
	<script type="text/javascript">
			$(document).ready(function() { 
			$('#s3slider').s3Slider({
				timeOut: 5000
			});
		});
	</script>
	<link href="css/style.css" rel="stylesheet" type="text/css"  />
</head>
<body>
<div id="wrap">
	<?php include("includes/logo.php"); ?>
	<?php include("includes/social-media-icons.php"); ?>
	<?php include("includes/menu_lines.php");?>
	<?php include("includes/header.php");?>
	<div class="center_content">
		<?php include("includes/left_content.php");?>
			<div class="middle"> <div class="boxx" >
				<?php include "store/connect_to_mysql.php";?>	
				<?php
					$name=$_POST['name'];
					$address=$_POST['address'];
					$num=$_POST['num'];
					$ime=$_POST['ime'];
					$embg=$_POST['embg'];
					$name1=$_POST['name1'];
					$time=$_POST['time'];
					if (isset($_POST['baranje']))
						{
							$text=$_POST['text'];
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="" || $text=="") 
								{
									echo"Имате непотпунет податок! <a href=baranje.php><button>Врати се назат</button>  </a>";  return 0;
								}
								else
									{
										if(!preg_match("/^[0-9_]/", $num)) 
											{
												echo"За број на адреса венси број! <a href=baranje.php><button>Врати се назат</button>  </a>";  return 0;
											}
										else
											{
												if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
													{
														echo"Матичниот број се состои од 13 бројки!<a href=baranje.php><button>Врати се назат</button>  </a>";  return 0;
													}
												
											}
									}
							$r = mysqli_query($sConn,"INSERT INTO baranje (idk, idt) VALUES ('102', '2')");
							$last_id = mysqli_insert_id($sConn);
							$r = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time, text, kategorija, idk, idt, id_b, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1', '$time','$text','Baranje', '102', '2', $last_id, now())");
							if($r)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}
					else
					if (isset($_POST['molba']))
						{
						$text=$_POST['text'];
						if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="" || $text=="") 
							{
								echo"Имате непотпунет податок! <a href=molba.php><button>Врати се назат</button>  </a>";  return 0;
							}
						else
							{
								if(!preg_match("/^[0-9_]/", $num)) 
									{
										echo"За број на адреса венси број! <a href=molba.php><button>Врати се назат</button>  </a>";  return 0;
									}
								else
									{
										if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
											{
												echo"Матичниот број се состои од 13 бројки!<a href=molba.php><button>Врати се назат</button>  </a>";  return 0;
											}
									}
							}
						$r = mysqli_query($sConn,"INSERT INTO molba (idk, idt) VALUES ('101', '2')");
							$last_id = mysqli_insert_id($sConn);
						$r = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time, text, kategorija, idk, idt, id_m, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1', '$time','$text','Molba', '101', '2', $last_id, now())");
						if($r)
							{
								echo "Успешно внесено во базата";
							}
						else
							{
								echo "Грешка";
							}
					}
					else
					if (isset($_POST['izjava']))
						{ 
							$text=$_POST['text'];
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="" || $text=="") 
								{
									echo"Имате непотпунет податок! <a href=izjava.php><button>Врати се назат</button>  </a>";  return 0;
								}
								else
									{
										if(!preg_match("/^[0-9_]/", $num)) 
											{
												echo"За број на адреса венси број! <a href=izjava.php><button>Врати се назат</button>  </a>";  return 0;
											}
										else
											{
												if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
													{
														echo"Матичниот број се состои од 13 бројки!<a href=izjava.php><button>Врати се назат</button>  </a>";  return 0;
													}
											}
									}	
							$r = mysqli_query($sConn,"INSERT INTO izjava (idk, idt) VALUES ('100', '2')");
							$last_id = mysqli_insert_id($sConn);
							$r = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time, text, kategorija, idk, idt, id_i, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1', '$time','$text','Izjava', '100', '2', $last_id, now())");
							if($r)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}		
					else 
					if (isset($_POST['spogodba']))
						{
							$Vreme=$_POST['Vreme'];
							$grad=$_POST['grad'];
							$time1=$_POST['time1'];
							$time2=$_POST['time2'];
							//$name2=$_POST['name2'];
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="") 
								{
									echo"Имате непотпунет податок! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
								}
							else
								{
									if(!preg_match("/^[0-9_]/", $num)) 
										{
											echo"За број на адреса венси број! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
										}
									else
										{
											if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
												{
													echo"Матичниот број се состои од 13 бројки!<a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
												}
										}
								}				
							$ree = mysqli_query($sConn,"INSERT INTO spogodba (idk, idt) VALUES ('103', '2')");
							$last_id = mysqli_insert_id($sConn);
							$ree = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time1, time, time2, grad, kategorija, Vreme, idk, idt, id_s, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1','$time1', '$time', '$time2',  '$grad','Spogodba', '$Vreme', '103', '2', $last_id,  now())");
							if($ree)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}
						else 
					if (isset($_POST['dog_opr']))
						{
							$time3=$_POST['time3'];
							$grad=$_POST['grad'];
							$time1=$_POST['time1'];
							//$time2=$_POST['time2'];
							//$name2=$_POST['name2'];
							$obrazovanie=$_POST['obrazovanie'];
							$period=$_POST['period'];
							$rabota=$_POST['rabota'];
							$stepen=$_POST['stepen'];
						
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="") 
								{
									echo"Имате непотпунет податок! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
								}
							else
								{
									if(!preg_match("/^[0-9_]/", $num)) 
										{
											echo"За број на адреса венси број! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
										}
									else
										{
											if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
												{
													echo"Матичниот број се состои од 13 бројки!<a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
												}
										}
								}				
							$ree = mysqli_query($sConn,"INSERT INTO dogovor (idk, idt) VALUES ('104', '2')");
							$last_id = mysqli_insert_id($sConn);
							$ree = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time1, time, grad, time3, obrazovanie, period, rabota, stepen, kategorija, idid, idk, idt, id_d, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1','$time1', '$time',  '$grad', '$time3', '$obrazovanie', '$period', '$rabota', '$stepen', 'Dogovor', '1', '104', '2', $last_id,  now())");
							if($ree)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}
						else 
					if (isset($_POST['dog_vra']))
						{
							//$time3=$_POST['time3'];
							$grad=$_POST['grad'];
							$time1=$_POST['time1'];
							//$time2=$_POST['time2'];
							//$name2=$_POST['name2'];
							$obrazovanie=$_POST['obrazovanie'];
							//$period=$_POST['period'];
							$rabota=$_POST['rabota'];
							$stepen=$_POST['stepen'];
						
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="") 
								{
									echo"Имате непотпунет податок! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
								}
							else
								{
									if(!preg_match("/^[0-9_]/", $num)) 
										{
											echo"За број на адреса венси број! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
										}
									else
										{
											if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
												{
													echo"Матичниот број се состои од 13 бројки!<a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
												}
										}
								}				
							$ree = mysqli_query($sConn,"INSERT INTO dogovor (idk, idt) VALUES ('104', '2')");
							$last_id = mysqli_insert_id($sConn);
							$ree = mysqli_query($sConn,"INSERT INTO person (ime, name, address, num, embg, name1, time1, time, grad,  obrazovanie,  rabota, stepen, kategorija, idid,  idk, idt, id_d, data_added) VALUES ('$ime','$name', '$address', '$num', '$embg', '$name1','$time1', '$time', '$grad',  '$obrazovanie', '$rabota', '$stepen', 'Dogovor', '2','104', '2', $last_id,  now())");
							if($ree)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}
						else 
					if (isset($_POST['dog_delo']))
						{
							$time3=$_POST['time3'];
							$den=$_POST['den'];
							$time1=$_POST['time1'];
							$time2=$_POST['time2'];
							//$name2=$_POST['name2'];
							//$obrazovanie=$_POST['obrazovanie'];
							//$period=$_POST['period'];
							$rabota=$_POST['rabota'];
							//$stepen=$_POST['stepen'];
						
							if($name==""|| $address=="" ||$num=="" || $embg=="" || $name1=="" || $time=="") 
								{
									echo"Имате непотпунет податок! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
								}
							else
								{
									if(!preg_match("/^[0-9_]/", $num)) 
										{
											echo"За број на адреса венси број! <a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
										}
									else
										{
											if(!preg_match("/^[0-9_]/", $embg)|| strlen($embg)!=13)
												{
													echo"Матичниот број се состои од 13 бројки!<a href=spogodba.php><button>Врати се назат</button>  </a>";  return 0;
												}
										}
								}				
							$ree = mysqli_query($sConn,"INSERT INTO dogovor (idk, idt) VALUES ('104', '2')");
							$last_id = mysqli_insert_id($sConn);
							$ree = mysqli_query($sConn,"INSERT INTO person (den, ime, name, address, num, embg, name1, time1, time, time2, time3, rabota, kategorija, idid, idk, idt, id_d, data_added) VALUES ('$den','$ime','$name', '$address', '$num', '$embg', '$name1','$time1', '$time', '$time2', '$time3',   '$rabota',  'Dogovor', '3','104', '2', $last_id,  now())");
							if($ree)
								{
									echo "Успешно внесено во базата";
								}
							else
								{
									echo "Грешка";
								}
						}
				?>
			</div>
		</div>
		<?php include("includes/right_content.php");?>
	</div>
		<div class="clear">  
			<?php include("includes/footer.php");?>
		</div>
	</div>
</body>
</html>






