<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$url = parse_url("mysql://uo6kzkjyvsbyo5pv:sburww1ly6qy8kz2@thh2lzgakldp794r.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/jrpg28n7zvcevq5t");

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = ltrim($url["path"], '/');
$port = $url["port"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_GET['email'];

// Generate a new unique verification code
$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

$sql = "UPDATE users SET verification_code='$verification_code' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    // Send verification email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'arlind1arifaj@gmail.com';
        $mail->Password   = 'lgzu oqdi opfm lvbg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('arlind1arifaj@gmail.com', 'Mailer');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Email verification';
        $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
        $mail->AltBody = 'Your verification code is: ' . $verification_code;

        $mail->send();
        header("Location: email_verification.php?email=" . $email);
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
