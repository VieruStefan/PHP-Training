<?php
$pdo = require_once 'connect.php';

$credentials = $_POST['credentials'];
$name = $credentials['name'];
$pass = $credentials['pass'];

if(empty($name) || empty($pass)){
    echo "Name is empty";
} else {
    try{

        $sql = 'INSERT INTO credentials(username, password) VALUES (:name, :pass)';
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ':name' => $name,
            ':pass' => $pass
        ]);
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
}
