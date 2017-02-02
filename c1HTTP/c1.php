<?php

echo 'Zdravo Svetu!<br/>';

$ime = "Martin";
echo $ime;

$a = 10;
$b = 13;

echo '<br/>';
echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a / $b;
echo '<br/>';
echo $a % $b;
echo '<br/>';

echo $a * ($a * $b);
echo '<br/>';
echo $a * $a * $b;
echo '<br/>';

// "%" ostatok od delenje
// tipovi na podatoci 
$integer = 123;
$float = 3.14;
$string = "TEST TEST";
$boolean = true;

echo $string;
echo "<br/>";
echo $float;
echo "<br/>";
echo $string;
echo "<br/>";
echo $boolean;
echo "<br/>";

$vistina = true;

if($vistina){
	echo "Vistina";
} else {
	echo "Nevistina";
}

echo "<br/>";

$c = true;
$d = false;
 
if($c && $d){ // i dvete vrednosti mora da bidat true za uslovot da se ispolni
	echo "Vistina";
} else {
	echo "Nevistina";
}

echo "<br/>";

//  ova e I || i ova e I &&

if($c || $d){ // edna od dvete vrednosti mora da bide true za uslovot da se ispolni
 echo "Vistina";
} else {
	echo "Nevistina";
}

echo "<br/>";

// strlen('Bojan'); //5 //vrakja rezultat br na karakteri vo string
// $prezime = 'prezime';
// strlen($prezime); //7


$ime = 'Bojan';
$br = strlen($ime);
echo $br;

// if (strlen($ime) % 2 == 0){
// 	echo "Paren";
// } else {
// 	echo "Neparen";
// }

if($br % 2 == 0){
	echo "Par";
} else {
	echo "Nepar";
}

echo "<br/>";


$ime = 'Janko';
$br = strlen($ime);
$rez = $br % 2;

// 1 = true 
// 0 = false 

if($rez){
	echo "Nepar";
} else {
	echo "Par";
}

// <, >, >=, <=, ==, ===, !=(ne ednakvo), !==(apsolutno neednakvo)
echo "<br/>";

$g = '4';
$h = 4;

if($g == $h){
	echo "Vistina";
} else {
	echo "Nevistina"; 
}

echo "<br/>";

if($g === $h){ // sporedba na vrednosti i na tipovi
	echo "Vistina";
} else {
	echo "Nevistina";
}

echo "<br/>";

$t = 'A';

if($t == 'A'){
	echo 'A';
} else if($t == 'B'){
	echo "B";
} else {
	echo "Nepoznata bukva!";
}

echo "<br/>";


$godini = 22;

if($br < 15){
	echo "Mal";
} else if($br >= 15 && $br < 25){
    echo "Mlad";
} else if($br >= 25 && $br < 45){
	echo "Vozrasen";
} else if($br >= 45){
	echo "Star";
}

echo "<br/>";





$den = 'pon';

switch ($den) {
	case 'pon':
		echo "Ponedelnik";
		break;
	case 'vto':
		echo "Vtornik";	
		break;
    case 'sre':
    	echo "Sreda";
    	break;
    case 'chet':
    	echo "Chetvrtok";
    		break;	
    case 'pet':
    	echo "Petok";
    		break;		
    case 'sab':
    	echo "Sabota";
    			break;		
    case 'ned':
    	echo "Nedela";
    			break;			

}

echo '<br/>';

for($i = 0; $i < 10; $i++){
	echo $i;
	echo '<br/>';

}

echo '<br/>';

for($i = 0; $i < 12; $i ++){
	switch ($i) {
		case 0:
			echo "Januari";
			break;
		case 1:
			echo "Februari";
			break;
		case 2:
			echo "Mart";
			break;
		case 3:
			echo "April";
			break;
		case 4:
			echo "Maj";
			break;	
		case 5:
			echo "Juni";
			break;
		case 6:
			echo "Juli";
			break;	
		case 7:
			echo "Avgust";
			break;	
		case 8:
			echo "Septemvri";
			break;	
		case 9:
			echo "Oktomvri";
			break;	
		case 10:
			echo "Noemvri";
			break;	
		case 11:
			echo "Dekemvri";
			break;	

	}
	echo '<br/>';
}





$j = 0;

while($j < 5){
	echo "$j<br/>";
	$j++;
}

echo '<br/>';




$m = 0;
$res = 0; // 0, 1, 2, 3, 6, 10, 15, 21, 28, 36, 45

while ($m < 10){
	$res = $res + $m;
	$m++;
}
	echo "<br/>Kraen Sobir:$res";




//domasna da napravime Fibonachi sequence da ide do 1000 



















?>