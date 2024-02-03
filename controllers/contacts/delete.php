<?php

$db = connectDb();

$db->query("DELETE FROM contact_us WHERE id = {$_POST['id']}");
header('location: /contacts');