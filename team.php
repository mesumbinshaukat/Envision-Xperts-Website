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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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
                    <p class="section-subtitle">Consistent cards, same-sized photos, and a clean layout for better readability</p>
                </div>
            </div>

            <?php
            $team = [
                [
                    'name' => 'Muneeb Sadiq',
                    'role' => 'Founder & CEO',
                    'img'  => 'team_img/muneeb_img_1.webp',
                    'bio'  => 'Meet Muneeb Sadiq – Founder & CEO of Envision Xperts, leading innovative digital solutions with a strong background in web and software development.',
                    'social' => 'https://github.com/muneebsadiq'
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
                                <?php if (!empty($member['social'])): ?>
                                    <a href="<?= htmlspecialchars($member['social']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-primary">
                                        <i class="fab fa-<?= strpos($member['social'], 'github') !== false ? 'github' : 'linkedin' ?>"></i> Connect
                                    </a>
                                <?php endif; ?>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
