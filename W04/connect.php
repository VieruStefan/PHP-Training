<?php
require 'config.php';
$dsn = "mysql:host=$host;dbname=$db;";
try{
    $pdo = new PDO($dsn, username: $user, password: $password);
    if($pdo){
        echo "Connected successfully!$db";
        return $pdo;
    }
} catch (PDOException $e){
    echo $e->getMessage();
}