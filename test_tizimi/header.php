<?php
		session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
	</head>
<body>
	<div class="well well-sm" style="background: dodgerblue">
		<div class="container">
			<div class="row" style="text-align: center">
  				<div class="col-sm-3">
          </div>
          <div class="col-sm-6" style="text-align: center">
            <font size="5px" color="white"> 
              Online test tizimi
            </font>
  				</div>
      <?php
      if (!isset($_SESSION['user'])){
    echo '<form action="Wiew_Registratsiya.php" method="POST">
  				<div class="col-sm-2" style="text-align: right">
  					<button type="submit" class="btn btn-default">
      					<span class="glyphicon glyphicon-pencil"></span> Registratsiya
    				</button>
  				</div>
        </form>

        <form action="Wiew_Kirish.php" method="POST">
  				<div class="col-sm-1" style="text-align: right">
  					<button type="submit" class="btn btn-default">
      					<span class="glyphicon glyphicon-user"></span> Kirish
    				</button>
  				</div>
        </form>';
      }
      else {
        echo '
        <div class="col-sm-2" style="text-align: center">
            <font size="3px" color="white"> ';
              echo $_SESSION['user']['login'];
         echo'</font>
          </div>
        <form action="logOUT.php" method="POST">
          <div class="col-sm-1" style="text-align: right">
            <button type="submit" name="button" class="btn btn-default">
                <span class="glyphicon glyphicon-user"></span> Chiqish
            </button>
          </div>
        </form>'; 
        }   
      ?>
			</div>
		</div>
  </div>
</body>
</html>

