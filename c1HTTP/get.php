<?php  

//http://127.0.0.1/swt-2016/calc.php?a=4&b=8&op=plus
// 12

//http://127.0.0.1/swt-2016/calc.php?a=4&b=8&op=minus
//-4

// $_GET['a'];
// $_GET['b'];
// $_GET['op'];

switch ($_GET['op']) {
	case 'plus':
	echo $_GET['a'] + $_GET['b'] ;
	break;
	
	case 'minus':
	echo $_GET['a'] - $_GET['b'];
	break;

	case 'devide':
	echo $_GET['a'] / $_GET['b'];
	break;

	case 'multyply':
	echo $_GET['a'] * $_GET['b'];
	break;
}
?>