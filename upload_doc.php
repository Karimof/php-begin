<html>
	<head>
		<body> 
			<?php
				if($_FILES['doc/docx/xls/xlxs']) {
					$doc = $_FILES['doc/docx/xls/xlxs'];
					$upload_dir = 'uploads_doc';
					$fileName = uniqid() . '_' . $doc['name'];
					//Validate type file
					if($doc['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'  || 
					$doc['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ||
					$doc['type'] == 'application/vnd.ms-exce' || 
					$doc['type'] == 'application/msword') {
					move_uploaded_file($doc['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
					}
					else {
					echo 'Fayl faqat XLS/XLXS/DOC/DOCX format bo`lishi kerak!';
					}
					//var_dump($_FILES['doc']);
				}
				else {
					echo 'Fayl kelmadi';
				}
			?>
		</body>
	</head>
</html>