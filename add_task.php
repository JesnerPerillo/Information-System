<?php
session_start();

// Check if the task is provided
if (isset($_POST['task'])) {
    $task = $_POST['task'];

    // Initialize tasks array if not already set
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    // Add the task to the array
    $_SESSION['tasks'][] = $task;
}

// Redirect back to the main page
header("Location: task.php");
exit();
