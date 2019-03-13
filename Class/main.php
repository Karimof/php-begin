<?php
	include 'header.php';
	include 'Class.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="" style="text-align: center; padding: 10px">
		<a href="insert.php"><button class="btn btn-success" >Create</button></a>
		<!-- <a href="update.php"><button class="btn btn-primary">Update</button></a>
		<a href="delete.php"><button class="btn btn-warning">Delete</button></a><hr> -->
	</div>
	<div class="" align="center">
	<table class="table table-hover" style="width:600px" > 
		<?php foreach (Contact::listContact() as $list): ?>
			<tr>
				<td><?= $list['id'] ?></td>
				<td><?= $list['first_name']; ?></td>
				<td><?= $list['last_name']; ?></td>
				<td><?= $list['phone']; ?></td>
				<td><?= $list['address']; ?></td>
				<td><?= $list['email']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</body>
</html>