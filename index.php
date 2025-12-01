<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LionSport Agency - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
</head>

<body>
    <nav class="navbar">
        <div class="logo">LionSport</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="services.html">Services</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php" class="btn-secondary" style="padding: 5px 15px; border: 1px solid white;">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php" class="btn-primary" style="padding: 5px 15px; font-size: 0.9rem;">Register</a>
            <?php endif; ?>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Empowering Sierra Leonean Football Talent</h1>
            <p>Connecting Africa's rising stars to global opportunities</p>
            <div class="hero-buttons">
                <a href="contact.html" class="btn-primary" style="text-decoration: none;">Join Us</a>
                <a href="about.html" class="btn-secondary" style="text-decoration: none;">About Us</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat-item">
            <h3>150+</h3>
            <p>Players Represented</p>
        </div>
        <div class="stat-item">
            <h3>25+</h3>
            <p>International Clubs</p>
        </div>
        <div class="stat-item">
            <h3>8</h3>
            <p>Countries Active</p>
        </div>
        <div class="stat-item">
            <h3>50+</h3>
            <p>Successful Transfers</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <h2>What Our Players Say</h2>
        <div class="testimonial-card">
            <img src="http://static.photos/people/320x240/12" alt="Player">
            <div>
                <h4>Mohamed Kamara</h4>
                <p class="role">Midfielder • FC Porto</p>
                <p class="quote">"LionSport opened doors I never imagined possible. Their professionalism and dedication
                    got me my dream contract in Portugal."</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Ready to Take Your Career Global?</h2>
        <p>Join our network of talented players and let us guide your journey to international success.</p>
        <a href="contact.html" class="btn-primary" style="text-decoration: none;">Apply Now</a>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div>
                <h3>🦁 LionSport</h3>
                <p>Empowering Sierra Leonean football talent since 2015.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                </ul>
            </div>
            <div>
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Careers</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 LionSport Agency. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating CTA -->
    <a href="contact.html" class="floating-btn">+</a>
</body>

</html>