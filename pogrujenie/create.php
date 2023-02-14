<?php
var_dump($_POST);
$name = $_POST["username"];
$job_title = $_POST["job_title"];
$status = $_POST["status"];
$image = $_POST["image"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];
$password = $_POST["password"];
$vk = $_POST["vk"];
$telergram = $_POST["telergram"];
$instagram = $_POST["instagram"];

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
$sql = "INSERT INTO users (username, job_title, status, image, phone, address, email, password, vk, telergram, instagram) VALUES (:username, :job_title, :status, :image, :phone, :address, :email, :password, :vk, :telergram, :instagram)";
$state = $pdo->prepare($sql);
$state->execute([
    'username' => $name,
    'job_title' =>$job_title,
    'status' => $status,
    'image' => $image,
    'phone' => $phone,
    'address' => $address,
    'email' => $email,
    'password' => $password,
    'vk' => $vk,
    'telergram' => $telergram,
    'instagram' => $instagram,

]);