<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $cardholder_name = mysqli_real_escape_string($conn, $_POST['cardholder_name']);
    $card_number = mysqli_real_escape_string($conn, $_POST['card_number']);
    $expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);

    // Insert into database
    $sql = "INSERT INTO payment_details (cardholder_name, card_number, expiry_date, cvv, payment_method)
            VALUES ('$cardholder_name', '$card_number', '$expiry_date', '$cvv', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment details saved successfully.";
        // Redirect or perform further actions as needed
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>