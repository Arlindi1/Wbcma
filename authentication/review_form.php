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

$abstract_id = $_GET['abstract_id'];
$sql = "SELECT * FROM registrations WHERE id = $abstract_id";
$result = $conn->query($sql);
$abstract = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Abstract</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Review Abstract</h1>
    <h2><?php echo $abstract['abstract_title']; ?></h2>
    <p><?php echo $abstract['abstract_file']; ?></p>

    <form action="submit_review.php" method="POST">
        <input type="hidden" name="abstract_id" value="<?php echo $abstract['id']; ?>">
        <textarea name="review_text" required></textarea>
        <input type="number" name="rating" min="1" max="5" required>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>

















































































































