<html>
	<head>
		<body> 
			<?php
				// for ($idnex = 0; $index < $_POST['cnt']; $index++){	
					
					if ($_FILES['salom']){
						$file = $_FILES['salom'];
						$upload_dir = 'uploads_5';
						$fileName = uniqid() . '_' . $file['name'];
						move_uploaded_file($file['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName  );
						echo 'Fayl yuklandi ';
						$count = $count + 1;
						echo $count;
					}
					else {
						echo 'File kelmadi!';
					}
				// }
			?>
		</body>
	</head>
</html>