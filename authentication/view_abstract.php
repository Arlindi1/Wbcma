<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$abstract_id = $_GET['abstract_id'];
$sql = "SELECT * FROM registrations WHERE id = $abstract_id";
$abstract_result = $conn->query($sql);
$abstract = $abstract_result->fetch_assoc();

$review_sql = "SELECT * FROM reviews WHERE abstract_id = $abstract_id";
$review_result = $conn->query($review_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Abstract</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $abstract['abstract_title']; ?></h1>
    <p><?php echo $abstract['abstract_file']; ?></p>

    <h2>Reviews</h2>
    <?php while($review = $review_result->fetch_assoc()): ?>
    <div class="review">
        <p><?php echo $review['review_text']; ?></p>
        <p>Rating: <?php echo $review['rating']; ?></p>
        <p>Reviewed by: <?php echo $review['reviewer_id']; ?></p>
    </div>
    <?php endwhile; ?>
</body>
</html>
