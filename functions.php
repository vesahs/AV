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

function abort($error = 404){
    if($error === 404) {
        require './views/404.view.php';
    } else if ($error === 403) {
        require './views/403.view.php';
    }
    die();
}

function authorize($condition, $status = RESPONSE::FOEBIDDEN) {
    if(! $condition){
        abort($status);
    }
}

function view($path, $attributes = []) {
    extract($attributes);
    require $path;
}

function discount($price) {
        $halftPrice = $price / 2;
        $discount = rand(1, intval($halftPrice));
        $discountPrice = intval($price) - $discount;
    return $discountPrice; 
}