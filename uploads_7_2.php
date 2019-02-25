<html>
	<head>
		<body>
			<?php
				$savolNames = $_POST['savolNames'];
				$variantsA = $_POST['variantsA'];
				$variantsB = $_POST['variantsB'];
				$variantsC = $_POST['variantsC'];
				$javoblar = $_POST['javoblar'];
				if($savolNames  && $variantsA && $variantsB && $variantsC) {
					$fileName = 'test.txt';
					$file = fopen($fileName, "w");
					$bool = false;
					foreach ($savolNames as $key => $value) {
						if($savolNames[$key]  && $variantsA[$key] && $variantsB[$key] && $variantsC[$key]){
							fwrite($file, $savolNames[$key] . '; ');
							fwrite($file, $variantsA[$key] . '; ');
							fwrite($file, $variantsB[$key] . '; ');
							fwrite($file, $variantsC[$key] . '; ');
							fwrite($file, $javoblar[$key] . ";\n");
							$bool = true;
						}
					}
					if($bool ==true){
						echo 'Ma\'lumotlar saqlandi';
					}
					fclose($file);
				}	
				else {
					echo 'Ma\'lumotlarni to\'liq kiriting!';
				}
				
			?>
		</body>
	</head>
</hmtl>