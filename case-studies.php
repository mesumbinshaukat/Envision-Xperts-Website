<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies - Envision Xperts | Our Success Stories</title>
    <meta name="description" content="Explore our portfolio of successful web development, mobile app, and digital transformation projects. Real results, proven expertise.">
    <meta name="keywords" content="portfolio, case studies, web development projects, success stories, client results">
    
    <!-- CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg">
</head>
<body>
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="case-studies-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center min-vh-70">
                <div class="col-lg-10">
                    <div class="case-studies-hero-content" data-aos="fade-up">
                        <h1 class="case-studies-hero-title">Our <span class="text-gradient">Success Stories</span></h1>
                        <p class="case-studies-hero-description">Discover how we've helped businesses transform their digital presence with innovative solutions that deliver real results.</p>
                        <div class="case-studies-hero-stats">
                            <div class="hero-stat-item">
                                <div class="stat-number" data-count="150">30+</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="stat-number" data-count="50">50+</div>
                                <div class="stat-label">Happy Clients</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="stat-number" data-count="99">90+</div>
                                <div class="stat-label">% Success Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="filter-buttons text-center" data-aos="fade-up">
                        <button class="filter-btn active" data-filter="all">All Projects</button>
                        <button class="filter-btn" data-filter="magento">Magento</button>
                        <button class="filter-btn" data-filter="php">PHP</button>
                        <button class="filter-btn" data-filter="wordpress">WordPress</button>
                        <button class="filter-btn" data-filter="e-commerce">E-Commerce</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section class="case-studies-grid py-5">
        <div class="container">
            <div class="row g-4" id="case-studies-grid">
                
                <!-- MAGENTO PROJECTS -->
                
                <!-- The Utility Kilt -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="magento e-commerce" data-aos="fade-up">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1490114538077-0a7f8cb49891?w=800&h=500&fit=crop" alt="The Utility Kilt" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Magento</div>
                                    <h3 class="overlay-title">The Utility Kilt</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-cart"></i> Magento Platform</span>
                                        <span><i class="fas fa-star"></i> Custom Products</span>
                                    </div>
                                    <a href="case-study-utility-kilt.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://www.theutilitykilt.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 5 Months</span>
                                <span><i class="fas fa-tools"></i> Magento</span>
                            </div>
                            <h3 class="case-title">The Utility Kilt - Custom Apparel Store</h3>
                            <p class="case-description">Specialized Magento e-commerce platform for custom utility kilts with advanced product customization and sizing options.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-cogs"></i>
                                    <div>
                                        <h5>Custom Options</h5>
                                        <p>Product personalization</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-shipping-fast"></i>
                                    <div>
                                        <h5>Global Shipping</h5>
                                        <p>Worldwide delivery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.theutilitykilt.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EBS UK -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="magento e-commerce" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=500&fit=crop" alt="EBS UK" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Magento</div>
                                    <h3 class="overlay-title">EBS UK</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-store"></i> Enterprise Solution</span>
                                        <span><i class="fas fa-chart-line"></i> High Performance</span>
                                    </div>
                                    <a href="case-study-ebs.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://www.ebs.co.uk/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 6 Months</span>
                                <span><i class="fas fa-tools"></i> Magento</span>
                            </div>
                            <h3 class="case-title">EBS UK - Enterprise E-commerce Platform</h3>
                            <p class="case-description">Comprehensive Magento-based e-commerce solution for UK market with advanced inventory management and multi-channel integration.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-boxes"></i>
                                    <div>
                                        <h5>Inventory System</h5>
                                        <p>Real-time tracking</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-sync"></i>
                                    <div>
                                        <h5>Multi-Channel</h5>
                                        <p>Seamless integration</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.ebs.co.uk/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assured Performance -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="magento e-commerce" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=500&fit=crop" alt="Assured Performance" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Magento</div>
                                    <h3 class="overlay-title">Assured Performance</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-car"></i> Automotive Parts</span>
                                        <span><i class="fas fa-trophy"></i> Industry Leader</span>
                                    </div>
                                    <a href="case-study-assured-performance.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://www.assuredperformance.ie/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 7 Months</span>
                                <span><i class="fas fa-tools"></i> Magento</span>
                            </div>
                            <h3 class="case-title">Assured Performance - Automotive E-commerce</h3>
                            <p class="case-description">Specialized Magento platform for automotive parts with advanced search, compatibility checking, and B2B features.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-search"></i>
                                    <div>
                                        <h5>Smart Search</h5>
                                        <p>Part compatibility</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-handshake"></i>
                                    <div>
                                        <h5>B2B Portal</h5>
                                        <p>Wholesale features</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.assuredperformance.ie/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PHP PROJECTS -->
                
                <!-- Unicraft Belgium -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="php e-commerce" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&h=500&fit=crop" alt="Unicraft Belgium" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">PHP / OpenCart</div>
                                    <h3 class="overlay-title">Unicraft Belgium</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-bag"></i> OpenCart Platform</span>
                                        <span><i class="fas fa-globe"></i> European Market</span>
                                    </div>
                                    <a href="case-study-unicraft.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://www.unicraft.be/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> OpenCart PHP</span>
                            </div>
                            <h3 class="case-title">Unicraft Belgium - Craft Supplies Store</h3>
                            <p class="case-description">OpenCart-based e-commerce platform for craft supplies with multi-language support and European payment integration.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-language"></i>
                                    <div>
                                        <h5>Multi-Language</h5>
                                        <p>European markets</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-euro-sign"></i>
                                    <div>
                                        <h5>EU Payments</h5>
                                        <p>Local gateways</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.unicraft.be/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gigacrea -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="php e-commerce" data-aos="fade-up" data-aos-delay="400">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800&h=500&fit=crop" alt="Gigacrea" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">PHP / OpenCart</div>
                                    <h3 class="overlay-title">Gigacrea</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-paint-brush"></i> Creative Products</span>
                                        <span><i class="fas fa-rocket"></i> Fast Performance</span>
                                    </div>
                                    <a href="case-study-gigacrea.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://www.gigacrea.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> OpenCart PHP</span>
                            </div>
                            <h3 class="case-title">Gigacrea - Creative Supplies Platform</h3>
                            <p class="case-description">OpenCart e-commerce solution for creative and artistic supplies with custom product filtering and visual catalog.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-filter"></i>
                                    <div>
                                        <h5>Smart Filters</h5>
                                        <p>Product discovery</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-images"></i>
                                    <div>
                                        <h5>Visual Catalog</h5>
                                        <p>Rich media gallery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://www.gigacrea.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WORDPRESS / SHOPIFY PROJECTS -->
                
                <!-- Shoe Potion -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress e-commerce" data-aos="fade-up" data-aos-delay="500">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&h=500&fit=crop" alt="Shoe Potion" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Shopify</div>
                                    <h3 class="overlay-title">Shoe Potion</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-cart"></i> 400% Sales Growth</span>
                                        <span><i class="fas fa-users"></i> 10k+ Customers</span>
                                    </div>
                                    <a href="case-study-shoe-potion.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://shoepotion.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> Shopify</span>
                            </div>
                            <h3 class="case-title">Shoe Potion - Premium Shoe Care Store</h3>
                            <p class="case-description">Premium Shopify e-commerce store for shoe cleaning and sneaker care products with optimized conversion funnel.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-mobile-alt"></i>
                                    <div>
                                        <h5>Mobile Optimized</h5>
                                        <p>85% mobile traffic</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-credit-card"></i>
                                    <div>
                                        <h5>Secure Checkout</h5>
                                        <p>Multiple payment options</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://shoepotion.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Exaure Scents -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress e-commerce" data-aos="fade-up" data-aos-delay="600">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=800&h=500&fit=crop" alt="Exaure Scents" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Shopify</div>
                                    <h3 class="overlay-title">Exaure Scents</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-bag"></i> Premium Fragrances</span>
                                        <span><i class="fas fa-star"></i> Luxury Experience</span>
                                    </div>
                                    <a href="case-study-exaure-scents.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://exaureascents.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 3 Months</span>
                                <span><i class="fas fa-tools"></i> Shopify</span>
                            </div>
                            <h3 class="case-title">Exaure Scents - Premium Fragrance Store</h3>
                            <p class="case-description">Luxury perfume and attar e-commerce store with elegant design, product categorization, and premium shopping experience.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-palette"></i>
                                    <div>
                                        <h5>Luxury Design</h5>
                                        <p>Premium aesthetics</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-tags"></i>
                                    <div>
                                        <h5>Smart Categories</h5>
                                        <p>Easy product discovery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://exaureascents.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Glytone -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress e-commerce" data-aos="fade-up" data-aos-delay="700">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=800&h=500&fit=crop" alt="Glytone Skincare" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Shopify</div>
                                    <h3 class="overlay-title">Glytone Skincare</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-users"></i> Professional Network</span>
                                        <span><i class="fas fa-star"></i> Premium Products</span>
                                    </div>
                                    <a href="case-study-glytone.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://glytone.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 6 Months</span>
                                <span><i class="fas fa-tools"></i> Shopify Plus</span>
                            </div>
                            <h3 class="case-title">Glytone Professional Skincare Platform</h3>
                            <p class="case-description">Premium skincare e-commerce platform with physician finder, professional product catalog, and advanced filtering system.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-search"></i>
                                    <div>
                                        <h5>Physician Finder</h5>
                                        <p>Professional network</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-filter"></i>
                                    <div>
                                        <h5>Advanced Filters</h5>
                                        <p>Smart product discovery</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://glytone.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Iman Construction -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress" data-aos="fade-up" data-aos-delay="800">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=500&fit=crop" alt="Iman Construction" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">WordPress</div>
                                    <h3 class="overlay-title">Iman Construction</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-building"></i> Construction Leader</span>
                                        <span><i class="fas fa-award"></i> 15 Years Warranty</span>
                                    </div>
                                    <a href="case-study-iman-construction.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://imancc.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 5 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress</span>
                            </div>
                            <h3 class="case-title">Iman Construction Company Website</h3>
                            <p class="case-description">Professional construction company website showcasing premium services in Karachi with project portfolio and cost calculator.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-calculator"></i>
                                    <div>
                                        <h5>Cost Calculator</h5>
                                        <p>Interactive pricing tool</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-images"></i>
                                    <div>
                                        <h5>Project Gallery</h5>
                                        <p>Showcase portfolio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://imancc.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fragrance Line by SM -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress e-commerce" data-aos="fade-up" data-aos-delay="900">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?w=800&h=500&fit=crop" alt="Fragrance Line by SM" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">WordPress</div>
                                    <h3 class="overlay-title">Fragrance Line by SM</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-spray-can"></i> Luxury Fragrances</span>
                                        <span><i class="fas fa-wordpress"></i> WordPress</span>
                                    </div>
                                    <a href="case-study-fragrance-line.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://fragrancelinebysm.com/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 3 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress</span>
                            </div>
                            <h3 class="case-title">Fragrance Line by SM - Perfume Store</h3>
                            <p class="case-description">WordPress-based e-commerce site for premium fragrances with elegant design and WooCommerce integration.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-palette"></i>
                                    <div>
                                        <h5>Elegant Design</h5>
                                        <p>Luxury aesthetics</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-shopping-cart"></i>
                                    <div>
                                        <h5>WooCommerce</h5>
                                        <p>Seamless checkout</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://fragrancelinebysm.com/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amore Pakistan -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="wordpress e-commerce" data-aos="fade-up" data-aos-delay="1000">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?w=800&h=500&fit=crop" alt="Amore Pakistan" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">WordPress</div>
                                    <h3 class="overlay-title">Amore Pakistan</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-cookie-bite"></i> Premium Chocolates</span>
                                        <span><i class="fas fa-star"></i> Luxury Brand</span>
                                    </div>
                                    <a href="case-study-amore.php" class="btn btn-light btn-sm me-2">View Details</a>
                                    <a href="https://amore.com.pk/" target="_blank" class="btn btn-light btn-sm"><i class="fas fa-external-link-alt me-1"></i>View Live</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2024</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress</span>
                            </div>
                            <h3 class="case-title">Amore Pakistan - Premium Chocolates</h3>
                            <p class="case-description">WordPress e-commerce platform for premium handcrafted chocolates with elegant product showcase and gift customization.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-gift"></i>
                                    <div>
                                        <h5>Gift Customization</h5>
                                        <p>Personalized options</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-mobile-alt"></i>
                                    <div>
                                        <h5>Mobile First</h5>
                                        <p>Optimized experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="https://amore.com.pk/" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="section-title text-white">Ready to Create Your Success Story?</h2>
                    <p class="section-subtitle text-white-50 mb-4">Let's discuss how we can help you achieve similar results for your business.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary btn-lg me-3 hover-lift">
                            <i class="fas fa-rocket me-2"></i>Start Your Project
                        </a>
                        <a href="tel:+923001234567" class="btn btn-outline-light btn-lg hover-lift">
                            <i class="fas fa-phone me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <!-- Case Studies Filtering Script -->
    <script>
        $(document).ready(function() {
            console.log('Filter script loaded');
            console.log('Total case study items:', $('.case-study-item').length);
            
            // Log all categories on page load
            $('.case-study-item').each(function(index) {
                console.log('Item ' + index + ' categories:', $(this).attr('data-category'));
            });
            
            // Filter functionality
            $('.filter-btn').click(function() {
                var filterValue = $(this).attr('data-filter');
                console.log('Filter clicked:', filterValue);
                
                // Update active button
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                var matchCount = 0;
                
                // Filter case studies - instant hide, then fade in
                if (filterValue === 'all') {
                    $('.case-study-item').stop(true, true).fadeIn(400);
                    matchCount = $('.case-study-item').length;
                } else {
                    // First hide all items instantly
                    $('.case-study-item').stop(true, true).hide();
                    
                    // Then show matching items with fade
                    $('.case-study-item').each(function() {
                        var $item = $(this);
                        var categories = $item.attr('data-category');
                        
                        // Check if the filter value is in the categories string (case-insensitive)
                        if (categories && categories.toLowerCase().indexOf(filterValue.toLowerCase()) !== -1) {
                            $item.fadeIn(400);
                            matchCount++;
                        }
                    });
                }
                
                console.log('Matched items:', matchCount);
                
                // Scroll to top of grid smoothly
                $('html, body').animate({
                    scrollTop: $('#case-studies-grid').offset().top - 100
                }, 300);
            });
            
            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>
</body>
</html>