<?php

$db_host = "10.0.1.126";
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
