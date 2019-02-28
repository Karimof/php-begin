<?php
	include 'header.php';
	$login = $_POST['login'];
	$parol = $_POST['parol'];
	$bool = false;
	$file = 'users.txt';
	$uqilganFayl = file_get_contents($file);
	$ajralganSatr = explode(PHP_EOL, $uqilganFayl);
	foreach ($ajralganSatr as $key => $value) {
		$qatorElementlari = explode(';', $ajralganSatr[$key]);
		if ($qatorElementlari[1] == $login && $qatorElementlari[2] == $parol) {
			$bool = true;
			$_SESSION['user'] = [
    		'login' => $qatorElementlari[1],
			];
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
?>