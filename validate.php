<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $usernameError = $emailError = $phoneError = $passwordError = $confirmPasswordError = "";

    if (empty($username) || !preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
        $usernameError = "Invalid username (3-20 letters/numbers)";
    }
    if (empty($email) || !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        $emailError = "Invalid email format";
    }
    if (empty($phone) || !preg_match('/^[0-9]{10,15}$/', $phone)) {
        $phoneError = "Invalid phone number (10-15 digits)";
    }
    if (empty($password) || !preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
        $passwordError = "Password must be 8+ characters with letters and numbers";
    }
    if ($password !== $confirm_password) {
        $confirmPasswordError = "Passwords do not match";
    }

    if (empty($usernameError) && empty($emailError) && empty($phoneError) && empty($passwordError) && empty($confirmPasswordError)) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    }
}
