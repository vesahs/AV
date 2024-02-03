<?php 

$db = connectDb();


$content = $db->query('SELECT * FROM about_us')->findAll()[0];
require './views/about.view.php';