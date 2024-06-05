<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Website</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
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
    <div class="main-container">
        <main class="main-content">
            <section class="text-section">
                <div class="text">
                    <h1>About the Conference</h1>
                    <p>Western Balkan Conference in Mathematics and Applications, (WBCMA2023) is aimed to bring researchers and professionals 
                    to discuss recent developments in both theoretical and applied mathematics and to create a professional knowledge exchange platform between mathematicians.</p>
                    <a href="text.php" class="button">Learn More</a>
                </div>
                <div class="text">
                    <h1>Scopus</h1>
                    <p>The participants are invited to submit their on-page abstract on the related, but not limited, following topics of 
                    interest: Numerical Analysis, Ordinary and Partial Differential Equations, Boundary Value Problems, Approximation Theory, etc.
                    Sequence Spaces and Summability Theory, Real Analysis, Functional Analysis, Fixed Point Theory, Optimization, Topology, 
                       Geometry, Computational Geometry, Differential Geometry, Algebra, Applied Algebra, Group Theory, Semi-Group Theory,
                       Combinatorics, Complex Analysis, Fuzzy Sequence Spaces and its Applications, Operational Research, Optimization Techniques, 
                       Number Theory, Mathematical Education, Dynamic Systems and Chaos Theory, Biomathematics and Modeling, Soft Computing, 
                       Cryptology and Security Analysis, Image Processing, Scientific Computing etc.</p>
                </div>
                <div class="text">
                    <h1>Face to Face</h1>
                    <p>The methodology of organizing Face to Face conferences will help participants to meet each other in physical form which is the best way of communication, cooperation and further extending of the knowledge's and experiences between each other.</p>
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
            <div class="sidebar-item">
                <h3>Honorary Chair</h3>
                <p>Naim L. Braha, University of Prishtina</p>
                <p>Agron Tato, Polytechnic University of Tirana</p>
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
    <script src="main.js"></script>
</body>
</html>
