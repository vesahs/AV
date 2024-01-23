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