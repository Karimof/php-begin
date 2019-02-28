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
				$javoblar = $_POST['javoblar'];
				$file = 'Baza.txt';
				$uqilganFayl = file_get_contents($file);
				$ajralganSatr = explode(PHP_EOL, $uqilganFayl);
				$cnt = -1;
				foreach ($ajralganSatr as $satrSoni){
					if($satrSoni != NULL){
						$cnt++;
					}
				}
				$barchaJavoblarSoni = 0;
				$togrijavoblarSoni = 0;
				for ($id = 0; $id <= $cnt; $id++){
					foreach($ajralganSatr as $key => $value){
						if($id == $key){
							$birQator = explode(';' , $ajralganSatr[$key]);
							foreach($birQator as $key2 => $value2){
								if($key2 == 4){
									$faqatTogriJavoblar[] .= $birQator[$key2];
								}
							}
						}
					}
				} 
				foreach ($faqatTogriJavoblar as $key => $value) {
					$barchaJavoblarSoni++;
					if($faqatTogriJavoblar[$key] == $javoblar[$key]){
					 	$togrijavoblarSoni++;
					} 
				}
				echo' <div class="container" style="width:30%">
				<div class="alert alert-info">
  						<strong>Siz ' . $barchaJavoblarSoni . ' ta savoldan ' . $togrijavoblarSoni . ' tasiga to\'g\'ri javob berdingiz!
					</div>
				</div>';
			?>
		</body>
</hmtl>