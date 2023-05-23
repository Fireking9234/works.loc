<?php
include_once "../functions.php";
$db = include_once "../dataBase/store.php";
$posts = $db->getAll("posts");
include "../index.view.php";
