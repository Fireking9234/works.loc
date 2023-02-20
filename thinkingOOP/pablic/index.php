<?php
include "functions.php";
$db = include "database/start.php";
$posts = $db->getAll("posts");

$routes = [
    '/thinkingOOP/'=>'fonctions/homepape.php',
    '/thinkingOOP/about'=>'fonctions/about.php'
];
$route = $_SERVER["REQUEST_URI"];



if (array_key_exists($route,$routes)){
    include $routes[$route];
    exit();
}//else{
    //dd(123123);
//}


include "index.view.php";
?>