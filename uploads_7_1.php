<html>
	<head>
		<body>
			<?php
				$lastNames = $_POST['lastNames'];
				$firstNames = $_POST['firstNames'];
				
				if($lastNames && $firstNames) {
					$fileName = 'Students.txt';
					$file = fopen($fileName, "w");
					$bool = false;
					foreach ($lastNames as $key => $value) {
						if($lastNames[$key] && $firstNames[$key]){
							$tayyor .= $lastNames[$key] . ' ' . $firstNames[$key] . "\n" ;
							$bool = true;
						}
						else if(($lastNames[$key] && !$firstNames[$key]) || (!$lastNames[$key] && $firstNames[$key])){
							echo $key+1 . '-qator ma\'lumotlari saqlanmadi! *Ma\'lumotlar to\'liq kiritilmagan!';
						}
					}
					if($bool ==true){
						echo 'Ma\'lumotlar saqlandi';
						fwrite($file, $tayyor);
					}
				}
				else {
					echo 'Savol va togri javoblarni kiriting!';
				}
				fclose($file);
			?>
		</body>
	</head>
</hmtl>