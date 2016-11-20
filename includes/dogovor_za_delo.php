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
	<div class="middle"> <div class="boxx" >
		<form action="prikazi.php" method="post" style="padding: 5px 5px 40px 5px">
			<div  style="float: left; text-align:center"> 
				<input type="submit" value="ЗАЧУВАЈ ГО ДГОВОРОТ" name="dog_delo"> 
			</div>
			<div  style="float: right; text-align:center"> 
				Наслов<input type="text" name="ime"> 
			</div><br><br>
			
			<div style="text-align:center">
				<h2>ДОГОВОР ЗА ДЕЛО</h2>
			</div>
			<div style="text-align:justify; padding:5px">
				Склучен на ден <input type="text" name="time" size="15" maxlength="24"> во Штип помегу:
				<br><br>
				1. Кате Компани ДООЕЛ ШТИП од Штип ЕМБ, 0515524542 застапувана од директорот Катерина Митевска, во понатамошниот текст КОРИСНИК НА УСЛУГАТА и
				<br>
				2. <input type="text" name="name" size="25" maxlength="100"> улица <input type="text" name="address" size="13" maxlength="13"> број <input type="text" name="num" size="5" maxlength="5"> со ЕМБГ <input type="text" name="embg" size="13" maxlength="13">
				во понатамошниот текст како ДАВАТЕЛ НА УСЛУГАТА.
			</div>
			<div style="text-align:center"> 
				Член 1
				<div><br>
					<div style="text-align:justify; padding:5px">
						Со овој договор давателот на услугата се обврзува квалитетно да извршува работи во рамките на <input type="text" name="time1" size="13" maxlength="13"> во време и рок кој ќе го побара корисникот на услугата, но непократко од 24 часа од известувањето од страна на корисникот на услугата.
					</div>
				Член 2
					<div style="text-align:justify; padding:5px">
						Услугата се сосетои од <input type="text" name="rabota" size="13" maxlength="100"> консултантски услуги при процесот на производство за месец <input type="text" name="time2" size="13" maxlength="13">  и треба да биде извршено во рок од <input type="text" name="time3" size="13" maxlength="13"> дена, во оптимални услови.
					</div>
				Член 3
					<div style="text-align:justify; padding:5px">
						За извршените работи Корисникот на Услугата се обврзува на давателот на услугата да ми исплати паричен надоместок во висина од <input type="text" name="den" size="13" maxlength="13">  денати нето. Обврската за плаќање на персоналниот данок паѓа на товар на корисникот на услугата.
					</div>
				Член 4
					<div style="text-align:justify; padding:5px">
						Со потпишувањето на овој договор двете страни се обврзуваат за негово квалитетно и навремено остварување на одредбите од овој договор.
					</div>
				Член 5
					<div style="text-align:justify; padding:5px">
						Во случај на спор надлежен е Основниот суд во Штип.
					</div>
				Член 6
					<div style="text-align:justify; padding:5px">
						Овој договор е составен во два еднакви примероци од кои по еден за секоја странка.
					</div>
				</div><br>
				<div style="float: right; padding-right: 5px"; >  
					Давател на услугата <br><input type="text" name="name1" size="13" maxlength="30">
				</div>
				<div style="float: left; padding-left: 5px">
					Корисник на услугата <br> <label style="padding-left: 0px;">KM</label><br>
				</div>
			</div>	
		</form>
	</div></div>
</body>
</html>