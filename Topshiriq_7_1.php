<!DOCTYPE html>
<html>
<body>
	<form action="" method="GET">
		<label>
			<input type="text" name="cnt">
			<button type="submit">Ok</button><br><br>
		</label>
	</form>
	<form method="POST" action="uploads_7_1.php">
		<?php
			$cnt = $_GET['cnt'];
			echo '<table>';
			for ($id = 0; $id < $cnt; $id++){
				echo '
					<tr>
						<td>
							<label>
								<input placeholder="Ism" type="text" name="lastNames[]">
								
							</label>
						</td>
						<td>
							<label>
								<input placeholder="Familiya" type="text" name="firstNames[]">
							<label>
						</td>
					</tr>';
			}
			echo '</table>';
			if($cnt){
				echo '<button type="submit">Saqlash</button>';
			}
		?>
	</form>
</body>
</html>