<?php 

$config = 'mysql:host=127.0.0.1;dbname=hw';

$username = 'root';

$password = 'root';

$db = new PDO();

$sql = "SET NAME UTF8";
$query = $db->query($sql);

print_r();

 ?>