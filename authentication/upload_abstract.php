<?php
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../index.php");
    exit();
}

$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['abstract_file'])) {
    $registration_id = $_POST['registration_id'];
    $file_name = $_FILES['abstract_file']['name'];
    $file_tmp = $_FILES['abstract_file']['tmp_name'];
    $file_path = "../uploads/" . $file_name;

    if (move_uploaded_file($file_tmp, $file_path)) {
        $sql = "UPDATE registrations SET abstract_file = '$file_name' WHERE id = $registration_id";
        if ($conn->query($sql) === TRUE) {
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Failed to upload file.";
    }
}

// Fetch registrations
$registration_sql = "SELECT * FROM registrations";
$registration_result = $conn->query($registration_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Abstracts</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="container">
        <h1>Upload Abstracts</h1>
        <a href="admin_dashboard.php" class="back-link">Back to Dashboard</a>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="registration_id">Select Participant:</label>
            <select name="registration_id" id="registration_id" required>
                <?php while($row = $registration_result->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> - <?php echo $row['abstract_title']; ?></option>
                <?php endwhile; ?>
            </select>
            <label for="abstract_file">Upload Abstract File:</label>
            <input type="file" name="abstract_file" id="abstract_file" required>
            <button type="submit" class="btn btn-blue">Upload</button>
        </form>
    </div>
</body>
</html>
