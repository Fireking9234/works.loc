<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
	$statement = $pdo->prepare('SELECT * FROM user WHERE id=:id');
	$statement->execute($_GET);
	$user = $statement->fetch(PDO::FETCH_ASSOC);
	?>


	<h2>Show</h2>
	<p><?php echo $user['name'].' '.$user['email'].' '.$user['id'] ?></p>
</body>
</html>