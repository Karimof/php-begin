<?php
	include 'header.php';
	include 'Class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<div class="" style="padding: 10px" align="center">
		<form action="" method="GET">
			<table >
				<tr><td><input type="text" required placeholder="ism" name="first_name"></td></tr>
				<tr><td><input type="text" required placeholder="familya" name="last_name"></td></tr>
				<tr><td><input type="text" required placeholder="tel" name="phone"></td></tr>
				<tr><td><input type="text" required placeholder="manzil" name="address"></td></tr>
				<tr><td><input type="text" required placeholder="email" name="email"></td></tr><br>
				<tr><td align="center"><button  type="submit">Ok</button></td></tr>
			</table>
		</form>
	</div>
	<?php
		if(isset($_GET)) {
			$result = Contact::insert()->execute([ $_GET['first_name'] , $_GET['last_name'] , $_GET['phone'] , $_GET['address'] , $_GET['email'] ]);
			// header('Location: main.php');
		}
		else {
			echo 'Yuklashda xatolik bor!';
		}
	?>
</body>
</html>