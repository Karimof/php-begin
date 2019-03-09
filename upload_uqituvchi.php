<?php
	include 'header.php';
?>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	</head>
		<body>
			<?php
				$savolNames = $_POST['savolNames'];
				$variantsA = $_POST['variantsA'];
				$variantsB = $_POST['variantsB'];
				$variantsC = $_POST['variantsC'];
				$javoblar = $_POST['javoblar'];
				if($savolNames  && $variantsA && $variantsB && $variantsC) {
					foreach ($savolNames as $key => $value) {
						if($savolNames[$key]  && $variantsA[$key] && $variantsB[$key] && $variantsC[$key]){
							$query = $connection->query(
								'INSERT INTO questions(id, savol, variant_a, variant_b, variant_c, javob)  VALUES ("' . $savolNames[$key] . '", "' . $variantsA[$key] . '","' . $variantsB[$key] . '", "' . $variantsC[$key] . '", "' . $variantsA[$key] . '", "' . $javoblar[$key] . '")'
							);
							$bool = true;
						}
					}
					if($bool == true){
						echo '<div class="container">
							<div class="alert alert-success" style="text-align: center; width:30%;">
    							<strong>Yuklash bajarildi!</strong> <a href="#" class="alert-link"></a>.
  							</div>
  						</div>';
					}
				}	
				else {
					echo 'Ma\'lumotlarni to\'liq kiriting!';
				}
				
			?>
		</body>
</hmtl>