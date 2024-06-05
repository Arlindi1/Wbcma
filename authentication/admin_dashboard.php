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

// Handle abstract publishing
if (isset($_GET['publish'])) {
    $registration_id = $_GET['publish'];
    $update_sql = "UPDATE registrations SET is_published = 1 WHERE id = $registration_id";
    if ($conn->query($update_sql) === TRUE) {
        echo "Abstract published successfully.";
    } else {
        echo "Error publishing abstract: " . $conn->error;
    }
    header("Location: admin_dashboard.php");
    exit();
}

if (isset($_GET['unpublish'])) {
    $registration_id = $_GET['unpublish'];
    $update_sql = "UPDATE registrations SET is_published = 0 WHERE id = $registration_id";
    if ($conn->query($update_sql) === TRUE) {
        echo "Abstract unpublished successfully.";
    } else {
        echo "Error unpublishing abstract: " . $conn->error;
    }
    header("Location: admin_dashboard.php");
    exit();
}

// Fetch registered users
$user_sql = "SELECT * FROM users";
$user_result = $conn->query($user_sql);

// Fetch registrations
$registration_sql = "SELECT * FROM registrations";
$registration_result = $conn->query($registration_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <a href="../index.php" class="home-link">Home</a>





























































































        <h2>Registered Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Verified</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $user_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['is_admin'] ? 'Yes' : 'No'; ?></td>
                    <td><?php echo $row['email_verified_at'] ? 'Yes' : 'No'; ?></td>
                    <td class="action-links">
                        <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                        <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <h2>Registrations</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>University</th>
                    <th>Type</th>
                    <th>Abstract Title</th>
                    <th>Status</th>
                    <th>Abstract File</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $registration_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['university']; ?></td>
                    <td><?php echo $row['presentation_type']; ?></td>
                    <td><?php echo $row['abstract_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <?php if ($row['abstract_file']): ?>
                            <a href="../uploads/<?php echo $row['abstract_file']; ?>" target="_blank" class="view-file">View File</a>
                        <?php else: ?>
                            <form action="upload_abstract.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="registration_id" value="<?php echo $row['id']; ?>">
                                <input type="file" name="abstract_file" required>
                                <button type="submit" class="btn btn-blue">Upload</button>
                            </form>
                        <?php endif; ?>
                    </td>
                    <td class="action-links">
                        <?php if ($row['is_published']): ?>
                            <a href="?unpublish=<?php echo $row['id']; ?>" class="unpublish">Unpublish</a>
                        <?php else: ?>
                            <a href="?publish=<?php echo $row['id']; ?>" class="publish">Publish</a>
                        <?php endif; ?>
                        <a href="approve_registration.php?id=<?php echo $row['id']; ?>" class="approve">Approve</a>
                        <a href="reject_registration.php?id=<?php echo $row['id']; ?>" class="reject">Reject</a>
                        <a href="delete_registration.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
