<?php
// Expected variables:
// $serviceSlug, $serviceTitle, $serviceSubtitle, $metaDescription, $metaKeywords
// $overview (array of paragraphs)
// $featureItems (array of [icon, title, text])
// $benefitItems (array of strings)
// $processSteps (array of [icon, title, text])
// $faqs (array of [q, a])
// $techStack (array of strings)

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($serviceTitle) ?> | EnvisionXperts</title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription ?? $serviceSubtitle) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($metaKeywords ?? 'PHP, web development, software, mobile, consulting') ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../logo/envision-expert-logo-dark (1).png">
</head>
<body>
    <?php include __DIR__.'/../includes/header.php'; ?>

    <!-- Hero -->
    <section class="hero-section" style="min-height: 50vh;">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container d-flex align-items-center" style="min-height: 50vh;">
            <div class="row w-100">
                <div class="col-lg-10" data-aos="fade-up">
                    <h1 class="hero-title"><?= htmlspecialchars($serviceTitle) ?></h1>
                    <p class="hero-description mb-0"><?= htmlspecialchars($serviceSubtitle) ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="section-title text-start">Overview</h2>
                    <?php foreach (($overview ?? []) as $p): ?>
                        <p class="about-description mb-3"><?= $p ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="service-card text-start">
                        <div class="service-icon"><i class="fas fa-award"></i></div>
                        <h3>Why Choose Us</h3>
                        <ul class="mb-0" style="padding-left:1.2rem;">
                            <?php foreach (($benefitItems ?? []) as $b): ?>
                                <li class="mb-2"><?= $b ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities / Features -->
    <?php if (!empty($featureItems)): ?>
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">What We Deliver</h2>
                    <p class="section-subtitle text-start mb-0">High-impact capabilities tailored to your business outcomes</p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($featureItems as $i => $f): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i+1)*100 ?>">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas <?= htmlspecialchars($f[0]) ?>"></i></div>
                        <h3><?= htmlspecialchars($f[1]) ?></h3>
                        <p class="mb-0"><?= htmlspecialchars($f[2]) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Process -->
    <?php if (!empty($processSteps)): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">Our Approach</h2>
                    <p class="section-subtitle">Proven steps for predictable results</p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($processSteps as $i => $s): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i+1)*100 ?>">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas <?= htmlspecialchars($s[0]) ?>"></i></div>
                        <h3><?= htmlspecialchars($s[1]) ?></h3>
                        <p class="mb-0"><?= htmlspecialchars($s[2]) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Tech Stack -->
    <?php if (!empty($techStack)): ?>
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title text-start">Tech Stack</h2>
            <p class="section-subtitle text-start">Tools we use to deliver quality at speed</p>
            <div class="d-flex flex-wrap gap-2">
                <?php foreach ($techStack as $t): ?>
                    <span class="badge rounded-pill" style="background:linear-gradient(135deg,#1e3a8a,#3b82f6); padding:.75rem 1rem; font-weight:600;"><?= htmlspecialchars($t) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- FAQs -->
    <?php if (!empty($faqs)): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title">FAQs</h2>
                    <p class="section-subtitle">Answers to common questions about <?= htmlspecialchars($serviceTitle) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <?php foreach ($faqs as $i => $f): $id = 'faq'.($i+1); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $id ?>">
                                <button class="accordion-button <?= $i>0?'collapsed':'' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $id ?>" aria-expanded="<?= $i===0?'true':'false' ?>" aria-controls="collapse<?= $id ?>">
                                    <?= htmlspecialchars($f[0]) ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $id ?>" class="accordion-collapse collapse <?= $i===0?'show':'' ?>" aria-labelledby="heading<?= $id ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"><?= htmlspecialchars($f[1]) ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA -->
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-2">Ready to discuss <?= htmlspecialchars($serviceTitle) ?>?</h2>
                    <p class="mb-3">Get an expert consultation and a tailored roadmap for your goals.</p>
                </div>
                <a href="../contact.php" class="btn btn-primary btn-lg"><i class="fas fa-rocket me-2"></i>Request a Quote</a>
            </div>
        </div>
    </section>

    <?php include __DIR__.'/../includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
