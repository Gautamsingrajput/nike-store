<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Change if you set a different username
$password = ""; // Change if you set a password
$database = "nike_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$card_number = $_POST['card_number'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];

// Insert data into database
$sql = "INSERT INTO payments (name, phone, address, card_number, exp_month, exp_year, cvv)
        VALUES ('$name', '$phone', '$address', '$card_number', '$exp_month', '$exp_year', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "Payment information saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
