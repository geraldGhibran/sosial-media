<?php

$db_host = "localhost";
$db_user = "devopscilsy";
$db_pass = "1234567890";
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
