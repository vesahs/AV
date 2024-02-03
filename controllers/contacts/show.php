<?php

$db = connectDb();

$pageTitle = 'Messages';
$messages = $db->query("SELECT * FROM contact_us")->findAll();

require "./views/messages.view.php";