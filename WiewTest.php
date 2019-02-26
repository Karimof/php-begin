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
			<form action="upload_uquvchi.php" method="POST" enctype="multipart/form-data">
				<?php
    				$file = 'Baza.txt';
					$uqilganFayl = file_get_contents($file);
					$ajralganSatr = explode(PHP_EOL, $uqilganFayl);
					$cnt = -1;
    				foreach ($ajralganSatr as $satrSoni){
						if($satrSoni != NULL){
							$cnt++;
						}
					}
					echo	'<div class="container" style=" width: 50%">
    					<table class="table table-hover" style=" border: 1px solid;text-align: center; margin: 0px">';
    					for ($id = 0; $id <= $cnt; $id++){
							echo'<tr>
								<td style="background-color: rgb(0, 205, 243); color: white">';
									foreach($ajralganSatr as $key => $value){
										if($id == $key){
											$malumot = explode(';' , $ajralganSatr[$key]);
											foreach($malumot as $key2 => $value2){
												if($key2 == 0){
													echo $id+1 . '-Savol:   ';
													echo  '<b>' . $malumot[$key2] . '</b>';
												}
											}
										}
									}
								echo '</td>
							</tr>
							<tr>
								<td>
									<div class="col-sm-3" style="background-color:white;">';
 		 								foreach($ajralganSatr as $key => $value){
											if($id == $key){
												$malumot = explode(';' , $ajralganSatr[$key]);
												foreach($malumot as $key2 => $value2){
													if($key2 == 1){
														echo 'a) <b>' . $malumot[$key2] . '</b>';
													}
												}
											}
										}
									echo'</div>
									<div class="col-sm-3" style="background-color:white;">';
										foreach($ajralganSatr as $key => $value){
											if($id == $key){
												$malumot = explode(';' , $ajralganSatr[$key]);
												foreach($malumot as $key2 => $value2){
													if($key2 == 2){
														echo 'b)<b> ' . $malumot[$key2]. '</b>';
													}
												}
											}
										}
									echo'</div>
									<div class="col-sm-3" style="background-color:white;">';
										foreach($ajralganSatr as $key => $value){
											if($id == $key){
												$malumot = explode(';' , $ajralganSatr[$key]);
												foreach($malumot as $key2 => $value2){
													if($key2 == 3){
														echo 'c)<b> ' . $malumot[$key2]. '</b>';
													}
												}
											}
										}
									echo'</div>
									<div class="col-sm-3" style="background-color:rgb(0, 166, 89); color: black">';
										foreach($ajralganSatr as $key => $value){
											if($id == $key){
												echo'Javob: <select name="javoblar[]">
													<option value="a">a</option>
													<option value="b">b</option>
													<option value="c">c</option>
												</select>';
											}
										}
								echo'</td>
							</tr>
						</div><br>';
						}
					echo'</table>
					<div style="text-align: right" class="button-group">
    					<br><button style="text-align: right" type="submit" class="btn btn-success btn-sm">Tekshirish</button><br>
    				</div>
    			</div>';
				?>
			</form>
		</body>
</html>