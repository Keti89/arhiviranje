<?php include "../store/connect_to_mysql.php";?>	
<?php
	
	$izjavi="Бнесени со формулар <table style=\"border-collapse:collapse;\" bgcolor=\"747474\" width=\"100%\" height=\"20px\"><tr> <td>ID</td> <td>NAME</td> <td>DATA</td></tr>";
	$r = mysqli_query($sConn,"SELECT * FROM person  WHERE kategorija = 'Dogovor' AND idt='2' ORDER BY data_added DESC");
	$count = mysqli_num_rows($r);
	if($count>0)
	{
		while($row=mysqli_fetch_array($r))
		{
			$id=$row["id"];
			$id_d=$row["id_d"];
			$idk=$row["idk"];
			$ime=$row["ime"];
			$data_added=strftime("%d/%m/%Y %I:%M", strtotime($row["data_added"]));
			$izjavi.="<tr bgcolor=\"white\" style=\"border:1px solid black;\"><td><b>$idk$id_d</b></td><td><a href =\"lista_prikazi.php?id=".$row["id"]."\">$ime</a></td><td><b>$data_added</b></td></tr>";
		}
		$izjavi.="</table>";
	}
	
	
	
	else {
		$izjavi="Нема внесено договор преку формулар";
	}
	
	
	$izjavii="<br><br>Бнесени со прикачување <table style=\"border-collapse:collapse;\" bgcolor=\"747474\" width=\"100%\" height=\"20px\"><tr> <td>ID</td> <td>NAME</td> <td>DATA</td></tr>";
	$re = mysqli_query($sConn,"SELECT * FROM person  WHERE kategorija = 'Dogovor' AND idt='1' ORDER BY data_added DESC");
	$countt = mysqli_num_rows($re);
	if($countt>0)
	{
		while($row=mysqli_fetch_array($re))
		{
			$id=$row["id"];
			$id_d=$row["id_d"];
			$idk=$row["idk"];
			$ime=$row["ime"];
			$NameFile=$row["NameFile"];
			$data_added=strftime("%d/%m/%Y %I:%M", strtotime($row["data_added"]));
			$izjavii.="<tr bgcolor=\"white\" style=\"border:1px solid black;\"><td><b>$idk$id_d</b></td><td><a href ='upload/$NameFile'>$ime</a></td><td><b>$data_added</b></td></tr>";
			//$izjavii.="<br> <a href =\"izjava_prikacena.php?idf=".$row["idf"]."\">$data_added - $idf</a>";
		}
		$izjavii.="</table>";
	}
	else {
		$izjavii="Нема прикачено договор";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Електронско архивирање</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"  />
</head>
<body>
					<div class="middle"> <div class="boxx" >
					<?php echo $izjavi; 
					echo $izjavii; ?>
					</div></div>
</body>
</html>