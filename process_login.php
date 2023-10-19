<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You should validate the user's input and check credentials in your database.
    // This is a simplified example; replace with secure database queries.

    // Sample user data (replace with your database query)
    $savedEmail = "user@example.com";
    $savedPassword = "hashed_password"; // The hashed password from the database

    if ($email === $savedEmail && password_verify($password, $savedPassword)) {
        // Login successful
        $_SESSION["user"] = $email; // Store user information in a session
        header("Location: welcome.php"); // Redirect to a welcome page
        exit;
    } else {
        echo "Invalid email or password. Please try again.";
    }
}
?>
