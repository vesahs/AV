<?php 
$productsBaseDirectory = './controllers/product';

/**
 * Show Pages
 */

$router->get('/', './controllers/Home.php');
$router->get('/index', './controllers/Home.php');
$router->get('/about', './controllers/about.php');
$router->get('/login', './controllers/login.php');


$router->get('/produktet-moisturizers', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-toners', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-FaceWashes', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-Body', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-sets', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-sunscreens', $productsBaseDirectory . '/products-category.php');

/**
 * Dashboard Product CRUD
 */
$router->get('/dashboard', './controllers/Dashboard.php');
$router->get('/products', $productsBaseDirectory . '/index.php');
$router->get('/product', $productsBaseDirectory . '/show.php');
$router->delete('/product', $productsBaseDirectory . '/delete.php');
$router->get('/create', $productsBaseDirectory . '/create.php');
$router->post('/create', $productsBaseDirectory . '/create.php');
$router->get('/product-edit', $productsBaseDirectory. '/edit.php');
$router->patch('/product-edit', $productsBaseDirectory. '/update.php');


/**
 * Dashboard Contact CRUD
 */

$router->get('/contacts', './controllers/contacts/show.php');
$router->post('/index', './controllers/contacts/create.php');
$router->delete('/contacts', './controllers/contacts/delete.php');

