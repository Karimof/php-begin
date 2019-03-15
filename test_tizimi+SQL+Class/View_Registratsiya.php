<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<body>
	<div class="container" style="width: 500px">
  		<form action="upload_Registratsiya.php" method="POST">
  			<div class="well well-sm" style="text-align: center; font-size: 17px">
  				<p>Ma'lumotlarni kiriting</p>
  			</div>
  			<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      			<input type="text" class="form-control" name="ism" placeholder="Ism">
    		</div><br>
    		<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input type="text" class="form-control" name="login" placeholder="Login">
    		</div><br>
    		<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input  type="password" class="form-control" name="password" placeholder="Password">
    		</div><br>
    		<div align="right">
    		<button type="submit" class="btn btn-default">
      			<span class="glyphicon glyphicon-ok"></span> Tasdiqlash
      		</button>
      	</div>
		</form>
	</div>
</body>
</html>