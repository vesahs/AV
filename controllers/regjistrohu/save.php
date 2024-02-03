<?php
require './Validator.php';

$user = $_POST;
$errors = [];

if(!Validator::isEmail($user['email'])){
    $errors['email'] = 'Please provide an email';
}

if(!Validator::isString($user['password'], 7, 12)){
    $errors['password'] = 'Password should contain 8 or more characters';
}

if(!Validator::isNumber($user['phone'])){
    $errors['phone'] = 'Please provide an phone number';
}

if(!empty($errors)){
    view('./views/regjistrohu.view.php', [
        'errors' => $errors
    ]);
}

$db = connectDb();

$result = $db->query("SELECT * FROM users WHERE username = '{$user['username']}' OR email = '{$user['email']}'")->findOne();

if($result) {
    $errors['email'] = "this email already exists";
}

if($result) {
    $errors['username'] = "this username already exists";
}

if(!empty($errors)){
    view('./views/regjistrohu.view.php', [
        'errors' => $errors,
    ]);
} else {
    $db->query("INSERT INTO users(username, password, email, phone, role) VALUES ('{$user['username']}', '{$user['password']}', '{$user['email']}', {$user['phone']}, 'basic')");
    
    $_SESSION['user'] = [
        'username' => $user['username'],
        'role' => 'basic'
    ];
    
    header('location: /index');
}