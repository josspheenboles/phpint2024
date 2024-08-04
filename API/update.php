
<?php
header('Content-Type: application/json');
require 'config.php';

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    try {
        $sql = "UPDATE trainee SET username=?, email=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $email, $id]);

        $response = [
            "status" => "success",
            "message" => "Record updated successfully"
        ];
    } catch (PDOException $e) {
        $response = [
            "status" => "error",
            "message" => $e->getMessage()
        ];
    }
} else {
    $response = [
        "status" => "error",
        "message" => "Invalid request method"
    ];
}

echo json_encode($response);
?>

