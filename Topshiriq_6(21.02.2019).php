<html>
	<head>
		<body>
			<form action="" method="GET">
				<label>
					<input type="text" name="cnt">
				</label>
				<button type="submit">Ok</button><br><br>
			</form>
			<form action="upload_students.php" method="POST" enctype="multipart/form-data">
				<?php
    				$cnt = $_GET['cnt'];
    				if($cnt){
    					for ($id = 0; $id < $cnt; $id++){
							echo '<label style="border:1px solid;padding:10px">
								<input placeholder="name" type="text" name="nameIndex[]"> &nbsp&nbsp Picture*
								<input type="file" name="pictureIndex[]"><br><br>
							</label>';
							
						}
    					echo '<button type="submit">Yuklash</button>';
					}
				?>
			</form>
		</body>
	</head>
</html>