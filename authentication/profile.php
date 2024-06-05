<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: authentication/login.php");
    exit();
}

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "12345678", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user registrations
$registration_sql = "SELECT * FROM registrations WHERE user_id = $user_id";
$registration_result = $conn->query($registration_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="authentication_style.css"> <!-- Ensure path is correct -->
    <link rel="stylesheet" href="../style.css"> <!-- Ensure path is correct -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- Include the main header here -->
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

    <div class="profile-container">
        <div class="profile-card">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>This is your profile page.</p>

            <h2>My Registrations</h2>
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
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $registration_result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['university']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['abstract_title']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <?php if ($row['abstract_file']): ?>
                                <a href="../uploads/<?php echo $row['abstract_file']; ?>" target="_blank">View File</a>
                            <?php else: ?>
                                No file uploaded
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
