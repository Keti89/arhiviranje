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
		<div class="body">
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
			$r = mysqli_query($sConn,"SELECT * FROM person WHERE id='2'" );
			if($r)
			{
				while($row=mysqli_fetch_array($r))
				{
					header("Content-type: text/html");
					echo"<div style=\"margin: 0px 0px 0px 200px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
						echo"<div  style=\"float: right; text-align:center\">";
							echo "До<br> Кате Компани<br>ул.Сутјинска бр. 24 <br> Штип";
						echo"</div> <br><br><br>";
						echo"<div style=\"text-align:center\">";
							echo"<h2>ИЗЈАВА</h2><br>";
							echo"<div style=\"text-align:initial; padding:20px\">";
								echo"  Јас ".$row['name'];
								echo" со адреса на живеење ".$row['address'];
								echo" број ".$row['num'];
								echo" и единствен матичен број".$row['embg']. " изјавувам.";
								echo "<br> " .$row['text'] ;
							echo"</div>";
							echo"<div style=\"float: right; padding-right: 25px\"; >";
								echo"Поднесител на изјавата <br>".$row['name1'];;
							echo"</div>";
							echo"<div style=\"float: left; padding-left: 25px\" >";
								echo"Место и дата <br>  ".$row['time'];
								echo"<br>";
							echo"</div>";
						echo"</div>";
					echo"</div>";
				}
			}
			else
			{
				echo "greska!";
			}
		?>
		</div>
		<?php include("includes/footer.php");?>
		</div>
	</body>
</html>

