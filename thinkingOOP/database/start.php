<?php
$config = include "config.php";
include "dataBase/QueryBuilder.php";
include "dataBase/Connection.php";

//dd($config);

$result = new QueryBuilder(Connection::make($config["database"]));
return $result;