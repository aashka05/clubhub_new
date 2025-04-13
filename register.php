<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClubHub - Register</title>
    <meta name="description" content="ClubHub Login Page" />
    <meta name="author" content="Lovable" />
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Include Lucide icons via CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/login.js"></script>
</head>

<body class="light-mode">
    <div class="container">
        <!-- Glow effects -->
        <div class="glow-effect glow-blue"></div>
        <div class="glow-effect glow-orange"></div>

        <!-- Header -->
        <?php include_once 'includes/header.php' ?>

        <!-- Main content -->
        <div class="login-main">
            <!-- Left column - Login form -->
            <div class="login-form-container">
                <div class="login-form-wrapper fade-in">
                    <div class="text-center">
                        <h1>Create Account</h1>
                        <p class="subtitle">Join ClubHub and discover amazing opportunities</p>
                    </div>

                    <form method="post" id="login-form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input
                                id="username"
                                name="username"
                                type="text"
                                placeholder="Your name"
                                required
                                class="auth-input" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="you@university.edu"
                                required
                                class="auth-input" />
                        </div>

                        <div class="form-group">
                            <div class="password-label-row">
                                <label for="password">Password</label>
                            </div>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="••••••••"
                                required
                                class="auth-input" />
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input
                                id="confirm_password"
                                name="confirm_password"
                                type="password"
                                placeholder="••••••••"
                                required
                                class="auth-input" />
                        </div>

                        <div class="remember-me">
                            <input
                                id="rememberMe"
                                name="rememberMe"
                                type="checkbox" />
                            <label for="rememberMe">Remember me</label>
                        </div>

                        <button type="submit" class="btn-primary" id="login-button">
                            <span class="btn-text">Create Account</span>
                            <div class="spinner hidden"></div>
                            <i data-lucide="user-plus" class="btn-icon"></i>
                        </button>
                    </form>

                    <div class="divider">
                        <span>OR CONTINUE WITH</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="btn-secondary">
                            <svg class="social-icon" viewBox="0 0 24 24">
                                <path
                                    fill="#4285F4"
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                                <path
                                    fill="#0F9D58"
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                                <path
                                    fill="#F4B400"
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"></path>
                                <path
                                    fill="#DB4437"
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"></path>
                                <path fill="none" d="M1 1h22v22H1z"></path>
                            </svg>
                            Google
                        </button>
                        <button type="button" class="btn-secondary">
                            <svg class="social-icon" viewBox="0 0 24 24">
                                <path
                                    fill="#1877F2"
                                    d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02z"></path>
                            </svg>
                            Facebook
                        </button>
                    </div>

                    <div class="signup-prompt">
                        <span>Already have an account? </span>
                        <a href="login.php" class="signup-link">Sign in</a>
                    </div>
                </div>
            </div>

            <!-- Right column - Illustration -->
            <div class="illustration-container">
                <div class="floating-icons-container">
                    <div class="floating-icon" id="icon1">🏆</div>
                    <div class="floating-icon" id="icon2">🎓</div>
                    <div class="floating-icon" id="icon3">🎨</div>
                    <div class="floating-icon" id="icon4">🏀</div>
                    <div class="floating-icon" id="icon5">🎭</div>
                    <div class="floating-icon" id="icon6">🎵</div>
                    <div class="floating-icon" id="icon7">🤖</div>
                    <div class="floating-icon" id="icon8">📚</div>
                </div>

                <div class="image-container fade-in">
                    <div class="image-glow"></div>
                    <div class="image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1000"
                            alt="Students in a club meeting"
                            class="feature-image" />

                        <div class="stats-badge">
                            <div class="stats-badge-dot"></div>
                            <div class="stats-badge-text">
                                <svg class="stats-badge-icon" width="12" height="12" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>120+ clubs active now</span>
                            </div>
                        </div>

                        <div class="club-activity-card">
                            <div class="club-activity-header">
                                <div class="club-activity-avatar">
                                    <div class="club-avatar-img">D</div>
                                </div>
                                <div class="club-activity-info">
                                    <div class="club-activity-name">Debate Club</div>
                                    <div class="club-activity-time">Just now</div>
                                </div>
                                <div class="club-activity-badge">New Event</div>
                            </div>
                            <div class="club-activity-content">
                                <p>Join us for the annual debate competition this Friday at 6 PM in the Main Hall!</p>
                            </div>
                            <div class="club-activity-footer">
                                <button class="club-activity-btn">View Details</button>
                                <div class="club-activity-members">
                                    <div class="club-activity-member">J</div>
                                    <div class="club-activity-member">K</div>
                                    <div class="club-activity-member">L</div>
                                    <div class="club-activity-member-count">+24</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-container fade-in">
                        <h2>Connect with campus life</h2>
                        <p>Join clubs, discover events, and build your network</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer>
            © <span id="current-year"></span> ClubHub | BVM College. All rights reserved.
            <br>
            Developed by Vihaa & Aashka
        </footer> -->

    <?php include 'includes/footer.php' ?>

    <!-- Toast notification -->
    <div id="toast" class="toast hidden">
        <div class="toast-content">
            <div class="toast-title">Success!</div>
            <div class="toast-description">Welcome back to ClubHub!</div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>