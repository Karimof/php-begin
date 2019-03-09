<?php
	include 'header.php';
	$query = $connection->query('SELECT * FROM questions ORDER BY id ASC');
	$natijalar = $query->fetchAll();
	// var_dump($natijalar);

?>
<html>
	<body>
		<form action="get_uquvchi.php" method="POST" enctype="multipart/form-data">
			<?php
				if (isset($_SESSION['user_session'])){
					echo	'<div class="container" style=" width: 50%">
    					<table class="table table-hover" style=" border: 1px solid;text-align: center; margin: 0px">';
    						foreach ($natijalar as $natija) {
								echo'<tr>
									<td style="background-color: rgb(0, 205, 243); color: white; text-align:left">';
										echo $natija['id'] . '-savol: ' . $natija['savol'];
									echo '</td>
								</tr>
								<tr>
									<td>
										<div class="col-sm-3" style="background-color:white;">';
 		 									echo  'a) ' . $natija['variant_a'];
										echo'</div>
										<div class="col-sm-3" style="background-color:white;">';
											echo  'b) ' . $natija['variant_b'];
										echo'</div>
										<div class="col-sm-3" style="background-color:white;">';
											echo  'c) ' . $natija['variant_c'];
										echo'</div>
										<div class="col-sm-3" style="background-color:white;">
											<select name="javobUquvchi[]">
												<option value="a">a</option>
												<option value="b">b</option>
												<option value="c">c</option>
											</select>
										</div>
									</td>
								</tr>';
							}
						echo'</table>
							<div style="text-align: right" class="button-group">
    						<br><button style="text-align: right" type="submit" class="btn btn-success btn-sm">Tekshirish</button><br>
    					</div>
    				</div>';
    			}
    			else {
    				echo' <div class="container" style="width:30%">
						<div class="alert alert-warning">
  							<strong>Warning!</strong> Dasturda ishlash uchun ro\'yhatdan o\'ting
						</div>
					</div>';
    			}
			?>
		</form>
	</body>
</html>