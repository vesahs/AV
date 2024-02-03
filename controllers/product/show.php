<?php 

$db = connectDb();

$id = $_GET['id'];

$product = $db->query("SELECT * FROM products WHERE id = :id",
    [':id' => $id]
)->findOrFail();

require './views/product.view.php';
