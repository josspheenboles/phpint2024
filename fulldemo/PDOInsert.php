<?php

try {
     
        define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "phpdemo");

    $dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';port=3308;';
    //create connection &n define dbms (mysql,postgresql.....)
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    $sql = 'INSERT INTO trainee (username, password)
    VALUES (?,?)';
    
 $stmt=$db->prepare($sql);
 var_dump($stmt);
 $stmt->execute([$_POST['username'],$_POST['password']]);
 
 $result=$stmt->rowCount();
 
 $id=$db->lastInsertId();
 echo '======='.$result;
}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>