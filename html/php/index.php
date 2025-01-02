<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$host = 'database'; // Or server IP
$username = 'mysqluser'; // Replace with your database username
$password = 'password'; // Replace with your database password
$dbname = 'contact_form_db'; // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;

// Basic validation to check if fields are not empty
if (!empty($name) && !empty($email) && !empty($message)) {

    // Prepare SQL query to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    
    // Bind parameters to the SQL query (sss stands for string, string, string)
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute query
    if ($stmt->execute()) {
        echo "Contact details submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "All fields are required.";
}

// Close the connection
$conn->close();
?>
