<?php

$productPages = [
    '/products' => 'Products',
    '/produktet-moisturizers' => 'Moisturizers',
    '/produktet-toners' => 'Toners',
    '/produktet-FaceWashes'=> 'FaceWashes',
    '/produktet-Body'=>'BodyCare',
    '/produktet-sets'=> 'SkinCareSets',
    '/produktet-sunscreens'=>'Sunscreen',
];

$db = connectDb();
$pageTitle;

$path = parse_url($_SERVER["REQUEST_URI"])['path'];
if(array_key_exists($path, $productPages)) {
    $pageTitle = $productPages[$path];
}

$products = $db->query("SELECT * FROM products WHERE category = :category", 
    [":category" => $pageTitle]
)->findAll();

require "./views/{$path}.view.php";
