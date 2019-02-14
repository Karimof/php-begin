<html>
	<head>
		<body> 
			<?php
				$massiv = array( 22, 'Islom', 'dasturchi', true);
				if($massiv[0]<=40 && $massiv[3]===true){
					echo '<h3 style="font-family:calibri; border: 1px solid green; width:20%; text-align:center">Yaroqli</h3>';
				}	
				else {
					echo '<h3 style="font-family:calibri; border: 1px solid red; width:20%; text-align:center">Yaroqsiz!</h3>';
				}	
			?>
		</body>
	</head>
</html>