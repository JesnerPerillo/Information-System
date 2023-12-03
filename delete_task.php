<?php
session_start();

// Check if the index is provided
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Check if the index is valid
    if (isset($_SESSION['tasks'][$index])) {
        // Remove the task from the array
        unset($_SESSION['tasks'][$index]);
        // Reset array keys to ensure they are sequential
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}

// Redirect back to the main page
header("Location: task.php");
exit();
