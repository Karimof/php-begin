<?php
	include 'header.php';
?>
<html>
	<head>
	</head>
		<body>
			<?php
				if (isset($_SESSION['user_session'])){
		echo'<div style="padding:20px; font-family: calibri" class="input-group container">
				<form action="" method="GET">
					<p style="text-align: center">Teacher: <span class="glyphicon glyphicon-user" style="font-size: 20px"></span></p>
					<div class="row" style="text-align: center">
  						<div class="col-sm-11">
      						<input type="text" required class="form-control input-sm" name="cnt" placeholder="Savollar soni" width="50%">
      					</div>
      					<div class="row" style="text-align: center">
  							<div class="col-sm-1">
      							<div style="text-align: right">
      							<button type="submit" class="btn btn-info">
                					<span class="glyphicon glyphicon-ok"></span> Ok
            					</button><br><br>
    						</div>
    					</div>
    				</div>
				</form>

				<form action="upload_uqituvchi.php" method="POST" enctype="multipart/form-data">';
    				$cnt = $_GET['cnt'];
    				if($cnt){
    					for ($id = 0; $id < $cnt; $id++){
							echo '<table class="table table-bordere" style="border: 1px solid; padding: 5px">
								<tr>
									<td>
										<input  type="text" class="form-control input-sm" style="width: 450px; margin: 5px" placeholder="savol" type="text" name="savolNames[]"> 
										<input type="text" class="form-control input-sm" style="width:120px; margin: 5px" placeholder ="variant a)" type="text" name="variantsA[]">
										<input type="text" class="form-control input-sm" style="width:120px; margin: 5px" placeholder ="variant b)" type="text" name="variantsB[]">
										<input type="text" class="form-control input-sm" style="width:120px; margin: 5px" placeholder ="variant c)" type="text" name="variantsC[]">
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
    					echo '<br><button type="submit" class="btn btn-info">
                			<span class="glyphicon glyphicon-ok"></span> Ok
            			</button>';	
					}
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
		</div>
		</body>
	
</html>