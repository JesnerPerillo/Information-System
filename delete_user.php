<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST["user_id"];

    $sql = "DELETE FROM users WHERE id=$userID";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
        header("Location: database.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$conn->close();
?>
