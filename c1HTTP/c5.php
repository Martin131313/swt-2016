<!-- funkcija sto ke kazuva dalo zborot e palindrom ili ne --> 
<!-- funkcija sto ke gi trga site prazni mesta i karakteri (so str_replace- zamenuva bilo sto so bilo sto drugo. vo php)-->
<!-- da napisheme testovi za funkcijata -->
<!-- i za sve ova treba test funkcii za funkciite fq -->



<?php 


function sobiranje ($a , $b){
	
	return $a + $b;


 echo sobiranje( 5 , 5);


$niza = array('a', 'b', 'expected')


function _test_validation_niza($data){

	foreach($data as $d){

		@res = validation_registration($d['$a'], $d['$b'])

		if(sobiranje($d['$a'], $d['$b']) === $d['expected']){
			echo '<span style = "coloure: red;">Fail!<br/>';
		} else {
			echo '<span style="green;">Success!</span><br/>';
		}
	}
}

}



 ?>