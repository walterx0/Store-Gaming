<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$new_username', '$new_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
        header("Location: login.php"); // Redirect to the index.php page after successful login

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
