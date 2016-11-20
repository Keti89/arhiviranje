<?php include "store/connect_to_mysql.php";?>	
		<?php
		$id=$_GET['id'];
		$re = mysqli_query($sConn,"SELECT NameFile FROM person WHERE id=$id");
						if ($re){
							while($row = mysqli_fetch_array($re)){
						$NameFile = $row["NameFile"];
							echo "<a href=upload/".$row['NameFile']."></a>";
						/* 	$row= mysqli_fetch_array($re);
							$type ="Content-type: ".$row['type'];
							header($type);
							echo $row['data']; */
						}}
						else {
						echo "greska";
						}
		?>