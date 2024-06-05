<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin/admin_login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, name, surname, university, presentation_type, abstract_title, status FROM registrations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>Admin Dashboard</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>University</th>
            <th>Type</th>
            <th>Abstract Title</th>
            <th>Situation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title'] . ' ' . $row['name'] . ' ' . $row['surname']; ?></td>
                <td><?php echo $row['university']; ?></td>
                <td><?php echo $row['presentation_type']; ?></td>
                <td><?php echo $row['abstract_title']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <form action="admin_action.php" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="action" value="approve">Approve</button>
                        <button type="submit" name="action" value="reject">Reject</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>

<?php
$conn->close();
?>
