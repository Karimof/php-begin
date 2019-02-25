<html>
	<head>
		<body>
			<form action="" method="GET">
				<label>
					<input type="text" name="cnt">
				</label>
				<button type="submit">Ok</button><br><br>
			</form>
			<form action="uploads_7_2.php" method="POST" enctype="multipart/form-data">
				<?php
    				$cnt = $_GET['cnt'];
    				if($cnt){
    					for ($id = 0; $id < $cnt; $id++){
							echo '<table style="border: 1px solid; padding: 5px">
								<tr>
									<td>
										<input style="width: 450px; margin: 5px" placeholder="savol" type="text" name="savolNames[]"> <br>
										<input style="width:95px; margin: 5px" placeholder ="variant a)" type="text" name="variantsA[]">
										<input style="width:95px; margin: 5px" placeholder ="variant b)" type="text" name="variantsB[]">
										<input style="width:95px; margin: 5px" placeholder ="variant c)" type="text" name="variantsC[]">
										&nbsp&nbspTo\'g\'ri javob:
										<select name="javoblar[]">
											<option value="a">a</option>
											<option value="b">b</option>
											<option value="c">c</option>
										</select>
									</td>
								</tr>
							</table>';
						}
    					echo '<br><button type="submit">Yuklash</button>';
					}
				?>
			</form>
		</body>
	</head>
</html>