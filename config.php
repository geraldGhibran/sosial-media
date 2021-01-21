<?php

$db_host = "dbpesbuk.cuwwjpy0lh65.ap-southeast-1.rds.amazonaws.com";
$db_user = "root";
$db_pass = "masukaja";
$db_name = "dbsosmed";
// asdda
//test
//Yhhhh ini commecnt

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
