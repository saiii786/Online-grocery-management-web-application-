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
    if (isset($_POST['form_type'])) {
        $form_type = $_POST['form_type'];

        if ($form_type == 'signup') {
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
                echo "All fields are required.";
            } elseif ($password !== $confirm_password) {
                echo "Passwords do not match.";
            } else {
                $stmt_check_email = $conn->prepare("SELECT id FROM users WHERE email = ?");
                $stmt_check_email->bind_param("s", $email);
                $stmt_check_email->execute();
                $result = $stmt_check_email->get_result();

                if ($result->num_rows > 0) {
                    echo "Email address already exists.";
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $stmt_insert_user = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
                    $stmt_insert_user->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

                    if ($stmt_insert_user->execute()) {
                        echo "Sign up successful!";
                        header("Location: home.php");
                    } else {
                        echo "Error: " . $stmt_insert_user->error;
                    }

                    $stmt_insert_user->close();
                }

                $stmt_check_email->close();
            }
        } elseif ($form_type == 'login') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "Email and Password are required.";
            } else {
                $stmt_check_email = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
                $stmt_check_email->bind_param("s", $email);
                $stmt_check_email->execute();
                $result = $stmt_check_email->get_result();

                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    if (password_verify($password, $user['password'])) {
                        echo "Login successful!";
                        header("Location: home.php");
                    } else {
                        echo "Invalid email or password.";
                    }
                } else {
                    echo "Invalid email or password.";
                }

                $stmt_check_email->close();
            }
        }
    } else {
        echo "Invalid form submission.";
    }
}

$conn->close();
?>
