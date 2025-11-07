<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | Envision Xperts</title>
    <meta name="description" content="Meet the Envision Xperts team – passionate professionals delivering innovative digital solutions.">
    
    <!-- Preconnect to CDNs -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Critical CSS -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"></noscript>
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Non-critical CSS - Load async -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
    
    <link rel="icon" type="image/png" href="logo/WhatsApp Image 2025-08-11 at 22.46.05_44b837bc.jpg">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero-section">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container min-vh-70">
            <div class="row w-100">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h1 class="case-studies-hero-title">Our Team</h1>
                    <p class="case-studies-hero-description mb-0">The people behind the products — experienced, collaborative, and obsessed with quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 team-section bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Meet the Team</h2>
                    <p class="section-subtitle">Every project starts with a passionate team. Get to know the creative minds who turn ideas into reality every day.</p>
                </div>
            </div>

            <?php
            $team = [
                [
                    'name' => 'Muneeb Sadiq',
                    'role' => 'Founder & CEO',
                    'img'  => 'team_img/muneeb_img_1.webp',
                    'bio'  => 'Meet Muneeb Sadiq – Founder & CEO of Envision Xperts, leading innovative digital solutions with a strong background in web and software development.',
                    'github' => 'https://github.com/muneebsadiq',
                    'upwork' => 'https://www.upwork.com/freelancers/~01c367b566d988f50f'
                ],
                [
                    'name' => 'Hafiz Syed Hanzala',
                    'role' => 'Sales Executive',
                    'img'  => 'team_img/hanzala_img_3.webp',
                    'bio'  => 'Meet Hanzala – Sales Executive at Envision Xperts, helping businesses grow through smart digital solutions and long-term client partnerships.',
                    'social' => 'https://www.linkedin.com/in/hafiz-syed-hanzala-02720b263'
                ],
                [
                    'name' => 'Mesum Bin Shaukat',
                    'role' => 'Full‑Stack Developer',
                    'img'  => 'team_img/mesum_img_4.png',
                    'bio'  => 'Full-stack development with an unwavering passion for navigating the ever-evolving landscape of Information Technology.',
                    'social' => 'https://pk.linkedin.com/in/mesum-bin-shaukat'
                ],
                
                [
                    'name' => 'Umar Shakir',
                    'role' => 'Web Developer',
                    'img'  => 'team_img/umar_img_2.webp',
                    'bio'  => 'Umar is a skilled web developer who builds fast, responsive, and user-friendly websites. He combines clean design with strong functionality to deliver seamless digital experiences.',
                    'social' => 'https://pk.linkedin.com/in/umar-shakir-247b04247'
                ],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($team as $i => $member): ?>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= ($i+1) * 100 ?>">
                        <div class="team-card h-100 hover-lift">
                            <div class="team-image">
                                <img src="<?= htmlspecialchars($member['img']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" loading="lazy">
                            </div>
                            <div class="team-content">
                                <h5 class="team-name mb-1"><?= htmlspecialchars($member['name']) ?></h5>
                                <div class="team-role"><?= htmlspecialchars($member['role']) ?></div>
                                <p class="team-bio mb-3"><?= htmlspecialchars($member['bio']) ?></p>
                                <div class="team-social">
                                    <?php if (!empty($member['github'])): ?>
                                        <a href="<?= htmlspecialchars($member['github']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($member['upwork'])): ?>
                                        <a href="<?= htmlspecialchars($member['upwork']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success" title="Upwork Profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.548-1.405-.002-2.543-1.143-2.545-2.548V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($member['social'])): ?>
                                        <a href="<?= htmlspecialchars($member['social']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-primary">
                                            <i class="fab fa-<?= strpos($member['social'], 'github') !== false ? 'github' : 'linkedin' ?>"></i> 
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-2">Want to work with us?</h2>
                    <p class="mb-3">We combine strategy, engineering, and design to build products users love.</p>
                </div>
                <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-message me-2"></i>Contact Us</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>
