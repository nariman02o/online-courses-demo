<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $login_email = $_POST["login_email"];
    $login_password = $_POST["login_password"];

    // Database connection settings (update these with your actual database details)
    $dsn = "mysql:host=localhost;dbname=online_courses";
    $username = "your_username"; // Your database username
    $password = "your_password"; // Your database password

    try {
        // Create a PDO database connection
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query the database to retrieve user information based on the provided email
        $sql = "SELECT * FROM user WHERE user_email = :login_email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login_email', $login_email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($login_password, $user['user_password'])) {
                // Password is correct; user is authenticated
                echo "Login successful!"; // You can redirect the user to the dashboard or another page here.
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
