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
		
		$(function(){
			$("#search").click(function(){
				var bookName = $("#bookName").val();
				var firstName = $("#firstName").val();
				var category = $("#category").val();
					$(".middle_content").empty();	
					var datastr2 = 'bookName=' + bookName + '&firstName=' + firstName + '&category=' + category;
					$.ajax({
						type:'POST',
						url:'prebaruvanje.php',
						data:datastr2,
						success:function(dateTest){
							$('.middle_content').html(dateTest);
						}
					});
			});
		});
	</script>
	
	
	<link href="css/style.css" rel="stylesheet" type="text/css"  />

</head>

<body>

	<div id="wrap">

		<div id="logo">
 			<img src="images/logo.png" />
 		</div>
 
 		<div id="social-media-icons">
   			<ul>
                <li><a href="http://www.facebook.com"><img src="images/social-media-icons/facebook.png" /></a></li>
                <li><a href="http://www.twitter.com"><img src="images/social-media-icons/twitter.png" /></a></li>
                <li><a href="http://www.youtube.com"><img src="images/social-media-icons/youtube.png" /></a></li>
                <li><a href="http://www.hotmail.com"><img src="images/social-media-icons/feed.png" /></a></li>
            </ul>
  		</div>
		
		<div id="menu_lines">      
		<div id="menu">
			<ul>
       			<li><a href="index.php">ПОЧЕТНА</a></li>
      			<li><a href="about.php">ЗА НАС</a></li>
       			<li><a href="myaccount.php">МОЈАТА КОШНИЧКА</a></li>
       			<li><a href="contact.php">КОНТАКТ</a></li>
			</ul>
		</div>
		</div>
		

		<div id="header">
			<div id="s3slider">
				<ul id="s3sliderContent">
					<li class="s3sliderImage">
						<img src="images/banner_images/bn1.jpg" />
						<span><p> Јас сум само обичен човек со обични мисли, што живее. Не постојат споменици во моја чест, а моето име ќе биде заборавено, но јас љубев со сето свое срце и душа и тоа секогаш беше доволно.<p>
								<p>........................................................</p>
								<p>Страници за нашата љубов - Николас Спаркс</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn2.jpg" />
						<span><p>Љубовта може да не однесе во пеколот или во рајот, таа секогаш не води некаде. И таа треба да се прифати, бидејки таа му дава смисла на сиот наш живот.<p>
								<p>........................................................</p>
								<p>Крај реката Педра седев и плачев - Пауло Коелјо</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn3.jpg" />
						<span><p>Никогаш не ќе можеме да судиме за животот на другите, бидејки секој ги знае своите болки и страдања, своите откажувања. Едно е човек да мисли дека е на добар пат, сосем друго да мисли дека тој пат е единствениот.<p>
								<p>........................................................</p>
								<p>Крај реката Педра седев и плачев - Пауло Коелјо</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn4.jpg" />
						<span><p>Секогаш повеќе го сакав лудилото на страста од мудроста на рамнодушноста.</p>
								<p>........................................................</p>
								<p>Што би правел јас без тебе - Гијом Мисо</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn5.jpg" />
						<span><p>Второто место е за губитници. Ако нешто вреди да го направиш, тогаш направи го најдобро што можеш.</p>
								<p>........................................................</p>
								<p>Game over  -  Адел  Паркс</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn6.jpg" />
						<span><p>Кога ќе посакаш нешто, целата вселена ќе скова заговор за да ја оствариш таа желба.</p>
								<p>........................................................</p>
								<p>Алхемичарот  –  Пауло Коелјо</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn7.jpg" />
						<span><p>Уживај во малите работи, можеби еден ден ќе се обѕрнеш и ќе сватиш дека биле големи.</p> 
								<p>........................................................</p>
								<p>Љубов со мали букви  –  Франсеск Миралјес</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn8.jpg" />
						<span><p>...Луѓето ги презираат оние што не успеваат а ги мразат оние што ќе се качат над нив. Навикни се на презир или на омраза ако се согласиш на борба, но не влегувај во борба ако не си сигурен дека ќе го кутнеш противникот. Не покажувај со прст во туѓата нечесност ако не си доволно силен тоа да го докажеш.</p>
								<p>........................................................</p>
								<p>Дервишот и смртта - Меша Селимович</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn9.jpg" />
						<span><p>Во судницата сите само си играа со зборот правда. Ни обвинителот ни бранителот не бараа правда. Единствена цел на натпреварот беше победата.</p>
								<p>........................................................</p>
								<p>Гневот на ангелите  –  Синди Шелдон</p></span>
					</li>
					<li class="s3sliderImage">
						<img src="images/banner_images/bn10.jpg" />
						<span><p>Таму каде што љубиме никогаш не е мрак.</p>
							<p>........................................................</p>
							<p>Затоа што те љубам  –  Гијом Мисо</p>
							<p>-----------------------------------------------------------------</p>
							<p>Да се биде сакан е лесно. Да се сака е тешко.</p>
							<p>........................................................</p>
							<p>Вечерва и закогаш - Нора Робертс</p></span>
					</li>
					<div class="clear s3sliderImage"></div>
				</ul>
			</div>
		</div> 
       
       
		<div class="center_content">
			<div class="left_content">
				<h1>Категории:</h1>
			        <ul>
						<?php 
						$sql=mysqli_query($sConn,"SELECT * FROM category ") or die(mysql_error());;
						while($row=mysqli_fetch_array($sql)){ ?>
                        <li><a href="categ.php?id=<?php echo $row['id']."&display=".$row['name'];?>"><?php echo $row['name'];?></a></li> 
						<?php }?>		
            		</ul>      
			</div>
       
       		<div class="middle">
				<div class="middle_content_search">
					<span class="title">Пребарај според:</span>
					<table>
					<tr>
						<td>Наслов на книга:</td>
						<td>Категорија:</td>
						<td>Име на автор:</td>
					</tr>
					<tr>
					<td><input name="bookName" id="bookName" type="text" size="15"></td>
					<td><label><select name="category" id="category">
										<option value=""></option>
										<?php 
										$sql=mysqli_query($sConn,"SELECT * FROM category");
										while($row=mysqli_fetch_array($sql)){?>
										<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
										<?php }?>
										
								</select>
						</label>
					</td>
					<td><input name="firstName" id="firstName" type="text" size="15"></td>
					<td><input type="button" id="search" value="Пребарај"></td>
					</tr>
					</table>
				</div>
				
				<div class="middle_content">
       			<span class="title">Книга на денот</span>
				<?php echo $dynamiclist; ?>
       			<br />
                
                <span class="title">Најнови книги</span>
				<?php echo $newList; ?>
                
       
				</div>
				</div>
       
       		<div class="right_content">
				<div class="right_content_login">
				
					<form name="login_form" method="post" action="login.php">  
					<fieldset>  
					<legend>Најави се:</legend>  
					<table> 
					<tr></tr> 
					<tr>  
						<td><label for="username">Корисничко име:</label></td>
					</tr>
					<tr>    
						<td><input name="username" type="text" id="username" size="20"></td>  
					</tr>  
					<tr>  
						<td><label for="password">Лозинка:</label></td>
					</tr> 
					<tr>   
						<td><input name="password" type="password" id="password" size="20"></td>  
					</tr>
					<tr>
					</tr>  
					<tr>  
						<td><input type="submit" value="Најави се"></td>  
					</tr> 
					<tr>
						<td></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><a href="registration.php">Регистрирај се!</a></td>
					</tr>
					</table>  
					</fieldset>  
					</form>  
				</div>
	
				<div class="right_content_book">
					<span class="title">Препорачуваме</span>
					<?php echo $recomendedList; ?>
				</div>
			</div>
		</div>
      
		<div class="clear">       
		<div class="footer">
			<div class="left_footer">
				<img src="images/footer_picture.png" />
			</div>
		
			<div class="middle_footer">
				<ul>
					<li><a href="general_conditions.php">Општи услови</a></li>
					<li><a href="protection.php">Заштита на лични податоци</a></li>
					<li><a href="returning.php">Политика за враќање</a></li>
				</ul>
				<p>Copyright | <a style="color:#f00" href="storeadmin/admin_login.php">Admin</a></p>
			</div>
        
			<div class="right_footer">
				<a href="index.php">Почетна</a>
				<a href="about.php">За нас</a>
				<a href="myaccount.php">Кошничка</a>
				<a href="contact.php">Контакт</a>
			</div>
        
		</div>
		</div>
	

</body>
</html>