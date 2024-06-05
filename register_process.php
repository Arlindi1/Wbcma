<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();

$conn = new mysqli("localhost", "root", "12345678", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$university = $_POST['university'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$topic = $_POST['topic'];
$presentation_type = $_POST['presentation_type'];
$abstract_title = $_POST['abstract_title'];
$abstract_file = $_FILES['abstract_file']['name'];
$accommodation_type = $_POST['accommodation_type'];
$room_type = $_POST['room_type'];
$accompanying_persons = $_POST['accompanying'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["abstract_file"]["name"]);
move_uploaded_file($_FILES["abstract_file"]["tmp_name"], $target_file);

$user_id = $_SESSION['user_id']; // Ensure user_id is taken from session

$sql = "INSERT INTO registrations (title, name, surname, university, email, phone, department, topic, presentation_type, abstract_title, abstract_file, accommodation_type, room_type, accompanying, check_in_date, check_out_date, status, user_id)
VALUES ('$title', '$name', '$surname', '$university', '$email', '$phone', '$department', '$topic', '$presentation_type', '$abstract_title', '$abstract_file', '$accommodation_type', '$room_type', '$accompanying_persons', '$check_in_date', '$check_out_date', 'pending', '$user_id')";

if ($conn->query($sql) === TRUE) {
    // Send confirmation email
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Disable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arlind1arifaj@gmail.com';
        $mail->Password = 'lgzu oqdi opfm lvbg'; // Use the app password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('arlind1arifaj@gmail.com', 'Conference Registration');
        $mail->addAddress($email, "$title $name $surname");

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        $mail->Body = "
            <h1>Thank you for registering!</h1>
            <p>Dear $title $name $surname,</p>
            <p>Thank you for registering for our conference. Here are your details:</p>
            <ul>
                <li><strong>Name:</strong> $title $name $surname</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>University:</strong> $university</li>
                <li><strong>Department:</strong> $department</li>
                <li><strong>Topic:</strong> $topic</li>
                <li><strong>Presentation Type:</strong> $presentation_type</li>
                <li><strong>Abstract Title:</strong> $abstract_title</li>
                <li><strong>Accommodation Type:</strong> $accommodation_type</li>
                <li><strong>Room Type:</strong> $room_type</li>
                <li><strong>Accompanying Persons:</strong> $accompanying_persons</li>
                <li><strong>Check-in Date:</strong> $check_in_date</li>
                <li><strong>Check-out Date:</strong> $check_out_date</li>
            </ul>
            <p>We look forward to seeing you at the conference.</p>
            <p>Best regards,<br>Conference Team</p>
        ";

        $mail->send();
        header("Location: participants.php"); // Redirect only if email is sent successfully
        exit();
    } catch (Exception $e) {
        echo "Registration successful. Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
