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
					<?php include("includes/middle.php");?>
					<?php include("includes/right_content.php");?>
				</div>
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>
</body>
</html>