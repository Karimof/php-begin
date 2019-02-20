<html>
	<head>
		<body> 
			<?php
				if($_FILES['csv_txt']) {
					$csv_txt = $_FILES['csv_txt'];
					$upload_dir = 'uploads_csv_txt';
					$fileName = uniqid() . '_' . $csv_txt['name'];
					if($csv_txt['type'] == 'text/plain' ||
					  	$csv_txt['type'] == 'application/vnd.ms-excel') {
						move_uploaded_file($csv_txt['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
					}
					else {
					echo 'Fayl faqat csv/txt format bo`lishi kerak!';
					}
					// var_dump($_FILES['csv_txt']);
				}
				else {
					echo 'Fayl kelmadi';
				}
			?>
		</body>
	</head>
</html>