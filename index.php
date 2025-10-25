<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envision Xperts - Professional Web Development & Digital Solutions</title>
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
    <link rel="icon" type="image/png" href="logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg">
    
    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo getenv('RECAPTCHA_SITE_KEY') ?: '6LfjzfUrAAAAABXvB6CT8h6vvzzIrByBnS9BXJKP'; ?>"></script>
</head>
<body>
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="hero-content">
                        <h1 class="hero-title"><span class="text-gradient">Envision </span>Xperts</h1>
                        <h2 class="hero-subtitle">Transforming Ideas Into Digital Excellence</h2>
                        <p class="hero-description">We specialize in cutting-edge web development, mobile applications, and digital transformation solutions. Our expert team delivers scalable, secure, and innovative PHP-based solutions that drive business growth.</p>
                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-primary btn-lg me-3 hover-lift"><i class="fas fa-rocket me-2"></i>Our Services</a>
                            <a href="#contact" class="btn btn-outline-dark btn-lg hover-lift"><i class="fas fa-phone me-2"></i>Get Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-image">
                        <!-- Lottie Animation Container -->
                        <div class="lottie-container" id="heroLottie">
                            <!-- Lottie animation will be loaded here -->
                        </div>
                        <!-- Fallback floating elements -->
                        <div class="floating-elements">
                            <div class="floating-element" data-speed="2"><i class="fas fa-code"></i></div>
                            <div class="floating-element" data-speed="1.5"><i class="fas fa-mobile-alt"></i></div>
                            <div class="floating-element" data-speed="2.5"><i class="fas fa-cloud"></i></div>
                            <div class="floating-element" data-speed="1"><i class="fas fa-database"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator"><div class="scroll-arrow"></div></div>
    </section>

    <!-- Trust Logos -->
    <section class="py-4 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="trusted-logos">
                <div class="logo-badge hover-lift"><i class="fas fa-shield-halved me-2"></i>Security-First Engineering</div>
                <div class="logo-badge hover-lift"><i class="fas fa-gauge-high me-2"></i>Performance Obsessed</div>
                <div class="logo-badge hover-lift"><i class="fas fa-rocket me-2"></i>Fast Time-to-Value</div>
                <div class="logo-badge hover-lift"><i class="fas fa-handshake me-2"></i>Trusted Partnerships</div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="case-studies-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title scroll-reveal">Our Success Stories</h2>
                    <p class="section-subtitle scroll-reveal">Real-world results from our featured projects</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Case Study 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-study-card hover-lift">
                        <div class="case-study-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="TechCors Website" class="img-fluid">
                            <div class="case-study-overlay">
                                <div class="case-study-category">Web Design</div>
                                <div class="case-study-actions">
                                    <a href="case-study-techcors.php" class="btn-case-study"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">TechCors Corporate Website</h3>
                            <div class="case-study-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-chart-line"></i> 300% Traffic</span>
                            </div>
                            <p class="case-study-description">Modern corporate website for leading software company with focus on digital solutions, innovative UI/UX design, and enhanced user experience that drove significant growth.</p>
                            <div class="case-study-results">
                                <div class="result-item"><i class="fas fa-desktop"></i> Modern Design</div>
                                <div class="result-item"><i class="fas fa-mobile-alt"></i> Mobile First</div>
                                <div class="result-item"><i class="fas fa-rocket"></i> 95+ PageSpeed</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-study-card hover-lift">
                        <div class="case-study-image">
                            <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=600&h=400&fit=crop" alt="Shoe Potion" class="img-fluid">
                            <div class="case-study-overlay">
                                <div class="case-study-category">E-Commerce</div>
                                <div class="case-study-actions">
                                    <a href="case-study-shoe-potion.php" class="btn-case-study"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Shoe Potion - Premium Store</h3>
                            <div class="case-study-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-shopping-cart"></i> 400% Sales</span>
                            </div>
                            <p class="case-study-description">Premium Shopify e-commerce store for shoe cleaning and sneaker care products with optimized conversion funnel and mobile-first design approach.</p>
                            <div class="case-study-results">
                                <div class="result-item"><i class="fas fa-mobile-alt"></i> Mobile First</div>
                                <div class="result-item"><i class="fas fa-credit-card"></i> Secure Checkout</div>
                                <div class="result-item"><i class="fas fa-users"></i> 10k+ Customers</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-study-card hover-lift">
                        <div class="case-study-image">
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop" alt="Iman Construction" class="img-fluid">
                            <div class="case-study-overlay">
                                <div class="case-study-category">Web Design</div>
                                <div class="case-study-actions">
                                    <a href="case-study-iman-construction.php" class="btn-case-study"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Iman Construction Company</h3>
                            <div class="case-study-meta">
                                <span><i class="fas fa-calendar"></i> 2025</span>
                                <span><i class="fas fa-building"></i> Premium Builder</span>
                            </div>
                            <p class="case-study-description">Professional construction company website showcasing premium services in Karachi with interactive project portfolio and cost calculator tool.</p>
                            <div class="case-study-results">
                                <div class="result-item"><i class="fas fa-calculator"></i> Cost Calculator</div>
                                <div class="result-item"><i class="fas fa-award"></i> 15 Years Warranty</div>
                                <div class="result-item"><i class="fas fa-images"></i> Project Gallery</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="case-studies.php" class="btn btn-primary btn-lg hover-lift">
                    <i class="fas fa-briefcase me-2"></i>View All Case Studies
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-5" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title scroll-reveal">Our Services</h2>
                    <p class="section-subtitle scroll-reveal">Comprehensive digital solutions tailored to your business needs</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-globe"></i></div>
                        <h3>Web Development</h3>
                        <p>Custom PHP web applications, CMS development, and eCommerce solutions with modern frameworks.</p>
                        <a href="services/custom-php.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Mobile App Development</h3>
                        <p>Cross-platform and native mobile applications integrated with PHP backends for seamless functionality.</p>
                        <a href="services/cross-platform.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-cogs"></i></div>
                        <h3>Software Development</h3>
                        <p>Enterprise software, SaaS platforms, and custom business applications with robust PHP backends.</p>
                        <a href="services/enterprise-software.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-sync-alt"></i></div>
                        <h3>Digital Transformation</h3>
                        <p>Cloud solutions, AI integration, and process automation to modernize your business operations.</p>
                        <a href="services/cloud-solutions.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                        <h3>IT Consulting</h3>
                        <p>Strategic technology consulting, project management, and staff augmentation services.</p>
                        <a href="services/technology-consulting.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card scroll-reveal scroll-reveal-scale hover-glow">
                        <div class="service-icon"><i class="fas fa-search"></i></div>
                        <h3>Digital Marketing & SEO</h3>
                        <p>Search engine optimization, marketing automation, and social media integration solutions.</p>
                        <a href="services/seo.php" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
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
                        <h2 class="section-title scroll-reveal scroll-reveal-left">Why Choose EnvisionXperts?</h2>
                        <p class="about-description scroll-reveal scroll-reveal-left">With years of experience in PHP development and digital solutions, we deliver exceptional results that drive business growth. Our team combines technical expertise with creative innovation to create solutions that stand out in the digital landscape.</p>
                        <div class="about-features">
                            <div class="feature-item scroll-reveal scroll-reveal-left"><i class="fas fa-check-circle"></i><span>Expert PHP Development Team</span></div>
                            <div class="feature-item scroll-reveal scroll-reveal-left"><i class="fas fa-check-circle"></i><span>Modern & Scalable Solutions</span></div>
                            <div class="feature-item scroll-reveal scroll-reveal-left"><i class="fas fa-check-circle"></i><span>24/7 Support & Maintenance</span></div>
                            <div class="feature-item scroll-reveal scroll-reveal-left"><i class="fas fa-check-circle"></i><span>Proven Track Record</span></div>
                        </div>
                        <a href="about.php" class="btn btn-primary hover-lift">Learn More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-stats scroll-reveal scroll-reveal-right">
                        <div class="row g-4">
                            <div class="col-6"><div class="stat-card hover-lift"><div class="stat-number" data-count="150">0</div><div class="stat-label">Projects Completed</div></div></div>
                            <div class="col-6"><div class="stat-card hover-lift"><div class="stat-number" data-count="50">0</div><div class="stat-label">Happy Clients</div></div></div>
                            <div class="col-6"><div class="stat-card hover-lift"><div class="stat-number" data-count="5">0</div><div class="stat-label">Years Experience</div></div></div>
                            <div class="col-6"><div class="stat-card hover-lift"><div class="stat-number" data-count="99">0</div><div class="stat-label">% Satisfaction</div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Contact Section -->
    <section class="contact-section py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title scroll-reveal text-white">Get In Touch</h2>
                    <p class="section-subtitle scroll-reveal text-white-50">Ready to start your next project? Let's discuss how we can help you achieve your goals.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-form-wrapper scroll-reveal scroll-reveal-scale" data-aos="fade-up">
                        <form class="contact-form" method="POST" action="process/contact.php">
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Enter your full name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter your email address" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="subject" placeholder="What can we help you with?" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control form-control-lg" name="message" rows="6" placeholder="Tell us about your project, goals, timelines, and any specific requirements..." required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg hover-lift px-5 py-3">
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

    <!-- Enhanced Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title scroll-reveal">What Makes Us Different</h2>
                    <p class="section-subtitle scroll-reveal">Unique advantages that set us apart from the competition</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-highlight scroll-reveal scroll-reveal-scale hover-lift">
                        <div class="feature-icon-large">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Fast Delivery</h4>
                        <p>Quick turnaround times without compromising quality</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-highlight scroll-reveal scroll-reveal-scale hover-lift">
                        <div class="feature-icon-large">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h4>Security First</h4>
                        <p>Enterprise-grade security built into every solution</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-highlight scroll-reveal scroll-reveal-scale hover-lift">
                        <div class="feature-icon-large">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock technical support and maintenance</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-highlight scroll-reveal scroll-reveal-scale hover-lift">
                        <div class="feature-icon-large">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Performance</h4>
                        <p>Optimized solutions that scale with your business</p>
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
    
    <!-- Lottie Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <!-- reCAPTCHA Site Key for JavaScript -->
    <script>
        window.RECAPTCHA_SITE_KEY = '<?php echo getenv('RECAPTCHA_SITE_KEY') ?: '6LfjzfUrAAAAABXvB6CT8h6vvzzIrByBnS9BXJKP'; ?>';
    </script>
    
    <!-- Lottie Animation Initialization -->
    <script>
        // Initialize Lottie animation in hero section
        if (typeof lottie !== 'undefined') {
            const heroLottie = lottie.loadAnimation({
                container: document.getElementById('heroLottie'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'assets/animations/hero-animation.json', // You'll need to create this file
                rendererSettings: {
                    progressiveLoad: true,
                    hideOnTransparent: true
                }
            });
            
            // Show container when animation is loaded
            heroLottie.addEventListener('DOMLoaded', function() {
                document.getElementById('heroLottie').classList.add('loaded');
            });
            
            // Fallback if animation fails to load
            heroLottie.addEventListener('error', function() {
                document.getElementById('heroLottie').style.display = 'none';
                document.querySelector('.floating-elements').style.display = 'flex';
            });
        }
    </script>
</body>
</html> 