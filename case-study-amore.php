<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amore Pakistan - Case Study | Envision Xperts</title>
    <meta name="description" content="WordPress e-commerce platform for premium handcrafted chocolates and confectionery.">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="case-study-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?w=1920&h=1080&fit=crop" alt="Amore Pakistan" class="hero-bg-image">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8">
                    <div class="case-study-hero-content" data-aos="fade-up">
                        <div class="case-study-breadcrumb">
                            <a href="index.php">Home</a> / <a href="case-studies.php">Case Studies</a> / <span>Amore Pakistan</span>
                        </div>
                        <div class="case-study-category-badge">E-Commerce</div>
                        <h1 class="case-study-hero-title">Amore Pakistan - Premium Chocolates</h1>
                        <p class="case-study-hero-description">WordPress e-commerce platform for premium handcrafted chocolates with elegant product showcase and gift customization.</p>
                        <div class="case-study-hero-meta">
                            <div class="meta-item"><i class="fas fa-calendar"></i> 2024</div>
                            <div class="meta-item"><i class="fas fa-clock"></i> 4 Months</div>
                            <div class="meta-item"><i class="fas fa-tools"></i> WordPress</div>
                            <div class="meta-item"><i class="fas fa-external-link-alt"></i> <a href="https://amore.com.pk" target="_blank">Visit Live Site</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="case-study-content" data-aos="fade-up">
                        <h2 class="section-title">Project Overview</h2>
                        <p class="lead">Amore Pakistan needed a luxurious e-commerce platform for their premium handcrafted chocolate collection.</p>
                        <p>The platform features elegant product showcase, gift customization options, mobile-first design, and seamless WooCommerce integration for smooth transactions.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-study-sidebar" data-aos="fade-left">
                        <div class="sidebar-section">
                            <h4>Project Results</h4>
                            <div class="result-metrics">
                                <div class="metric">
                                    <div class="metric-number">310%</div>
                                    <div class="metric-label">Sales Growth</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">8000+</div>
                                    <div class="metric-label">Monthly Visitors</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">87%</div>
                                    <div class="metric-label">Mobile Traffic</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-number">4.6</div>
                                    <div class="metric-label">Average Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="section-title text-white">Ready to Launch Your Premium Food Brand?</h2>
                    <p class="section-subtitle text-white-50 mb-4">Let's build a stunning platform for your gourmet products.</p>
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

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            AOS.init({ duration: 1000, once: true });
        });
    </script>
</body>
</html>
