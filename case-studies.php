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
                        <button class="filter-btn" data-filter="web-design">Web Design</button>
                        <button class="filter-btn" data-filter="fintech">Fintech</button>
                        <button class="filter-btn" data-filter="healthcare">Healthcare</button>
                        <button class="filter-btn" data-filter="e-commerce">E-Commerce</button>
                        <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section class="case-studies-grid py-5">
        <div class="container">
            <div class="row g-4" id="case-studies-grid">
                
                <!-- TechCors Website -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="web-design" data-aos="fade-up">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop" alt="TechCors Website" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Web Design</div>
                                    <h3 class="overlay-title">TechCors Corporate Website</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-chart-line"></i> 300% Traffic Growth</span>
                                        <span><i class="fas fa-rocket"></i> 95+ PageSpeed Score</span>
                                    </div>
                                    <a href="case-study-techcors.php" class="btn btn-light btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 3 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress, PHP</span>
                            </div>
                            <h3 class="case-title">TechCors Corporate Website</h3>
                            <p class="case-description">Modern corporate website for leading software company with focus on digital solutions and user experience design.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-desktop"></i>
                                    <div>
                                        <h5>Modern Design</h5>
                                        <p>Innovative UI/UX</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-mobile-alt"></i>
                                    <div>
                                        <h5>Mobile First</h5>
                                        <p>Responsive design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shoe Potion E-commerce -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="e-commerce" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&h=500&fit=crop" alt="Shoe Potion" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">E-Commerce</div>
                                    <h3 class="overlay-title">Shoe Potion - Shopify Store</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-cart"></i> 400% Sales Growth</span>
                                        <span><i class="fas fa-users"></i> 10k+ Customers</span>
                                    </div>
                                    <a href="case-study-shoe-potion.php" class="btn btn-light btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> Shopify, Liquid</span>
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
                        </div>
                    </div>
                </div>

                <!-- Iman Construction Company -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="web-design" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=500&fit=crop" alt="Iman Construction" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Web Design</div>
                                    <h3 class="overlay-title">Iman Construction Company</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-building"></i> Construction Leader</span>
                                        <span><i class="fas fa-award"></i> 15 Years Warranty</span>
                                    </div>
                                    <a href="case-study-iman-construction.php" class="btn btn-light btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 5 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress, PHP</span>
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
                        </div>
                    </div>
                </div>

                <!-- Glytone Skincare Platform -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="e-commerce" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=800&h=500&fit=crop" alt="Glytone Skincare" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">E-Commerce</div>
                                    <h3 class="overlay-title">Glytone Skincare Store</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-users"></i> Professional Network</span>
                                        <span><i class="fas fa-star"></i> Premium Products</span>
                                    </div>
                                    <a href="case-study-glytone.php" class="btn btn-light btn-sm">View Details</a>
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
                        </div>
                    </div>
                </div>

                <!-- Next Level Digitalization -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="web-design" data-aos="fade-up" data-aos-delay="400">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop" alt="Digital Marketing" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">Digital Marketing</div>
                                    <h3 class="overlay-title">Next Level Digitalization</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-chart-line"></i> 500% Reach Growth</span>
                                        <span><i class="fas fa-bullhorn"></i> Multi-Platform</span>
                                    </div>
                                    <a href="case-study-next-level.php" class="btn btn-light btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content-detailed">
                            <div class="case-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-clock"></i> 4 Months</span>
                                <span><i class="fas fa-tools"></i> WordPress, PHP</span>
                            </div>
                            <h3 class="case-title">Next Level Digitalization Platform</h3>
                            <p class="case-description">Complete digital marketing platform with advanced campaign management, social media integration, and performance analytics.</p>
                            <div class="case-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-share-alt"></i>
                                    <div>
                                        <h5>Social Integration</h5>
                                        <p>Multi-platform campaigns</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-analytics"></i>
                                    <div>
                                        <h5>Analytics Dashboard</h5>
                                        <p>Real-time insights</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exaure Scents -->
                <div class="col-lg-6 col-md-6 case-study-item" data-category="e-commerce" data-aos="fade-up" data-aos-delay="500">
                    <div class="case-study-card-detailed hover-lift">
                        <div class="case-study-image-large">
                            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=800&h=500&fit=crop" alt="Perfume Store" class="img-fluid">
                            <div class="case-study-overlay-detailed">
                                <div class="overlay-content">
                                    <div class="case-study-category">E-Commerce</div>
                                    <h3 class="overlay-title">Exaure Scents</h3>
                                    <div class="overlay-results">
                                        <span><i class="fas fa-shopping-bag"></i> Premium Fragrances</span>
                                        <span><i class="fas fa-star"></i> Luxury Experience</span>
                                    </div>
                                    <a href="case-study-exaure-scents.php" class="btn btn-light btn-sm">View Details</a>
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
            // Filter functionality
            $('.filter-btn').click(function() {
                var filterValue = $(this).attr('data-filter');
                
                // Update active button
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                // Filter case studies
                if (filterValue === 'all') {
                    $('.case-study-item').fadeIn(300);
                } else {
                    $('.case-study-item').hide();
                    $('.case-study-item[data-category="' + filterValue + '"]').fadeIn(300);
                }
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