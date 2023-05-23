<?php
var_dump($_POST);
$name = $_POST["username"];
$name2 = $_POST["username2"];
$status = $_POST["status"];
$email = $_POST["email"];
$password = $_POST["password"];

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
$sql = "INSERT INTO users (username, username2, status, email, password,) VALUES (:username, :username2, :status, :email, :password,)";
$state = $pdo->prepare($sql);
$state->execute([
    'username' => $name,
    'username2' =>$name2,
    'status' => $status,
    'email' => $email,
    'password' => $password,
]);