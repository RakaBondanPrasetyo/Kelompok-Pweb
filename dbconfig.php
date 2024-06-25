<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=halaman_login', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'Auth.php';

$user = new Auth($con);
