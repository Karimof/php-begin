<html>
	<head>
		<body>
			<?php
				$savolNames = $_POST['savolNames'];
				$variantsA = $_POST['variantsA'];
				$variantsB = $_POST['variantsB'];
				$variantsC = $_POST['variantsC'];
				$javobNames = $_POST['javobNames'];
				if($savolNames && $javobNames && $variantsA && $variantsB && $variantsC) {
					$fileName = 'test.txt';
					$file = fopen($fileName, "w");
					$bool = false;
					foreach ($savolNames as $key => $value) {
						if($savolNames[$key] && $javobNames[$key] && $variantsA[$key] && $variantsB[$key] && $variantsC[$key]){
							$yozishgaTayyor .= $savolNames[$key] . '; ' . $variantsA[$key] . '; ' . $variantsB[$key] . '; ' . $variantsC[$key] . '; ' . $javobNames[$key] . ";\n";
							$bool = true;
						}
					}
					if($bool ==true){
						echo 'Ma\'lumotlar saqlandi';
						fwrite($file, $yozishgaTayyor);
					}
				}	
				else {
					echo 'nimadir yozing ahir!';
				}
				fclose($file);
			?>
		</body>
	</head>
</hmtl>