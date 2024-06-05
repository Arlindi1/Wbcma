<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$abstract_id = $_POST['abstract_id'];
$reviewer_id = $_SESSION['user_id'];
$review_text = $_POST['review_text'];
$rating = $_POST['rating'];

$sql = "INSERT INTO reviews (abstract_id, reviewer_id, review_text, rating) VALUES ('$abstract_id', '$reviewer_id', '$review_text', '$rating')";

if ($conn->query($sql) === TRUE) {
    header("Location: admin_dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
