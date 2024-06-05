<?php
session_start();

$admin_username = "Arlindi";
$admin_password = "12345678";

if ($_POST['username'] == $admin_username && $_POST['password'] == $admin_password) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin_dashboard.php");
} else {
    echo "Invalid credentials.";
}
?>
