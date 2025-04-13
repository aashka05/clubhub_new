<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="navbar" id="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">
            <img src="assets/img/favicon.png" alt="" id="favico" class="favico">
                <div class="logo-text">
                    <span class="logo-letter">C</span>
                    <span class="logo-text-part">lub</span>
                    <span class="logo-letter">H</span>
                    <span class="logo-text-part">ub</span>
                </div>
            </a>

            <nav class="desktop-nav">
                <a href="#" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#clubs" class="nav-link">Clubs</a>
                <a href="#events" class="nav-link">Events</a>
                <a href="#contact" class="nav-link">Contact Us</a>
            </nav>

            <div class="desktop-actions">
                <button id="theme-toggle" class="theme-toggle">
                    <i data-lucide="moon" class="theme-icon moon-icon"></i>
                    <i data-lucide="sun" class="theme-icon sun-icon hidden"></i>
                </button>
                <a href="login.php" class="btn-secondary">Login</a>
                <a href="register.php" class="btn-primary">Register</a>
            </div>

            <button id="mobile-menu-btn" class="mobile-menu-btn">
                <i data-lucide="menu" class="menu-icon"></i>
                <i data-lucide="x" class="close-icon hidden"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <div class="mobile-menu-container">
                <a href="#" class="mobile-nav-link">Home</a>
                <a href="#about" class="mobile-nav-link">About</a>
                <a href="#clubs" class="mobile-nav-link">Clubs</a>
                <a href="#events" class="mobile-nav-link">Events</a>
                <a href="#contact" class="mobile-nav-link">Contact Us</a>

                <button id="mobile-theme-toggle" class="mobile-theme-toggle">
                    <i data-lucide="moon" class="theme-icon moon-icon"></i>
                    <i data-lucide="sun" class="theme-icon sun-icon hidden"></i>
                    <span class="theme-label">Dark Mode</span>
                </button>

                <div class="mobile-actions">
                    <a href="#login" class="btn-secondary">Login</a>
                    <a href="#register" class="btn-primary">Register</a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

<script src="../assets/js/script.js"></script>