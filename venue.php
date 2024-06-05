<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
          <main class="venue-main-content">
              <section class="venue-page main-spacing">
                  <div class="venue-page-text-container-grid-2">
                      <div class="venue-page-text">
                          <h2 class="main-title mb-4">Goddess of Kosovo</h2>
                          <div class="text-content-1">
                              <h3></h3>
                              <p><b>Artana Castle</b> or <b>Novo Brdo</b> is located on a small mountain between Perlepnicë and Kllakavec, it is a medieval castle and cultural monument in Artana, Kosovo. The construction belongs to the fortification type. The castle consists of two parts: the so-called Upper Castle and the Lower Castle. The upper castle has six towers; the eastern and western towers have a rectangular shape while the others have a square base, and have an area of about 0.05 hectares. According to current sources, Novo Brdo was first mentioned by this name in the first decades of the 14th century, under the name Novo Monte. The castle of Artana (Novo Brdo), named as "Remains of the Medieval Castle", dates from the century XIII-XIV.</p>

                              <h3></h3>
                              <p><b>The Kosovo section of the White Drin flows</b> entirely in the semi-karst part of Kosovo, in an arc-shaped 122-kilometre (76 mi)-long course. The river originates in the southern slopes of the Žljeb mountain, north of the town of Peja. The river springs near the Radavc Cave. The cave is multi-leveled, not much explored and has a lake inside. The water from the spring was used by the Peja brewery. The stream is originally a sinking river which eventually springs out from the stream bed and falls as an 11-meter (36 ft)-high waterfall named the White Drin Waterfall near the village of Radavc, 8 km (5.0 mi) away from Peja.</p>

                              <h3></h3>
                              <p><b>In the southern Kosovo municipality of Ferizaj</b> (Albanian), one plot of land holds temples built by three religions: a mosque, known as "Mosha Mosque", was originally built in the 1890s, during the time of the Ottoman Empire, though it was destroyed by German bombing during World War II. The current mosque was completed in 1931 and upgrades, including the second minaret, were completed as recently as 2013. In the late 1920s, it was decided that a Serbian Orthodox church was to be built in the same courtyard as the mosque. And now they are in one plot of land together.</p>
                          
                              <h3></h3>
                              <p><b>Prizren has been traditionally identified with Theranda,</b> a town of the Roman era.  Another location which may have been that of Theranda is present-day Suhareka Archaeological research has shown that the site of the fortress has passed several eras of habitation since prehistoric times. In its lower part, material from the upper part of the fort has been deposited over the centuries. It dates from the Bronze Age (c. 2000 BCE) to the late Iron Age (c. 1st century CE) and is comparable to the material found in the nearby prehistoric site in the village of Vlashnjë. In late antiquity, the fortification saw a phase of reconstruction. It is part of a series of forts that were built or reconstructed in the same period by Justinian along the White Drin in northern Albania and western Kosovo in the routes that linked the coastal areas with the Kosovo valley.  At this time, the Prizren fortress likely appears in historical record as Petrizen in the 6th century CE in the work of Procopius as one of the fortifications which Justinian commissioned to be reconstructed in Dardania. </p>
                            </div>
                      </div>
                      <div class="venue-page-text">
                          <h2 class="main-title mb-4">Historic places of Kosovo</h2>
                          <div class="text-content-2">
                              <h3></h3>
                              <p><b>Prizren Fortress</b> (Albanian: Kalaja e Prizrenit) is a hilltop fortification in the city of the same name in Republic of Kosovo. It overlooks the river which flows through Prizren, which developed around the fortress. The site of the fortress of Prizren has seen habitation and use since the Bronze Age (ca.2000). In late antiquity it was part of the defensive fortification system in western Dardania and was reconstructed in the era of eastern Roman Emperor Justinian.</p>

                              <h3></h3>
                              <p><b>The Gadime Cave</b> or the Marble Cave was discovered in 1966 by Ahmet Asllani who was working in his garden. The cave is situated in the village with the same name, only 20 km away from Pristina. The beautiful karst limestone cave was opened for the public ten years later. Its geo-touristic value attracts also researchers from all around the world. The birth of the cave is dated 200 million years ago and the natural process of forming continues. Of the 1260 meters of the cave, only 600 are open to the public, but the stalactites and stalagmites, and the informative guided tour will complete a day trip.</p>

                              <h3></h3>
                              <p><b>The Mirusha waterfalls</b> (Albanian: Ujëvarët e Mirushës) are a series of waterfalls found in the Mirusha Park, in central Kosovo. The waterfalls have, over time, created canyons and caves, which have formed throughout the country. The river has carved a 10-kilometer long canyon and created 13 lakes with waterfalls between them. The waterfalls are one of the most visited attractions of the area and people often swim there. The waterfall's caves are also popular with visitors. The highest waterfall, between the sixth and seventh lake, is 22 meters (72 ft) high.</p>

                              <h3></h3>
                              <p><b>Ura e Terzive</b>, also referred to as Tailors' Bridge, is located near the village of Bistrazhë, near Gjakova, Kosovo. It is a respectable example of Ottoman architecture in Kosovo. It was built over the Erenik river, probably at the end of the 15th century, and was altered in the 16th century. It is a noteworthy example of the Terziqi's guild from Gjakova, from which it received its name. Major reconstruction and restoration to its original appearance occurred from 1982 to 1984. Today, the bridge is under the protection of the Republic of Kosovo.</p>

                              <h3></h3>
                              <p><b>Rugova</b> (Albanian: Rugova or Rugovë) is a mountain region located to the north-west of the city of Peja in Kosovo region. According to notes of Rugova it has been inhabited since before the tenth century. In 2013, it was designated a national park by the Parliament of Kosovo. Rugova is an ethnographically diverse region, with great importance for the literary branches of lexicology, etymology and onomastics. Rugova is a suitable region for hiking, skiing, mountaineering, paragliding, and picnics.</p>
                          </div>
                      </div>
                  </div>
            <section class="venue-gallery-section">
                <h2>Gallery</h2>
                <div class="venue-gallery">
                    <img src="images/1.png" alt="Gallery Image 1">
                    <img src="images/2.png" alt="Gallery Image 2">
                    <img src="images/3.png" alt="Gallery Image 3">
                    <img src="images/4.png" alt="Gallery Image 4">
                    <img src="images/5.png" alt="Gallery Image 5">
                    <img src="images/6.png" alt="Gallery Image 6">
                    <img src="images/7.png" alt="Gallery Image 7">
                    <img src="images/8.png" alt="Gallery Image 8">
                    <img src="images/9.png" alt="Gallery Image 9">
                </div>
            </section>
        </main>
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
