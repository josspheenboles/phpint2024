// update.php
<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username=?, email=? WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$username, $email, $id]);

    echo "Record updated successfully";
}
