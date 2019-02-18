<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	<body style = "background-color: lightgrey">
		<center>
		<?php
		/*Topshiriqlar:
			1. Functions fayldagi baholash funskiyasini optimallashtirish
			2. Massiv da talabalar royxatini shakllantirish va  foreach, for yoradmida table shakllantirish,
			3. Kop o'lchamli massiv elementlarini birlashtiruvchi funksiya yaratilsin.
*/
			//  2 - shart:///////////////////////////////////////////////////////////////////////////////////////////////////
			$talabalar = [
				['ismi' => 'Islom', 'familyasi' => 'Karimov', 'manzili' => 'Shovot', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999676107', ],
				['ismi' => 'Sarvar', 'familyasi' => 'Shomurodov', 'manzili' => 'Shovot', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999679818', ],
				['ismi' => 'Shohrux', 'familyasi' => 'Qutlimurodov', 'manzili' => 'Qo\'shko\'pir', 'o\'quvJoyi' => 'Tatu','raqami' => '+998932883203', ],
				['ismi' => 'Muhtor', 'familyasi' => 'Bobojonov', 'manzili' => 'Hpzarasp', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999677230', ],
			];
			echo '<table style="border-collapse: collapse">';
			echo '<tr><th>Ism</th><th>Familya</th><th>Manzili</th><th>O\'quv joyi</th><th>Tel:</th></tr>';
			foreach ($talabalar as $talaba){
				echo '<tr>';
					echo '<td>' . $talaba ['ismi'] . '</td>';
					echo '<td>' . $talaba ['familyasi'] . '</td>';
					echo '<td>' . $talaba ['manzili'] . '</td>';
					echo '<td>' . $talaba ['o\'quvJoyi'] . '</td>';
					echo '<td>' . $talaba ['raqami'] . '</td>';					
				echo '</tr>';
			} 
			echo '</table>';
		?>
		
		<?php
			// 3-shart:///////////////////////////////////////////////////////////////////////////////////////////////////
			$x='salom';
			$y='nagap';
			$talabalar1 = [
				['ismi' => 'Islom', 'familyasi' => 'Karimov', 'manzili' => 'Shovot', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999676107', ],
				['ismi' => 'Sarvar', 'familyasi' => 'Shomurodov', 'manzili' => 'Shovot', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999679818', ],
				['ismi' => 'Shohrux', 'familyasi' => 'Qutlimurodov', 'manzili' => 'Qo\'shko\'pir', 'o\'quvJoyi' => 'Tatu','raqami' => '+998932883203', ],
				['ismi' => 'Muhtor', 'familyasi' => 'Bobojonov', 'manzili' => 'Hpzarasp', 'o\'quvJoyi' => 'Tatu','raqami' => '+998999677230', ],
			];
			foreach($talabalar1 as $talaba1){
				echo '<p>' . implode(' ', $talaba1) . '</p>';
			}
			
		?>
		</center>
	</body>
</html>