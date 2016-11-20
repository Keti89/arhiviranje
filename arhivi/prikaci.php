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
			<form enctype="multipart/form-data" action="ok.php" method="post">
				<font face="Vedrana" size="4">
					<br>
					<p>
				<div style="text-align:center; margin-right:100px;">
					<span> ВИД: 
						<select name="kategorija"id="kategorija">
							<option value="">ВИД</option>
							<option value="Baranje">БАРАЊЕ</option>
							<option value="Molba">МОЛБА</option>
							<option value="Izjava">ИЗЈАВА</option>
						</select>
					</span>
				</div>
				<div  style="float: left; text-align:center"> 
					Наслов<input type="text" name="ime"> 
				</div><br>
				<div style="text-align:center; margin-right:100px;">
					<p>	Селактирај фајл:
					<input type="file" name="fileUpload" size="60">
					<br>
					<p>
					<input type="submit" value="Прикачи" name="sub">
				</div>
				</font>
			</form>
		</div></div>
		<?php include("includes/footer.php");?>
		</div>
	</body>
</html>

