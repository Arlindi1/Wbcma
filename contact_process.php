<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Database connection
    $conn = new mysqli("localhost", "root", "12345678", "registration_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Contact Confirmation</title>
            <link rel='stylesheet' href='style.css'>
        </head>
        <body>
            <div class='confirmation-wrapper'>
                <div class='confirmation-message'>
                    <h2>Thank you for contacting us!</h2>
                    <p>We will get back to you soon.</p>
                    <a href='index.php' class='btn'>Return to Home</a>
                </div>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
