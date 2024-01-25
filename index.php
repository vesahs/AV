<?php 
require './functions.php';
// require './Database.php';

$host = "localhost";
$port = "3306";
$dbName = "av_db";
$dataBase = "mysql";
$dbUser = "root";
$password = '';

// $db = new Database($dataBase, $host, $port, $dbName, $dbUser, $password);

// dd($db->query('select * from products where id = 1')->fetch());

require './router.php';

