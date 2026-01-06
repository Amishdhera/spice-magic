<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation - Spice Magic Karachi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
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
            background-color: #f8f9fa;
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
        .reservation-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 50vh;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .reservation-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(198, 40, 40, 0.3), rgba(255, 152, 0, 0.3));
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Reservation Card */
        .reservation-card {
            border: none;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
        }
        
        .reservation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem;
            text-align: center;
            border-bottom: none;
        }
        
        .card-header-custom h2 {
            margin: 0;
            font-size: 2rem;
        }
        
        .card-header-custom i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        /* Form Styles */
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(198, 40, 40, 0.25);
        }
        
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-right: none;
        }
        
        /* Button Styles */
        .btn-reserve {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            padding: 15px 50px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 50px;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(198, 40, 40, 0.3);
        }
        
        .btn-reserve:hover {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(198, 40, 40, 0.4);
            color: white;
        }
        
        .btn-reserve:active {
            transform: translateY(0);
        }
        
        /* Info Cards */
        .info-card {
            border-left: 4px solid var(--primary);
            border-radius: 15px;
            transition: all 0.3s ease;
            height: 100%;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-left: 4px solid var(--secondary);
        }
        
        .info-card .card-body {
            padding: 2rem;
        }
        
        .info-card h5 {
            color: var(--primary);
            margin-bottom: 1rem;
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
        
        /* Success Modal */
        .modal-content {
            border-radius: 20px;
            overflow: hidden;
            border: none;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-bottom: none;
            padding: 2rem;
        }
        
        .modal-body {
            padding: 2rem;
            text-align: center;
        }
        
        .success-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 1.5rem;
        }
        
        /* Form validation styles */
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }
        
        .is-invalid ~ .invalid-feedback {
            display: block;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .reservation-hero {
                height: 40vh;
            }
            
            .reservation-hero h1 {
                font-size: 2.5rem;
            }
            
            .card-header-custom h2 {
                font-size: 1.5rem;
            }
            
            .btn-reserve {
                width: 100%;
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
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary-custom ms-3 active" href="/reservation">Reserve Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Reservation Hero -->
    <section class="reservation-hero">
        <div class="container hero-content text-center">
            <h1 class="display-4 fw-bold mb-3">Table Reservation</h1>
            <p class="lead fs-4">Book your table for an unforgettable dining experience</p>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card reservation-card fade-in">
                        <div class="card-header-custom">
                            <i class="fas fa-calendar-alt"></i>
                            <h2>Book Your Table</h2>
                        </div>
                        <div class="card-body p-4 p-md-5">
                            <form id="reservationForm" method="POST" action="{{ route('reservation.store') }}">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-user text-primary"></i></span>
                                            <input type="text" class="form-control border-start-0" id="name" name="name" 
                                                   value="{{ old('name') }}" required placeholder="Enter your full name">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-envelope text-primary"></i></span>
                                            <input type="email" class="form-control border-start-0" id="email" name="email"
                                                   value="{{ old('email') }}" required placeholder="your.email@example.com">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-phone text-primary"></i></span>
                                            <input type="tel" class="form-control border-start-0" id="phone" name="phone"
                                                   value="{{ old('phone') }}" required placeholder="03XX-XXXXXXX">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid phone number.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="guests" class="form-label">Number of Guests *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-users text-primary"></i></span>
                                            <select class="form-select border-start-0" id="guests" name="guests" required>
                                                <option value="">Select guests</option>
                                                @for($i = 1; $i <= 20; $i++)
                                                    <option value="{{ $i }}" {{ old('guests') == $i ? 'selected' : '' }}>
                                                        {{ $i }} {{ $i == 1 ? 'Person' : 'People' }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please select number of guests.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="date" class="form-label">Date *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-calendar text-primary"></i></span>
                                            <input type="date" class="form-control border-start-0" id="date" name="date"
                                                   value="{{ old('date') }}" min="{{ date('Y-m-d') }}" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please select a valid date.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="time" class="form-label">Time *</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="fas fa-clock text-primary"></i></span>
                                            <select class="form-select border-start-0" id="time" name="time" required>
                                                <option value="">Select time</option>
                                                <option value="11:00" {{ old('time') == '11:00' ? 'selected' : '' }}>11:00 AM</option>
                                                <option value="12:00" {{ old('time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                                                <option value="13:00" {{ old('time') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
                                                <option value="14:00" {{ old('time') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
                                                <option value="18:00" {{ old('time') == '18:00' ? 'selected' : '' }}>6:00 PM</option>
                                                <option value="19:00" {{ old('time') == '19:00' ? 'selected' : '' }}>7:00 PM</option>
                                                <option value="20:00" {{ old('time') == '20:00' ? 'selected' : '' }}>8:00 PM</option>
                                                <option value="21:00" {{ old('time') == '21:00' ? 'selected' : '' }}>9:00 PM</option>
                                                <option value="22:00" {{ old('time') == '22:00' ? 'selected' : '' }}>10:00 PM</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please select a time.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="special_request" class="form-label">Special Requests</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light align-items-start border-end-0 pt-3"><i class="fas fa-sticky-note text-primary"></i></span>
                                        <textarea class="form-control border-start-0" id="special_request" name="special_request" 
                                                  rows="4" placeholder="Any special requirements or celebrations...">{{ old('special_request') }}</textarea>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-reserve">
                                        <i class="fas fa-check-circle me-2"></i>Book Table Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card info-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-phone-alt me-2"></i>Phone Reservation</h5>
                            <p class="mb-3">Call us directly to book your table</p>
                            <strong class="text-danger fs-5">+92 316 1103616</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card info-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-clock me-2"></i>Opening Hours</h5>
                            <p class="mb-2"><strong>Mon-Fri:</strong> 11:00 AM - 11:00 PM</p>
                            <p class="mb-0"><strong>Sat-Sun:</strong> 11:00 AM - 12:00 AM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card info-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-info-circle me-2"></i>Reservation Policy</h5>
                            <p class="mb-0">Tables held for 15 minutes only. For large groups (8+), please call in advance. Cancellations must be made 2 hours prior to reservation.</p>
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

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reservation Successful!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h4 class="text-success mb-3">Thank You!</h4>
                    <p>Your table reservation has been successfully submitted. We've sent a confirmation to your email.</p>
                    <p>We look forward to serving you at Spice Magic Karachi!</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-reserve" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
        
        // Form handling
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('reservationForm');
            const dateInput = document.getElementById('date');
            const phoneInput = document.getElementById('phone');
            
            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            dateInput.min = today;
            
            // Phone number validation
            phoneInput.addEventListener('input', function(e) {
                let phone = e.target.value.replace(/\D/g, '');
                if (phone.length > 0) {
                    phone = phone.substring(0, 11);
                }
                e.target.value = phone;
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('is-invalid');
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                if (isValid) {
                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                    
                    // Simulate form submission
                    setTimeout(function() {
                        // Show success modal
                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                        
                        // Reset form
                        form.reset();
                        
                        // Reset button
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }, 1500);
                }
            });
            
            // Remove invalid class when user starts typing
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });
        });
    </script>
</body>
</html>