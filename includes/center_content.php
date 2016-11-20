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