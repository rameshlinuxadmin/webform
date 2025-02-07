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
    die("<div style='padding: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; font-family: Arial, sans-serif;'>
            <strong>Error:</strong> Connection failed: " . $conn->connect_error . "
         </div>");
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
        echo "<div style='padding: 20px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; font-family: Arial, sans-serif;'>
                <strong>Success:</strong> Contact details submitted successfully.
             </div>";
    } else {
        echo "<div style='padding: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; font-family: Arial, sans-serif;'>
                <strong>Error:</strong> " . $stmt->error . "
             </div>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<div style='padding: 20px; background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 5px; font-family: Arial, sans-serif;'>
            <strong>Warning:</strong> All fields are required.
         </div>";
}

// Close the connection
$conn->close();
?>
