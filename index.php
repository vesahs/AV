<?php 
require './functions.php';

// dd($_SERVER['REQUEST_URI']);

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = [
    '/' => './controllers/Home.php',
    '/index' => './controllers/Home.php',
    '/about' => './controllers/About.php',
    '/produktet-moisturizers'=> './views/produktet-moisturizers.php',
    '/produktet-toners' => './views/produktet-toners.php',
    '/produktet-FaceWashes'=> './views/produktet-FaceWashes.php',
    '/produktet-Body'=> './views/produktet-Body.php',
    '/produktet-sets'=> './views/produktet-sets.php',
    '/produktet-sunscreens' => './views/produktet-sunscreens.php'
];

if(array_key_exists($uri,$routes)) {
    require $routes[$uri];
} else {
    require './views/404.php';
}