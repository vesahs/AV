<?php
$db = connectDb();
require './Validator.php';

$target_dir = "resources/images/";
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    $errors = [];
    $product = $_POST;
    
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $url = './'.$target_file;

    if(file_exists($target_file)){
        $errors['image'] = 'file exists';
    }

    if(!Validator::isEmptyString($product['title'])) {
        $errors['title'] = "title is required";
    }

    if(!Validator::isEmptyString($product['price'] || Validator::isNumber($product['price']))) {
        $errors['price'] = "price is required and it should be a number";
    }

    if(!Validator::isEmptyString($product['decription'])) {
        $errors['decription'] = "decription is required";
    }

    if(!Validator::isEmptyString($_FILES["image"]["name"])) {
        $errors['image'] = "image is required";
    }

    if(!Validator::isEmptyString($product['category'])) {
        $errors['category'] = "category is required";
    }

    if(empty($errors)){
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $db->query("INSERT INTO products(title, price, decription, image, created_by, category) VALUES(
            '{$product['title']}', {$product['price']}, '{$product['decription']}', '{$url}', 1, '{$product['category']}' )"
        );
        $product = [];
        header('location: /products');
        exit();
    }


}

require './views/product-create.view.php';
