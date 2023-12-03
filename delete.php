<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Delete User</h2>
    <form method="post" action="delete_user.php">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>
        <button type="submit">Delete User</button>
    </form>
</body>
</html>