<?php
	include 'header.php';
	$query = $connection->query('SELECT * FROM questions ORDER BY id ASC');
	$questions = $query->fetchAll();
?>
<html>
	<body>
			<?php
				$javoblar = $_POST['javobUquvchi'];
				$barchaJavoblarSoni = 0;
				$togrijavoblarSoni = 0;
				foreach ($questions as $question) {
					if ($question['javob'] == $javoblar[$barchaJavoblarSoni]){
						$togrijavoblarSoni++;
					}
					$barchaJavoblarSoni++;
				}
				echo' <div class="container" style="width:30%">
				<div class="alert alert-info">
  						<strong>Siz ' . $barchaJavoblarSoni . ' ta savoldan ' . $togrijavoblarSoni . ' tasiga to\'g\'ri javob berdingiz!
					</div>
				</div>';
			?>
		</body>
</hmtl>