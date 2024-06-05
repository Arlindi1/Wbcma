<?php
session_start();
$url = parse_url("mysql://uo6kzkjyvsbyo5pv:sburww1ly6qy8kz2@thh2lzgakldp794r.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/jrpg28n7zvcevq5t");

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = ltrim($url["path"], '/');
$port = $url["port"];

$conn = new mysqli($server, $username, $password, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
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
    <div class="main-container">
        <section class="participants-section">
            <div class="participants-title-container mb-6 flex justify-between align-center">
                <h2 class="main-title">Participants</h2>
                <a href="/registration_form.php" class="register-btn">
                    Register
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 4h6m0 0L3 1m3 3L3 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="table-container">
                <table class="full-width">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Name</th>
                            <th>University</th>
                            <th>Type</th>
                            <th>Abstract Title</th>
                            <th>Situation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
    <td>1</td>
    <td>Assoc.Prof.Dr. Ekrem Ajimi</td>
    <td>Public University Kadri Zeka</td>
    <td>Oral</td>
    <td>(E,pq),(C,J) Statistical l-convergence of order α</td>
    <td>Accept</td>
</tr>
<tr>
    <td>2</td>
    <td>Assoc.Prof.Dr. Artion Kashuri</td>
    <td>Ismail Qemali</td>
    <td>Oral</td>
    <td>In this paper, we introduce new operators, the so-called left and right generalized tempered fractional integral operators. We investigate the Chebyshev inequality via these generalized tempered fractional integral operators. Moreover, we derive new results of this type of inequalities for finite products of functions. In addition, we establish an estimate for the Chebyshev functional by using the new generalized tempered fractional integral operators. From our above-mentioned results, we recaptured similar inequalities for some specialized fractional integrals keeping some of the earlier results in view. Furthermore, two important results and some interesting consequences for convex functions in the framework of the defined class of generalized tempered fractional integral operators are obtain. Finally, two nontrivial examples demonstrated the significance of our results.</td>
    <td>Accept</td>
</tr>
<tr>
    <td>3</td>
    <td>Dr. Rozana Liko</td>
    <td>Ismail Qemali</td>
    <td>Oral</td>
    <td>Results on Reverse Minkowski type Inequalities via New Generalized Tempered Fractional Integral Operators and Applications</td>
    <td>Accept</td>
</tr>
<tr>
    <td>4</td>
    <td>Dr. Astrit Ramizi</td>
    <td>University of Sarajevo</td>
    <td>Oral</td>
    <td>Weighted (N,p,q)(E,I) statistical convergence on time scale</td>
    <td>Accept</td>
</tr>
<tr>
    <td>5</td>
    <td>Dr. Agon Mahmuti</td>
    <td>University of Sarajevo</td>
    <td>Oral</td>
    <td>Necessary and sufficient Tauberian conditions for weighted Cesaro-Euler mean methods of summability in two-normed spaces</td>
    <td>Accept</td>
</tr>
<tr>
    <td>6</td>
    <td>Prof.Dr. YILMAZ SIMSEK</td>
    <td>AKDENIZ UNIVERSITY</td>
    <td>Oral</td>
    <td>Notes on New Certain Classes of Polynomials and Numbers involving Apostol-Bernoulli numbers and polynomials Yilmaz Simsek Department of Mathematics, Faculty of Science University of Akdeniz TR-07058 Antalya, Turkey ysimsek@akdeniz.edu.tr Abstract: The aim of this presentation is to study on the certain family of special numbers and polynomials. We give relations among these special numbers and polynomials, the numbers l_n (v) and the Bernoulli-type, Euler-type, Apostol-type numbers and polynomials, the Stirling numbers. Finally, we give some remarks and observations on these results. Keywords: Generating function, Special functions, Bernoulli numbers and polynomials, Apostol Bernoulli numbers and polynomials, Stirling numbers, Fubini numbers, Combinatorial numbers and sum, Umbral calculus convention.</td>
    <td>Accept</td>
</tr>
<tr>
    <td>7</td>
    <td>Assist.Prof.Dr Nezihe Turhan Turan</td>
    <td>Izmir Katip Celebi University</td>
    <td>Oral</td>
    <td>On the Shape Preserving Properties of a New Class of Blending-type Bernstein Operators</td>
    <td>Accept</td>
</tr>
<tr>
    <td>8</td>
    <td>Dr. Elisabeta Peti</td>
    <td>Tirana University</td>
    <td>Oral</td>
    <td>Sturm-Liouville problem that operate with Riemann-Stieltjes integral boundary</td>
    <td>Accept</td>
</tr>
<tr>
    <td>9</td>
    <td>Assoc.Prof.Dr. Eriola Sila</td>
    <td>University of Tirana</td>
    <td>Oral</td>
    <td>Some fixed point theorems for (α,φ)-nonlinear contraction defined on b-metric spaces over Banach algebras</td>
    <td>Accept</td>
</tr>
<tr>
    <td>10</td>
    <td>Assist.Prof.Dr Neslihan KILAR</td>
    <td>Nigde Ömer Halisdemir University</td>
    <td>Oral</td>
    <td>Remarks on Two-Variable Simsek Polynomials with the Applications of p-adic Integrals on p-adic Integers</td>
    <td>Accept</td>
</tr>
<tr>
    <td>11</td>
    <td>Assoc.Prof.Dr. Besiana Çobani</td>
    <td>Tirana University</td>
    <td>Oral</td>
    <td>Evaluation of transmission eigenvalues of an interior transmission eigenvalue problem</td>
    <td>Accept</td>
</tr>
<tr>
    <td>12</td>
    <td>Assoc.Prof.Dr. Aurora Simoni</td>
    <td>University of Tirana, Albania</td>
    <td>Oral</td>
    <td>THE ALBANIAN ELECTRICAL ENERGY SYSTEM MODELED AS PORTFOLIO OPTIMIZATION PROBLEM</td>
    <td>Accept</td>
</tr>
<tr>
    <td>13</td>
    <td>Assoc.Prof.Dr. Irem KUCUKOGLOLU</td>
    <td>Alanya Alaaddin Keykubat University</td>
    <td>Oral</td>
    <td>Relations of the Combinatorial Simsek Numbers with the Number of Necklaces of Prime-Power Length</td>
    <td>Accept</td>
</tr>
<tr>
    <td>14</td>
    <td>Dr. Beyza Çetin</td>
    <td>Akdeniz University</td>
    <td>Oral</td>
    <td>A new Boubaker collocation method for solutions of the first order differential equations with variable delays</td>
    <td>Accept</td>
</tr>
<tr>
    <td>15</td>
    <td>Prof.Dr. Fuad Kittaneh</td>
    <td>The University of Jordan</td>
    <td>Oral</td>
    <td>Numerical radius equalities and inequalities for Hilbert space operators</td>
    <td>Accept</td>
</tr>
<tr>
    <td>16</td>
    <td>Assoc.Prof.Dr. Valdete Rexhebeqaj Hamiti</td>
    <td>University of Prishtina “Hasan Prishtina”</td>
    <td>Oral</td>
    <td>A New Class of Non Normal Operators in Hilbert Spaces</td>
    <td>Accept</td>
</tr>
<tr>
    <td>17</td>
    <td>Dr. Reqjola Manaj</td>
    <td>Epoka University</td>
    <td>Oral</td>
    <td>An application of Inverse Scattering Problems using MATLAB</td>
    <td>Accept</td>
</tr>
<tr>
    <td>18</td>
    <td>Dr. Yaren Munusoglu</td>
    <td>Gazi University</td>
    <td>Oral</td>
    <td>CR-Fuzzy Soft Sets and Applications</td>
    <td>Accept</td>
</tr>
<tr>
    <td>19</td>
    <td>Dr. Romina Agaci</td>
    <td>“Ismail Qemali” UNIVERSITY</td>
    <td>Oral</td>
    <td>Text Classification Models and Applications</td>
    <td>Accept</td>
</tr>
<tr>
    <td>20</td>
    <td>Dr. Elvin Rada</td>
    <td>University of Elbasan “Aleksander Xhuvani”</td>
    <td>Oral</td>
    <td>THE CONDITIONAL EXPECTATION LINEAR OPERATORS WITH APPLICATION</td>
    <td>Accept</td>
</tr>
<tr>
    <td>21</td>
    <td>Assoc.Prof.Dr. FARUK OZGER</td>
    <td>Izmir Katip Celebi University</td>
    <td>Oral</td>
    <td>Approximation properties of some recent blending-kind Bernstein operators</td>
    <td>Accept</td>
</tr>
<tr>
    <td>22</td>
    <td>Prof.Dr. ekrem savas</td>
    <td>Ujak University</td>
    <td>Oral</td>
    <td>On Lq-lacunary statistical convergence functions of order \alpha</td>
    <td>Accept</td>
</tr>
<tr>
    <td>23</td>
    <td>Dr. Dhurata Valera</td>
    <td>University of Elbasan “Aleksander Xhuvani”, Elbasan, Albania</td>
    <td>Oral</td>
    <td>General Formulas in the Table of g^n-Derivatives for g^n-Functions</td>
    <td>Accept</td>
</tr>
<tr>
    <td>24</td>
    <td>Prof.Dr. Rahmet Savaç</td>
    <td>Istanbul Medeniyet University</td>
    <td>Oral</td>
    <td>Application of Fuzzy Soft Matrix Theory in Decision Making Problem by Using Medical Diagnosis</td>
    <td>Accept</td>
</tr>
<tr>
    <td>25</td>
    <td>Assist.Prof.Dr Emin Durmishi</td>
    <td>University of Tetova</td>
    <td>Oral</td>
    <td>Continuity up to a Covering and Connectedness</td>
    <td>Accept</td>
</tr>
<tr>
    <td>26</td>
    <td>Assoc.Prof.Dr. salvatore triolo</td>
    <td>Università degli Studi di Palermo</td>
    <td>Online</td>
    <td>Note on Extensions of positive linear functionals</td>
    <td>Accept</td>
</tr>
<tr>
    <td>27</td>
    <td>Prof.Dr. Salih Aytar</td>
    <td>Suleyman Demirel University</td>
    <td>Online</td>
    <td>A New Deffuzzification Formula for Polygonal Fuzzy Numbers and its Application</td>
    <td>Under review</td>
</tr>

<?php
                    $conn = new mysqli("localhost", "root", "12345678", "registration_db");
                    $result = $conn->query("SELECT * FROM registrations WHERE status='approved'");
                    $order = 28; // Start from the next order number
                    while ($row = $result->fetch_assoc()) {
                        $title = isset($row['title']) ? $row['title'] : '';
                        $name = isset($row['name']) ? $row['name'] : '';
                        $surname = isset($row['surname']) ? $row['surname'] : '';
                        $fullName = $title . ' ' . $name . ' ' . $surname;
                        echo "<tr>";
                        echo "<td>" . $order++ . "</td>";
                        echo "<td>" . $fullName . "</td>";
                        echo "<td>" . $row['university'] . "</td>";
                        echo "<td>" . $row['presentation_type'] . "</td>";
                        echo "<td>" . $row['abstract_title'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                    $conn->close();
                    ?>

                    </tbody>
                </table>
            </div>
        </section>

        <!-- Registration Form - initially hidden -->
        <section class="registration-section">
            <?php include 'registration_form.php'; ?>
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
