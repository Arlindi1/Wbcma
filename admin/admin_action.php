<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");

$id = $_POST['id'];
$action = $_POST['action'];

if ($action == "approve") {
    $sql = "UPDATE registrations SET status='approved' WHERE id=$id";
} elseif ($action == "reject") {
    $sql = "UPDATE registrations SET status='rejected' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: admin_dashboard.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
