<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnvisionXperts - Professional Web Development & Digital Solutions</title>
    <meta name="description" content="EnvisionXperts provides professional web development, mobile apps, software solutions, and digital transformation services using cutting-edge PHP technology.">
    <meta name="keywords" content="web development, PHP, mobile apps, software development, digital transformation, IT consulting">
    
    <!-- CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="logo/envision-expert-logo-dark (1).png">
</head>
<body>
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            <span class="text-gradient">Envision</span>Xperts
                        </h1>
                        <h2 class="hero-subtitle">Transforming Ideas Into Digital Excellence</h2>
                        <p class="hero-description">
                            We specialize in cutting-edge web development, mobile applications, and digital transformation solutions. 
                            Our expert team delivers scalable, secure, and innovative PHP-based solutions that drive business growth.
                        </p>
                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-rocket me-2"></i>Our Services
                            </a>
                            <a href="#contact" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-phone me-2"></i>Get Quote
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-image">
                        <div class="floating-elements">
                            <div class="floating-element" data-speed="2">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="floating-element" data-speed="1.5">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="floating-element" data-speed="2.5">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="floating-element" data-speed="1">
                                <i class="fas fa-database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-5" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-subtitle">Comprehensive digital solutions tailored to your business needs</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Custom PHP web applications, CMS development, and eCommerce solutions with modern frameworks.</p>
                        <a href="services.php#web-development" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile App Development</h3>
                        <p>Cross-platform and native mobile applications integrated with PHP backends for seamless functionality.</p>
                        <a href="services.php#mobile-development" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>Software Development</h3>
                        <p>Enterprise software, SaaS platforms, and custom business applications with robust PHP backends.</p>
                        <a href="services.php#software-development" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3>Digital Transformation</h3>
                        <p>Cloud solutions, AI integration, and process automation to modernize your business operations.</p>
                        <a href="services.php#digital-transformation" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>IT Consulting</h3>
                        <p>Strategic technology consulting, project management, and staff augmentation services.</p>
                        <a href="services.php#it-consulting" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Digital Marketing & SEO</h3>
                        <p>Search engine optimization, marketing automation, and social media integration solutions.</p>
                        <a href="services.php#digital-marketing" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <h2 class="section-title">Why Choose EnvisionXperts?</h2>
                        <p class="about-description">
                            With years of experience in PHP development and digital solutions, we deliver exceptional results 
                            that drive business growth. Our team combines technical expertise with creative innovation to 
                            create solutions that stand out in the digital landscape.
                        </p>
                        <div class="about-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Expert PHP Development Team</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Modern & Scalable Solutions</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>24/7 Support & Maintenance</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Proven Track Record</span>
                            </div>
                        </div>
                        <a href="about.php" class="btn btn-primary">Learn More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-stats">
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number" data-count="150">0</div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number" data-count="50">0</div>
                                    <div class="stat-label">Happy Clients</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number" data-count="5">0</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number" data-count="99">0</div>
                                    <div class="stat-label">% Satisfaction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="section-subtitle">Ready to start your next project? Let's discuss how we can help you achieve your goals.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form-wrapper" data-aos="fade-up">
                        <form class="contact-form" method="POST" action="process/contact.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
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
</body>
</html> 