<html>
<head>
</head>
<body>
	<?php
		$peopleName = $_POST['nameIndex'];
		$picturesName = $_FILES['pictureIndex'];
		// var_dump($picturesName);
		if($peopleName && isset($_FILES)){
			foreach ($picturesName['type'] as $key => $value) {
				$bool = false;
				if ($picturesName['type'][$key]){
					if($picturesName['type'][$key] == 'image/jpeg'){
						if($peopleName[$key]){
							// echo $peopleName[$key] . '<br>';
							// echo  $picturesName['name'][$key] . '<br>';
							$fileType = '.jpg';
							$upload_dir = 'uploads_students';
							$fileName = $peopleName[$key] . $fileType;
							move_uploaded_file($picturesName['tmp_name'][$key], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
							$bool = true;
						}
					}
					else {
						echo 'Rasm jpeg formatda bolishi kerak!<br>';
					}
				}
			}
			if($bool == 1){
					echo 'Barcha fayllar yuklandi';
			}
		}
		else {
			echo 'Fayl kelmadi!';
		}
	?>
</body>
</html>