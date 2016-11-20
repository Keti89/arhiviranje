

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Контакт</title>

	<link href="css/style.css" rel="stylesheet" type="text/css"  />
	<link href="css/contact_form_style.css" rel="stylesheet" type="text/css"  />

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
	

</head>

<body>
<div id="wrap">
			<?php include("includes/logo.php"); ?>
			<?php include("includes/social-media-icons.php"); ?>
				<?php include("includes/menu_lines.php");?>
					<div id="header">
			<img src="images/banner_images/bn3.jpg" style="padding:10px 15px" />
		</div>
		
      
		<div id="contact_left_content">
			<div class="contact_text">
				<h2>Контактирајте не:</h2>
				<p>Доколку имате некоја пофалба, поплака или едноставно сакате да не прашате нешто, контактирајте не со пополнување на следнава форма:</p>
			</div>
			<form id="contactform" action="processForm.php" method="post">
			<table>
			  <tr>
				<td><label for="name">Име:</label></td>
				<td><input type="text" id="name" name="name" /></td>
			  </tr>
			  <tr>
				<td><label for="email">Е-адреса:</label></td>
				<td><input type="text" id="email" name="email" /></td>
			  </tr>
			  <tr>
				<td><label for="message">Порака:</label></td>
				<td><textarea id="message" name="message" rows="5" cols="20"></textarea></td>
			  </tr>
			  <tr>
				<td></td>
				<td><input type="submit" value="Испрати" id="send" /></td>
			  </tr>
			</table>
			</form>
			<div id="response"></div>
		</div> 
	

		<div id="contact_right_content">
			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%C5%A0tip,+Macedonia+(FYROM)&amp;aq=0&amp;oq=stip&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Shtip,+Macedonia+(FYROM)&amp;ll=41.745651,22.19697&amp;spn=0.004539,0.010568&amp;t=h&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=%C5%A0tip,+Macedonia+(FYROM)&amp;aq=0&amp;oq=stip&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Shtip,+Macedonia+(FYROM)&amp;ll=41.745651,22.19697&amp;spn=0.004539,0.010568&amp;t=h&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
				<div class="clear">  
				<?php include("includes/footer.php");?>
				</div>
		</div>


</body>
</html>