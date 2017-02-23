<?php 


$u = 'a'; // hard coded username
$p = 'b'; // hard coded password

$post_user = trim(strip_tags($_POST['user']));
$post_pass = trim(strip_tags($_POST['pass']));

if(strlen($post_user) > 0 && strlen($post_pass) > 0){


	if($_POST['user'] == $u && $_POST['pass'] == $p){
		echo 'Dobar si !';
	} else {
		echo 'Greshka si ! '.strip_tags($_POST['user']);
	}
} else {
	echo 'No username or password was enterd!';
}

 ?>