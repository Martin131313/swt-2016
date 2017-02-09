<?php  

// $niza = array(); //prazna niza
// $niza2 = []; // prazna niza


// $niza3 = array('a','b','c','d'); //niza so preddefinirani vrednosti
// $niza4 = ['e','f','g','h']; //niza vo vrednosti

// $niza[0] = 'i'; //dodavanje na elementi so index;
// $niza[1] = 'j';
// $niza[2] = 'k';
// $niza[3] = 'l';

// $niza2[] = 'm'; //dodavanje na elementi bez index
// $niza2[] = 'n';
// $niza2[] = 'o';
// $niza2[] = 'p';


// echo $niza; // ova vrakja greshka
// print_r($niza); // pominuva
// echo '<hr/>';
// var_dump($niza2); //pominuva

// $dolzina = count($niza);
// echo $dolzina;

// for($i = 0; $i < $dolzina; $i++){
// 	echo $niza[$i].'<br/>';
// }

// echo '<hr/>';

// $gradovi = ['Skopje','Kumanovo','Kichevo','Debar','Ohrid','Veles','Strumica','Gevgelija','Tetovo','Bitola'];

// $a = 0;


// while($a < count($gradovi)){
// 	echo $gradovi[$a].'<br/>';
// 	$a++;
// } 
	
// $max = 0;
// $grad = '';
// $j = 0;

// while($j < count($gradovi)){
// 	if(strlen($gradovi[$j]) > $max){
// 		$grad = $gradovi[$j];
// 		$max = strlen($gradovi[$j]);
// 	} 
// 	$j++;
// }
// echo 'Grad so najdolgo ime e : '.$grad;



// $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto distinctio tenetur inventore fugit. Expedita veritatis sed amet soluta officia ipsam ullam cum dolorem corrupti, quasi dignissimos, recusandae sint, repellat aspernatur. ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ipsum, sed rerum eveniet excepturi amet recusandae voluptatibus, id omnis laudantium, sapiente quisquam. Fugit pariatur cupiditate atque magnam nemo modi, provident.';

// $zborovi = explode(' . ', $text);
// print_r($zborovi);
// echo count($zborovi);


// $student = array(
// 	'ime' => 'Martin',
// 	'prezime' => 'Postolovski',
// 	'prosek' => 7.4
// 	);



// echo count($student);
// echo '<br/>';
// // echo $student['ime'];
// // echo '<br/>';
// // echo $student['prezime'];
// // echo '<br/>';
// // echo $student['prosek'];
// // echo '<br/>';
	
// foreach ($student as $detail_key => $detail_value) {
//   	echo $detail_key. ' -> '.$detail_value.'<br/>';
//   }  

// echo '<hr/>';



$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto distinctio tenetur inventore fugit. Expedita veritatis sed amet soluta officia ipsam ullam cum dolorem corrupti, quasi dignissimos, recusandae sint, repellat aspernatur. ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ipsum, sed rerum eveniet excepturi amet recusandae voluptatibus, id omnis laudantium, sapiente quisquam. Fugit pariatur cupiditate atque magnam nemo modi, provident.';



$zborovi = explode(' ', $text);
$max = 0;
$z = '';


foreach ($zborovi as $zbor ) {
	if(strlen($zbor) > $max){
		$z = $zbor;
		$max = strlen($zbor);
	}
}

echo 'Najgolem e :'.$z;



	
	

?>