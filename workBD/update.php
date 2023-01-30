<?php
$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
$sql = 'UPDATE user SET name=:name, email=:email WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($_POST);

header('Location: /workBD/create.php');

