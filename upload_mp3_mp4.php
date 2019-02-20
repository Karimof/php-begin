<html>
	<head>
		<body> 
			<?php
				if($_FILES['mp3_mp4']) {
					$mp3_mp4 = $_FILES['mp3_mp4'];
					if($mp3_mp4['type'] == 'audio/mp3'){
						$upload_dir = 'uploads_mp3';
						$fileName = uniqid() . '_' . $mp3_mp4['name'];
						move_uploaded_file($mp3_mp4['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
						echo '.mp3 fayl yuklandi.';
					}
					else if($mp3_mp4['type'] == 'video/mp4'){
						$upload_dir = 'uploads_mp4';
						$fileName = uniqid() . '_' . $mp3_mp4['name'];
						move_uploaded_file($mp3_mp4['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
						echo '.mp4 fayl yuklandi.';
					}
					else {
						echo 'Fayl faqat mp3/mp4 format bo`lishi kerak!';
					}
				}
				else {
					echo 'Fayl kelmadi';
				}
			?>
		</body>
	</head>
</html>