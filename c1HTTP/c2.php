<?php

$broi = 0;
$f1 = 0;
$f2 = 1;
echo $f1. " , ";
echo $f2. " , ";

while ($broi < 10){
		$f3 = $f2 + $f1 ;
	echo  $f3." , ";
	$f1 = $f2;
	$f2 = $f3;
	$broi = $broi +1;
}