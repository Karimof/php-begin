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
	<body style = "background-color: lightgrey; font-family: calibri">
		<center>
		<?php
			/*Topshiriqlar:
				1. 3 ta massiv berilgan, ular ichida faqat integer qiymatlar mavjud. Ularni birlashtiring va tartiblang.
				2. Anonim funskiya yordamida 2 ta argumetnda massiv keladi, 2 ta massivning key (kalit)  bir xil bo'lgan massiv elementlarini qoshib qaytaring (return da massiv qaytishi kerak).
				3. 3 ta project yarating fayl yuklash bo'yicha.
				3.1 Office tipdagi fayllar yuklansin (PSF, MSC OFFICE (XLS,XLSX, DOC,DOCX))
				3.2 CSV va TXT fayllar yuklansin.
				3.3. MP3 va MP4 fayllar yuklansin va mp3 fayl mp3 papkaga tushsin. mp4 fayl mp4 papkaga yuklansin.
				*/
			// 1 - Topshiriq:///////////////////////////////////////////////
			$massiv1 = [ 5,1,4,9,6,8,3];
			$massiv2 = [ 13, 24, 21, 14, 18, 34, 10];
			$massiv3 = [ 8 , 3 , 0 , 14 , 19 , 15, 20 ];
			$index2 = 0;
			$index3 = 0;
			for ($index = 0; $index < 3*count($massiv1); $index++){
				if($index < count($massiv1)  &&  $index>=0){
					$massiv[$index] = $massiv1[$index];
					
				}
				else if($index < 2*count($massiv2)  &&  $index >= count($massiv2)){
					$massiv[$index] = $massiv2[$index2];
					$index2++;
				}
				else{
					$massiv[$index] = $massiv3[$index3];
					$index3++;
				}
			}
			echo 'Before:  ';
			foreach($massiv as $var){
				echo $var . ' ';
			}
			sort($massiv);
			echo '<br>After: ';
			foreach($massiv as $var){
				echo $var . ' ';
			}
			echo '<hr>';
			// 2 - Topshiriq:///////////////////////////////////////////////
			$myArray1 = [
				'son1' => function($var){
					return 22;
				},
				'yili' => function(){
					return 96;
				}
			];
			$myArray2 = [
				'son2' => function(){
					return 20;
				},
				'yili2' =>function(){
					return 98;
				}
			];
		?>
		<!-- 3.1 - Topshiriq:///////////////////////////////////////////////-->
		<!-- Offis fayllar uchun-->
		<form action="upload_doc.php" method="POST" enctype="multipart/form-data">
			<label>
				Faylni ko'rsating (doc/docx/xls/xlxs)*
				<input required type="file" name="doc/docx/xls/xlxs">
			</label>
			<button type="submit">Yuklash</button>
		</form>
		<?php
			echo '<hr>';
		?>

		<!-- csv va txt fayllar uchun-->
		<form action="upload_csv_txt.php" method="POST" enctype="multipart/form-data">
			<label>
				Faylni ko'rsating (txt/csv)*
				<input required type="file" name="csv_txt">
			</label>
			<button type="submit">Yuklash</button>
		</form>
		<?php
			echo '<hr>';
		?>

		<!-- mp3 va mp4 fayllar uchun-->
		<form action="upload_mp3_mp4.php" method="POST" enctype="multipart/form-data">
			<label>
				Faylni ko'rsating (mp3/mp4)*
				<input required type="file" name="mp3_mp4">
			</label>
			<button type="submit">Yuklash</button>
		</form>
		</center>
	</body>
</html>