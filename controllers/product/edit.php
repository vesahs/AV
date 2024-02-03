<?php 

$db = connectDb();
$productId = $_GET['id'];

$product = $db->query("SELECT * FROM products WHERE id = :id",
    [':id' => $productId]
)->findOrFail();

require './views/product-edit.view.php';