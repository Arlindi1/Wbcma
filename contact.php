<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<div class="content-wrapper">
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="images/icon.png" alt="Conference Logo"></a>
            </div>
            <div class="nav-links">
            <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="conference.php"><i class="fas fa-info-circle"></i> Conference Info</a></li>
                    <li><a href="proceeding.php"><i class="fas fa-book"></i> Proceeding</a></li>
                    <li><a href="venue.php"><i class="fas fa-map-marker-alt"></i> Venue</a></li>
                    <li><a href="participants.php"><i class="fas fa-users"></i> Participants</a></li>
                    <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="admin/admin_login.php"><i class="fas fa-user-shield"></i> Admin</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <?php if ($_SESSION['is_admin'] == 1): ?>
                        <li><a href="authentication/admin_dashboard.php"><i class="fas fa-user-shield"></i> Admin Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="authentication/profile.php">Profile</a></li>
                    <li><a href="authentication/published_abstracts.php"><i class="fas fa-file-alt"></i> Published Abstracts</a></li>
                    <li><a href="authentication/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="authentication/login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container"> <!-- Begin Slider -->
    <div class="slider">
            <div class="slide slide-1 active" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 1</div>
            </div>
            <div class="slide slide-2" style="background-image: url('images/Newborn.jpg');">
                <div class="slide-title">Slide 2</div>
            </div>
            <div class="slide slide-3" style="background-image: url('images/Bibliotekaa.jpg');">
                <div class="slide-title">Slide 3</div>
            </div>
            <div class="slide slide-4" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 4</div>
            </div>
            <div class="slide slide-5" style="background-image: url('images/Prizreni.jpg');">
                <div class="slide-title">Slide 5</div>
            </div>
            <div class="slide slide-6" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 6</div>
            </div>
            <div class="slide slide-7" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 7</div>
            </div>
            <div class="slide slide-8" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 8</div>
            </div>
            <div class="slide slide-9" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 9</div>
            </div>
            <div class="slide slide-10" style="background-image: url('images/Skenderbeuu.jpg');">
                <div class="slide-title">Slide 10</div>
            </div>
        </div>
        <div class="buttons">
            <div class="arrow" id="arrow-left">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="arrow" id="arrow-right">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
    <div class="main-container contact-container">
        <section class="contact-section">
    <div class="contact-container">
        <h2>Contact</h2>
        <div class="contact-form-container">
        <form action="contact_process.php" method="POST">
            <div class="form-control">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required>
            </div>
            <div class="form-control">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
            <label for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-control">
            <label for="message">Message *</label>
            <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
        <div class="contact-image">
            <img src="images/contact_us.png" alt="Contact Image">
        </div>
        </div>
    </div>
    </section>


    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Venue</h3>
                <p>Grand Hall<br>City Center, Pristina, Kosovo</p>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3>
                <p>Email: info@conference.com<br>Phone: +123 456 7890</p>
            </div>
            <div class="footer-column">
                <img src="images/icon.png" alt="Conference Logo" class="footer-logo">
                <h3>Follow Us</h3>
                <div class="social-media-icons">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <p>© 2024 Conference Website, All rights reserved.</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>
