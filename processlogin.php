<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to the index.php page after successful login
        exit();
    } else {
        $_SESSION['login_error'] = "Login failed. Please check your credentials.";
        header("Location: login.php"); // Redirect back to the login page
        exit();
    }
}
?>
