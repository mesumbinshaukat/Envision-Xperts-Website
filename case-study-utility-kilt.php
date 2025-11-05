<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Utility Kilt - Case Study | Envision Xperts</title>
    <meta name="description" content="Learn how we created a custom Magento e-commerce platform for The Utility Kilt with advanced product customization.">
    <meta name="keywords" content="The Utility Kilt, Magento, e-commerce, custom products, case study">
    
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
    <section class="case-study-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="https://images.unsplash.com/photo-1490114538077-0a7f8cb49891?w=1920&h=1080&fit=crop" alt="The Utility Kilt" class="hero-bg-image">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8">
                    <div class="case-study-hero-content" data-aos="fade-up">
                        <div class="case-study-breadcrumb">
                            <a href="index.php">Home</a> / <a href="case-studies.php">Case Studies</a> / <span>The Utility Kilt</span>
                        </div>
                        <div class="case-study-category-badge">E-Commerce</div>
                        <h1 class="case-study-hero-title">The Utility Kilt - Custom Apparel Store</h1>
                        <p class="case-study-hero-description">Specialized Magento e-commerce platform for custom utility kilts with advanced product customization and sizing options.</p>
                        <div class="case-study-hero-meta">
                            <div class="meta-item"><i class="fas fa-calendar"></i> 2024</div>
                            <div class="meta-item"><i class="fas fa-clock"></i> 5 Months</div>
                            <div class="meta-item"><i class="fas fa-tools"></i> Magento</div>
                            <div class="meta-item"><i class="fas fa-external-link-alt"></i> <a href="https://theutilitykilt.com" target="_blank">Visit Live Site</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="case-study-content" data-aos="fade-up">
                        <h2 class="section-title">Project Overview</h2>
                        <p class="lead">The Utility Kilt needed a robust e-commerce platform that could handle complex product customization options for their unique utility kilt products.</p>
                        <p>The challenge was to create a seamless shopping experience that allowed customers to customize their kilts with various fabric options, sizes, pockets, and accessories while maintaining a smooth checkout process.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-study-sidebar" data-aos="fade-left">
                        <div class="sidebar-section">
                            <h4>Project Results</h4>
                            <div class="result-metrics">
                                <div class="metric">
                                    <div class="metric-number">250%</div>
                                    <div class="metric-label">Sales Increase</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">5000+</div>
                                    <div class="metric-label">Custom Orders</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">92%</div>
                                    <div class="metric-label">Customer Satisfaction</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">40%</div>
                                    <div class="metric-label">Repeat Customers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenge Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">The Challenge</h2>
                    <div class="challenge-list">
                        <div class="challenge-item">
                            <i class="fas fa-cogs text-warning"></i>
                            <div>
                                <h5>Complex Customization</h5>
                                <p>Multiple customization options including fabric, size, pockets, and accessories needed seamless integration.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-ruler text-danger"></i>
                            <div>
                                <h5>Size Variations</h5>
                                <p>Custom sizing system required precise measurement inputs and validation.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-shopping-cart text-info"></i>
                            <div>
                                <h5>Cart Complexity</h5>
                                <p>Managing complex product configurations in the shopping cart without overwhelming users.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-shipping-fast text-primary"></i>
                            <div>
                                <h5>Global Shipping</h5>
                                <p>International shipping with accurate cost calculation for custom products.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="challenge-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop" alt="E-commerce Challenge" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <h2 class="section-title">Our Solution</h2>
                    <div class="solution-list">
                        <div class="solution-item">
                            <i class="fas fa-paint-brush text-success"></i>
                            <div>
                                <h5>Advanced Product Configurator</h5>
                                <p>Built custom Magento extension for intuitive product customization with real-time preview.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-ruler-combined text-primary"></i>
                            <div>
                                <h5>Smart Sizing System</h5>
                                <p>Implemented intelligent sizing guide with measurement validation and fit recommendations.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-mobile-alt text-warning"></i>
                            <div>
                                <h5>Mobile-Optimized Experience</h5>
                                <p>Responsive design ensuring perfect customization experience on all devices.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-globe text-info"></i>
                            <div>
                                <h5>International Commerce</h5>
                                <p>Multi-currency support and automated international shipping calculations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="solution-image">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&h=600&fit=crop" alt="E-commerce Solution" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Used -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Technologies Used</h2>
                    <p class="section-subtitle">Enterprise-grade e-commerce technology stack</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-card text-center">
                        <i class="fab fa-magento text-danger"></i>
                        <h5>Magento 2</h5>
                        <p>Powerful e-commerce platform</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-card text-center">
                        <i class="fab fa-php text-info"></i>
                        <h5>PHP</h5>
                        <p>Custom module development</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tech-card text-center">
                        <i class="fab fa-js text-warning"></i>
                        <h5>JavaScript</h5>
                        <p>Interactive customization UI</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tech-card text-center">
                        <i class="fas fa-database text-success"></i>
                        <h5>MySQL</h5>
                        <p>Robust data management</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Project Results</h2>
                    <p class="section-subtitle">Measurable impact on business growth</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="results-card">
                        <h4>Performance Improvements</h4>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>Sales Growth</span>
                                <span>+250%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>Customer Satisfaction</span>
                                <span>92%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 92%"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>Mobile Conversions</span>
                                <span>78%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="results-card">
                        <h4>Business Impact</h4>
                        <div class="impact-list">
                            <div class="impact-item">
                                <i class="fas fa-chart-line text-success"></i>
                                <span>5000+ custom orders processed</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-users text-primary"></i>
                                <span>40% repeat customer rate</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-globe text-warning"></i>
                                <span>Expanded to 25+ countries</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-star text-info"></i>
                                <span>4.8/5 average customer rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonial -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p class="testimonial-text">"Envision Xperts transformed our online business with a powerful Magento platform that handles our complex product customization seamlessly. The custom configurator they built has been a game-changer for our customers, making it easy to design their perfect utility kilt. Sales have increased dramatically, and customer feedback has been overwhelmingly positive."</p>
                            <div class="testimonial-author">
                                <h5>The Utility Kilt Team</h5>
                                <span>Custom Apparel Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Project -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h3>Next Case Study</h3>
                    <h2 class="section-title">EBS UK - Enterprise E-commerce Platform</h2>
                    <p>Discover how we built a comprehensive Magento solution for the UK market.</p>
                    <a href="case-study-ebs.php" class="btn btn-primary">View Next Project <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="next-project-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop" alt="EBS UK" class="img-fluid rounded">
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
                    <h2 class="section-title text-white">Ready to Build Your E-commerce Platform?</h2>
                    <p class="section-subtitle text-white-50 mb-4">Let's create a powerful online store that drives sales and delights customers.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary btn-lg me-3 hover-lift">
                            <i class="fas fa-rocket me-2"></i>Start Your Project
                        </a>
                        <a href="case-studies.php" class="btn btn-outline-light btn-lg hover-lift">
                            <i class="fas fa-briefcase me-2"></i>View More Projects
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
    
    <script>
        $(document).ready(function() {
            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>
</body>
</html>
