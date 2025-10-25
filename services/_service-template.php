<?php
// Expected variables:
// $serviceSlug, $serviceTitle, $serviceSubtitle, $metaDescription, $metaKeywords
// $overview (array of paragraphs)
// $featureItems (array of [icon, title, text])
// $benefitItems (array of strings)
// $processSteps (array of [icon, title, text])
// $faqs (array of [q, a])
// $techStack (array of strings)
// Optional: $audiences (array of strings), $deliverables (array), $integrations (array), $related (array of [slug, title])

session_start();

$siteUrl = 'https://envisionxperts.com';
$serviceUrl = $siteUrl . '/services/' . ($serviceSlug ?? '');

// Provide sensible defaults for richer content
$audiences = $audiences ?? [
    'Founders and CTOs seeking reliable PHP engineering partners',
    'Product Leaders who need to accelerate roadmaps without sacrificing quality',
    'Marketing & Growth teams prioritizing performance, SEO, and conversion',
    'IT & Ops teams modernizing legacy systems and improving uptime'
];

$deliverables = $deliverables ?? [
    'Discovery report with success metrics and prioritized backlog',
    'Architecture diagrams and technical implementation plan',
    'Secure, well-documented code in your Git repository',
    'CI/CD pipelines, infrastructure-as-code (where applicable)',
    'Testing strategy with automated tests and performance baselines',
    'Handover documentation and knowledge transfer sessions'
];

$integrations = $integrations ?? [
    'Stripe / Braintree', 'Salesforce / HubSpot', 'AWS / GCP / Azure', 'Google Analytics / Tag Manager', 'SendGrid / Mailgun', 'Sentry / Datadog'
];

