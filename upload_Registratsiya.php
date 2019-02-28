<?php
	include 'header.php';
	$ism = $_POST['ism'];
	$login = $_POST['login'];
	$parol = $_POST['parol'];
	if ($ism && $login && $parol) {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-success">
  				<strong>Warning!</strong> Siz ro\'yhatdan o\'tdingiz!
			</div>
		</div>';
 	}
	else {
		echo'<div class="container" style="width:30%">
			<div class="alert alert-warning">
  				<strong>Warning!</strong> Ma\'lumotlarni to\'liq kiriting!
			</div>
		</div>';
	}
?>
