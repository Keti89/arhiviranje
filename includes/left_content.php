<script type="text/javascript">
//var value;
	$(function(){
 		$(".baranje").click(function(){
			$(".middle").empty();
			$.get('includes/baranje.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		
		$(".molba").click(function(){
			$(".middle").empty();
			$.get('includes/molba.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		$(".izjava").click(function(){
			$(".middle").empty();
			$.get('includes/izjava.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
			$(".spogodba").click(function(){
			$(".middle").empty();
			$.get('includes/spogodba.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
	});
</script>
<script type="text/javascript">
		 	var value;
			$(function(){
				$("#kategorii").change(function(){
					value = $("#kategorii option:selected").text();
					//console.log(value);
					
					if(value=='Договори'){
						$(".middle").empty();
						//$(".left_content").text("Договори");
						//console.log("Site kategorii..");
					}else if(value=="За определено време"){
						$(".middle").show();
						$(".middle").empty();
								$.get('includes/dogovor_opredeleno_vrb.php', function(data) {
									$('.middle').html(data);
								});
					}else if(value=='За вработување'){
						$(".middle").show();
						$(".middle").empty();
						$.get('includes/dogovor_vrabotuvanje.php', function(data) {
						$('.middle').html(data);
						});
					}else if(value=='За дело'){
						$(".middle").show();
						$(".middle").empty();
						$.get('includes/dogovor_za_delo.php', function(data) {
						$('.middle').html(data);
						});
					}else{
						console.log("empty");
					}
				});
				
			});
		</script>
		

<div class="left_content">
				<h1>Формулари</h1><br><br>
	<table class="myTable" style="width:200px; background-color:#FFF; border:#747474 solid; border-collapse:collapse; ">
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="baranje"><h3>Барање </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="molba"><h3>Молба </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="izjava"><h3>Изјава </h3></a></span></td>
</tr>
<tr>
<td style=" padding:0px;border:1px solid #000;">

<select id="kategorii" style="height: 45px; width: 194px; border:0px;">
    <option value='1' >Договори</option>
	<option value='2'>За определено време</option>
    <option value='3'>За вработување</option>
    <option value='4'>За дело</option>
</select>
</td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="spogodba"><h3>Спогодба </h3></a></span></td>
</tr>
</table>
			</div>
			
			