<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Spice Magic Karachi</title>
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

        /* Contact Hero */
        .contact-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGthcmFjaGklMjBjaXR5fGVufDB8fDB8fHww&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 50vh;
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
        
        /* Contact Cards */
        .contact-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            padding: 2rem;
            text-align: center;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .info-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .map-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .btn-contact {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            color: white;
            border-radius: 30px;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-contact:hover {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(198, 40, 40, 0.25);
        }
        
        .timing-card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .timing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        /* Quick Contact Section */
        .quick-contact {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .contact-method {
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            transform: translateY(-5px);
        }
        
        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--secondary);
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
            .contact-hero {
                height: 40vh;
            }
            
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .contact-card {
                padding: 1.5rem;
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
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary-custom ms-3" href="/reservation">Reserve Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Get In Touch</h1>
            <p class="lead">We'd love to hear from you. Visit us or drop us a message!</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact Information</h2>
                <p class="lead">Multiple ways to reach us</p>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 fade-in">
                    <div class="contact-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="text-danger">Our Location</h4>
                        <p>Burns Road, Karachi, Pakistan</p>
                        <small class="text-muted">Visit us at our prime location in the heart of Karachi's food street</small>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 fade-in">
                    <div class="contact-card">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4 class="text-danger">Phone Number</h4>
                        <p>+92 300 1234567</p>
                        <small class="text-muted">Call us for reservations, takeaway, or any queries</small>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 fade-in">
                    <div class="contact-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="text-danger">Email Address</h4>
                        <p>info@spicemagickarachi.com</p>
                        <small class="text-muted">Send us your feedback, suggestions, or catering inquiries</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6 mb-4 fade-in">
                    <div class="contact-card h-100">
                        <h3 class="text-danger mb-4">Send us a Message</h3>
                        
                        <div class="alert alert-success alert-dismissible fade show d-none" role="alert" id="successAlert">
                            Thank you for your message! We'll get back to you soon.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" name="subject">
                                    <option value="Reservation">Table Reservation</option>
                                    <option value="Catering">Catering Service</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn-contact">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Map & Timings -->
                <div class="col-lg-6">
                    <div class="map-container mb-4 fade-in">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.739321114623!2d67.0282462753246!3d24.86197774487921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e4c0d6c4119%3A0x64bf41d80e5c0b1d!2sBurns%20Road%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="timing-card p-4 fade-in">
                        <h4 class="text-danger mb-4">Opening Hours</h4>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Monday - Friday</strong>
                            <span class="text-muted">11:00 AM - 11:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Saturday - Sunday</strong>
                            <span class="text-muted">10:00 AM - 11:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Holidays</strong>
                            <span class="text-muted">10:00 AM - 11:00 PM</span>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h5 class="text-success"><i class="fas fa-phone me-2"></i>For Reservations</h5>
                            <p class="mb-0">Call us: <strong>+92 300 1234567</strong></p>
                            <small class="text-muted">We recommend booking in advance for weekends</small>
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
        
        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            document.getElementById('successAlert').classList.remove('d-none');
            
            // Reset form
            this.reset();
            
            // Scroll to success message
            document.getElementById('successAlert').scrollIntoView({ behavior: 'smooth' });
            
            // In a real application, you would send the form data to a server here
            console.log('Form submitted successfully');
        });
    </script>
</body>
</html>