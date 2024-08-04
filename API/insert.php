
<?php
header('Content-Type: application/json');
require 'config.php';

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO trainee (username, email) VALUES (?, ?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $email]);

        $response = [
            "status" => "success",
            "message" => "New record created successfully"
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
