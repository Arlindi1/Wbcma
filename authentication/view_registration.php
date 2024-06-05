<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM registrations WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $registration = $result->fetch_assoc();
    echo "<h1>Registration Details</h1>";
    echo "<p><strong>Name:</strong> " . $registration['name'] . "</p>";
    echo "<p><strong>Email:</strong> " . $registration['email'] . "</p>";
    echo "<p><strong>Topic:</strong> " . $registration['topic'] . "</p>";
    // Add other fields as necessary
} else {
    echo "No registration found.";
}

$conn->close();
?>
