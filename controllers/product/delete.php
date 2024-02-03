<?php

$db = connectDb();

$db->query("DELETE FROM products WHERE id = {$_POST['id']}");
header('location: /products');
exit();