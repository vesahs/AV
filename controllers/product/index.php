<?php
    $db = connectDb();

    $pageTitle = 'Products';
    $products = $db->query("SELECT * FROM products")->findAll();

    require "./views/products.view.php";
    