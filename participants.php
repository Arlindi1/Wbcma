<?php
session_start();
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
        <section class="register main-spacing">
    <div class="text-container">
        <div class="text">
            <h2 class="main-title mb-3">Register</h2>
            <div class="text-content">
                <p>Submissions should be in English (The context of each presentation will be 15 min, presentation + 10 min. questions phase). About Review Process:</p>
                <ul>
                    <li>It is required papers to be prepared at high level of quality for inclusion in the publication.</li>
                    <li>All the papers are subject to rigorous peer-review by at least two members of scientific committee or additional reviewers.</li>
                    <li>The review process is single blind, which means that reviewers are not seen by authors.</li>
                    <li>All submissions will be reviewed by at least two independent referees.</li>
                </ul>
                <p>Sometimes, banks charge some extra fees. This results with payment of an insufficient registration fee. As there is no serious support to Mathematics Congresses, the success of these kind of congresses mostly depend on the payment of registration fees. Therefore the exact amount of the registration fee should be transferred before the selected deadline. Any commissions charged by the bank should be covered by the participants and if occurred, it will be cleared by the participant upon registration.</p>
                <p>Conference fee: The payment is 100 euros, for face to face participation, for all participants.</p>
                <p>Bank details:</p>
                <p>Beneficiary Bank: TEB Sh. A., Prishtine, Kosovo</p>
                <p>Swift code/BIC: TEBBXXKPR</p>
                <p>Beneficiary name: Shoqeria Tregtare ILIRIAS ShPK</p>
                <p>Beneficiary Account-IBAN: XK05&nbsp;(X-K-zero-5)&nbsp;&nbsp;20-13-0001435313-54</p>
                <p>Beneficiary address: Rr Janina, Nr-2, Ferizaj, 70000, Kosovo</p>
                <p>Correspondent Bank details</p>
                <table>
                    <thead>
                        <tr>
                            <th>Swift code</th>
                            <th>Bank Name</th>
                            <th>Currency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DEUTDEFF</td>
                            <td>Deutsche Bank AG Frankfurt Am Main, Germany</td>
                            <td>EUR/GBP</td>
                        </tr>
                        <tr>
                            <td>KREDFFBB</td>
                            <td>KBC Bank NV Bruxelles, Belgium</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                            <td>BNPAFRPP</td>
                            <td>BNP Paribas Sa Paris, France</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                            <td>BNLIITRR</td>
                            <td>Banca Nazionale Del Lavoro S.P.A, Italy</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                            <td>TUTNMK22</td>
                            <td>NLB Tutunska Banka Ad, Skopie, Macedonia</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                            <td>USALALTR</td>
                            <td>Intesa Sanpaolo Bank Albania Sh. A</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                            <td>BNPAUS3NXXX</td>
                            <td>BNP Paribas USA-New York Branch, USA</td>
                            <td>USD</td>
                        </tr>
                        <tr>
                            <td>ZKBKCHZZ80A</td>
                            <td>Zurcher KantonalBank, Zurich, Switzerland</td>
                            <td>CHF</td>
                        </tr>
                    </tbody>
                </table>
                <p>Remark: The part of the registration, related to the reservation of the rooms on the hotel, is formal, because every participant will arrange itself accommodation. The hotels which are near the University of Prishtina, you can see here. <a href="#">See here</a> Some other hotels: <a href="#">La Corte Hotel</a> : <a href="#">Hotel Prima</a></p>
            </div>
        </div>
    </div>
