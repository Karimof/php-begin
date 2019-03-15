<?php
		session_start();
		$dsn = 'mysql:host=localhost;dbname=quiz';
		$db_user = 'root';
		$db_password = '';
		$connection = new PDO($dsn, $db_user, $db_password);
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
	</head>
<body>
	<div class="well well-sm" style="background: dodgerblue">
		<div class="row" style="text-align: center">
  		<form action="ViewUqituvchi.php" method="POST"> 
        <div class="col-sm-2" style="text-align: center">
           <button type="submit" name="button" class="btn btn-default">
              <span class="glyphicon glyphicon-user"></span> Bosh menyu
          </button>
        </div>
      </form>
      <div class="col-sm-2">
      </div>
        <div class="col-sm-4" style="text-align: center;">
          <font size="5px" color="white"> 
            Online test tizimi
          </font>
        </div>
    <?php
      if (!isset($_SESSION['user_session'])){
    echo '<form action="View_Registratsiya.php" method="POST">
  				<div class="col-sm-3" style="text-align: center">
  					<button type="submit" class="btn btn-default">
      					<span class="glyphicon glyphicon-pencil"></span> Registratsiya
    				</button>
  				</div>
        </form>

        <form action="View_Kirish.php" method="POST">
  				<div class="col-sm-1" style="text-align: center">
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
              echo $_SESSION['user_session']['login_session'];
         echo'</font>
          </div>
        <form action="logOUT.php" method="POST">
          <div class="col-sm-2" style="text-align: center">
            <button type="submit" name="button" class="btn btn-default">
                <span class="glyphicon glyphicon-user"></span> Chiqish
            </button>
          </div>
        </form>'; 
      }   
      echo '
			</div>
		</div>
  </div>
</body>
</html>';
?>
