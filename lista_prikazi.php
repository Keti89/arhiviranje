﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		$id=$_GET['id'];
			$r = mysqli_query($sConn,"SELECT * FROM person  WHERE id = $id");
			if(mysqli_num_rows($r)== 1)
			while($row=mysqli_fetch_array($r))
			{
				if($row["id_i"]!=0){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo"<div  style=\"float: right; text-align:center\">";
						echo "До<br> КЕТИ ДООЕЛ Штип<br>ул.Сутјинска бр. 24 <br>";
					echo"</div> <br><br><br>";
					echo"<div style=\"text-align:center\">";
						echo"<h2>ИЗЈАВА</h2><br>";
						echo"<div style=\"text-align:justify; padding:20px\">";
							echo"&nbsp &nbsp &nbsp  Јас ".$row['name'];
							echo" со адреса на живеење ".$row['address'];
							echo" број ".$row['num'];
							echo" и единствен матичен број ".$row['embg']. " изјавувам.";
							echo "<br> &nbsp &nbsp &nbsp &nbsp &nbsp " .$row['text'] ;
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
			else if($row["id_b"]!=0){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo"<div  style=\"float: right; text-align:center\">";
						echo "До<br> КЕТИ ДООЕЛ Штип<br>ул.Сутјинска бр. 24 <br>";
					echo"</div> <br><br><br>";
					echo"<div style=\"text-align:center\">";
						echo"<h2>БАРАЊЕ</h2><br>";
						echo"<div style=\"text-align:justify; padding:20px\">";
							echo"&nbsp &nbsp &nbsp  Јас ".$row['name'];
							echo" со адреса на живеење ".$row['address'];
							echo" број ".$row['num'];
							echo" и единствен матичен број ".$row['embg']. " барам.";
							echo "<br> &nbsp &nbsp &nbsp &nbsp " .$row['text'] ;
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
			}else if($row["id_m"]!=0){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo"<div  style=\"float: right; text-align:center\">";
						echo "До<br> КЕТИ ДООЕЛ Штип<br>ул.Сутјинска бр. 24 <br>";
					echo"</div> <br><br><br>";
					echo"<div style=\"text-align:center\">";
						echo"<h2>МОЛБА</h2><br>";
						echo"<div style=\"text-align:justify; padding:20px\">";
							echo"&nbsp &nbsp &nbsp  Од ".$row['name'];
							echo" со адреса на живеење ".$row['address'];
							echo" број ".$row['num'];
							echo" и единствен матичен број ".$row['embg']. ".";
							echo "<br> &nbsp &nbsp &nbsp &nbsp" .$row['text'] ;
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
			}else if($row["id_s"]!=0){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo "<div style=\"text-align:justify; padding:20px\">";
					echo"&nbsp &nbsp &nbsp Врз основа на член 60  од Законот за работни односи (Службен весник на РМ, бр. 158 од 09.12.2010 година) и Правилникот за работни односи на ".$row['Vreme'];
					echo" на ден " .$row['time'];
					echo" година,  постигната е следната";
				echo"</div><br><br><br>";
				echo"<div style=\"text-align:center\">";
				echo"<h2>С  П  О  Г  О  Д  Б  А</h2> За престанок на работен однос без отказен рок</div>";
				echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	ПОМЕЃУ: <br>";
						echo "  &nbsp &nbsp &nbsp &nbsp  1. КЕТИ ДООЕЛ Штип, преставувано од Управителот  Катерина Митевска";
						echo"од една страна како Работодавец (во понатамошниот текст-Работодавец) и <br>";
						echo "&nbsp &nbsp &nbsp 2. " .$row['name']. " улица " .$row['address']. " број " .$row['num']. " од " .$row['grad']. " со ЕМБГ " .$row['embg'];
						echo " вработен кај Работодавачот на  ".$row['Vreme'].".";
						echo"<br>";
						echo " &nbsp &nbsp &nbsp Со оваа Спогодба престанува работниот однос на работникот кај работодавачот заснован на    ".$row['Vreme']. ".";
						echo"<br>";
						echo " &nbsp &nbsp &nbsp &nbsp &nbsp Работниот однос на работникот му престанува заклучно со " .$row['time1']. " година.";
						echo"<br>";
						echo " &nbsp &nbsp &nbsp &nbsp Престанокот на работниот однос е по писмено барање кое што лично го поднесе работникот на ден " .$row['time2']. " година. ";
						echo"<br>";
						echo " &nbsp &nbsp &nbsp &nbsp Пред раскинувањето на Договорот за вработување со работникот беше извршен разговор и од страна на одговорното лице му беше укажано на последиците кои можат да настанат по него поради раскинувањето на Договорот за вработување, а при остварувањето на правата врз основа на осигурување за случај на невработеност.";
						echo " И покрај тоа Работникот остана во целост на своето барање да му престане работниот однос веднаш без отказен рок. ";
						echo"<br>";
						echo " &nbsp &nbsp &nbsp &nbsp Бидејќи цитираните законски одредби тоа го дозволуваат сочинета е оваа Спогодба и изготвена е Одлука со која на работникот му престанува работниот однос кај Работодавачот. ";
						echo"<br>";
						    echo " &nbsp &nbsp &nbsp &nbsp  Со потпишувањето на оваа Спогодба од страна на странките истите во целост ја прифаќаат без забелешки. ";
							echo"<br><br>";
					
						 echo " <div style=\"float: right; padding-right: 25px\"; >  ";
						 echo " УПРАВИТЕЛ <br><label style=\"padding-left: 25px;\">KM</label>";
						 echo " </div>";
						 echo " <div style=\"float: left; padding-left: 25px\" >";
						 echo " РАБОТНИК  <br>" .$row['name1']; 
						 echo " <br></div>";
					 echo " </div>";
					 echo " </div>";
			}
			else if($row["idid"]==1){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo "<div style=\"text-align:justify; padding:20px\">";
					echo"&nbsp &nbsp &nbsp Врз основа на член 13 ,14, 28 т.9 и 107  од Законот за работни односи (Службен весник на РМ, бр. 158/2010) на денe ";
					echo  $row['time'];
					echo" година во просториите на  работодавачот КЕТИ ДООЕЛ Штип е склучен следниот:";
				echo"</div><br><br><br>";
				echo"<div style=\"text-align:center\">";
				echo"<h2>ДОГОВОР ЗА ВРАБОТУВАЊЕ НА ОПРЕДЕЛЕНО ВРЕМЕ</h2></div>";
				echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	ПОМЕЃУ: <br>";
						echo "&nbsp &nbsp  1. Работодавецот КЕТИ ДООЕЛ Штип со матичен број, 051552454245";
						echo" претставуван од Катерина Митевска,  Управител и <br>";
						echo "&nbsp &nbsp  2. Работникот " .$row['name']. " од " .$row['grad']." улица " .$row['address']. " број " .$row['num']. " со ЕМБГ " .$row['embg'];
						echo " со ".$row['obrazovanie']." образование. </div>";
						echo"<div style=\"text-align:center\"> Член 1<div><br><div style=\"text-align:justify\">";
						echo "&nbsp &nbsp &nbsp Со овој договор се утврдуваат правата, обврските и одговорностите од работниот однос меѓу работодавачот и работникот.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp Работникот заснова работен однос на определено време за период од ".$row['period']. " месеци. Работниот однос почнува од " .$row['time3']." година и ќе трае до " .$row['time1']." година.";
						echo"</div>Член 2 <div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp Работникот ќе стапи на работа со денот на потпишување на договорот и пријавувањето во задолжително социјално осигурување.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp &nbsp Работниот однос работникот го заснова за работа на работно место ".$row['rabota']. " за кое, работните задачи се определени и опишани во актот за систематизација на работните места на работодавецот и е утврден ".$row['stepen']. " степен на стручна подготовка со/без работно искуство.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp Работникот работните задачи ќе ги извршува во просториите на КЕТИ ДООЕЛ Штип. ";
						echo"</div>Член 3<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp Работното време на работникот изнесува 40 часа во работната недела (полно работно време). Работното време започнува  во 06:00 часот а завршува во 14:00 часот. ";
						echo "</div>Член 4<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp Работникот има право на дневна пауза, неделен и годишен одмор согласно Законот за работни односини Колективниот договор и тоа дневна пауза во траење од 30 минути во текот на дневната работа, но не на почетокот и на крајот на работното време, неделен одмор во деновите сабота и недела и годишен одмор во траење што се определува согласно Законот и колективен договор.
						<br>&nbsp &nbsp &nbsp &nbsp Работникот има право на отсуство од работа со надомест или без надомест на плата согласно Законот за работни односи и колективен договор.";
						echo "</div>Член 5<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp  Работникот има право на плата, додатоци, надоместоци на плата и надоместување на трошоци поврзани со работа,согласно Законот и колективен договор, Правилникот за работни односи на Друштвото и овој Договор според извршување на работните задачи.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Работникот има право на плата за работа извршена за полно работно време во висина  непомало oд 7500,00 денари согласно Законот за минимална плата, Колективниот договор и Правилникот за работни односи на Работодавачот.";
						echo "</div>Член 6<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp	Работникот ги прифаќа обврските што произлегуваат од Законот за работни односи, колективниот договор и Правилникот за работни односи  на работодавецот а особено: ";
						echo "<br>";
						echo "•	Да ги обавува совесно, благовремено и квалитетно а средствата за работа да ги користи економски целесообразно и квалитетно и да остварува позитивни резултати во работата";
						echo "<br>";
						echo "•	Да се придружува кон пропишаното работно време и пропишаните мерки за заштита при работа";
						echo "<br>";
						echo "•	Правилно и совесно да се однесува спрема странките и останатите работници, со своето однесување да го чува угледот на работодавецот, да ја чува деловната и професионална тајна.";
						echo "<br>";
						echo "•	Да ги почитува и да се придржува на  Правилникот за работни односи на Друштвото.";
						echo "<br>";
						echo "•	Работникот е должен да врши и друга работа која не е предвидена со договорот за вработување а е во рамките на неговата стручна подготовка а врз основа на усмено или писмено укажување се додека траат причините, но не подолго од два месеца последователно само во случаи:";
						echo "<br>";
						echo "•	- Ако треба да се замени отсутен работник";
						echo "<br>";
						echo "•	- Ако е зголемен обемот на работа";
						echo "<br>";
						echo "•	- Ако на работното место на кое работи е намален обемот на работа";
						echo "<br>";
						echo "•	- Ако има елементарни непогоди кој се случуваат или непосредно се закануваат";
						echo "<br>";
						echo "•	- За неопходно завршување на започнат процес чие прекинување со оглед на природата на технологијата на работа би предизвикало материјални загуби";
						echo "<br>";
						echo "•	- Ако е неопходно да се спречат расипување на суровини и материјали, односно отстранување на дефекти на опремата и средства за работа";
						echo "<br>";
						echo "•	-   На завршување на неопходни итни или неодложни работи";
						echo "<br>";
						echo "•	-  Во други случаи кога тоа е одредено со колективни договори или акт на работодавецот";
						echo "<br>";
						echo "•	- Работникот во сите случаи кога врши друга работа која не е предвидена со договорот за вработување има право на еднаква плата каква примал на своето работно место, односно плата која за него е поповолна.";
						echo "<br>";
						echo "</div>Член 7<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp	Работодавецот ги прифаќа обврските што произлегуваат од Законот за работни односи, колективниот договор и Правилникот за работни односи на Друштвото, а особено:";
						echo "<br>";
						echo "•	Работникот да го распореди на работно место за ко е избран";
						echo "<br>";
						echo "•	Да му ги обезбеди потребните услови за работа за ивршување на преземените работни задачи";
						echo "<br>";
						echo "•	Да му обезбеди пропишано работно време, одмори и отсуства од работа, пропишани средства за заштита при работа и други услови и права од работен однос, во согласност со законот и колективниот договор";
						echo "<br>";
						echo "•	Да му обезбеди редовна месечна исплата на месечна плата во износ пропопорционален на основната плата, работната успешност и додатоците на плата согласно со прописите и овој договор.";
						echo "<br>";
						echo "•	Да го запознае и обезбеди услови за безбедност на живот и здравјето согласно прописите за заштита при работа";
						echo "<br>";
						echo "•	Да го запозане со правилата за работниот ред и дисциплина,";
						echo "</div>Член 8<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp &nbsp Во случај на потреба работникот е согласен да биде расподелен на секое работно место кое одговара на неговиот степен на стручна подготовка.";
						echo "</div>Член 9<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp Овој договор може да се раскине со спогодба на странките и пред истекот на времето за кое е склучен, со едностран отказ од работникот или работодавецот во согласност со законот, колективнот договор и Правилникот за работни односи на работодавецот, или престанува да важи по истекот на времето за кое е склучен.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Доколку дојде до еднострано раскинување на овој Договор по барање на работникот од лични причини, а заради непречено одвивање на процесот на производство и избегнување на евентуална штета, минималниот отказен рок  изнесува 30 дена.";
						echo "</div>Член 10<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp Доколку не се почитува дисциплината и работниот ред и работникот на ги извршува своите работни задачи навремено, целосно и квалитетно, управителот има право да го казни работникот со привремен прекин на работниот процес или парично во висина на настаната штета.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Работодавачот може да му го откаже договорот за вработување на работникот поради кршење на работниот реди и дисциплина или неисполнување на обврските особено ако:";
						echo "<br>";
						echo "1.	Не ги почитува работниот ред и дисциплина според правилата прошишани од страна на работодавачот";
						echo "<br>";
						echo "2.	Не ги извршува или несовесно и ненавремено ги извршува работните задачи и ако не се придржува на обврските од чл.6 на овој договор";
						echo "<br>";
						echo "3.	Ако работникот одбие да ги изврши работните задачи";
						echo "<br>";
						echo "4.	Не се придржува кон прописите што важат за вршењена работите на работното место.";
						echo "<br>";
						echo "5.	Не се придржува на работното време, паспоредот и користењето на работното време";
						echo "<br>";
						echo "6.	Не побара отсуство или навремено писмено не го извести работодавачот за отсуство од работа";
						echo "<br>";
						echo "7.	Поради болест или оправдани причини отсуствува од работа а за тоа во рок од 48 часа писмено не го извести работодавачот";
						echo "<br>";
						echo "8.	 Со средствата за работа не постапува совесно или во согласност со техничките упатства за работа";
						echo "<br>";
						echo "9.	Настане штета, грешка во работењето или загуба а за тоа веднаш не го извести работодавачот";
						echo "<br>";
						echo "10.	Не ги почитува прописите за заштита при работа или не ги одржува срествата и опремата за заштита при работа.";
						echo "</div>Член 11<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp  Овој договор за работа е склучен во три   истоветни примероци од кои еден за работникот, кој му се врачува на денот на потпишувањето на договорот, два за работодавачот од кои еден примерок се чува во работните простории на работодавачот каде што работи работникот.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp&nbsp Договорот е потпишан од двете страни на горе наведената дата во КЕТИ ДООЕЛ Штип.";
						echo "</div></div><br><div style=\"float: right; padding-right: 25px\" > ";
						echo "Р а б о т о д а в а ч ";
						echo "<br>";
						echo "<label style=\"padding-left: 0px;\">KM</label>";
						echo "</div><div style=\"float: left; padding-left: 25px\" >";
						echo "Р а б о т н и к ";
						echo "<br>";
						echo $row['name1'];	
						echo "<br>";
						echo "</div></div>";	
					 echo " </div>";
			}else if($row["idid"]==2){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
					echo "<div style=\"text-align:justify; padding:20px\">";
					echo"&nbsp &nbsp &nbsp Врз основа на член 13 ,14, 28 т.9 и 107  од Законот за работни односи (Службен весник на РМ, бр. 158/2010) на денe ";
					echo  $row['time'];
					echo" година во просториите на  работодавачот КЕТИ ДООЕЛ Штип е склучен следниот:";
				echo"</div><br><br><br>";
				echo"<div style=\"text-align:center\">";
				echo"<h2>ДОГОВОР ЗА ВРАБОТУВАЊЕ</h2></div>";
				echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	ПОМЕЃУ: <br>";
						echo "&nbsp &nbsp  1. Работодавецот КЕТИ ДООЕЛ Штип со матичен број, 051552454245";
						echo" претставуван од Катерина Митевска,  Управител и <br>";
						echo "&nbsp &nbsp  2. Работникот " .$row['name']. " од" .$row['grad']." улица " .$row['address']. " број " .$row['num']. " со ЕМБГ " .$row['embg'];
						echo " со ".$row['obrazovanie']." образование. </div>";
						echo"<div style=\"text-align:center\"> Член 1<div><br><div style=\"text-align:justify\">";
						echo "&nbsp &nbsp &nbsp Со овој договор се утврдуваат правата, обврските и одговорностите од работниот однос меѓу работодавачот и работникот.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp Работникот заснова работен однос на неопределено време почнувајки од ".$row['time1']. " година.";
						echo"</div>Член 2 <div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp Работникот ќе стапи на работа со денот на потпишување на договорот и пријавувањето во задолжително социјално осигурување.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp &nbsp Работниот однос работникот го заснова за работа на работно место ".$row['rabota']. " за кое, работните задачи се определени и опишани во актот за систематизација на работните места на работодавецот и е утврден ".$row['stepen']. " степен на стручна подготовка со/без работно искуство.";
						echo"<br>";
						echo "&nbsp &nbsp &nbsp Работникот работните задачи ќе ги извршува во просториите на КЕТИ ДООЕЛ Штип. ";
						echo"</div>Член 3<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp Работното време на работникот изнесува 40 часа во работната недела (полно работно време). Работното време започнува во 06:00 часот а завршува во 14:00 часот.";
						echo "</div>Член 4<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp Работникот има право на дневна пауза, неделен и годишен одмор согласно Законот за работни односини Колективниот договор и тоа дневна пауза во траење од 30 минути во текот на дневната работа, но не на почетокот и на крајот на работното време, неделен одмор во деновите сабота и недела и годишен одмор во траење што се определува согласно Законот и колективен договор.
						<br>&nbsp &nbsp &nbsp &nbsp Работникот има право на отсуство од работа со надомест или без надомест на плата согласно Законот за работни односи и колективен договор.";
						echo "</div>Член 5<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp  Работникот има право на плата, додатоци, надоместоци на плата и надоместување на трошоци поврзани со работа, согласно Законот и колективен договор, Правилникот за работни односи на Друштвото и овој Договор според извршување на работните задачи.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Работникот има право на минимална месечна плата за работа извршена со полно работно време во висина од 6.300,00 денари согласно Законот за минимална плата, Колективниот договор и Правилникот за работни односи на Работодавачот.";
						echo "</div>Член 6<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp	Работникот ги прифаќа обврските што произлегуваат од Законот за работни односи, колективниот договор и Правилникот за работни односи  на работодавецот а особено:";
						echo "<br>";
						echo "•	Да ги обавува совесно, благовремено и квалитетно а средствата за работа да ги користи економски целесообразно и квалитетно и да остварува позитивни резултати во работата;";
						echo "<br>";
						echo "•	Да се придружува кон пропишаното работно време и пропишаните мерки за заштита при работа;";
						echo "<br>";
						echo "•	Правилно и совесно да се однесува спрема странките и останатите работници, со своето однесување да го чува угледот на работодавецот, да ја чува деловната и професионална тајна.";
						echo "<br>";
						echo "•	Да ги почитува и да се придржува на  Правилникот за работни односи на Друштвото.";
						echo "<br>";
						echo "•	Работникот е должен да врши и друга работа која не е предвидена со договорот за вработување а е во рамките на неговата стручна подготовка а врз основа на усмено или писмено укажување се додека траат причините, но не подолго од два месеца последователно само во случаи:";
						echo "<br>";
						echo "•	- Ако треба да се замени отсутен работник";
						echo "<br>";
						echo "•	- Ако е зголемен обемот на работа";
						echo "<br>";
						echo "•	- Ако на работното место на кое работи е намален обемот на работа;";
						echo "<br>";
						echo "•	- Ако има елементарни непогоди кој се случуваат или непосредно се закануваат;";
						echo "<br>";
						echo "•	- За неопходно завршување на започнат процес чие прекинување со оглед на природата на технологијата на работа би предизвикало материјални загуби;";
						echo "<br>";
						echo "•	- Ако е неопходно да се спречат расипување на суровини и материјали, односно отстранување на дефекти на опремата и средства за работа;";
						echo "<br>";
						echo "•	- На завршување на неопходни итни или неодложни работи;";
						echo "<br>";
						echo "•	- Во други случаи кога тоа е одредено со колективни договори или акт на работодавецот;";
						echo "<br>";
						echo "•	- Работникот во сите случаи кога врши друга работа која не е предвидена со договорот за вработување има право на еднаква плата каква примал на своето работно место, односно плата која за него е поповолна.";
						echo "<br>";
						echo "</div>Член 7<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp	Работодавецот ги прифаќа обврските што произлегуваат од Законот за работни односи, колективниот договор и Правилникот за работни односи на Друштвото, а особено:";
						echo "<br>";
						echo "•	Работникот да го распореди на работно место за ко е избран";
						echo "<br>";
						echo "•	Да му ги обезбеди потребните услови за работа за ивршување на преземените работни задачи";
						echo "<br>";
						echo "•	Да му обезбеди пропишано работно време, одмори и отсуства од работа, пропишани средства за заштита при работа и други услови и права од работен однос, во согласност со законот и колективниот договор";
						echo "<br>";
						echo "•	Да му обезбеди редовна месечна исплата на месечна плата во износ пропопорционален на основната плата, работната успешност и додатоците на плата согласно со прописите и овој договор.";
						echo "<br>";
						echo "•	Да го запознае и обезбеди услови за безбедност на живот и здравјето согласно прописите за заштита при работа";
						echo "<br>";
						echo "•	Да го запозане со правилата за работниот ред и дисциплина,";
						echo "</div>Член 8<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp &nbsp Во случај на потреба работникот е согласен да биде расподелен на секое работно место кое одговара на неговиот степен на стручна подготовка.";
						echo "</div>Член 9<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp Овој договор може да се раскине со спогодба на странките и пред истекот на времето за кое е склучен, со едностран отказ од работникот или работодавецот во согласност со законот, колективнот договор и Правилникот за работни односи на работодавецот, или престанува да важи по истекот на времето за кое е склучен.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Доколку дојде до еднострано раскинување на овој Договор по барање на работникот од лични причини, а заради непречено одвивање на процесот на производство и избегнување на евентуална штета, минималниот отказен рок  изнесува 30 дена.";
						echo "</div>Член 10<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp &nbsp Доколку не се почитува дисциплината и работниот ред и работникот на ги извршува своите работни задачи навремено, целосно и квалитетно, управителот има право да го казни работникот со привремен прекин на работниот процес или парично во висина на настаната штета.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp Работодавачот може да му го откаже договорот за вработување на работникот поради кршење на работниот реди и дисциплина или неисполнување на обврските особено ако:";
						echo "<br>";
						echo "1.	Не ги почитува работниот ред и дисциплина според правилата прошишани од страна на работодавачот;";
						echo "<br>";
						echo "2.	Не ги извршува или несовесно и ненавремено ги извршува работните задачи и ако не се придржува на обврските од чл.6 на овој договорр";
						echo "<br>";
						echo "3.	Ако работникот одбие да ги изврши работните задачи";
						echo "<br>";
						echo "4.	Не се придржува кон прописите што важат за вршењена работите на работното место.";
						echo "<br>";
						echo "5.	Не се придржува на работното време, паспоредот и користењето на работното време;";
						echo "<br>";
						echo "6.	Не побара отсуство или навремено писмено не го извести работодавачот за отсуство од работа;";
						echo "<br>";
						echo "7.	Поради болест или оправдани причини отсуствува од работа а за тоа во рок од 48 часа писмено не го извести работодавачот;";
						echo "<br>";
						echo "8.	Со средствата за работа не постапува совесно или во согласност со техничките упатства за работа;";
						echo "<br>";
						echo "9.	Настане штета, грешка во работењето или загуба а за тоа веднаш не го извести работодавачот;";
						echo "<br>";
						echo "10.	Не ги почитува прописите за заштита при работа или не ги одржува срествата и опремата за заштита при работа.";
						echo "<br>";
						echo "11.	Оддавање на деловна тајна";
						echo "</div>Член 11<div style=\"text-align:justify; padding:5px\">";
						echo "&nbsp &nbsp &nbsp  Овој договор за работа е склучен во три   истоветни примероци од кои еден за работникот, кој му се врачува на денот на потпишувањето на договорот, два за работодавачот од кои еден примерок се чува во работните простории на работодавачот каде што работи работникот.";
						echo "<br>";
						echo "&nbsp &nbsp &nbsp&nbsp Договорот е потпишан од двете страни на горе наведената дата во КЕТИ ДООЕЛ Штип.";
						echo "</div></div><br><div style=\"float: right; padding-right: 25px\" > ";
						echo "Р а б о т о д а в а ч ";
						echo "<br>";
						echo "<label style=\"padding-left: 0px;\">KM</label>";
						echo "</div><div style=\"float: left; padding-left: 25px\" >";
						echo "Р а б о т н и к ";
						echo "<br>";
						echo $row['name1'];	
						echo "<br>";
						echo "</div></div>";	
					 echo " </div>";
			}else if($row["idid"]==3){
				//header("Content-type: text/html");
				echo"<div style=\"margin: 0px 0px 0px 20px; margin-top: 20px; padding: 5px 5px 70px 5px; background-color: #dddddd; border: 2px solid #d22929; width: 500px; color: #000000\" >";
				echo"	<div style=\"text-align:center\">";
				echo"<h2>ДОГОВОР ЗА ДЕЛО</h2>";
		echo"	</div>";
			echo"<div style=\"text-align:justify; padding:5px\">";
				echo"Склучен на ден ".$row['time']." во Штип помегу:";
				echo"<br><br>";
				echo"1. КЕТИ ДООЕЛ Штип од Штип ЕМБ, 0515524542 застапувана од директорот Катерина Митевска, во понатамошниот текст КОРИСНИК НА УСЛУГАТА и";
				echo"<br>";
				echo"2. ".$row['name']." улица " .$row['address']." број ".$row['num']." со ЕМБГ ".$row['embg'].">";
				echo"во понатамошниот текст како ДАВАТЕЛ НА УСЛУГАТА.";
			echo"</div>";
			echo"<div style=\"text-align:center\"> ";
				echo"Член 1";
				echo"<div><br>";
					echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	Со овој договор давателот на услугата се обврзува квалитетно да извршува работи во рамките на" .$row['time1']." во време и рок кој ќе го побара корисникот на услугата, но непократко од 24 часа од известувањето од страна на корисникот на услугата.";
					echo"</div>";
				echo"Член 2";
					echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	Услугата се сосетои од ".$row['rabota']." консултантски услуги при процесот на производство за месец ".$row['time2']." и треба да биде извршено во рок од ".$row['time3']." дена, во оптимални услови.";
					echo"</div>";
				echo"Член 3";
					echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	За извршените работи Корисникот на Услугата се обврзува на давателот на услугата да ми исплати паричен надоместок во висина од ".$row['den']." денати нето. Обврската за плаќање на персоналниот данок паѓа на товар на корисникот на услугата.";
					echo"</div>";
				echo"Член 4";
					echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	Со потпишувањето на овој договор двете страни се обврзуваат за негово квалитетно и навремено остварување на одредбите од овој договор.";
					echo"</div>";
				echo"Член 5";
					echo"<div style=\"text-align:justify; padding:5px\">";
					echo"	Во случај на спор надлежен е Основниот суд во Штип.";
					echo"</div>";
				echo"Член 6";
					echo"<div style=\"text-align:justify; padding:5px\">";
						echo"Овој договор е составен во два еднакви примероци од кои по еден за секоја странка.";
					echo"</div>";
				echo"</div><br>";
				echo"<div style=\"float: right; padding-right: 5px\"; >  ";
					echo"Давател на услугата <br>".$row['name1'];
				echo"</div>";
				echo"<div style=\"float: left; padding-left: 5px\">";
					echo"Корисник на услугата <br> ";
					echo "<label style=\"padding-left: 0px;\">KM</label>";
				echo"</div>";
			echo"</div>";echo"</div>";
			}else
			{
				echo "greska!";
			
			}}
		?>
		</div>
				<?php include("includes/right_content.php");?>	
				
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>
</body>
</html>
