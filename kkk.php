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
		<div class="middle"> 
		<?php include "store/connect_to_mysql.php";?>	
		<?php
		 header("Content-type: application/vnd.ms-word");
							header("Expires:0");
							header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
							header("content-disposition:attachment;filename=sampleword.doc");
		$id=$_GET['id'];
			$r = mysqli_query($sConn,"SELECT * FROM person  WHERE id = $id");
			if(mysqli_num_rows($r)== 1)
			while($row=mysqli_fetch_array($r))
			{
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo"<div  style=\"float: right; text-align:center\">";
						echo "До<br> Кате Компани<br>ул.Сутјинска бр. 24 <br> Штип";
					echo"</div> <br><br><br>";
					echo"<div style=\"text-align:center\">";
						echo"<h2>ИЗЈАВА</h2><br>";
						echo"<div style=\"text-align:justify; padding:20px\">";
							echo"&nbsp &nbsp &nbsp  Јас ".$row['name'];
							echo" со адреса на живеење ".$row['address'];
							echo" број ".$row['num'];
							echo" и единствен матичен број ".$row['embg']. " изјавувам.";
							echo "<br> &nbsp &nbsp&nbsp " .$row['text'] ;
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
			else
			{
				echo "greska!";
			}
		?>
		</div>
<?php include("includes/right_content.php");?>
				</div>
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>
</body>
</html>
