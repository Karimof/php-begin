<html>
	<head>
		<body> 
			<?php
				$input = 'injiner' ;
				$massiv1 = array( 23, 'Islom',  'dasturchi' , true );
				$massiv2 = array( 25, 'Sarvar',  'injiner' , true );
				$massiv3 = array( 40, 'Shohrux',  'doctor' , true );
				
				if($input == $massiv1[2] && $massiv1[0] <= 40 && $massiv1[3]===true){					
					echo  $massiv1[1] . ' Yaroqli';
				}
				else if($input==$massiv1[2]){
					echo $massiv1[1] . ' Yaroqsiz!';
				}
				
				if($input == $massiv2[2] && $massiv2[0] <= 40 && $massiv2[3]===true ){					
					echo  $massiv2[1] . ' Yaroqli';
				}
				else if($input==$massiv2[2]){
					echo $massiv2[1] . ' Yaroqsiz!';
				}
					
				if($input == $massiv3[2] && $massiv3[0] <= 40 && $massiv3[3]===true){					
					echo  $massiv3[1] . ' Yaroqli';
				}
				else if($input==$massiv3[2]){
					echo $massiv3[1] . ' Yaroqsiz!';
				}
			?>
		</body>
	</head>
</html>