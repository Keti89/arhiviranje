<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		 <body>
	<?php include('includes/header.php'); ?>
		<?php include("includes/horizontalnav.php"); ?>
		<div class='container'>
		<?php include("includes/leftnav.php");?>
		<?php include("includes/rightnav.php");?>
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
			$kategorija=$_POST['kategorija'];
			$id=$_POST['id'];
			$typ=$_FILES['fileUpload']['type'];
			$typ=addslashes($typ);
			$fileHandle = fopen($_FILES['fileUpload']['tmp_name'], "r");
			$fileContent = fread($fileHandle,$_FILES['fileUpload']['size']);
			$fileContent = addslashes($fileContent);
			if( $kategorija=="") 
			{
				echo"Имате празно место <a href=\"prikaci.php\"><button>Врати се назад</button>  </a>";
			}
			else
			{
				$r = mysqli_query($sConn,"INSERT INTO izjavi (type, data, kategorija, id, idt, data_added ) VALUES ('$typ', '$fileContent', '$kategorija', '100','1', now())");
				if($r)
				{
					echo "Документот е прикачен";
				}
				else
				{
					echo "greska";
				}
			}
		
		?>
		</div></div>
		<?php include("includes/footer.php");?>
		</div>
	</body>
</html>

