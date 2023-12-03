<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit/Delete User</title>
</head>
<body>
    <h2>Edit User Information</h2>
    <form method="post" action="edit_user.php">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>

        <label for="new_username">New Username:</label>
        <input type="text" name="new_username" required>

        <label for="new_email">New Email:</label>
        <input type="email" name="new_email" required>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required>

        <button type="submit" class="submit-button">Update User</button>
    </form>
</body>
</html>
