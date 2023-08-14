<?php

//$pdo = require_once 'connect.php';
//
//$sql = 'SELECT username, password FROM credentials';
//
//$statement = $pdo->query($sql);
//
//while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
//    echo $row['username'] . '<br>';
//}

$pdo = require 'connect.php';

if (!$pdo instanceof PDO) {
    die("Error: Connection failed."); // Handle the case where $pdo is not a valid PDO object
}

$sql = "SELECT * FROM credentials";

$statement = $pdo->query($sql);

if (!$statement) {
    die("Error: Query failed."); // Handle query failure
}

$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    foreach ($publishers as $publisher) {
        echo $publisher['username'] . '<br>';
    }
} else {
    echo "No publishers found.";
}