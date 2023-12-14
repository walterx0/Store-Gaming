<?php
// Include the database connection
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL to insert data into the table (assuming your table is named 'contacts')
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // If accessed without form submission, redirect to the contact form
    header("Location: contact_us.php");
    exit();
}

// Close the database connection
$conn->close();
?>
