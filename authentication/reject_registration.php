<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "UPDATE registrations SET status='rejected' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: admin_dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
