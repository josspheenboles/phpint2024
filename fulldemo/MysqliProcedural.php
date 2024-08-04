<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123");
define("DB_DATABASE", "phpdemo");
try {
$conn = mysqli_connect(DB_HOST, 'root', DB_PASSWORD, DB_DATABASE, 3308);

// checking errors
if (mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{$sql = 'INSERT INTO trainee (username, password)
    VALUES ("'.$_POST['username'].'","'.$_POST['password'].'")';
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"."<br>";
    /*. */
    echo mysqli_insert_id($conn)."<br>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }}
} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

