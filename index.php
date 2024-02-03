<?php 
require './functions.php';
require './Database.php';
require './Response.php';
require './Router.php';

session_start();

$router = new Router();

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$routes = require('routes.php');

$router->route($uri, $method);