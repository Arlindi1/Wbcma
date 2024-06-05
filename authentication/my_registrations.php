<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM registrations WHERE email = (SELECT email FROM users WHERE id = $user_id)";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Registrations</title>
    <link rel="stylesheet" href="authentication_style.css">
        <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome-free-6.4.2-web/css/all.min.css">

</head>
<body>
    <?php include '../header.php'; ?>
    <div class="container">
        <div class="header">
            <h1>My Registrations</h1>
        </div>
        <div class="table-container">
            <div class="table-title">Registrations</div>
            <table class="full-width">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>University</th>
                        <th>Presentation Type</th>
                        <th>Abstract Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['university']; ?></td>
                            <td><?php echo $row['presentation_type']; ?></td>
                            <td><?php echo $row['abstract_title']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
