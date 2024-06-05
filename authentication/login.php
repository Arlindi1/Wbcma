<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="authentication_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-form-container">
            <a href="../index.php" class="logo-link"><img src="../images/icon.png" alt="Conference Logo" class="logo-image"></a>
            <h1>User Login</h1>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>Don't have an account? <a href="register_user.php">Register here</a></p>
            </form>
        </div>
        <div class="promo-container">
            <img src="../images/Biblioteka.jpg" alt="Promo Image" class="promo-image">
            <div class="promo-content">
                <h3>Welcome Back!</h3>
                <p>Log in to access your conference materials and schedule.</p>
            </div>
        </div>
    </div>
</body>
</html>
