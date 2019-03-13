<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
</head>
<body>
	<?php
		class Contact {
			public  function connect(){
				$dsn = 'mysql:host=localhost;dbname=project_contacts';
				$db_user = 'root';
				$db_password = '';	
				$connection = new PDO($dsn, $db_user, $db_password);
				return $connection;
			}

			public  function insert(){
    			$sqlInsert = 'INSERT INTO contacts (first_name, last_name, phone, address, email) VALUES (?,?,?,?,?)';
    			$queryInsert = Contact::connect()->prepare($sqlInsert);
    			return $queryInsert;
			}

			public function delete(){
				$sqlDelete = 'DELETE FROM contacts WHERE id=';
				return $sqlDelete;
			}

			public function update(){
				$sqlUpdate = 'UPDATE contacts SET first_name = ?, last_name = ?, phone = ?, address = ?, email = ? WHERE id = ';
				return $sqlUpdate;
			}

			public function listContact(){
				$queryList = Contact::connect()->query('SELECT * FROM contacts ORDER BY id DESC');
    			$lists = $queryList->fetchAll();
    			return $lists;
			}

		}
		$obj = new Contact;

	?>
</body>
</html>