<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBS UK - Case Study | Envision Xperts</title>
    <meta name="description" content="Learn how we built a comprehensive Magento e-commerce platform for EBS UK with advanced inventory management.">
    <meta name="keywords" content="EBS UK, Magento, e-commerce, enterprise solution, case study">
    
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
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1920&h=1080&fit=crop" alt="EBS UK" class="hero-bg-image">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8">
                    <div class="case-study-hero-content" data-aos="fade-up">
                        <div class="case-study-breadcrumb">
                            <a href="index.php">Home</a> / <a href="case-studies.php">Case Studies</a> / <span>EBS UK</span>
                        </div>
                        <div class="case-study-category-badge">E-Commerce</div>
                        <h1 class="case-study-hero-title">EBS UK - Enterprise E-commerce Platform</h1>
                        <p class="case-study-hero-description">Comprehensive Magento-based e-commerce solution for UK market with advanced inventory management and multi-channel integration.</p>
                        <div class="case-study-hero-meta">
                            <div class="meta-item"><i class="fas fa-calendar"></i> 2024</div>
                            <div class="meta-item"><i class="fas fa-clock"></i> 6 Months</div>
                            <div class="meta-item"><i class="fas fa-tools"></i> Magento</div>
                            <div class="meta-item"><i class="fas fa-external-link-alt"></i> <a href="https://ebs.co.uk" target="_blank">Visit Live Site</a></div>
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
                        <p class="lead">EBS UK required an enterprise-level e-commerce platform capable of handling high-volume transactions, complex inventory management, and multi-channel sales integration.</p>
                        <p>The project involved building a scalable Magento solution that could manage thousands of products, integrate with existing ERP systems, and provide seamless shopping experience across multiple sales channels including web, mobile, and marketplace platforms.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-study-sidebar" data-aos="fade-left">
                        <div class="sidebar-section">
                            <h4>Project Results</h4>
                            <div class="result-metrics">
                                <div class="metric">
                                    <div class="metric-number">350%</div>
                                    <div class="metric-label">Revenue Growth</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">15K+</div>
                                    <div class="metric-label">Products</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">99.9%</div>
                                    <div class="metric-label">Uptime</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">60%</div>
                                    <div class="metric-label">Order Processing Speed</div>
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
                            <i class="fas fa-boxes text-warning"></i>
                            <div>
                                <h5>Complex Inventory</h5>
                                <p>Managing 15,000+ products across multiple warehouses with real-time stock synchronization.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-sync text-danger"></i>
                            <div>
                                <h5>Multi-Channel Integration</h5>
                                <p>Synchronizing inventory and orders across website, Amazon, eBay, and physical stores.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-server text-info"></i>
                            <div>
                                <h5>ERP Integration</h5>
                                <p>Seamless integration with existing enterprise resource planning systems.</p>
                            </div>
                        </div>
                        <div class="challenge-item">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                            <div>
                                <h5>Performance at Scale</h5>
                                <p>Maintaining fast load times and responsiveness with large product catalog.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="challenge-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop" alt="Enterprise Challenge" class="img-fluid rounded">
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
                            <i class="fas fa-database text-success"></i>
                            <div>
                                <h5>Advanced Inventory System</h5>
                                <p>Implemented real-time inventory tracking with automated stock alerts and multi-warehouse management.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-plug text-primary"></i>
                            <div>
                                <h5>Seamless Integrations</h5>
                                <p>Built custom API integrations for ERP, marketplaces, and payment gateways.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-rocket text-warning"></i>
                            <div>
                                <h5>Performance Optimization</h5>
                                <p>Implemented caching, CDN, and database optimization for lightning-fast performance.</p>
                            </div>
                        </div>
                        <div class="solution-item">
                            <i class="fas fa-shield-alt text-info"></i>
                            <div>
                                <h5>Enterprise Security</h5>
                                <p>Deployed advanced security measures including PCI compliance and fraud detection.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="solution-image">
                        <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&h=600&fit=crop" alt="Enterprise Solution" class="img-fluid rounded">
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
                    <p class="section-subtitle">Enterprise-grade technology stack</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-card text-center">
                        <i class="fab fa-magento text-danger"></i>
                        <h5>Magento 2</h5>
                        <p>Enterprise e-commerce platform</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-card text-center">
                        <i class="fab fa-php text-info"></i>
                        <h5>PHP</h5>
                        <p>Backend development</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tech-card text-center">
                        <i class="fas fa-database text-primary"></i>
                        <h5>MySQL</h5>
                        <p>Database management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tech-card text-center">
                        <i class="fas fa-cloud text-success"></i>
                        <h5>AWS</h5>
                        <p>Cloud infrastructure</p>
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
                    <p class="section-subtitle">Transformative business impact</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="results-card">
                        <h4>Performance Improvements</h4>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>Revenue Growth</span>
                                <span>+350%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>System Uptime</span>
                                <span>99.9%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 99%"></div>
                            </div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-info">
                                <span>Order Processing Speed</span>
                                <span>+60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 60%"></div>
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
                                <span>350% increase in online revenue</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-boxes text-primary"></i>
                                <span>15,000+ products managed efficiently</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-sync text-warning"></i>
                                <span>Multi-channel sales synchronized</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-clock text-info"></i>
                                <span>60% faster order fulfillment</span>
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
                            <p class="testimonial-text">"Envision Xperts delivered an exceptional enterprise e-commerce solution that transformed our business operations. The Magento platform they built handles our complex inventory across multiple channels flawlessly. The integration with our ERP system was seamless, and the performance improvements have been remarkable. Our revenue has grown by 350% since launch."</p>
                            <div class="testimonial-author">
                                <h5>EBS UK Team</h5>
                                <span>Enterprise Retail Company</span>
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
                    <h2 class="section-title">Assured Performance - Automotive E-commerce</h2>
                    <p>Discover how we built a specialized Magento platform for automotive parts.</p>
                    <a href="case-study-assured-performance.php" class="btn btn-primary">View Next Project <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="next-project-image">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=300&fit=crop" alt="Assured Performance" class="img-fluid rounded">
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
                    <h2 class="section-title text-white">Ready to Scale Your E-commerce Business?</h2>
                    <p class="section-subtitle text-white-50 mb-4">Let's build an enterprise solution that drives growth and efficiency.</p>
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
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>
</body>
</html>
