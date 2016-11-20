<script type="text/javascript">
var value;
	$(function(){
 		$(".baranja").click(function(){
			$(".middle").empty();
			$.get('includes/baranja.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		
		$(".molbi").click(function(){
			$(".middle").empty();
			$.get('includes/molbi.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		$(".izjavi").click(function(){
			$(".middle").empty();
			$.get('includes/izjavi.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		$(".dogovori").click(function(){
			$(".middle").empty();
			$.get('includes/dogovori.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		$(".spogodbi").click(function(){
			$(".middle").empty();
			$.get('includes/spogodbi.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
		$(".drugo").click(function(){
			$(".middle").empty();
			$.get('includes/drugo.php', function(data) {
				//console.log(data);
				$('.middle').html(data);
			//	alert('Load was performed.');
			});
		});
	});
</script>

<div class="right_content">
	<h1>Документации</h1><br>
	<table class="myTable" style="width:200px; background-color:#FFF; border:#747474 solid; border-collapse:collapse; text-align: center;">
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="baranja"><h3>Барања </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="molbi"><h3>Молби </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="izjavi"><h3>Изјави </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="dogovori"><h3>Договори </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="spogodbi"><h3>Спогодби </h3></a></span></td>
</tr>
<tr>
<td style=" border:1px solid #000;"><span><a href="#" class="drugo"><h3>Друго </h3></a></span></td>
</tr>
</table>	
</div>