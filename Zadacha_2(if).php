<html>
	<head>
		<body> 
			<?php
				$input = 'doctor' ;
				$massiv1 = array( 22, 'Islom',  'dasturchi' , true );
				$massiv2 = array( 25, 'Sarvar',  'injiner' , true );
				$massiv3 = array( 22, 'Shohrux',  'doctor' , true );
				$bool=false;
				if($input == $massiv1[2] && $massiv1[0] <= 40 && $massiv1[3]===true){
					$bool=true;
					if($bool==true){
						echo  $massiv1[1] . ' Yaroqli';
					}
					else {
						echo $massiv1[1] . ' Yaroqsiz!';
					}
				}
			
				if($input == $massiv2[2] && $massiv2[0] <= 40 && $massiv2[3]===true){
					$bool=true;
					if($bool){
						echo  $massiv2[1] . ' Yaroqli';
					}
					else {
						echo $massiv2[1] . ' Yaroqsiz!';
					}
				}
				
				if($input == $massiv3[2] && $massiv3[0] <= 40 && $massiv3[3]===true){
					$bool=true;
					if($bool){
						echo  $massiv3[1] . ' Yaroqli';
					}
					else {
						echo $massiv3[1] . ' Yaroqsiz!';
					}
				}
			?>
		</body>
	</head>
</html>