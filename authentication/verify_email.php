<?php
$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT * FROM users WHERE verification_token='$token' AND email_verified=0";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE users SET email_verified=1 WHERE verification_token='$token'";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='verification-container'>
                    <h1>Email Verified</h1>
                    <p>Your email has been successfully verified. You can now <a href='login.php'>login</a>.</p>
                  </div>";
        } else {
            echo "<div class='verification-container'>
                    <h1>Error</h1>
                    <p>There was an error updating your record: " . $conn->error . "</p>
                  </div>";
        }
    } else {
        echo "<div class='verification-container'>
                <h1>Invalid Token</h1>
                <p>The token provided is invalid or the email has already been verified.</p>
              </div>";
    }
} else {
    echo "<div class='verification-container'>
            <h1>No Token Provided</h1>
            <p>No token was provided for verification.</p>
          </div>";
}

$conn->close();
?>
