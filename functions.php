<?php 



function dd($value) {
    echo("<pre>");
    var_dump($value);
    echo("</pre>");
    die();
}

function urlActive($value) {
    return str_contains($_SERVER['REQUEST_URI'], $value);
}

function connectDb() {
    $host = "localhost";
    $port = "3306";
    $dbName = "av_db";
    $dataBase = "mysql";
    $dbUser = "root";
    $password = '';
    
    return new Database($dataBase, $host, $port, $dbName, $dbUser, $password);
}