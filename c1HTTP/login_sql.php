<?php 
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
	$err = 0;

	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
		$err++;
	}

	if(strlen(trim($_POST['password'])) == 0){
		$err++;
	}

	if($err == 0){
		$db = new PDO('mysql:host=127.0.0.1;dbname=hw', 'root', 'root');
		$sql = 'select * from users where email = :email and password = :password';
		$query = $db->prepare($sql);
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':password', $_POST['password']);
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);

		if(count($res) > 0){
			// echo 'Login successfull!';
			$_SESSION['logged_in'] = true;
			$_SESSION['user_email'] = $res[0]['email'];
			$_SESSION['user_id'] = $res[0]['id'];

			header('location: admin.php');
		} else {

			header('location: login_sql.html');
			echo 'Bad username or password!';
		}
	} else {

		header('location: login_sql.html');
		echo 'You have not enterd username or password!';
	} 
}else {

		header('location: login_sql.html');
		echo 'Email or password not set!';
	}





 ?>
