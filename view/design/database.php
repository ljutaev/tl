<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'tl-wd777';

	// Set dsn
	$dsn = 'mysql:host='. $host .';dbname='. $dbname;

	// Create a PDO instance
	$pdo = new PDO($dsn, $user, $password);

	# PDO QUERY
	$stmt = $pdo->query('SELECT * FROM users');

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo $row['name']. ', '. $row['id'] .'<br>'  ;
	}
	