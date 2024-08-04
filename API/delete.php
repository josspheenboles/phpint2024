// delete.php
<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM trainee WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo "Record deleted successfully";
}
