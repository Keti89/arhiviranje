<?php
			$id=$_GET['id'];
			$dbhost = "localhost";
			$dbname = "arhiva";
			$dbuser = "root";
			$dbpass = "";
			$sConn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Ne ste konektirani vo bazata");
			if(!$sConn)
			{
				echo "greska!";
			}
		?>
		<?php
		$re = mysqli_query($sConn,"SELECT type, data FROM person WHERE id=$id");
						if(!$re)
						{
							echo "Грешка!";
						}
						else
						{
							$row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data'];
						}
		?>