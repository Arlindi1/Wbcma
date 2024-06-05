<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email']) && isset($_POST['verification_code'])) {
    $email = $_POST['email'];
    $verification_code = $_POST['verification_code'];

    $sql = "SELECT * FROM users WHERE email='$email' AND verification_code='$verification_code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE users SET email_verified_at=NOW() WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Email verified successfully. You can now <a href='login.php'>login</a>.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid verification code.";
    }
} else {
    echo "Verification code and email are required.";
}

$conn->close();
?>
