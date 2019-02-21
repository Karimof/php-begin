<html>
	<head>
		<body>
			<form method="POST" action="">
				<input type="text" name="cnt">
				<button type="submit">OK</button><br>
			</form>
			<form method="POST" action="upload_5.php" enctype="multipart/form-data">
				<?php
					if($_POST['cnt']){
						for ($idnex = 0; $index < $_POST['cnt']; $index++){
							echo 'Fayl tanlang*<input requered type="file" name="salom[]">';
							echo '<button type="submit">Saqlash</button><br><br>';
						}
					}
				?>
			</form>
		</body>
	</head>
</html>