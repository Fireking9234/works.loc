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
	$statement = $pdo->prepare('DELETE FROM user WHERE id=:id');
	$statement->execute($_GET);


	header('Location: /workBD/create.php');
?>




</body>
</html>