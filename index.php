<?php 
require './functions.php';
// $_SERVER['REQUEST_URI']

if(str_contains($_SERVER["REQUEST_URI"], 'index') || str_contains($_SERVER["SCRIPT_FILENAME"], 'index.php')){
    require './controllers/Home.php';
} else if (str_contains($_SERVER["REQUEST_URI"], 'about')){
    require './controllers/About.php';
}