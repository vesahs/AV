<?php

$forma = $_POST;
$db = connectDb();

$query = 'INSERT INTO contact_us (';
$index = 0;
forEach($forma as $key => $value) {
    if($index < count($forma)-1)
        $query .= "{$key}, ";
    else {
        $query .= "{$key}) ";
    }
    $index++;
}

$query.= 'VALUES (';
$index=0;
forEach($forma as $value){
    if($index < count($forma)-1)
        $query .="'{$value}', ";
    else{
        $query .= "'{$value}') ";
    }
    $index++;
}

$db->query($query);
header("Location: /index");
exit();