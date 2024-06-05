<header>
        <nav>
            <div class="logo">
                <a href="../index.php"><img src="../images/icon.png" alt="Conference Logo"></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="../conference.php"><i class="fas fa-info-circle"></i> Conference Info</a></li>
                    <li><a href="../proceeding.php"><i class="fas fa-book"></i> Proceeding</a></li>
                    <li><a href="../venue.php"><i class="fas fa-map-marker-alt"></i> Venue</a></li>
                    <li><a href="../participants.php"><i class="fas fa-users"></i> Participants</a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="../admin/admin_login.php"><i class="fas fa-user-shield"></i> Admin</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="my_registrations.php">My Registrations</a></li>
                    <li><a href="published_abstracts.php"><i class="fas fa-file-alt"></i> Published Abstracts</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>