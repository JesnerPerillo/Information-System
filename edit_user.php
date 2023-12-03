<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST["user_id"];
    $newUsername = $_POST["new_username"];
    $newEmail = $_POST["new_email"];
    $newPassword = $_POST["new_password"];

    $sql = "UPDATE users SET username='$newUsername', email='$newEmail', password='$newPassword' WHERE id=$userID";

    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully";
        header("Location: database.php");
    } else {
        echo "Error updating user information: " . $conn->error;
    }
}

$conn->close();
?>
