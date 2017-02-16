<?php
	$title = 'My first PHP website';
	$denovi = ['pon', 'vto', 'sre', 'cet', 'pet', 'sab', 'ned'];
	$meseci = ['jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'oct', 'noe', 'dek'];

	$studenti = [
	['ime' => 'Martin Danev', 'ocena' => 3],
	['ime' => 'Martin Postolovski', 'ocena' => 4],
	['ime' => 'Stefan Blazevski', 'ocena' => 3],
	['ime' => 'Stefam Stojkovski', 'ocena' => 2],
	['ime' => 'Irina Dobrohotova', 'ocena' => 2]
	];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>
	<h1><?=$title?></h1>
	<ul>
	<?php foreach($denovi as $den){ ?>
		<li><?=$den?></li>
	<?php } ?>
	</ul>	


	<?php foreach($meseci as $mesec){ ?>
	<h3><?=$mesec?></h3> 
	<?php } ?>



<table border="1">
	<tr>
		<th>Ime</th>
		<th>ocena</th>
	</tr>
	<?php foreach($studenti as $student){ ?>
		<tr>
		<td><?=$student['ime']?></td>
		<?php 
			$color = 'green';
			if($student['ocena'] < 3){
				$color = 'red';
			}
		 ?>
		 <td style="background-color: <?=$color?>">
		<!-- <td style="color: <?=$student['ocena'] > 2 ? 'green' : 'red'?>"> -->
		<?=$student['ocena']?>
		</td>		
		</tr>
	 <?php } ?>	

	<!-- <tr>
		<td>Martin</td>
		<td>2</td>
	</tr>
	<tr>
		<td>Irina</td>
		<td>3</td>
	</tr>
	<tr>
		<td>Stefan</td>
		<td>4</td>
	</tr>
	<tr>
		<td>Martin</td>
		<td>5</td>
	</tr>
	<tr>
		<td>Stefan</td>
		<td>6</td>
	</tr> -->

</table>










</body>
</html>