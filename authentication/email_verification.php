<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    <link rel="stylesheet" href="authentication_style.css">
</head>
<body>
    <div class="email_verification-container">
        <h1>Email Verification</h1>
        <p>Enter the verification code sent to your email. If you didn't receive the code, <a href="resend_verification_code.php?email=<?php echo $_GET['email']; ?>">click here to send again</a>.</p>
        <form action="verify_code.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <div class="verification-form-group">
                <label for="verification_code">Verification Code</label>
                <input type="text" id="verification_code" name="verification_code" placeholder="Enter verification code" required>
            </div>
            <button type="submit" class="btn">Verify Email</button>
        </form>
        <a href="register_user.php" class="back-btn">Back to Register</a>
    </div>
</body>
</html>
