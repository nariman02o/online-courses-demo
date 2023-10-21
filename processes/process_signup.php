
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // Password validation: at least 8 characters, one symbol, and one number
    if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[!@#$%^&*()_+{}[\]:;<>,.?~\\-=]/', $password)) {
        echo "Password must be at least 8 characters long and contain at least one letter, one number, and one symbol.";
    } else {
        // Password is valid, proceed to save data to the database.
        
        //  database connection using PDO:
        $dsn = "mysql:host=localhost;dbname=online_courses";
        // Insert the user's data into your database table.

        $username = "username";

        $password = "user_password";

        try {
            $db = new PDO($dsn, $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $sql = "INSERT INTO User (username, user_email, user_password) VALUES (:name, :email, :password)";
            $stmt = $db->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $hashedPassword); // Hashed password

            // Execute the statement
            $stmt->execute();

            echo "User registered successfully!";

            // Insert successful, redirect to the login page
            header("Location: login.php"); 
            exit; // Ensure that no further code is executed after the header redirect
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>