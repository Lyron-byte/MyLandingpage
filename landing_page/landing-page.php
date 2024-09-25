<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page with Complex Navbar</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #121212; /* Dark mode background */
            color: #f5f5f5;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        /* Complex Navbar */
        header {
            background-color: #1f1f1f;
            color: #fff;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.7rem;
            font-weight: bold;
            color: #ff6f61;
        }

        /* Search Bar */
        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 20px;
            outline: none;
            background-color: #333;
            color: #fff;
            width: 200px;
            transition: width 0.4s ease;
        }

        .search-bar input[type="text"]:focus {
            width: 300px;
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #fff;
            cursor: pointer;
        }

        /* Main Navigation Links */
        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .nav-links li {
            margin-left: 20px;
            position: relative;
        }

        .nav-links a {
            color: #f5f5f5;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #ff6f61;
        }

        /* Dropdown Menu */
        .nav-links .dropdown {
            position: absolute;
            top: 40px;
            left: 0;
            background-color: #1f1f1f;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 100;
        }

        .nav-links li:hover .dropdown {
            display: block;
        }

        .nav-links .dropdown a {
            display: block;
            padding: 8px 15px;
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 5px;
        }

        @media(max-width: 768px) {
            .nav-links {
                flex-direction: column;
                display: none;
                width: 100%;
                background-color: #1f1f1f;
                position: absolute;
                top: 60px;
                left: 0;
            }

            .navbar.active .nav-links {
                display: flex;
            }

            .hamburger {
                display: flex;
            }

            .search-bar {
                margin-top: 10px;
            }
        }

        /* Hero Section */
        .hero {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 80px; /* Offset for the fixed navbar */
        }

        .hero h1 {
            font-size: 3rem;
        }

        .btn {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff4b3a;
        }

        /* Sections */
        .about, .contact {
            padding: 60px 0;
        }

        /* About Section */
        .about {
            background-color: #1f1f1f;
            text-align: center;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff6f61;
        }

        .about p {
            color: #b3b3b3;
            font-size: 1.2rem;
            max-width: 800px;
            margin: auto;
        }

        /* Contact Section */
        .contact form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact input, .contact textarea {
            padding: 10px;
            width: 100%;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        .contact button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        footer {
            background-color: #1f1f1f;
            color: #f5f5f5;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="#">MyWebsite</a>
                </div>
                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>&#128269;</button>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">Services</a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown">
                            <a href="#">Web Design</a>
                            <a href="#">SEO</a>
                            <a href="#">Development</a>
                        </div>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to MyWebsite</h1>
            <p>Your one-stop solution for web development.</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We offer professional web development services tailored to your needs. Our team is committed to delivering top-notch websites with excellent user experience.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contactForm" action="" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>

            <!-- PHP to handle form submission -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<p>Thank you, $name. We have received your message and will get back to you soon at $email.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 MyWebsite. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Hamburger Menu for Mobile
        const hamburger = document.querySelector('.hamburger');
        const navbar = document.querySelector('.navbar');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navbar.classList.toggle('active');
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
