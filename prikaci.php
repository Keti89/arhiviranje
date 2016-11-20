
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
			<form enctype="multipart/form-data" action="prikaceno.php" method="post">
				<font face="Vedrana" size="4">
					<br>
					<p>
				<div style="text-align:center;">
					<span> ВИД: 
						<select name="kategorija"id="kategorija">
							<option value="">ВИД</option>
							<option value="Baranje">БАРАЊЕ</option>
							<option value="Molba">МОЛБА</option>
							<option value="Izjava">ИЗЈАВА</option>
							<option value="Dogovor">ДОГОВОР</option>
							<option value="Spogodba">СПОГОДБА</option>
							<option value="Drugo">ДРУГО</option>
						</select>
					</span>
				</div><br>
				<div  style=" text-align:center"> 
					Наслов<input type="text" name="ime"> 
				</div><br>
				<div style="text-align:center;">
					<p style=" text-align: center;">	Селактирај фајл:
					<input type="file" name="fileUpload" size="60">
					<br>
					<br>
					<p style=" text-align: center;">
					<input type="submit" value="Прикачи" name="sub" class="prikaci" style="float:center;">
				</div>
				</font>
			</form>
		</div></div>
		<?php include("includes/right_content.php");?>
				</div>
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>
	
	</body>
</html>

