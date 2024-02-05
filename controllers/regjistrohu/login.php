<?php 

$user = $_POST;
$db = connectDb();
$errors = [];

if(!$user) {
    require './views/login.view.php';
    exit();
}

$result = $db->query("SELECT * FROM users WHERE username = '{$user['username']}' AND password = '{$user['password']}'")->findOne();

if(!$result) {
    $errors['password'] = "this password might be wrong";
}

if(!$result) {
    $errors['username'] = "this username might be wrong";
}

if(empty($errors)){
    $_SESSION['user'] = [ 
        'username' => $result['username'],
        'role' => $result['role'],
    ];

    header('location: /index');
    exit();
} else {
    view('./views/login.view.php', [
        'errors' => $errors
    ]);
}
