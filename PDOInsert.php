<?php
try {
    define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123");
define("DB_DATABASE", "phpdemo");
$dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';port=3308;';
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    var_dump($db);
    }catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>