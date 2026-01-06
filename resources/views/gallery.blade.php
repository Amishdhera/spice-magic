<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Spice Magic Karachi</title>
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

        /* Gallery Hero */
        .gallery-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cmVzdGF1cmFudCUyMGZvb2R8ZW58MHx8MHx8fDA%3D&w=1000&q=80');
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
        
        /* Gallery Items */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            height: 100%;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .gallery-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 25px 20px;
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
        
        .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }
        
        /* Category Filters */
        .category-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            max-width: 900px;
            margin: 0 auto;
        }

        .category-filter {
            display: flex;
            align-items: center;
            background: white;
            border: 2px solid #e9ecef;
            color: var(--dark);
            border-radius: 25px;
            padding: 12px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
            white-space: nowrap;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            cursor: pointer;
        }

        .category-filter.active,
        .category-filter:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(198, 40, 40, 0.3);
        }

        .category-filter i {
            font-size: 0.9rem;
        }
        
        /* Restaurant Section */
        .restaurant-section {
            background: linear-gradient(135deg, var(--light) 0%, #f8f9fa 100%);
        }
        
        .restaurant-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .restaurant-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .restaurant-card img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .restaurant-card:hover img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 1.5rem;
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
        
        /* Lightbox Modal */
        .modal-content {
            border-radius: 15px;
            border: none;
        }
        
        .modal-header {
            border-bottom: 1px solid #eee;
            padding: 1rem 1.5rem;
        }
        
        .modal-body {
            padding: 0;
        }
        
        .modal-body img {
            width: 100%;
            border-radius: 0 0 15px 15px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gallery-hero {
                height: 40vh;
            }
            
            .gallery-hero h1 {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .gallery-item img {
                height: 220px;
            }
            
            .category-filters {
                gap: 8px;
            }
            
            .category-filter {
                padding: 10px 16px;
                font-size: 0.9rem;
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
                        <a class="nav-link active" href="/gallery">Gallery</a>
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

    <!-- Gallery Header -->
    <section class="gallery-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Our Food Gallery</h1>
            <p class="lead">A visual journey through our delicious creations and inviting ambiance</p>
        </div>
    </section>

    <!-- Category Filters -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Explore Our Gallery</h2>
                <p class="lead">Filter by category to see our specialties</p>
            </div>
            <div class="category-filters">
                <button class="category-filter active" data-category="all">
                    <span>All Items</span>
                </button>
                <button class="category-filter" data-category="Main Course">
                    <i class="fas fa-drumstick-bite me-2"></i>
                    <span>Main Course</span>
                </button>
                <button class="category-filter" data-category="Starters">
                    <i class="fas fa-utensils me-2"></i>
                    <span>Starters</span>
                </button>
                <button class="category-filter" data-category="Desserts">
                    <i class="fas fa-ice-cream me-2"></i>
                    <span>Desserts</span>
                </button>
                <button class="category-filter" data-category="Street Food">
                    <i class="fas fa-star me-2"></i>
                    <span>Street Food</span>
                </button>
                <button class="category-filter" data-category="Beverages">
                    <i class="fas fa-glass-whiskey me-2"></i>
                    <span>Beverages</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row" id="galleryGrid">
                <!-- Main Course -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Main Course">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1dHRlciUyMGNoaWNrZW58ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="Butter Chicken">
                        <span class="category-badge">Main Course</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Butter Chicken</h5>
                            <small class="text-warning">Creamy & Rich</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Main Course">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1631452180519-c014fe946bc7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFsYWslMjBwYW5lZXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="Palak Paneer">
                        <span class="category-badge">Main Course</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Palak Paneer</h5>
                            <small class="text-warning">Healthy & Delicious</small>
                        </div>
                    </div>
                </div>
                
                <!-- Starters -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Starters">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1606491956689-2ea866880c84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhbmVlciUyMHRpa2trYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Paneer Tikka">
                        <span class="category-badge">Starters</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Paneer Tikka</h5>
                            <small class="text-warning">Smoky & Spicy</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Starters">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftb3NhfGVufDB8fDB8fHww&w=1000&q=80" alt="Vegetable Samosa">
                        <span class="category-badge">Starters</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Vegetable Samosa</h5>
                            <small class="text-warning">Crispy & Flavorful</small>
                        </div>
                    </div>
                </div>
                
                <!-- Desserts -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Desserts">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3VsYWIlMjBqYW11bnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Gulab Jamun">
                        <span class="category-badge">Desserts</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Gulab Jamun</h5>
                            <small class="text-warning">Sweet & Syrupy</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Desserts">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cmFzbWFsYWl8ZW58MHx8MHx8fDA%3D%3D&w=1000&q=80" alt="Rasmalai">
                        <span class="category-badge">Desserts</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Rasmalai</h5>
                            <small class="text-warning">Creamy & Rich</small>
                        </div>
                    </div>
                </div>
                
                <!-- Street Food -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Street Food">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Biryani">
                        <span class="category-badge">Street Food</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Hyderabadi Biryani</h5>
                            <small class="text-warning">Aromatic & Flavorful</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Street Food">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8a2FyYWhpJTIwY2hpY2tlbnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Chicken Karahi">
                        <span class="category-badge">Street Food</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Chicken Karahi</h5>
                            <small class="text-warning">Spicy & Traditional</small>
                        </div>
                    </div>
                </div>
                
                <!-- Beverages -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Beverages">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1563822249369-9d4d6570e5cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuZ28lMjBsYXNzaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Mango Lassi">
                        <span class="category-badge">Beverages</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Mango Lassi</h5>
                            <small class="text-warning">Refreshing & Sweet</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 fade-in" data-category="Beverages">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFzYWxhJTIwY2hhaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Masala Chai">
                        <span class="category-badge">Beverages</span>
                        <div class="gallery-overlay">
                            <h5 class="mb-1">Masala Chai</h5>
                            <small class="text-warning">Aromatic & Spiced</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Restaurant Photos -->
    <section class="py-5 restaurant-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Restaurant Ambiance</h2>
                <p class="lead">Experience our warm and inviting atmosphere</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 fade-in">
                    <div class="restaurant-card">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="Restaurant Interior">
                        <div class="card-body text-center">
                            <h5 class="card-title">Elegant Dining Area</h5>
                            <p class="card-text text-muted">Comfortable seating with traditional decor</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="restaurant-card">
                        <img src="https://images.unsplash.com/photo-1559329007-40df8a9345d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGtpdGNoZW58ZW58MHx8MHx8fDA%3D%3D&w=1000&q=80" alt="Kitchen">
                        <div class="card-body text-center">
                            <h5 class="card-title">Modern Kitchen</h5>
                            <p class="card-text text-muted">Hygienic & professionally equipped</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="restaurant-card">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cmVzdGF1cmFudCUyMGV4dGVyaW9yfGVufDB8fDB8fHww&w=1000&q=80" alt="Restaurant Exterior">
                        <div class="card-body text-center">
                            <h5 class="card-title">Beautiful Exterior</h5>
                            <p class="card-text text-muted">Welcoming facade with traditional elements</p>
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

    <!-- Lightbox Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Food Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" id="modalImage" class="img-fluid">
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
        
        // Gallery Filter JavaScript - UPDATED FOR NEW BUTTON STRUCTURE
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.category-filter');
            const galleryItems = document.querySelectorAll('#galleryGrid > div');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const category = this.getAttribute('data-category');
                    
                    // Filter items
                    galleryItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block';
                            // Trigger animation
                            setTimeout(() => {
                                item.classList.add('appear');
                            }, 50);
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('appear');
                        }
                    });
                });
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
            
            // Lightbox functionality
            const galleryImages = document.querySelectorAll('.gallery-item img');
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('imageModalLabel');
            
            galleryImages.forEach(image => {
                image.addEventListener('click', function() {
                    modalImage.src = this.src;
                    modalTitle.textContent = this.alt;
                    modal.show();
                });
            });
        });
    </script>
</body>
</html>