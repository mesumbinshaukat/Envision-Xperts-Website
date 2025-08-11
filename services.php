<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | PHP Web Development, Mobile Apps, Software, Digital Transformation</title>
    <meta name="description" content="Explore EnvisionXperts services: PHP web development, mobile apps, enterprise software, cloud, AI/ML, automation, SEO, MSP support, and industry solutions.">
    <meta name="keywords" content="PHP services, web development, mobile apps, software development, cloud solutions, AI ML, SEO, managed services, industry solutions">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/envision-expert-logo-dark (1).png">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="hero-section" style="min-height: 50vh;">
        <div class="hero-background"><div class="hero-overlay"></div></div>
        <div class="container d-flex align-items-center" style="min-height: 50vh;">
            <div class="row w-100">
                <div class="col-lg-10" data-aos="fade-up">
                    <h1 class="hero-title">Our <span class="text-gradient">Services</span></h1>
                    <p class="hero-description mb-0">End-to-end PHP engineering—from product strategy and UX to cloud-native delivery, performance, and growth. Choose a category below or jump to a capability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Jump -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row g-2">
                <?php
                $anchors = [
                    ['#web-development','Web Development'],
                    ['#mobile-development','Mobile Apps'],
                    ['#software-development','Software Development'],
                    ['#digital-transformation','Digital Transformation'],
                    ['#it-consulting','IT Consulting'],
                    ['#digital-marketing','Digital Marketing & SEO'],
                    ['#support-maintenance','Support & Maintenance'],
                    ['#industry-solutions','Industry Solutions']
                ];
                foreach ($anchors as $a): ?>
                <div class="col-6 col-md-3" data-aos="fade-up">
                    <a href="<?= $a[0] ?>" class="btn btn-outline-light w-100" style="border-color:#3b82f6;color:#1e3a8a;"><?= $a[1] ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Helper: card component function -->
    <?php
    function service_card($icon, $title, $text, $id, $delay=0) {
        echo '<div class="col-md-6 col-lg-4" id="'.$id.'" data-aos="fade-up" data-aos-delay="'.$delay.'">';
        echo '  <div class="service-card text-start h-100">';
        echo '      <div class="service-icon"><i class="fas '.$icon.'"></i></div>';
        echo '      <h3>'.$title.'</h3>';
        echo '      <p class="mb-0">'.$text.'</p>';
        echo '  </div>';
        echo '</div>';
    }
    ?>

    <!-- 1. Web Development Services -->
    <section class="py-5 bg-light" id="web-development">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Web Development Services</h2>
                    <p class="section-subtitle text-start mb-0">Custom web development using core PHP and modern frameworks to build scalable, secure, and high-performing websites and applications.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-code','Custom PHP Web Development','Bespoke PHP applications tailored to your business logic, workflows, and integrations—engineered for maintainability, testability, and speed.','custom-php',100);
                service_card('fa-layer-group','PHP-based CMS Development','WordPress, Drupal, and Joomla engineering: custom themes, headless CMS, multisite, and editorial workflows with role-based access.','cms-development',200);
                service_card('fa-cart-shopping','eCommerce Solutions','Conversion-focused stores with catalogs, checkout, payment gateways, subscriptions, and AI-powered recommendations.','ecommerce',300);
                service_card('fa-arrows-rotate','Web Application Modernization','Migrate legacy PHP apps to modern architectures with improved security, performance, and developer experience.','web-modernization',400);
                service_card('fa-bolt','Progressive Web Apps (PWAs)','Installable, offline-capable, and blazing-fast PWAs built with PHP backends and modern frontend stacks.','pwa',500);
                service_card('fa-plug','API Development & Integration','REST/GraphQL APIs with OAuth2/JWT, third-party integrations, webhooks, and documentation.','api-development',600);
                service_card('fa-screwdriver-wrench','Web Maintenance & Support','Ongoing updates, patches, monitoring, backups, and performance tuning to keep your site resilient.','web-maintenance',700);
                ?>
            </div>
        </div>
    </section>

    <!-- 2. Mobile App Development -->
    <section class="py-5" id="mobile-development">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Mobile App Development</h2>
                    <p class="section-subtitle text-start mb-0">Mobile applications integrated with PHP backends for seamless, secure, and consistent omnichannel experiences.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-mobile-screen-button','Cross-Platform Mobile Apps','React Native or Flutter apps backed by robust PHP APIs, enabling faster delivery and shared codebases.','cross-platform',100);
                service_card('fa-microchip','Native Mobile App Development','Platform-optimized iOS/Android apps with native performance, biometrics, and hardware integrations—powered by secure PHP services.','native-apps',200);
                service_card('fa-screwdriver-wrench','Mobile App Maintenance','Version upgrades, store compliance, crash analytics, and performance optimization with proactive monitoring.','mobile-maintenance',300);
                ?>
            </div>
        </div>
    </section>

    <!-- 3. Software Development -->
    <section class="py-5 bg-light" id="software-development">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Software Development</h2>
                    <p class="section-subtitle text-start mb-0">Custom software designed for mission-critical operations, leveraging PHP for resilient backends and clean architecture.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-building','Enterprise Software Development','CRMs, ERPs, and internal platforms designed for high availability, auditability, and secure role-based access.','enterprise-software',100);
                service_card('fa-cloud','SaaS Development','Multi-tenant SaaS with usage-based billing, tenant isolation, onboarding flows, and admin consoles.','saas-development',200);
                service_card('fa-briefcase','Custom Business Applications','Verticalized solutions for healthcare, finance, real estate, and education—aligned with regulatory requirements.','custom-applications',300);
                service_card('fa-flask','Software Testing & Quality Assurance','Automated test suites, load testing, and CI/CD pipelines to ensure reliability across releases.','software-testing',400);
                ?>
            </div>
        </div>
    </section>

    <!-- 4. Digital Transformation -->
    <section class="py-5" id="digital-transformation">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Digital Transformation Services</h2>
                    <p class="section-subtitle text-start mb-0">Modernize operations with cloud-native platforms, AI-driven capabilities, and automated workflows.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-cloud-arrow-up','Cloud Solutions','AWS- and Kubernetes-ready PHP workloads with IaC, containerization, autoscaling, and observability.','cloud-solutions',100);
                service_card('fa-robot','AI & Machine Learning Integration','Intelligent features such as chatbots, personalization, NLP, and forecasting integrated into your PHP stack.','ai-ml',200);
                service_card('fa-diagram-project','Digital Process Automation','Automate approvals, compliance checks, and back-office workflows using orchestrators and event-driven design.','process-automation',300);
                service_card('fa-right-left','System Migration Services','Risk-mitigated migrations from legacy platforms to modern PHP-based solutions like Magento or custom stacks.','system-migration',400);
                ?>
            </div>
        </div>
    </section>

    <!-- 5. IT Consulting & Strategy -->
    <section class="py-5 bg-light" id="it-consulting">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">IT Consulting & Strategy</h2>
                    <p class="section-subtitle text-start mb-0">Expert guidance to choose the right PHP frameworks, architectures, and processes for long-term success.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-compass-drafting','Technology Consulting','Technology stack assessments, framework selection (Laravel/Symfony), and modernization roadmaps.','technology-consulting',100);
                service_card('fa-list-check','Project Management','Agile delivery leadership, sprint planning, stakeholder reporting, and risk management.','project-management',200);
                service_card('fa-user-plus','IT Staff Augmentation','Scale your team with vetted PHP developers, QA, DevOps, and product experts to accelerate delivery.','staff-augmentation',300);
                ?>
            </div>
        </div>
    </section>

    <!-- 6. Digital Marketing & SEO -->
    <section class="py-5" id="digital-marketing">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Digital Marketing & SEO</h2>
                    <p class="section-subtitle text-start mb-0">Grow organic traffic, engagement, and conversions with data-driven tactics and automation.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-chart-line','Search Engine Optimization (SEO)','Technical SEO, Core Web Vitals, structured data, content strategy, and analytics-driven improvements.','seo',100);
                service_card('fa-gears','Marketing Automation','Lead capture funnels, CRM integrations, email workflows, and attribution modeling.','marketing-automation',200);
                service_card('fa-share-nodes','Social Media Integration','Social logins, content sharing, community features, and UGC moderation workflows.','social-media',300);
                service_card('fa-lock','Content Subscription Solutions','Paywalls, metered access, entitlements, pricing experiments, and Stripe/Braintree integrations.','content-subscription',400);
                ?>
            </div>
        </div>
    </section>

    <!-- 7. Support & Maintenance -->
    <section class="py-5 bg-light" id="support-maintenance">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Support & Maintenance</h2>
                    <p class="section-subtitle text-start mb-0">Ensure long-term performance, security, and uptime with proactive care and managed services.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-shield','Website Maintenance','Patching, backups, uptime monitoring, vulnerability scans, and continuous improvements.','website-maintenance',100);
                service_card('fa-headset','Managed IT Services (MSP)','End-to-end support for infrastructure, hosting, networks, and disaster recovery.','managed-services',200);
                service_card('fa-clock','24/7 Technical Support','Round-the-clock on-call engineers, incident response, and SLA-backed support.','technical-support',300);
                ?>
            </div>
        </div>
    </section>

    <!-- 8. Specialized Industry Solutions -->
    <section class="py-5" id="industry-solutions">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-title text-start">Specialized Industry Solutions</h2>
                    <p class="section-subtitle text-start mb-0">Purpose-built platforms tailored to the needs of your industry, with compliance and scalability at the core.</p>
                </div>
            </div>
            <div class="row g-4">
                <?php
                service_card('fa-notes-medical','Healthcare Solutions','HIPAA-ready portals with scheduling, EHR integrations, secure messaging, and telehealth features.','healthcare',100);
                service_card('fa-house-chimney','Real Estate Platforms','Listings, 3D tours, CRMs, transaction workflows, and MLS/IDX integrations.','real-estate',200);
                service_card('fa-graduation-cap','eLearning Platforms','LMS, cohort-based courses, progress tracking, assessments, and community features.','elearning',300);
                service_card('fa-coins','Financial Systems','Real-time dashboards, risk scoring, audit logs, and secure payments with regulatory compliance.','financial-systems',400);
                ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-2">Ready to build something exceptional?</h2>
                    <p class="mb-3">Tell us about your goals and we’ll propose a tailored roadmap, timeline, and budget.</p>
                </div>
                <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-rocket me-2"></i>Start Your Project</a>
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
