<?php

$email = "jahn@exemple.com2";
$password = "secret2";

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

$sql = "INSERT INTO users (email, password) VALUES ('email','password')";
//$sql = "INSERT INFO users (email, password) VALUES (:email, :password)";

$statement = $pdo->prepare($sql);
//$statement->execute([
//    "email" => $email,
//    "password" => $password
//]);

$statement->execute();
?>