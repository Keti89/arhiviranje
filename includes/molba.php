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
		<div class="middle"> <div class="boxx" ><form action="prikazi.php" method="post" style="padding: 5px 5px 40px 5px">
			
				<div  style="float: left; text-align:center"> 
					<input type="submit" value="ЗАЧУВАЈ ЈА МОЛБАТА" name="molba"> 
				</div>
				<div  style="float: right; text-align:center"> 
					Наслов<input type="text" name="ime"> 
				</div>
				<div  style="float: right; text-align:center">
				<h6>	До<br> КЕТИ ДООЕЛ Штип<br>ул.Сутјинска бр. 24</h6>
				</div><br><br><br><br><br><br>
				<div style="text-align:center">
					<h2>МОЛБА</h2>
					<div style="text-align:left; padding:5px">
						Од <input type="text" name="name" size="40" maxlength="100">
						со адреса на живеење <input type="text" name="address" size="25" maxlength="100"> 
						број <input type="text" name="num" size="1" maxlength="4">
						и  единствен матичен број <input type="text" name="embg" size="13" maxlength="13">.
						<textarea rows="15" cols="47" name="text">   Го молам насловот да ми овозможи  </textarea>
						<div style="float: right; padding-right: 25px"; >  
						Молител <br><input type="text" name="name1" size="13" maxlength="30">
						</div>
						<div style="float: left; padding-left: 25px" >
						Mесто и дата <br> <input type="text" name="time" size="13" maxlength="50"><br>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>

	</body>
</html>

