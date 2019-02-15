<html>
<head>
<body style="font-family:calibri">
<form action="" method="GET">
<table style="text-align:center;width:25%">
	<tr>
		<td>
			Ma'lumotlarni kiriting<br>
		</td>
	</tr>
</table>
	<table style="width:50%; margin: 10px">
		<tr>
			<td>
				<table style="border: 1px solid;padding: 10px; border-color:blue">
		<tr>
			<td>
				Ism:
			</td>
			<td>
				<input type="text" placeholder="ism" name="ism">
			</td>
		</tr>
		
		<tr>
			<td>
				Familya:
			</td>
			<td>
				<input type="text" placeholder="familya" name="familya">
			</td>
		</tr>
		
		<tr>
			<td>
				Yoshi:
			</td>
			<td>
				<input type="text" placeholder="" name="yosh">
			</td>
		</tr>
		
		<tr>
			<td>
				Manzili:
			</td>
			<td>
				<input type="text" placeholder="" name="manzil">
			</td>
		</tr>
		
		<tr>
			<td>
				Maktab raqami:
			</td>
			<td>
				<input type="text" placeholder="¹" name="raqam">
			</td>
		</tr>
		
		<tr>
			<td>
				<br><button type="submit">Saqlash</button>
			</td>
		</tr>
		
	</table>
			</td>
		<td>
			<table style="border: 2px solid lightgreen; width:80%; margin: 10px; height:100%">
	<tr>
		<td>
			Ismi:
		</td>
		<td>
			<?php
				echo $ism = '<b>' . $_GET['ism'];
			?>
			</td>
		</tr>
		<tr>
			<td>
			Familyasi:
			</td>
			<td>
				<?php
					echo $familya = '<b>' . $_GET['familya'];
				?>
			</td>
		</tr>
		<tr>
			<td>
				Yoshi:
			</td>
			<td>
				<?php
					echo $yoshi = '<b>' . $_GET['yosh'];
				?>
			</td>
		</tr>
		<tr>
			<td>
				Manzili:
			</td>
			<td>
				<?php
					echo $manzil = '<b>' . $_GET['manzil'];
				?>
			</td>
		</tr>
		<tr>
			<td>
				Maktab soni:
			</td>
			<td>
				<?php
					echo $son = '<b>' . $_GET['raqam'];
				?>
			</td>
		</tr>
	</table>
			</td>
		</tr>
	</table>
</form>
</body>
<head>
<html>
