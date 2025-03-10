<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Five Videos - Your Ultimate Destination for High-Quality Edits</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FFD700;
            --dark-bg: #1a2130;
            --darker-bg: #111820;
            --light-text: #ffffff;
            --gray-btn: #3a4555;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--dark-bg);
            color: var(--light-text);
        }

        .navbar {
            background-color: var(--darker-bg);
            padding: 15px 0;
        }

        .navbar-brand img {
            height: 35px;
        }

        .btn-yellow {
            background-color: var(--primary-color);
            color: var(--darker-bg);
            font-weight: bold;
        }

        .btn-yellow:hover {
            background-color: #e6c200;
            color: var(--darker-bg);
        }

        .btn-outline-light {
            border-color: var(--light-text);
            color: var(--light-text);
        }

        .hero-section {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .highlight {
            color: var(--primary-color);
            font-weight: bold;
        }

        .feature-badge {
            background-color: transparent;
            border: 1px solid var(--light-text);
            border-radius: 20px;
            padding: 5px 15px;
            margin-right: 10px;
            font-size: 0.8rem;
        }

        .feature-badge i {
            margin-right: 5px;
        }

        .search-box {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            padding: 8px 15px;
            margin: 25px 0;
        }

        .search-box input {
            background-color: transparent;
            border: none;
            color: var(--light-text);
            width: 90%;
        }

        .search-box input:focus {
            outline: none;
        }

        .search-box i {
            color: var(--light-text);
        }

        .category-btn {
            background-color: var(--gray-btn);
            color: var(--light-text);
            border-radius: 20px;
            padding: 5px 15px;
            margin: 5px;
            font-size: 0.9rem;
            border: none;
        }

        .category-btn:hover {
            background-color: var(--primary-color);
            color: var(--dark-bg);
        }

        .hexagon-grid {
            position: absolute;
            right: -100px;
            top: 50px;
            width: 600px;
            z-index: 0;
        }

        .revenue-section {
            background-color: rgba(26, 33, 48, 0.7);
            border-radius: 15px;
            padding: 40px;
            margin: 40px 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .unique-edits-section {
            background: linear-gradient(rgba(26, 33, 48, 0.8), rgba(26, 33, 48, 0.8)), url('/api/placeholder/1200/400') center/cover;
            padding: 80px 0;
        }

        .best-section {
            padding: 80px 0;
        }

        .footer {
            background-color: var(--darker-bg);
            padding: 50px 0 20px;
        }

        .footer-logo {
            height: 40px;
            margin-bottom: 20px;
        }

        .footer-links h5 {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: var(--light-text);
            text-decoration: none;
        }

        .footer-links ul li a:hover {
            color: var(--primary-color);
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: var(--light-text);
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .social-icons a:hover {
            color: var(--primary-color);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            font-size: 0.8rem;
        }

        @media (max-width: 992px) {
            .hero-section {
                text-align: center;
            }

            .hexagon-grid {
                position: static;
                width: 100%;
                margin-top: 30px;
            }

            .revenue-section {
                text-align: center;
            }

            .revenue-img {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/api/placeholder/150/50" alt="High Five Videos Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="#" class="btn btn-outline-light me-2">Sign Up</a>
                <a href="#" class="btn btn-yellow">Login</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content position-relative" style="z-index: 1;">
                <h1>Your Ultimate Destination for <span class="highlight">High-Quality Edits</span></h1>
                <div class="mt-4">
                    <span class="feature-badge"><i class="fas fa-check"></i> Royalty-free</span>
                    <span class="feature-badge"><i class="fas fa-check"></i> High Quality</span>
                </div>
                <div class="search-box d-flex align-items-center">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="category-buttons">
                    <button class="category-btn">Lifestyle</button>
                    <button class="category-btn">Urban landscape</button>
                    <button class="category-btn">Business</button>
                    <button class="category-btn">People</button>
                    <button class="category-btn">Technology</button>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/api/placeholder/600/400" alt="Hexagon Grid" class="img-fluid hexagon-grid">
            </div>
        </div>
    </div>
</section>

<!-- Revenue Section -->
<section>
    <div class="container">
        <div class="revenue-section">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Turn <span class="highlight">Your Work</span> into <span class="highlight">Revenue</span></h2>
                    <p class="my-4">Sign up as an editor to gain access to our library of stock footage which you can use to create edits and resell on the Hive platform.</p>
                    <a href="#" class="btn btn-yellow">Become a Contributor</a>
                </div>
                <div class="col-lg-6 revenue-img">
                    <img src="/api/placeholder/500/300" alt="Video Editing" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unique Edits Section -->
<section class="unique-edits-section">
    <div class="container text-center">
        <h2 class="mb-4">Explore a world of <span class="highlight">Unique Edits</span></h2>
        <p class="mb-5">Subscribe to HIVE and gain access to a library of unique and beautiful fully edited videos contributed by video editors from all around the world!</p>
        <a href="#" class="btn btn-yellow">Explore Now</a>
    </div>
</section>

<!-- Best Section -->
<section class="best-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img src="/api/placeholder/500/400" alt="Video Quality" class="img-fluid rounded">
            </div>
            <div class="col-lg-7 ps-lg-5 mt-4 mt-lg-0">
                <h2 class="mb-4">Get only the <span class="highlight">Best</span></h2>
                <p class="mb-4">Subscribe to HIVE and gain access to a library of unique and beautiful fully edited videos contributed by video editors from all around the world!</p>
                <a href="#" class="btn btn-yellow">Subscribe Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <img src="/api/placeholder/150/50" alt="High Five Videos Logo" class="footer-logo">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0 footer-links">
                <h5>Company</h5>
                <ul>
                    <li><a href="#">Become a contributor</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0 footer-links">
                <h5>Pricing and Plans</h5>
                <ul>
                    <li><a href="#">Individual Plan</a></li>
                    <li><a href="#">Company Plan</a></li>
                    <li><a href="#">Subscriptions</a></li>
                </ul>
            </div>
            <div class="col-lg-3 footer-links">
                <h5>Customer Support</h5>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center copyright">
            © 2024 Hive | Designed by CafeZoo
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
