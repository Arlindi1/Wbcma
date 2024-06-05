<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Info</title>
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
    <section class="content-section">
        <div class="speakers-section">
            <!-- Add your "Conference Info" content here -->
            <div class="tabs">
                <button class="tab-button active" data-tab="speakers">Speakers</button>
                <button class="tab-button" data-tab="important-dates">Important Dates</button>
                <button class="tab-button" data-tab="committees">Committees</button>
            </div>
            <div class="tab-content active" id="speakers">
                <div class="speakers">
                    <div class="speaker">
                        <img src="images/Petro-Aiena.jpg" alt="Speaker 1">
                        <div>
                            <h3>Petro Aiena</h3>
                            <p>Dipartimento d’Ingegneria Università di Palermo Viale delle Scienze 90128 Palermo Italy</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Mujahid-Abbas.png" alt="Speaker 2">
                        <div>
                            <h3>Mujahid Abbas</h3>
                            <p>Department of Mathematics, Government College University, Lahore, Pakistan</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Donco-Dimovski.png" alt="Speaker 3">
                        <div>
                            <h3>Donco Dimovski</h3>
                            <p>Department of Mathematics, University of Skopje, North Macedonia</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Fuad-Kittaneh.jpg" alt="Speaker 4">
                        <div>
                            <h3>Fuad Kittaneh</h3>
                            <p>Department of Mathematics, The University of Jordan</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Ekrem-Savas.png" alt="Speaker 5">
                        <div>
                            <h3>Ekrem Savas</h3>
                            <p>Usak Universitesi, Turkey</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Yilmaz-Simsek.png" alt="Speaker 6">
                        <div>
                            <h3>Yilmaz Simsek</h3>
                            <p>Department of Mathematics, Faculty of Science Akdeniz University Antalya-TURKEY</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Ilir-Snopce.png" alt="Speaker 7">
                        <div>
                            <h3>Ilir Snopce</h3>
                            <p>Universidade Federal do Rio de Janeiro, Brasil</p>
                        </div>
                    </div>
                    <div class="speaker">
                        <img src="images/Arian-Berdellima.jpg" alt="Speaker 8">
                        <div>
                            <h3>Arian Berdellima</h3>
                            <p>German International University in Berlin, Germany</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="important-dates">
            <div class="important-dates">
        <div class="date-item">
            <span class="date-title">Conference Date:</span>
            <span class="date-info">September 7-9, 2023</span>
        </div>
        <div class="date-item">
            <span class="date-title">Notification of Acceptance:</span>
            <span class="date-info">Within two weeks after submission</span>
        </div>
        <div class="date-item">
            <span class="date-title">Abstract Submission Deadline:</span>
            <span class="date-info">August 15, 2023</span>
        </div>
        <div class="date-item">
            <span class="date-title">Announcing the Conference Programme:</span>
            <span class="date-info">August 31, 2023</span>
        </div>
    </div>          
  </div>
  <div class="tab-content" id="committees">
    <div class="nested-tabs">
        <button class="nested-tab-button active" data-nested-tab="scientific">Scientific</button>
        <button class="nested-tab-button" data-nested-tab="organizing">Organizing</button>
        <button class="nested-tab-button" data-nested-tab="honorary">Honorary</button>
    </div>
    <div class="nested-tab-content active" id="scientific">
        <ul>
            <li>Erjola Sila, University of Tirana, Albania</li>
            <li>Ibrahim Çanak, Ege University, TURKEY</li>
            <li>Salih Atyar, Suleyman Demirel University, Turkey</li>
            <li>Janusz Brzdak, Faculty of Applied Mathematics AGH University of Science and Technology, Poland</li>
            <li>Elton Pasku, University of Tirana, Albania, Albania</li>
            <li>Abdelah Rabbahh, Department of Mathematics, Jordan University of Science and Technology, Jordan</li>
            <li>Salah Mecheri, Tabiah University Medina, Saudi Arabia</li>
            <li>Besian Çobani, University of Tirana, Albania</li>
            <li>Fatmir Asllani, LEMTA 2 avenue de la Forêt de Haye BP 9061 54506 Vandoeuvre-lès-Nancy cedex, France</li>
            <li>Mircea Ivan, UNIVERSITATEA TEHNICA DIN CLUJ-NAPOCA Str. Memorandumului nr. 28 Cluj-Napoca, cod postal 400114 Jud. Cluj, Romania, Romania</li>
            <li>Mikal El, Firat University, Turkey, Turkey</li>
            <li>Ugur Kadak, Gazi University, Turkey, Turkey</li>
            <li>Mihai Postolache, Department of Mathematics and Computer Science University Politehnica of Bucharest 060042 Bucharest, Romania, Romania</li>
            <li>Vishnu Narayan Misra, Indira Gandhi National Tribal University, India</li>
            <li>Ermal Felici, University of Vlora, Albania</li>
            <li>Kostaq Hila, Polytechnic University of Tirana, Albania, Albani</li>
            <li>Sokol Kallci, University of Elbasan, Albania, Albania</li>
            <li>Adem Kilicman, University Putra, Malaysia</li>
            <li>Jeff Connor, Department of Mathematics Ohio University Athens, Ohio U.S.A, USA</li>
            <li>Ilir Snopce, Universidade Federal Do Rio de Janeiro, Brazil</li>
            <li>Douglas R. Anderson, Department of Mathematics and Computer Science Concordia College Moorhead, Minnesota 56562, USA, USA</li>
            <li>Bipan Hazarika, Department of Mathematics Gauhati University, Guwahati, 781014, India</li>
            <li>Elida Hoxha, University of Tirana, Albania</li>
            <li>Hemen Dutta, Department of Mathematics, Gauhati University, India</li>
            <li>Bianca Carlo, Directeura du cycle préparatoire, France</li>
            <li>Artin Kashiuri, University of Vlora, Albania, Albania</li>
            <li>Feng Qi, Tianjin Polytechnic University, Henan Polytechnic University, China</li>
            <li>Armend Shabani, University of Prishtina, Kosovo</li>
            <li>Kotaro Tanahashi, Department of Mathematics, Tohoku Medical and Pharmaceutical University, Sendai 981- 8558, Japan</li>
            <li>Huseyin Çakalli, Department of Mathematics, Maltepe University in Istanbul, Turkey</li>
            <li>Yilmaz Simsek, Akdeniz University Faculty of Science Department of Mathematics Antalya, Turkey</li>
            <li>Muahrem Avdispahic, Department of Mathematics, University of Sarajevo, Bosnia and Herzegovina</li>
            <!-- Add more members as needed -->
        </ul>
    </div>
    <div class="nested-tab-content" id="organizing">
        <ul>
            <li>Faton Merovci, University of Mitrovica, Kosovo</li>
            <li>Faruk Ozger, Izmir Katip Celebi University Department of Engineering Sciences Izmir- Turkey, Turkey</li>
            <li>Ilmi Hoxha, University of Gjakova, Kosovo</li>
            <li>Alt Ibrahimii, State University of Tetovo, North Macedonia</li>
            <li>Faton Berisha, University of Prishtina, Kosovo</li>
            <li>Mulih Ibohaj, University of Prishtina, Kosovo</li>
            <li>Ekrem Halimi, University of Gjilan, Kosovo</li>
            <!-- Add more members as needed -->
        </ul>
    </div>
    <div class="nested-tab-content" id="honorary">
        <ul>
            <li>Faton Berisha, University of Prishtina, Kosovo</li>
            <li>Mulih Ibohaj, University of Prishtina, Kosovo</li>
            <li>Ekrem Halimi, University of Gilan, Kosovo</li>
            
        </ul>
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