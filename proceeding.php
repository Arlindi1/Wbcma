<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceeding</title>
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
        <div class="main-container">
            <main class="main-content">
                <section class="text-section">
                    <div class="text">
                        <h1>Conference Proceeding Book</h1>
                        <p>The peer-reviewed abstracts of all accepted presentations will be published in the conference abstracts book.</p>
                        <a href="https://res.cloudinary.com/dxqjz3nlo/image/upload/v1702830628/Proceeding_abstract_odqajb.pdf" class="proceeding-link" target="_blank">Proceeding abstract book</a>
                        <a href="https://res.cloudinary.com/dxqjz3nlo/image/upload/v1702839109/Proceeding_full_paper_db3qku.pdf" class="proceeding-link" target="_blank">Proceeding full paper book</a>
                    </div>
                    <div class="text">
                        <h1>Proceeding Special Issues</h1>
                        <p>After the referee evaluation process, accepted full papers, which will be presented in oral form, will be published in the "Proceedings Book of the WBCMA-2023", with ISBN number. Also, the full versions of the papers presented in the conference will have the possibility to be published in the following journals after undergoing a review process, with 30% discount:</p>
                        <ul class="proceeding-links">
                            <li><a href="http://bmathaa.org/" target="_blank">Bulletin of Mathematical Analysis and Applications (Indexed in Web of Science and Scopus)</a></li>
                            <li><a href="http://ilirias.com/jma/" target="_blank">Journal of Mathematical Analysis (Indexed in Web of Science and Scopus)</a></li>
                            <li><a href="http://ilirias.com/jaca/" target="_blank">Journal of Algebra and Computational Applications</a></li>
                            <li><a href="http://joamac.com/" target="_blank">Journal of Applied Mathematics and Computing with Application</a></li>
                            <li><a href="http://ilirias.com/fmaa/" target="_blank">Financial Mathematics and Applications</a></li>
                            <li><a href="http://ilirias.com/jsaa/" target="_blank">Journal of Statistics and Applications</a></li>
                            <li><a href="http://ilirias.com/jiasf/" target="_blank">Journal of Inequalities and Special Functions (Indexed in Web of Science and Scopus)</a></li>
                            <li><a href="http://ilirias.com/ijm/" target="_blank">Ilirias Journal of Mathematics</a></li>
                        </ul>
                    </div>
                </section>
            </main>
            <aside class="sidebar">
                <div class="sidebar-item">
                    <h3>Files</h3>
                    <a href="path/to/file.pdf" download>
                        Sample-file-2023 <i class="fa fa-download"></i>
                    </a>
                </div>
                <div class="sidebar-item">
                    <h3>Venue</h3>
                    <p>Test Venue</p>
                </div>
                <div class="sidebar-item">
                    <h3>Sponsors</h3>
                    <div class="sponsor">
                        <img src="images/UP.png" alt="University of Prishtina">
                        <span>University of Prishtina</span>
                    </div>
                    <div class="sponsor">
                        <img src="images/icon.png" alt="Ilirias Research Institute">
                        <span>Ilirias Research Institute</span>
                    </div>
                </div>
            </aside>
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
    </div>
    <script src="main.js"></script>
</body>
</html>
