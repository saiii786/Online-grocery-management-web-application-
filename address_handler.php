<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
    $street = $_POST['street'];
    $colony = $_POST['colony'];
    $mandal = $_POST['mandal'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];

    $stmt = $conn->prepare("INSERT INTO addresses (name, mobile_number, street, colony, mandal, state, pincode) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $mobile_number, $street, $colony, $mandal, $state, $pincode);

    if ($stmt->execute()) {
        echo "Address saved successfully!";
        header("Location: payment.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
