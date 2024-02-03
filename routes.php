<?php 
$productsBaseDirectory = './controllers/product';

/**
 * Show Pages
 */

$router->get('/', './controllers/Home.php');
$router->get('/index', './controllers/Home.php');
$router->get('/about', './controllers/about.php');
$router->get('/login', './controllers/regjistrohu/login.php')->only('basic');
$router->post('/login', './controllers/regjistrohu/login.php');
$router->get('/logout', './controllers/regjistrohu/logout.php');
$router->get('/regjistrohu', './controllers/regjistrohu/create.php')->only('basic');
$router->post('/regjistrohu', './controllers/regjistrohu/save.php');

/**
 * Show Category Pages
 */
$router->get('/produktet-moisturizers', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-toners', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-FaceWashes', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-Body', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-sets', $productsBaseDirectory . '/products-category.php');
$router->get('/produktet-sunscreens', $productsBaseDirectory . '/products-category.php');

/**
 * Dashboard Product CRUD
 */
$router->get('/dashboard', './controllers/Dashboard.php')->only('admin');
$router->get('/products', $productsBaseDirectory . '/index.php')->only('admin');
$router->get('/product', $productsBaseDirectory . '/show.php');
$router->delete('/product', $productsBaseDirectory . '/delete.php')->only('admin');
$router->get('/create', $productsBaseDirectory . '/create.php')->only('admin');
$router->post('/create', $productsBaseDirectory . '/create.php')->only('admin');
$router->get('/product-edit', $productsBaseDirectory. '/edit.php')->only('admin');
$router->patch('/product-edit', $productsBaseDirectory. '/update.php')->only('admin');


/**
 * Dashboard Contact CRUD
 */

$router->get('/contacts', './controllers/contacts/show.php')->only('admin');
$router->post('/index', './controllers/contacts/create.php');
$router->delete('/contacts', './controllers/contacts/delete.php')->only('admin');

