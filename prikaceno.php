<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Електронско архивирање</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"  />
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/s3Slider.js" type="text/javascript"></script>
	<script type="text/javascript">
			$(document).ready(function() { 
			$('#s3slider').s3Slider({
				timeOut: 5000
			});
		});
	</script>
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
				if (isset($_POST['sub']))
				{
					$ime=$_POST['ime'];
					$kategorija=$_POST['kategorija'];		
					$NameFile = $_FILES['fileUpload']['name'];
					//$size = $_FILES['fileUpload']['size'];
					//$type = $_FILES['fileUpload']['type'];
					//$data  = addslashes (file_get_contents($_FILES['fileUpload']['tmp_name']));
					if( $kategorija=="") 
					{
						echo"Имате празно место <a href=\"prikaci.php\"><button>Врати се назад</button>  </a>";
	
					}else 
						if( $ime=="") 
					{
						echo"Имате празно место <a href=\"prikaci.php\"><button>Врати се назад</button>  </a>";
	
					}else 
						if( $kategorija=="Baranje") 
						{
						move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
						"upload/" . $_FILES["fileUpload"]["name"]);
						$r = mysqli_query($sConn,"INSERT INTO baranje (idk, idt) VALUES ('102', '1')");
						$last_id = mysqli_insert_id($sConn);
						$r = mysqli_query($sConn,"INSERT INTO person (ime,  NameFile, kategorija, idk, idt, id_b, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '102', '1',$last_id, now())");
						$last_id = mysqli_insert_id($sConn);
						$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
						echo "Успешно зачивано!";
							//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* $row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data']; */
						}
					}
						else 
						if( $kategorija=="Molba") 
						{
						move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
						"upload/" . $_FILES["fileUpload"]["name"]);
						$r = mysqli_query($sConn,"INSERT INTO molba (idk, idt) VALUES ('101', '1')");
						$last_id = mysqli_insert_id($sConn);
						$r = mysqli_query($sConn,"INSERT INTO person (ime,  NameFile,  kategorija, idk, idt, id_m, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '101', '1',$last_id, now())");
						$last_id = mysqli_insert_id($sConn);
						$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
						echo "Успешно зачивано!";
						//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* $row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data']; */
						}
					}
					else
						if( $kategorija=="Izjava") 
						{
							move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
							"upload/" . $_FILES["fileUpload"]["name"]);	
							$r = mysqli_query($sConn,"INSERT INTO izjava (idk, idt) VALUES ('100', '1')");
							$last_id = mysqli_insert_id($sConn);
							$r = mysqli_query($sConn,"INSERT INTO person (ime, NameFile, kategorija, idk, idt, id_i, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '100', '1',$last_id, now())");
							$last_id = mysqli_insert_id($sConn);
							$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
							if(!$r)
							{
							echo "Грешка!";
							}
							else
							{
							echo "Успешно зачивано!";
							//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* header("Content-type: ".$row['NameFile']);
							header("Expires:0");
							header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
							header("content-disposition:attachment;filename=sampleword.doc"); */	
							}
						}
				
					
						else if( $kategorija=="Dogovor") 
					{
					move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
							"upload/" . $_FILES["fileUpload"]["name"]);
					$r = mysqli_query($sConn,"INSERT INTO dogovor (idk, idt) VALUES ('104', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime,  NameFile,  kategorija, idk, idt, id_d, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '104', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
						echo "Успешно зачивано!";
							//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* $row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'] */;
						}
					}
					else if( $kategorija=="Spogodba") 
					{
					move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
							"upload/" . $_FILES["fileUpload"]["name"]);
					$r = mysqli_query($sConn,"INSERT INTO spogodba (idk, idt) VALUES ('103', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime, NameFile,  kategorija, idk, idt, id_s, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '103', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
						echo "Успешно зачивано!";
							//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* $row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'] */;
						}
					}
					else if( $kategorija=="Drugo") 
					{
					move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
							"upload/" . $_FILES["fileUpload"]["name"]);
					$r = mysqli_query($sConn,"INSERT INTO drugo (idk, idt) VALUES ('105', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime,  NameFile, kategorija, idk, idt, id_dr, data_added ) VALUES ('$ime', '$NameFile', '$kategorija', '105', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT * FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
						echo "Успешно зачивано!";
							//echo "<a href='upload/$NameFile'> upload/".$NameFile."</a>";
							/* $row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data']; */
						}
					}
				}
			?>
		
		</div></div>	
		<?php include("includes/right_content.php");?>
				</div>
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>
	</body>
</html>



			





			