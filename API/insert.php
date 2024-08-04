// insert.php
<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO trainee (username, email) VALUES (?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$username, $email]);

    echo "New record created successfully";
}
