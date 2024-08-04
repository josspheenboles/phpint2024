<?php
try {
    define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123");
define("DB_DATABASE", "phpdemo");
    $conn2 = new mysqli (DB_HOST, DB_USER,
    DB_PASSWORD, DB_DATABASE,3308);
    // #escaped seq used to make data comptable
    // with mySQL but not securing it
    $welcometext='welcome to oop';
    $escaped =$conn2->real_escape_string ($welcometext);
    if ($conn2->connect_errno) {
    trigger_error($conn2->connect_error);
    printf("Connect failed: %s\n", $conn2->connect_error);
    exit();
    }
    else
    {
        $sql = 'INSERT INTO trainee (username, password)
    VALUES ("'.$_POST['username'].'","'.$_POST['password'].'")';
 
        if($conn2->query($sql)){
            echo "New record created successfully using oop"."<br>";
            }else{
            echo "Error: " . $sql . "<br>" .$conn2->connect_error;
            }
    }
    } catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>