<form class="registration-form mt-7" action="register_process.php" method="POST" enctype="multipart/form-data">
                <div class="half-width">
                    <div class="form-control flex">
                        <label for="title">Title *</label>
                        <select id="title" name="title" required>
                            <option value="">Select title</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prof.">Prof.</option>
                            <option value="Assoc. Prof.">Assoc. Prof.</option>
                            <option value="Asst. Prof.">Asst. Prof.</option>
                        </select>
                    </div>
                    <div class="form-control flex">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-control flex">
                        <label for="surname">Surname *</label>
                        <input type="text" id="surname" name="surname" required>
                    </div>
                    <div class="form-control flex">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-control flex">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-control flex">
                        <label for="university">University *</label>
                        <input type="text" id="university" name="university" required>
                    </div>
                    <div class="form-control flex">
                        <label for="department">Department *</label>
                        <input type="text" id="department" name="department" required>
                    </div>
                    <div class="form-control flex">
                        <label for="topic">Topic *</label>
                        <select id="topic" name="topic" required>
                            <option value="">Select topic</option>
                            <option value="Numerical Analysis">Numerical Analysis</option>
                            <option value="Scientific Computing">Scientific Computing</option>
                            <option value="Ordinary and Partial Differential Equations">Ordinary and Partial Differential Equations</option>
                            <option value="Boundary Value Problems">Boundary Value Problems</option>
                            <option value="Approximation Theory">Approximation Theory</option>
                            <option value="Sequence Spaces and Summability">Sequence Spaces and Summability</option>
                            <option value="Real Analysis">Real Analysis</option>
                            <option value="Functional Analysis">Functional Analysis</option>
                            <option value="Fixed Point Theory">Fixed Point Theory</option>
                            <option value="Optimization, Geometry">Optimization, Geometry</option>
                            <option value="Computational Geometry">Computational Geometry</option>
                            <option value="Differential Geometry">Differential Geometry</option>
                            <option value="Applied Algebra">Applied Algebra</option>
                            <option value="Combinatorics">Combinatorics</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-control flex">
                        <label for="presentation_type">Presentation Type *</label>
                        <select id="presentation_type" name="presentation_type" required>
                            <option value="">Select presentation type</option>
                            <option value="Poster">Poster</option>
                            <option value="Online">Online</option>
                            <option value="Oral">Oral</option>

                        </select>
                    </div>
                    <div class="form-control flex">
                        <label for="abstract_title">Abstract Title *</label>
                        <input type="text" id="abstract_title" name="abstract_title" required>
                    </div>
                    <div class="form-control flex">
                        <label for="abstract_file">Abstract File *</label>
                        <input type="file" id="abstract_file" name="abstract_file" required>
                    </div>
                </div>
                <div class="half-width">
                    <div class="form-control flex">
                        <label for="accommodation_type">Accommodation Type *</label>
                        <select id="accommodation_type" name="accommodation_type" required>
                            <option value="">Select accommodation type</option>
                            <option value="Regular">Regular</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>
                    <div class="form-control flex">
                        <label for="room_type">Room Type *</label>
                        <select id="room_type" name="room_type" required>
                            <option value="">Select room type</option>
                            <option value="Single Room">Single Room</option>
                            <option value="Double Room">Double Room</option>
                            <option value="Triple Room">Triple Room</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>
                    <div class="form-control flex">
                        <label>Accompanying Persons *</label>
                        <div class="flex">
                            <input type="radio" id="accompanying_yes" name="accompanying" value="Yes" required>
                            <label for="accompanying_yes">Yes</label>
                        </div>
                        <div class="flex">
                            <input type="radio" id="accompanying_no" name="accompanying" value="No" required>
                            <label for="accompanying_no">No</label>
                        </div>
                    </div>
                    <div class="form-control flex">
                        <label for="check_in_date">Hotel Check In Date *</label>
                        <input type="date" id="check_in_date" name="check_in_date" required>
                    </div>
                    <div class="form-control flex">
                        <label for="check_out_date">Hotel Check Out Date *</label>
                        <input type="date" id="check_out_date" name="check_out_date" required>
                    </div>
                </div>
                <div class="flex align-start flex-column mb-4">
                    <button type="submit" class="primary-btn">Register</button>
                </div>
            </form>
            <div class="form-control flex">
    <button id="backButton" class="primary-btn">Back</button>
</div>
        </section>
    </div>
        

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
