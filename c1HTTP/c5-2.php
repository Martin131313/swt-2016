<?php 
	$filename = 'mjau.txt';
	
	$fh = fopen($filename, 'a+');

	fwrite($fh, $_POST['ime'].' '.$_POST['prezime'].' '.$_POST['mejl'].'; ');
 	$size = filesize($filename);
 	rewind($fh);
 	$output = fread($fh, $size);
 	echo $output;
 	$exp = explode("; ", $output);

 ?>

 	<ul>
 		<?php foreach($exp as $e){ ?>
 		<li><?= $e ?></li>
 		<?php } ?>
 	</ul>

 	<!-- domasna formular registracija moze i istiot kod od predhodniot chas i da bide so validno i nevalidno so toa sto ke gi zapishuva podatocite i i ke gi pecati u tabela da mojt da se chita samo ako se validni podatocite da gi zapisuva u fajl -->