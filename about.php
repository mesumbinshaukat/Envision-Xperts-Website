<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About EnvisionXperts | PHP Web, Mobile, and Software Experts</title>
    <meta name="description" content="Learn about EnvisionXperts: a trusted PHP-focused partner for web development, mobile apps, software engineering, and digital transformation. Discover our mission, values, and process.">
    <meta name="keywords" content="About EnvisionXperts, PHP experts, web development company, software development, mobile app development, digital transformation">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/envision-expert-logo-dark (1).png">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "EnvisionXperts",
      "url": "https://envisionxperts.com",
      "logo": "https://envisionxperts.com/logo/envision-expert-logo-dark%20(1).png",
      "sameAs": [
        "https://facebook.com/",
        "https://twitter.com/",
        "https://www.linkedin.com/"
      ]
    }
    </script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="hero-section" style="min-height: 60vh;">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container d-flex align-items-center" style="min-height: 60vh;">
            <div class="row w-100">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="hero-title"><span class="text-gradient">About</span> EnvisionXperts</h1>
                    <p class="hero-description mb-0">We are a results-driven PHP development company crafting secure, scalable, and modern digital products. From ideation to launch and beyond, we partner with you to accelerate growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title text-start">Who We Are</h2>
                    <p class="about-description">EnvisionXperts is a team of seasoned engineers, product strategists, and UI/UX specialists dedicated to building high-performance digital products. We leverage core PHP and modern frameworks, cloud-native architectures, and battle-tested engineering practices to help companies move faster with confidence.</p>
                    <p class="about-description">Our approach blends deep technical expertise with business-first thinking. We deliver value early and continuously, ensuring you get software that is maintainable, secure, and optimized for scale.</p>
                    <div class="about-features">
                        <div class="feature-item"><i class="fas fa-shield-alt"></i><span>Security-first engineering</span></div>
                        <div class="feature-item"><i class="fas fa-gauge-high"></i><span>Performance and scalability by design</span></div>
                        <div class="feature-item"><i class="fas fa-people-group"></i><span>Collaborative, transparent delivery</span></div>
                        <div class="feature-item"><i class="fas fa-award"></i><span>Quality assured with rigorous testing</span></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number" data-count="150">0</div>
                                <div class="stat-label">Projects Delivered</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number" data-count="50">0</div>
                                <div class="stat-label">Active Clients</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number" data-count="5">0</div>
                                <div class="stat-label">Years in Business</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number" data-count="99">0</div>
                                <div class="stat-label">% Client Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Mission & Vision</h2>
                    <p class="section-subtitle">Guiding principles that shape every project we deliver</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card text-start">
                        <div class="service-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>Our Mission</h3>
                        <p>To empower businesses with reliable, secure, and high-performing PHP solutions that create measurable impact. We align technology with business outcomes through craftsmanship, agility, and a relentless focus on user value.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card text-start">
                        <div class="service-icon"><i class="fas fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted PHP engineering partner for forward-thinking companies worldwide—delivering innovation at speed without compromising quality or security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Core Values</h2>
                    <p class="section-subtitle">What defines our culture and the products we build</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                $values = [
                    ['icon' => 'fa-shield-halved', 'title' => 'Trust & Security', 'text' => 'We architect with zero-trust principles, secure defaults, and continuous monitoring.'],
                    ['icon' => 'fa-lightbulb', 'title' => 'Innovation', 'text' => 'We adopt proven tools, patterns, and AI-assisted practices to deliver more value, faster.'],
                    ['icon' => 'fa-scale-balanced', 'title' => 'Quality', 'text' => 'Automated testing, peer review, and coding standards underpin every release.'],
                    ['icon' => 'fa-handshake', 'title' => 'Partnership', 'text' => 'We collaborate as an extension of your team with transparency and accountability.'],
                    ['icon' => 'fa-rocket', 'title' => 'Performance', 'text' => 'We optimize frontend and backend for speed, stability, and scalability.'],
                    ['icon' => 'fa-users', 'title' => 'User-Centric', 'text' => 'We design experiences that reduce friction and improve conversion.'],
                ];
                foreach ($values as $i => $value): ?>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i+1) * 100 ?>">
                        <div class="service-card text-start">
                            <div class="service-icon"><i class="fas <?= $value['icon'] ?>"></i></div>
                            <h3><?= $value['title'] ?></h3>
                            <p><?= $value['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Delivery Process -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Our Delivery Process</h2>
                    <p class="section-subtitle">A predictable, transparent, and outcomes-focused lifecycle</p>
                </div>
            </div>
            <div class="row g-4 align-items-stretch">
                <?php
                $steps = [
                    ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Discover', 'text' => 'Stakeholder workshops, business goals, success metrics, and technical feasibility.'],
                    ['icon' => 'fa-pen-ruler', 'title' => 'Design', 'text' => 'Information architecture, UX flows, UI design systems, and acceptance criteria.'],
                    ['icon' => 'fa-code', 'title' => 'Build', 'text' => 'Agile iterations with CI/CD, code reviews, and transparent demos.'],
                    ['icon' => 'fa-vial-circle-check', 'title' => 'QA', 'text' => 'Automated and manual testing, performance audits, and security hardening.'],
                    ['icon' => 'fa-rocket', 'title' => 'Launch', 'text' => 'Blue/green or canary deployments with rollback plans and observability.'],
                    ['icon' => 'fa-chart-line', 'title' => 'Optimize', 'text' => 'A/B testing, analytics, SEO, and continuous improvement roadmap.'],
                ];
                foreach ($steps as $i => $step): ?>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i+1) * 100 ?>">
                        <div class="service-card text-start h-100">
                            <div class="service-icon"><i class="fas <?= $step['icon'] ?>"></i></div>
                            <h3><?= $step['title'] ?></h3>
                            <p class="mb-0"><?= $step['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-2">Have a project in mind?</h2>
                    <p class="mb-3">Let’s turn your idea into a reliable, scalable product. Get a free consultation today.</p>
                </div>
                <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-message me-2"></i>Contact Us</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
