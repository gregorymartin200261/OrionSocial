<?php
$dns = 'mysql:host=localhost;charset=utf8;dbname=moborion;port=3333';
$user = 'root';
$password = 'root';
$dbh = new PDO($dns, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
?>