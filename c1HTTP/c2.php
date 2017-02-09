<!-- <?php

$broi = 0;
$f1 = 0;
$f2 = 1;
echo $f1. " , ";
echo $f2. " , ";

while ($broi < 20){
		$f3 = $f2 + $f1 ;
	echo  $f3." , ";
	$f1 = $f2;
	$f2 = $f3;
	$broi = $broi +1;
}
?> -->








<?php

$prev = 0;
$next = 1;
$limit = 1000;

while ($next < $limit) {
	echo $prev. '<br/>';
	$p = $prev;
	$prev = $next;
	$next = $prev + $next;
}




?>