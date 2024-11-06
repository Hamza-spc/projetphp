<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>! this is the home page</h1>
    <p>Thank you for logging in. You can navigate using the menu above.</p>
</body>
</html>

