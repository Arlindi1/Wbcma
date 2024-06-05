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

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "No user found.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="edit-user-container">
        <h1>Edit User</h1>
        <form action="update_user_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" class="short-input" required>
            </div>
            <div class="form-group">
                <label for="is_admin">Admin:</label>
                <input type="checkbox" id="is_admin" name="is_admin" <?php echo $user['is_admin'] ? 'checked' : ''; ?>>
            </div>
            <div class="form-group">
                <a href="change_password.php?id=<?php echo $user['id']; ?>" class="btn-link btn">Change Password</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-save">Save Changes</button>
            </div>
        </form>
        <a href="admin_dashboard.php" class="btn-back btn">Back to Dashboard</a>
    </div>
</body>
</html>
