<?php
session_start();
$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch published abstracts
$abstracts_sql = "SELECT * FROM registrations WHERE is_published = 1";
$abstracts_result = $conn->query($abstracts_sql);

if (!$abstracts_result) {
    die("Error executing query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Published Abstracts</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="authentication_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="../index.php"><img src="../images/icon.png" alt="Conference Logo"></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="../conference.php"><i class="fas fa-info-circle"></i> Conference Info</a></li>
                    <li><a href="../proceeding.php"><i class="fas fa-book"></i> Proceeding</a></li>
                    <li><a href="../venue.php"><i class="fas fa-map-marker-alt"></i> Venue</a></li>
                    <li><a href="../participants.php"><i class="fas fa-users"></i> Participants</a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="../admin/admin_login.php"><i class="fas fa-user-shield"></i> Admin</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="my_registrations.php">My Registrations</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Published Abstracts</h1>
        <?php if ($abstracts_result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>University</th>
                    <th>Type</th>
                    <th>Abstract Title</th>
                    <th>Abstract File</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $abstracts_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['university']; ?></td>
                    <td><?php echo $row['presentation_type']; ?></td>
                    <td><?php echo $row['abstract_title']; ?></td>
                    <td><a href="../uploads/<?php echo $row['abstract_file']; ?>" target="_blank">Download</a></td>
                    <td><a href="review_form.php?abstract_id=<?php echo $row['id']; ?>" class="review">Review</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>No published abstracts found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
