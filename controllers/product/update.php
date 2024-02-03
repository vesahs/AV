<?php

$db = connectDb();
require './Validator.php';

    
$errors = [];
$product = $_POST;

if(Validator::isEmptyString($product['title'])) {
    $errors['title'] = "title is required";
}

if(Validator::isEmptyString($product['price'] || Validator::isNumber($product['price']))) {
    $errors['price'] = "price is required and it should be a number";
}

if(Validator::isEmptyString($product['decription'])) {
    $errors['decription'] = "decription is required";
}

if(Validator::isEmptyString($product["image"])) {
    $errors['image'] = "image is required";
}

if(Validator::isEmptyString($product['category'])) {
    $errors['category'] = "category is required";
}

if(empty($errors)){
    $db->query("UPDATE products set title = '{$product['title']}', price = {$product['price']}, decription = '{$product['decription']}', image = '{$product['image']}', created_by = 1, category ='{$product['category']}' WHERE id = {$product['id']}");
    header('location: /products');
    exit();
}
