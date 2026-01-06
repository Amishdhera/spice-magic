<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Spice Magic Restaurant</title>
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
            background-color: #fefefe;
            padding-top: 80px;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
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

        /* Menu Hero */
        .menu-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cmVzdGF1cmFudCUyMGZvb2R8ZW58MHx8MHx8fDA%3D&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 40vh;
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
        
        .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 1;
            background-color: var(--primary);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .cart-btn {
            background-color: var(--primary);
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .cart-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
            .menu-hero {
                height: 30vh;
            }
            
            .menu-hero h1 {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
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
                        <a class="nav-link active" href="/menu">Menu</a>
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

    <!-- Menu Header -->
    <section class="menu-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Our Exquisite Menu</h1>
            <p class="lead">Discover the authentic flavors of Pakistan with our carefully crafted dishes</p>
        </div>
    </section>

    <!-- Category Filters -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Categories</h2>
                <p class="lead">Explore our diverse range of culinary delights</p>
            </div>
            <div class="category-filters">
                <button class="category-filter active" data-category="all">
                    <span>All Items</span>
                </button>
                <button class="category-filter" data-category="Starters">
                    <i class="fas fa-utensils me-2"></i>
                    <span>Starters</span>
                </button>
                <button class="category-filter" data-category="Main Course">
                    <i class="fas fa-drumstick-bite me-2"></i>
                    <span>Main Course</span>
                </button>
                <button class="category-filter" data-category="Karachi Specials">
                    <i class="fas fa-star me-2"></i>
                    <span>Karachi Specials</span>
                </button>
                <button class="category-filter" data-category="Breads">
                    <i class="fas fa-bread-slice me-2"></i>
                    <span>Breads</span>
                </button>
                <button class="category-filter" data-category="Desserts">
                    <i class="fas fa-ice-cream me-2"></i>
                    <span>Desserts</span>
                </button>
                <button class="category-filter" data-category="Beverages">
                    <i class="fas fa-glass-whiskey me-2"></i>
                    <span>Beverages</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Menu Items -->
    <section class="py-5">
        <div class="container">
            <div class="row" id="menuItems">
                <!-- Starters -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Starters">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1606491956689-2ea866880c84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhbmVlciUyMHRpa2trYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Paneer Tikka">
                            <span class="category-badge">Starters</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Paneer Tikka</h5>
                            <p class="card-text flex-grow-1">Cubes of paneer marinated in spices and grilled to perfection in a tandoor.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 750</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Starters">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftb3NhfGVufDB8fDB8fHww&w=1000&q=80" class="card-img-top dish-img" alt="Vegetable Samosa">
                            <span class="category-badge">Starters</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Vegetable Samosa</h5>
                            <p class="card-text flex-grow-1">Crispy pastry filled with spiced potatoes and peas, served with chutney.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 350</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Course -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Main Course">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1dHRlciUyMGNoaWNrZW58ZW58MHx8MHx8fDA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Butter Chicken">
                            <span class="category-badge">Main Course</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Butter Chicken</h5>
                            <p class="card-text flex-grow-1">Tender chicken in a rich, creamy tomato gravy with aromatic spices.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 1200</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Main Course">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1631452180519-c014fe946bc7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFsYWslMjBwYW5lZXJ8ZW58MHx8MHx8fDA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Palak Paneer">
                            <span class="category-badge">Main Course</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Palak Paneer</h5>
                            <p class="card-text flex-grow-1">Fresh spinach cooked with Indian cottage cheese and mild spices.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 850</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Karachi Specials -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Karachi Specials">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Biryani">
                            <span class="category-badge">Karachi Specials</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Karachi Biryani</h5>
                            <p class="card-text flex-grow-1">Fragrant basmati rice layered with spiced meat and cooked to perfection.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 950</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Karachi Specials">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8a2FyYWhpJTIwY2hpY2tlbnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Chicken Karahi">
                            <span class="category-badge">Karachi Specials</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Chicken Karahi</h5>
                            <p class="card-text flex-grow-1">Traditional wok-cooked chicken with tomatoes and green chilies.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 1100</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Breads -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Breads">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bmFhbnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Butter Naan">
                            <span class="category-badge">Breads</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Butter Naan</h5>
                            <p class="card-text flex-grow-1">Soft leavened bread baked in tandoor, brushed with butter.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 100</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Desserts -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Desserts">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3VsYWIlMjBqYW11bnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Gulab Jamun">
                            <span class="category-badge">Desserts</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Gulab Jamun</h5>
                            <p class="card-text flex-grow-1">Soft, melt-in-mouth milk solids dumplings in fragrant sugar syrup.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 250</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Desserts">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cmFzbWFsYWl8ZW58MHx8MHx8fDA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Rasmalai">
                            <span class="category-badge">Desserts</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Rasmalai</h5>
                            <p class="card-text flex-grow-1">Soft cottage cheese patties soaked in sweetened, thickened milk.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 300</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Beverages -->
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Beverages">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1563822249369-9d4d6570e5cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuZ28lMjBsYXNzaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Mango Lassi">
                            <span class="category-badge">Beverages</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Mango Lassi</h5>
                            <p class="card-text flex-grow-1">Refreshing yogurt-based drink with sweet mango pulp.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 200</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4 fade-in" data-category="Beverages">
                    <div class="card dish-card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFzYWxhJTIwY2hhaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="card-img-top dish-img" alt="Masala Chai">
                            <span class="category-badge">Beverages</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Masala Chai</h5>
                            <p class="card-text flex-grow-1">Aromatic spiced tea brewed with traditional spices.</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <strong class="text-success fs-5">Rs. 120</strong>
                                <button class="cart-btn">Add to Cart</button>
                            </div>
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
                    <p>Experience the authentic flavors of Pakistan with our traditional recipes and modern presentation. We bring you the taste of home with a touch of elegance.</p>
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
        
        // Category Filter JavaScript - UPDATED FOR NEW BUTTON STRUCTURE
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.category-filter');
            const menuItems = document.querySelectorAll('#menuItems > div');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const category = this.getAttribute('data-category');
                    
                    // Filter items
                    menuItems.forEach(item => {
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
            
            // Add to cart functionality
            const cartButtons = document.querySelectorAll('.cart-btn');
            cartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dishName = this.closest('.card-body').querySelector('.card-title').textContent;
                    const originalText = this.textContent;
                    
                    this.textContent = 'Added!';
                    this.style.backgroundColor = '#28a745';
                    
                    setTimeout(() => {
                        this.textContent = originalText;
                        this.style.backgroundColor = '';
                    }, 2000);
                    
                    // In a real application, you would add the item to a cart system here
                    console.log(`Added ${dishName} to cart`);
                });
            });
        });
    </script>
</body>
</html>