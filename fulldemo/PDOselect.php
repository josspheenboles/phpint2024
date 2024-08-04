<?php

try {

   
        define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "phpdemo");

    $dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';port=3308;';
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    $query= "SELECT * FROM trainee";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchAll();
    
    foreach($result as $row)
    {
        print_r($row);
    }
    }catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>