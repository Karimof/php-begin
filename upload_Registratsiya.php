<?php
	include 'header.php';
	$ism = $_POST['ism'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	if ($ism && $login && $password) {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-success">
  				<strong>Warning!</strong> Siz ro\'yhatdan o\'tdingiz!
			</div>
		</div>';
		$query = $connection->query('INSERT INTO users(ism, login, password)  VALUES ("' . $ism . '", "' . $login . '","' . $password . '")');
		if ($query){
			// header('Location: ViewTest.php');
		}
		else {
			echo 'Xatolik bo\'ldi';
		}
 	}
	else {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-warning">
  				<strong>Warning!</strong> Ma\'lumotlarni to\'liq kiriting!
			</div>
		</div>';
	}
?>
