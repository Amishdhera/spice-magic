<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Spice Magic Karachi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #c62828;
            --primary-dark: #8e0000;
            --secondary: #ff9800;
            --accent: #ffeb3b;
            --light: #f5f5f5;
            --dark: #212121;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            overflow-x: hidden;
            padding-top: 80px;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        /* Navbar Styles */
        .navbar {
            background-color: rgba(0, 0, 0, 0.95) !important;
            padding: 15px 0;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.98) !important;
        }
        
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
        }
        
        .navbar-brand i {
            color: var(--secondary);
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 8px;
            position: relative;
            color: white !important;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--secondary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .nav-link:hover {
            color: var(--secondary) !important;
        }
        
        .btn-primary-custom {
            background-color: var(--primary);
            border: none;
            color: white;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGthcmFjaGklMjBjaXR5fGVufDB8fDB8fHww&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 60vh;
            color: white;
            display: flex;
            align-items: center;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 70%;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            bottom: -10px;
            left: 15%;
        }
        
        .team-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            border: 1px solid #eee;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .team-card:hover .team-img {
            transform: scale(1.05);
        }
        
        .feature-box {
            padding: 2rem;
            text-align: center;
            border-radius: 15px;
            transition: all 0.3s ease;
            height: 100%;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .feature-box:hover {
            background-color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .mission-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .mission-box {
            padding: 2rem;
            text-align: center;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .mission-box:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }
        
        .stats-box {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .stats-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        /* Footer Styles */
        .footer {
            background: linear-gradient(to right, var(--dark), #000);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer h5 {
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            color: var(--secondary);
        }
        
        .footer h5::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background-color: var(--secondary);
            bottom: -8px;
            left: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 3rem;
            text-align: center;
        }
        
        /* Animation classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-hero {
                height: 50vh;
            }
            
            .about-hero h1 {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-pepper-hot me-2"></i>Spice Magic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary-custom ms-3" href="/reservation">Reserve Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">About Spice Magic Karachi</h1>
            <p class="lead">Serving Authentic Karachi Flavors Since 2010</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-in">
                    <h2 class="section-title">Our Karachi Journey</h2>
                    <p class="lead">From the bustling streets of Karachi to your plate, we bring the authentic taste of Pakistan's food capital.</p>
                    <p>Founded in 2010 by the Raza family, Spice Magic Karachi started as a small food stall in Burns Road. Today, we continue to serve the same authentic flavors that made Karachi famous for its street food.</p>
                    <p>Our secret? Traditional recipes, fresh ingredients, and the passion for preserving Karachi's rich culinary heritage.</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 mb-3">
                            <div class="stats-box">
                                <div class="stats-number">5000+</div>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stats-box">
                                <div class="stats-number">12+</div>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stats-box">
                                <div class="stats-number">50+</div>
                                <p>Authentic Dishes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-in">
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGthcmFjaGklMjBjaXR5fGVufDB8fDB8fHww&w=1000&q=80" 
                         class="img-fluid rounded shadow" alt="Karachi City">
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose Spice Magic?</h2>
                <p class="lead">Experience the true essence of Karachi cuisine</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h5>Authentic Recipes</h5>
                        <p>Traditional family recipes passed down through generations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h5>Fresh Ingredients</h5>
                        <p>Daily sourced fresh vegetables, herbs and authentic spices</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5>Premium Quality</h5>
                        <p>Highest quality standards in preparation and service</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5>Made with Love</h5>
                        <p>Every dish prepared with passion and attention to detail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Karachi Team</h2>
                <p class="lead">The passionate people behind your favorite flavors</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card team-card h-100">
                        <img src="" 
                             class="card-img-top team-img" alt="Chef Ahmed Raza">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ameet Kumar Dhera</h5>
                            <h6 class="text-muted">Founder</h6>
                            <p class="card-text">
                                <small class="text-success">15+ Years Experience</small><br>
                                <small class="text-muted">Specializes in Karachi Street Food</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card team-card h-100">
                        <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80" 
                             class="card-img-top team-img" alt="Chef Fatima Khan">
                        <div class="card-body text-center">
                            <h5 class="card-title">Chef Fatima Khan</h5>
                            <h6 class="text-muted">Sous Chef</h6>
                            <p class="card-text">
                                <small class="text-success">10+ Years Experience</small><br>
                                <small class="text-muted">Expert in Traditional Biryanis</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card team-card h-100">
                        <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80" 
                             class="card-img-top team-img" alt="Manager Bilal Ahmed">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bilal Ahmed</h5>
                            <h6 class="text-muted">Restaurant Manager</h6>
                            <p class="card-text">
                                <small class="text-success">8+ Years Experience</small><br>
                                <small class="text-muted">Hospitality & Customer Service</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card team-card h-100">
                        <img src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80" 
                             class="card-img-top team-img" alt="Chef Sara Javed">
                        <div class="card-body text-center">
                            <h5 class="card-title">Chef Sara Javed</h5>
                            <h6 class="text-muted">Pastry Chef</h6>
                            <p class="card-text">
                                <small class="text-success">7+ Years Experience</small><br>
                                <small class="text-muted">Traditional Pakistani Desserts</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  



    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="fas fa-pepper-hot me-2"></i>Spice Magic</h5>
                    <p>Experience the authentic flavors of Karachi with our traditional recipes and modern presentation. We bring you the taste of home with a touch of elegance.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/menu">Menu</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Burns Road, Karachi, Pakistan</li>
                        <li><i class="fas fa-phone me-2"></i> +92 300 1234567</li>
                        <li><i class="fas fa-envelope me-2"></i> info@spicemagickarachi.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Opening Hours</h5>
                    <ul class="list-unstyled footer-links">
                        <li>Monday - Friday: 11:00 AM - 11:00 PM</li>
                        <li>Saturday - Sunday: 10:00 AM - 11:30 PM</li>
                        <li>Holidays: 10:00 AM - 11:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2024 Spice Magic Karachi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Fade in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const appearOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -100px 0px"
        };
        
        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);
        
        fadeElements.forEach(element => {
            appearOnScroll.observe(element);
        });
    </script>
</body>
</html>