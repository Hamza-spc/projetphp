<?php
include('validate.php');
if (!isset($_POST['submit'])) {
    echo "<p style='color: red;'>Please log in.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label>Username:</label>
        <input type="text" name="username">
        <span style="color: red;"><?php echo $usernameError; ?></span><br>

        <label>Email:</label>
        <input type="email" name="email">
        <span style="color: red;"><?php echo $emailError; ?></span><br>

        <label>Phone:</label>
        <input type="text" name="phone">
        <span style="color: red;"><?php echo $phoneError; ?></span><br>

        <label>Password:</label>
        <input type="password" name="password">
        <span style="color: red;"><?php echo $passwordError; ?></span><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">
        <span style="color: red;"><?php echo $confirmPasswordError; ?></span><br>

        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
