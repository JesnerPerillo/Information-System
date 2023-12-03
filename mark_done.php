<?php
session_start();

// Check if the index is provided
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Check if the index is valid
    if (isset($_SESSION['tasks'][$index])) {
        // Mark the task as done by adding a prefix
        $_SESSION['tasks'][$index] = "✅ " . $_SESSION['tasks'][$index];
    }
}

// Redirect back to the main page
header("Location: task.php");
exit();
