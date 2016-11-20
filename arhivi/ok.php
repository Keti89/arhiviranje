<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<div class="body"> <div class="boxx" >
			<?php
				$dbhost = "localhost";
				$dbname = "arhiva";
				$dbuser = "root";
				$dbpass = "";
				$sConn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Ne ste konektirani vo bazata");
				if(!$sConn)
				{
					echo "greska!";
				}
			?>
			<?php
				if (isset($_POST['sub']))
				{
					$ime=$_POST['ime'];
					$kategorija=$_POST['kategorija'];
					$typ=$_FILES['fileUpload']['type'];
					$typ=addslashes($typ);
					$fileHandle = fopen($_FILES['fileUpload']['tmp_name'], "r");
					$fileContent = fread($fileHandle,$_FILES['fileUpload']['size']);
					$fileContent = addslashes($fileContent);
					if( $kategorija=="") 
					{
						echo"Имате празно место <a href=\"prikaci.php\"><button>Врати се назад</button>  </a>";
	
					}else if( $kategorija=="Izjava") 
					{
					$r = mysqli_query($sConn,"INSERT INTO izjava (idk, idt) VALUES ('100', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime, type, data, kategorija, idk, idt, id_i, data_added ) VALUES ('$ime','$typ', '$fileContent', '$kategorija', '100', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT type, data FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
							$row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'];
						}
					}
					else if( $kategorija=="Molba") 
					{
					$r = mysqli_query($sConn,"INSERT INTO molba (idk, idt) VALUES ('101', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime, type, data, kategorija, idk, idt, id_m, data_added ) VALUES ('$ime','$typ', '$fileContent', '$kategorija', '100', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT type, data FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
							$row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'];
						}
					}
					else if( $kategorija=="Baranje") 
					{
					$r = mysqli_query($sConn,"INSERT INTO baranje (idk, idt) VALUES ('102', '1')");
					$last_id = mysqli_insert_id($sConn);
					$r = mysqli_query($sConn,"INSERT INTO person (ime, type, data, kategorija, idk, idt, id_b, data_added ) VALUES ('$ime','$typ', '$fileContent', '$kategorija', '102', '1',$last_id, now())");
					$last_id = mysqli_insert_id($sConn);
					$re = mysqli_query($sConn,"SELECT type, data FROM person WHERE id='$last_id'");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
							$row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'];
						}
					}
				}
			?>
		
		</div></div>	
	</body>
</html>



			