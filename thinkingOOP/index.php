<?php
include "functions.php";

$pdo = connectionBD();
$posts = getAllPosts($pdo);

include "index.view.php";
?>