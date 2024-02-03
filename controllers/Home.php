<?php 

$db = connectDb();

$content = $db->query('SELECT * FROM home')->findAll()[0];

require './views/home.view.php';
