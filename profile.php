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
    <title>Profile</title> 
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?> to your profile !</h1>
</body>
</html>
