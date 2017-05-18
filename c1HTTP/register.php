<?php 
session_start();

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age'])){
	$err = 0;

	if (filter_var($_POST['firstname'], FILTER_VALIDATE_FIRSTNAME) === false){
	$err++;
	}
}

 ?>