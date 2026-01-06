<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice Magic - Authentic Pakistani Restaurant</title>
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
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 90vh;
            color: white;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            max-width: 700px;
        }
        
        .hero-section h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }
        
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .btn-hero-primary {
            background-color: var(--primary);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
            color: white;
        }
        
        .btn-hero-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-hero-outline {
            border: 2px solid white;
            color: white;
            padding: 10px 28px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-hero-outline:hover {
            background-color: white;
            color: var(--dark);
            transform: translateY(-3px);
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
        
        .dish-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            border: 1px solid #eee;
        }
        
        .dish-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .dish-img {
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .dish-card:hover .dish-img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .price-tag {
            background-color: var(--secondary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
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
        
        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin: 1rem;
            height: 100%;
            border-left: 4px solid var(--secondary);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .client-name {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0;
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
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1rem;
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
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
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
    <section class="hero-section">
        <div class="container">
            <div class="hero-content fade-in text-center text-lg-start">
                <h1 class="display-4 fw-bold mb-3">Authentic Pakistani Cuisine</h1>
                <p class="lead mb-4">
                    Discover the rich flavors, aromatic spices, and traditional recipes crafted 
                    by our expert chefs. Spice-Magic brings you an unforgettable culinary experience.
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="/menu" class="btn btn-hero-primary me-3 px-4 py-2">
                        Explore Menu
                    </a>
                    <a href="/reservation" class="btn btn-hero-outline px-4 py-2">
                        Book a Table
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Dishes -->
    <section id="specialties" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Specialties</h2>
                <p class="lead">Taste the magic in every bite</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card dish-card shadow">
                        <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1dHRlciUyMGNoaWNrZW58ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="card-img-top dish-img" alt="Butter Chicken">
                        <div class="card-body text-center">
                            <h5 class="card-title">Butter Chicken</h5>
                            <p class="card-text">Tender chicken in a rich, creamy tomato gravy with aromatic spices.</p>
                            <span class="price-tag">Rs. 1200</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card dish-card shadow">
                        <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Biryani">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hyderabadi Biryani</h5>
                            <p class="card-text">Fragrant basmati rice layered with spiced meat and cooked to perfection.</p>
                            <span class="price-tag">Rs. 850</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card dish-card shadow">
                        <img src="https://images.unsplash.com/photo-1606491956689-2ea866880c84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhbmVlciUyMHRpa2trYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Paneer Tikka">
                        <div class="card-body text-center">
                            <h5 class="card-title">Paneer Tikka</h5>
                            <p class="card-text">Marinated cottage cheese grilled to perfection in a traditional tandoor.</p>
                            <span class="price-tag">Rs. 750</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 fade-in">
                    <div class="card dish-card shadow">
                        <img src="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3VsYWIlMjBqYW11bnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Gulab Jamun">
                        <div class="card-body text-center">
                            <h5 class="card-title">Gulab Jamun</h5>
                            <p class="card-text">Soft, melt-in-mouth milk solids dumplings in fragrant sugar syrup.</p>
                            <span class="price-tag">Rs. 250</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/menu" class="btn btn-primary-custom">View Full Menu</a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Quick Service</h4>
                        <p>Fresh food prepared and served within 20 minutes of ordering</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Fresh Ingredients</h4>
                        <p>Daily sourced fresh vegetables, herbs and authentic spices</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <h4>Best Prices</h4>
                        <p>Premium quality food at affordable and competitive prices</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
   


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="fas fa-pepper-hot me-2"></i>Spice Magic</h5>
                    <p>Indulge in the authentic taste of Pakistan, crafted with traditional spices, fresh ingredients, and a modern culinary touch. A perfect blend of heritage and elegance in every bite.</p>
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
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Food Street, Karachi</li>
                        <li><i class="fas fa-phone me-2"></i> +92 3161103616</li>
                        <li><i class="fas fa-envelope me-2"></i> info@spicemagic.com</li>
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
                <p>&copy; 2024 Spice Magic Restaurant. All rights reserved.</p>
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