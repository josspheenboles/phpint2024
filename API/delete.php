

<?php
header('Content-Type: application/json');
require 'config.php';

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM trainee WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id]);

        $response = [
            "status" => "success",
            "message" => "Record deleted successfully"
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
