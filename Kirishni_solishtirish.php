<?php
	include 'header.php';
	$query = $connection->query('SELECT * FROM users ORDER BY id DESC');
	$list = $query->fetchAll();

	$loginText = $_POST['login'];
	$passwordText = $_POST['password'];
	$bool = false;
	foreach ($list  as $user) {
		if ( $user['login'] == $loginText && $user['password'] == $passwordText ){
			$_SESSION['user_session'] = [
   				'login_session' => $user['login']
			];
			$bool = true;
		}
	}
		
	if ($bool == true ) {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-success">
  				<strong>Warning!</strong> Siz tizimga kirdingiz.
			</div>
		</div>';
	}
	else {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-warning">
  				<strong>Warning!</strong> Tizimga kirish uchun avval ro\'yhatdan o\'ting!
			</div>
		</div>';
	}
	// var_dump($_SESSION['login']);
?>