// Auto-related services if not provided
if (!isset($related)) {
    $relatedMap = [
        'custom-php' => [['api-development','API Development & Integration'], ['web-modernization','Web Application Modernization'], ['cloud-solutions','Cloud Solutions']],
        'cms-development' => [['seo','Search Engine Optimization (SEO)'], ['content-subscription','Content Subscription Solutions'], ['website-maintenance','Website Maintenance']],
        'ecommerce' => [['seo','Search Engine Optimization (SEO)'], ['marketing-automation','Marketing Automation'], ['content-subscription','Content Subscription Solutions']],
        'web-modernization' => [['custom-php','Custom PHP Web Development'], ['cloud-solutions','Cloud Solutions'], ['software-testing','Software Testing & QA']],
        'pwa' => [['seo','Search Engine Optimization (SEO)'], ['custom-php','Custom PHP Web Development'], ['api-development','API Development & Integration']],
        'api-development' => [['custom-php','Custom PHP Web Development'], ['cloud-solutions','Cloud Solutions'], ['saas-development','SaaS Development']],
        'web-maintenance' => [['managed-services','Managed IT Services (MSP)'], ['technical-support','24/7 Technical Support'], ['website-maintenance','Website Maintenance']],
        'cross-platform' => [['native-apps','Native Mobile App Development'], ['api-development','API Development & Integration'], ['marketing-automation','Marketing Automation']],
        'native-apps' => [['cross-platform','Cross-Platform Mobile Apps'], ['api-development','API Development & Integration'], ['custom-applications','Custom Business Applications']],
        'mobile-maintenance' => [['native-apps','Native Mobile App Development'], ['cross-platform','Cross-Platform Mobile Apps'], ['technical-support','24/7 Technical Support']],
        'enterprise-software' => [['technology-consulting','Technology Consulting'], ['saas-development','SaaS Development'], ['cloud-solutions','Cloud Solutions']],
        'saas-development' => [['api-development','API Development & Integration'], ['cloud-solutions','Cloud Solutions'], ['seo','Search Engine Optimization (SEO)']],
        'custom-applications' => [['technology-consulting','Technology Consulting'], ['process-automation','Digital Process Automation'], ['ai-ml','AI & Machine Learning Integration']],
        'software-testing' => [['web-modernization','Web Application Modernization'], ['custom-php','Custom PHP Web Development'], ['saas-development','SaaS Development']],
        'cloud-solutions' => [['saas-development','SaaS Development'], ['api-development','API Development & Integration'], ['managed-services','Managed IT Services (MSP)']],
        'ai-ml' => [['custom-php','Custom PHP Web Development'], ['seo','Search Engine Optimization (SEO)'], ['ecommerce','eCommerce Solutions']],
        'process-automation' => [['custom-applications','Custom Business Applications'], ['enterprise-software','Enterprise Software Development'], ['system-migration','System Migration Services']],
        'system-migration' => [['web-modernization','Web Application Modernization'], ['cloud-solutions','Cloud Solutions'], ['software-testing','Software Testing & QA']],
        'technology-consulting' => [['project-management','Project Management'], ['staff-augmentation','IT Staff Augmentation'], ['custom-php','Custom PHP Web Development']],
        'project-management' => [['technology-consulting','Technology Consulting'], ['saas-development','SaaS Development'], ['software-testing','Software Testing & QA']],
        'staff-augmentation' => [['project-management','Project Management'], ['technology-consulting','Technology Consulting'], ['custom-php','Custom PHP Web Development']],
        'seo' => [['cms-development','PHP-based CMS Development'], ['pwa','Progressive Web Apps (PWAs)'], ['content-subscription','Content Subscription Solutions']],
        'marketing-automation' => [['seo','Search Engine Optimization (SEO)'], ['api-development','API Development & Integration'], ['saas-development','SaaS Development']],
        'social-media' => [['seo','Search Engine Optimization (SEO)'], ['marketing-automation','Marketing Automation'], ['custom-applications','Custom Business Applications']],
        'content-subscription' => [['ecommerce','eCommerce Solutions'], ['seo','Search Engine Optimization (SEO)'], ['saas-development','SaaS Development']],
        'website-maintenance' => [['managed-services','Managed IT Services (MSP)'], ['technical-support','24/7 Technical Support'], ['web-maintenance','Web Maintenance & Support']],
        'managed-services' => [['website-maintenance','Website Maintenance'], ['technical-support','24/7 Technical Support'], ['cloud-solutions','Cloud Solutions']],
        'technical-support' => [['managed-services','Managed IT Services (MSP)'], ['website-maintenance','Website Maintenance'], ['software-testing','Software Testing & QA']],
        'healthcare' => [['custom-applications','Custom Business Applications'], ['ai-ml','AI & Machine Learning Integration'], ['cloud-solutions','Cloud Solutions']],
        'real-estate' => [['custom-applications','Custom Business Applications'], ['ecommerce','eCommerce Solutions'], ['seo','Search Engine Optimization (SEO)']],
        'elearning' => [['custom-applications','Custom Business Applications'], ['content-subscription','Content Subscription Solutions'], ['seo','Search Engine Optimization (SEO)']],
        'financial-systems' => [['saas-development','SaaS Development'], ['software-testing','Software Testing & QA'], ['cloud-solutions','Cloud Solutions']]
    ];
    $related = $relatedMap[$serviceSlug ?? 'custom-php'] ?? [['custom-php','Custom PHP Web Development'], ['seo','Search Engine Optimization (SEO)'], ['cloud-solutions','Cloud Solutions']];
}
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

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "<?= htmlspecialchars($serviceTitle) ?>",
      "serviceType": "<?= htmlspecialchars($serviceTitle) ?>",
      "provider": {
        "@type": "Organization",
        "name": "EnvisionXperts",
        "url": "<?= $siteUrl ?>",
        "logo": "<?= $siteUrl ?>/logo/envision-expert-logo-dark%20(1).png"
      },
      "url": "<?= $serviceUrl ?>",
      "areaServed": "Global",
      "description": "<?= htmlspecialchars($metaDescription ?? $serviceSubtitle) ?>"
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?= $siteUrl ?>"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "<?= $siteUrl ?>/services.php"},
        {"@type": "ListItem", "position": 3, "name": "<?= htmlspecialchars($serviceTitle) ?>", "item": "<?= $serviceUrl ?>"}
      ]
    }
    </script>
    <?php if (!empty($faqs)) : ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($faqs as $i => $f): ?>
        {
          "@type": "Question",
          "name": "<?= htmlspecialchars($f[0]) ?>",
          "acceptedAnswer": {"@type": "Answer", "text": "<?= htmlspecialchars($f[1]) ?>"}
        }<?= $i < count($faqs)-1 ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    }
    </script>
    <?php endif; ?>
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
                    <p class="about-description">Looking for adjacent capabilities? Explore our <a href="../services/api-development.php">API Development</a>, <a href="../services/cloud-solutions.php">Cloud Solutions</a>, and <a href="../services/seo.php">SEO Services</a> to maximize impact.</p>
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

    <!-- Who It's For / Use Cases -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Who It's For</h2>
                    <p class="section-subtitle text-start">Designed for teams that need measurable outcomes and reliable delivery</p>
                </div>
                <div class="col-lg-10" data-aos="fade-up">
                    <ul class="mb-0" style="padding-left:1.2rem;">
                        <?php foreach ($audiences as $a): ?>
                            <li class="mb-2"><?= $a ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <?php if (!empty($processSteps)): ?>
    <section class="py-5">
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
    <section class="py-5 bg-light">
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

    <!-- Deliverables and Integrations -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-box"></i></div>
                        <h3>What You Get</h3>
                        <ul class="mb-0" style="padding-left:1.2rem;">
                            <?php foreach ($deliverables as $d): ?>
                                <li class="mb-2"><?= $d ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-plug"></i></div>
                        <h3>Common Integrations</h3>
                        <ul class="mb-0" style="padding-left:1.2rem;">
                            <?php foreach ($integrations as $i): ?>
                                <li class="mb-2"><?= $i ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title text-start">Engagement Models & Timelines</h2>
            <p class="about-description">Choose the collaboration model that fits your goals and constraints.</p>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-card text-start h-100">
                        <h3><i class="fas fa-bullseye me-2"></i>Fixed-Scope Delivery</h3>
                        <p>Well-defined outcomes with a detailed specification, milestones, and a predictable budget.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card text-start h-100">
                        <h3><i class="fas fa-clock me-2"></i>Time & Materials</h3>
                        <p>Flexible scope with adaptive planning for fast-moving initiatives and discovery-driven work.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card text-start h-100">
                        <h3><i class="fas fa-people-group me-2"></i>Dedicated Squad</h3>
                        <p>Cross-functional team embedded with you to accelerate delivery and scale reliably.</p>
                    </div>
                </div>
            </div>
            <p class="mt-3 text-muted">Typical timelines: discovery 1–2 weeks, MVP 6–12 weeks, scale-up ongoing. Timelines vary by scope and constraints.</p>
        </div>
    </section>

    <!-- FAQs -->
    <?php if (!empty($faqs)): ?>
    <section class="py-5">
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

    <!-- Resources -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title text-start">Helpful Resources</h2>
            <p class="section-subtitle text-start">Best practices we embrace for security, performance, and growth</p>
            <ul class="mb-0" style="padding-left:1.2rem;">
                <li class="mb-2"><a href="https://owasp.org/www-project-top-ten/" target="_blank" rel="noopener">OWASP Top 10</a> for application security fundamentals</li>
                <li class="mb-2"><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener">Google SEO Starter Guide</a> for search performance</li>
                <li class="mb-2"><a href="https://web.dev/" target="_blank" rel="noopener">web.dev</a> for Core Web Vitals and performance guidance</li>
            </ul>
        </div>
    </section>

    <!-- Related Services -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Related Services</h2>
                    <p class="section-subtitle text-start mb-0">Complementary capabilities to maximize ROI</p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($related as $r): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card text-start h-100">
                        <div class="service-icon"><i class="fas fa-arrow-trend-up"></i></div>
                        <h3><?= htmlspecialchars($r[1]) ?></h3>
                        <p class="mb-3">Learn how our <?= htmlspecialchars($r[1]) ?> offering complements <?= htmlspecialchars($serviceTitle) ?> to accelerate outcomes.</p>
                        <a class="service-link" href="../services/<?= htmlspecialchars($r[0]) ?>.php">Explore <i class="fas fa-arrow-right ms-1"></i></a>
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
